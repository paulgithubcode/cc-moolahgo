<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_process extends CI_Model
{
    public function __construct(){

    }

    public function addData($data, $data_ref){
        $userid_referred = 0;
        $data['code']= $this->getRandomCodeNotInUser();
        $data['active'] = 1;
        $data['created_date'] = date('Y-m-d H:i:s');

        //insert data to table user and get userid_referred
/* uncomment for database usage
 *      $this->db->insert('user',$data);
        if($this->db->affected_rows() <= 0){
            //get userid_referred //email already registered
            $sql = "SELECT userid FROM user WHERE email=?";
            $query = $this->db->query($sql, array($data['email']));
            $userid_referred = isset($query->result()[0]->userid)?$query->result()[0]->userid:0;
            return $userid_referred;
        }*/

        $data_ref['ruleid'] = 1; //program number 1
/* uncomment for database usage
 *      $data_ref['userid_referred'] = $this->db->insert_id();*/
        $data_ref['userid_referred'] = 2; //predefined value

        //get userid_referrer
/* uncomment for database usage
 *      $sql = "SELECT userid FROM user WHERE code=?";
        $query = $this->db->query($sql, array($data_ref['referral_code']));
        $data_ref['userid_referrer'] = isset($query->result()[0]->userid)?$query->result()[0]->userid:0;*/
        $data_ref['user_id_referrer'] = 1; //predefined value

        //insert into referal
/* uncomment for database usage
 *         $data_ref['created_date'] = date('Y-m-d H:i:s');
        $this->db->insert('referral',$data_ref);
        if($this->db->affected_rows() <= 0) return $userid_referred;*/

        return $data_ref['userid_referred'];
    }


    private function getRandomCodeNotInUser() {
        $sql = "SELECT code FROM user";
        $query = $this->db->query($sql);
        $code = array();
        foreach($query->result() as $each){
            $code[] = $each->code;
        }
        do{
            $gen_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
        }while(in_array($gen_code,$code));

        return $gen_code;
    }


    public function getDataReferred($userid_referred){
/* uncomment for database usage
 *         $sql = "SELECT `userid`, userid_referrer, referral_code, `first_name`, `last_name`, `email`, `phone_number`, `code`, `active` FROM user
        INNER JOIN referral ON user.userid = referral.userid_referred
        WHERE userid=?";
        $query = $this->db->query($sql, array($userid_referred));
        return $query->result(); */

        $param = file_get_contents("php://input");
        $decoder = json_decode($param);

        /*predefined value*/
        $data = new stdClass();
        $data->userid = 2;
        $data->userid_referrer = ($decoder->referral_code=='MKAWH0')?1:0;
        $data->referral_code = $decoder->referral_code;
        $data->first_name = $decoder->first_name;
        $data->last_name = $decoder->last_name;
        $data->email = $decoder->email;
        $data->phone_number = $decoder->phone_number;
        $data->code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
        $data->active = 1;
        return array($data);
    }

    public function getDataReferrer($userid_referrer){
/* uncomment for database usage
 *         $sql = "SELECT `userid`, `first_name`, `last_name`, `email`, `phone_number`, `code`, `active` FROM user WHERE userid=?";
        $query = $this->db->query($sql, array($userid_referrer));
        return $query->result();*/

        /*predefined value*/
        $param = file_get_contents("php://input");
        $decoder = json_decode($param);

        $data = new stdClass();
        $data->userid = "";
        $data->first_name = "";
        $data->last_name = "";
        $data->email = "";
        $data->phone_number = "";
        $data->code = "";
        $data->active = "";

        if($decoder->referral_code=='MKAWHO'){
            $data->userid = 1;
            $data->first_name = "paul";
            $data->last_name = ".";
            $data->email = "paul@mail.com";
            $data->phone_number = "08159719033";
            $data->code = "MKAWH0";
            $data->active = 1;
        }
        return array($data);

    }

}