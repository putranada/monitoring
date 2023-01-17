<?php
error_reporting(~E_NOTICE & ~E_DEPRECATED);
session_start();

include dirname(__FILE__) . '../config.php';
include'includes/ez_sql_core.php';
include'includes/ez_sql_mysqli.php';
$db = new ezSQL_mysqli($config[username], $config[password], $config[database_name], $config[server]);
include'includes/general.php';
include'includes/paging.php';
include'includes/SimpleImage.php';

$mod = $_GET[m];
$act = $_GET[act];

function get_tv_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_tv, hari_tanggal, nama_stasiun FROM tb_tv ORDER BY id_tv");
    foreach($rows as $row){
        if($row->id_tv==$selected)
            $a.="<option value='$row->id_tv' selected>$row->nama_stasiun</option>";
        else
            $a.="<option value='$row->id_tv'>$row->nama_stasiun</option>";
    }
    return $a;
}
function get_radio_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_rado, penyiaran, nama_stasiun_radio, frekuensi, prog_unggulan FROM tb_radio ORDER BY id_radio");
    foreach($rows as $row){
        if($row->id_radio==$selected)
            $b.="<option value='$row->id_radio' selected>$row->nama_stasiun_radio</option>";
        else
            $b.="<option value='$row->id_radio'>$row->nama_stasiun_radio</option>";
    }
    return $b;
}


function parse_file_name($file_name){
    $x = strtolower($file_name);    
    $x = str_replace(array(' '), '-', $x);
    return $x;
}

function get_page($name = ''){
    global $db;
    return $db->get_row("SELECT * FROM tb_page WHERE nama_page='$name'");
}