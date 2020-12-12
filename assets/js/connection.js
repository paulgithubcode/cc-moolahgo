var pathparts = location.pathname.split('/');
if (location.host == 'localhost') {
    var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
}else{
    var url = location.origin+'/'; // http://google.com
}
var api_base_url = url + 'microservices'+'/';


SignupAdd = function () {
  $('#register-btn').prop('disabled',true);
  image_url = url+'assets/img/loading.gif';
  $('<img src = "'+image_url+'" />').insertBefore('#register-btn');

  if($('#reg-referral_code').val() === undefined){
      referral_code = pathparts[3];
  }else{
      referral_code = $('#reg-referral_code').val();
  }

  method = 'post'
  post_url = api_base_url + 'users/process'
  data = JSON.stringify({
    first_name: $('#reg-fn').val(),
    last_name: $('#reg-ln').val(),
    email: $('#reg-email').val(),
    phone_number: $('#reg-phone').val(),
    password: md5($('#reg-pass').val()),
    referral_code : referral_code,
  })
  dataType = 'json'
  contentType = 'application/json'
  type = 'json'
  success = function (response, status, xhr) {
    status = response.status
    error = response.error
    message = response.message
    if (error == true) {
        $('#err_msg').html(message);
        $('#register-btn').prop('disabled',false);
        $('#register-btn').prev().remove();
        return false;
    }else{
        data = response.data
        referred = data.referred

        html = '<div class="row" style="padding-top:10px">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Data Referred';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Code';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referred.code === undefined)? '': referred.code)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Email';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referred.email === undefined) ? '': referred.email)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Name';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referred.first_name === undefined) ? '': referred.first_name) +' '+((referred.last_name === undefined) ? '': referred.last_name)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Phone Number';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referred.phone_number === undefined) ? '-': referred.phone_number)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Referal Code';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referred.referral_code === undefined) ? '-': referred.referral_code)+'</b>';
        html += '</div>';
        html += '</div>';

        $('#referred_data').html(html);

        referrer = data.referrer

        html = '<div class="row" style="padding-top:10px">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Data Referrer';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Code';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referrer.code === undefined) ? '': referrer.code)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Email';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referrer.email === undefined) ? '': referrer.email)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Name';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referrer.first_name === undefined) ? '': referrer.first_name) +' '+((referrer.last_name === undefined) ? '': referrer.last_name)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Phone Number';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referrer.phone_number === undefined) ? '-': referrer.phone_number)+'</b>';
        html += '</div>';
        html += '</div>';

        html += '<div class="row">';
        html += '<div class="col-sm data-ref-information">';
        html += 'Referal Code';
        html += '</div>';
        html += '<div class="col-sm data-ref-information">';
        html += '<b>'+((referrer.referral_code === undefined) ? '-': referrer.referral_code)+'</b>';
        html += '</div>';
        html += '</div>';

        $('#referrer_data').html(html);

    }
    $('#register-btn').prop('disabled',false);
    $('#register-btn').prev().remove();
      return false;
  }
  error = function (jqXhr, textStatus, errorMessage) {
      $('#err_msg').html("Internal Server Error");
      $('#register-btn').prop('disabled',false);
      $('#register-btn').prev().remove();
      return false;
  }
  connection(method, post_url, data, type, dataType, contentType, success, error)
  return false
}


function alphaOnly(e,obj) {
    tecla = (document.all) ? e.keyCode : e.which;
    var value = document.getElementById('reg-referral_code').value;
    if (tecla=="8"){
        return true;
    }
    if (value.length > (6-1)) {
        return false;
    }
    if (tecla >= 48 && tecla <= 57){
        return true;
    }
    if (tecla>="65" && tecla<="90"){
        obj.value += String.fromCharCode(tecla).toUpperCase();
        return false;
    }
    return false;
};