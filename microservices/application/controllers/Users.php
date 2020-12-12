<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header("Access-Control-Request-Method: *");
header("Access-Control-Request-Headers: *");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
//header("Accept: application/json");
//header("Content-type: application/json");

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user/User_process');
/*		$this->load->library('email');
        $this->config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'test.paul82@gmail.com',
            'smtp_pass' => 'MCCNmh4wNJqararq',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE,
            'newline' => "\r\n"
        );		*/
	}

	public function process(){
	    $userid_referred = $this->add();
        $data_referred = $this->getDataReferred($userid_referred);

        $userid_referrer = $data_referred['userid_referrer'];
        $data_referrer = $this->getDataReferrer($userid_referrer);

        $response['status']=200;
        $response['error']=false;
        $response['message'] = NULL;
        $response['data'] = array('referred'=>$data_referred, 'referrer'=>$data_referrer);
        echo json_encode($response);
    }
	
	private function add(){
		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			$param = file_get_contents("php://input");
			$decoder = json_decode($param);
			$params['first_name'] = $decoder->first_name;
			$params['last_name'] = $decoder->last_name;
			$params['email'] = $decoder->email;
			$params['phone_number'] = $decoder->phone_number;			
			$params['password'] = $decoder->password;
			$params_ref['referral_code'] = $decoder->referral_code;

            if(!preg_match('/^[A-Z0-9]+$/', $params_ref['referral_code']) || strlen($params_ref['referral_code'])!=6){
                $response['status']=200;
                $response['error']=true;
                $response['message'] = "Referral Code is incorrect format";
                $response['data'] = array();
                echo json_encode($response);
                exit();

            }

            return $this->User_process->addData($params, $params_ref);
		}
	}

	private function getDataReferred($userid_referred){
        $query = $this->User_process->getDataReferred($userid_referred);
        $query_data = array();
        foreach($query as $each){
            //only 1 query exist
            $query_data['userid'] = $each->userid;
            $query_data['userid_referrer'] = $each->userid_referrer;
            $query_data['first_name'] = $each->first_name;
            $query_data['last_name'] = $each->last_name;
            $query_data['email'] = $each->email;
            $query_data['phone_number'] = $each->phone_number;
            $query_data['code'] = $each->code;
            $query_data['referral_code'] = $each->referral_code;
            $query_data['active'] = $each->active;
        }
        if(count($query_data) == 0)$query_data = new stdClass();
        return $query_data;
    }

    private function getDataReferrer($userid_referrer){
        $query = $this->User_process->getDataReferrer($userid_referrer);
        $query_data = array();
        foreach($query as $each){
            //only 1 query exist
            $query_data['userid'] = $each->userid;
            $query_data['first_name'] = $each->first_name;
            $query_data['last_name'] = $each->last_name;
            $query_data['email'] = $each->email;
            $query_data['phone_number'] = $each->phone_number;
            $query_data['code'] = $each->code;
            $query_data['active'] = $each->active;
        }
        if(count($query_data) == 0)$query_data = new stdClass();
        return $query_data;
    }

}
