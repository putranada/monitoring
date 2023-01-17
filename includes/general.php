<?php
    
function esc_field($str){
    if (!get_magic_quotes_gpc())
        return addslashes($str);
    else
        return $str;
}

function get_option($option_name){
    global $db;
    return $db->get_var("SELECT option_value FROM tb_options WHERE option_name='$option_name'");
}

function update_option($option_name, $option_value){
    global $db;
    return $db->query("UPDATE tb_options SET option_value='$option_value' WHERE option_name='$option_name'");
}

function redirect_js($url){
    echo '<script type="text/javascript">window.location.replace("'.$url.'");</script>';
}

function alert($msg){
    echo '<script type="text/javascript">alert("'.$msg.'");</script>';
}

function print_msg($msg, $type = 'danger'){
    echo('<div class="alert alert-'.$type.' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg.'</div>');
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function ses_id(){
    return session_id();
}

function print_error($msg){
    die('<!DOCTYPE html>
    <html>
        <head><title>Error</title>
        <link href="../assets/css/simplex-bootstrap.min.css" rel="stylesheet"/>
        <link href="assets/css/simplex-bootstrap.min.css" rel="stylesheet"/>
        <body>
            <div class="container" style="margin:20px auto; width:400px">
                <p class="alert alert-warning">'.$msg.' <a href="javascript:history.back(-1)">Kembali</a></p>                
            </div>
        </body>
    </html>');
}