<?php
require_once'functions.php';
require_once'config.php';
 

    /** LOGIN */ 
    if ($mod=='login'){
        $user = esc_field($_POST['user']);
        $pass = esc_field($_POST['pass']);
        
        $row = $db->get_row("SELECT * FROM tb_user WHERE user='$user' AND pass='$pass'");
        if($row){
            $_SESSION['login'] = $row->user;
            redirect_js("index.php");
        } else{
            print_msg("Salah kombinasi username dan password.");
        }          
    }  else if ($mod=='password'){
        $pass1 = $_POST[pass1];                  
        $pass2 = $_POST[pass2];
        $pass3 = $_POST[pass3];
        
        $row = $db->get_row("SELECT * FROM tb_user WHERE user='$_SESSION[user]' AND pass='$pass1'");        
        
        if($pass1=='' || $pass2=='' || $pass3=='')
            print_msg('Field bertanda * harus diisi.');
        elseif(!$row)
            print_msg('Password lama salah.');
        elseif( $pass2 != $pass3 )
            print_msg('Password baru dan konfirmasi password baru tidak sama.');
        else{        
            $db->query("UPDATE tb_user SET pass='$pass2' WHERE user='$_SESSION[user]'");                    
            print_msg('Password berhasil diubah.', 'success');
        }
    } elseif($act=='keluar'){
        unset($_SESSION['login']);
        header("location:index.php?m=login");
    }
    
    if($mod=='data_tv'){
        $nama_tv = $_POST['nama_tv'];
        if($nama_tv=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO tb_data_tv (nama_tv) 
                    VALUES ('$nama_tv')");                       
            redirect_js("dat_tv.php?m=dat_tv");
        }
    } else if ($act=='dat_tv'){
        $db->query("DELETE FROM tb_data_tv WHERE id_tivi='$_GET[ID]'");
        header("location:datamaster/dat_tv.php?m=dat_tv");
    } 
    if($mod=='data_radio'){
        $lps_radio = $_POST['lps_radio'];
        if($lps_radio=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO tb_data_radio (lps_radio) 
                    VALUES ('$lps_radio')");   
            redirect_js("dat_radio.php?m=dat_radio");
        }
    } else if ($act=='dat_radio'){
        $db->query("DELETE FROM tb_data_radio WHERE id_radiu='$_GET[ID]'");
        header("location:datamaster/dat_radio.php?m=dat_radio");
    } 

    if($mod=='program_tv'){
        $nama_ptv = $_POST['nama_ptv'];
        if($nama_ptv=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO programtv (nama_ptv) 
                    VALUES ('$nama_ptv')");                       
            redirect_js("ptv.php?m=programtv");
        }
    } else if ($act=='ptv_hapus'){
        $db->query("DELETE FROM programtv WHERE id_ptv='$_GET[ID]'");
        header("location:programtv/ptv.php?m=ptv_hapus");
    } 
    if($mod=='programradio'){
        $program_radio = $_POST['program_radio'];
        if($program_radio=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO programradio (program_radio) 
                    VALUES ('$program_radio')");                       
            redirect_js("program_radio.php?m=progadio");
        }
    } else if ($act=='progradio_hapus'){
        $db->query("DELETE FROM programradio WHERE id_progradio='$_GET[ID]'");
        header("location:programradio/nama_radio.php?m=progradio_hapus");
    } 
    if($mod=='namap'){
        $nama_bab = $_POST['nama_bab'];
        if($nama_bab=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO pelanggaran (nama_bab) 
                    VALUES ('$nama_bab')");                       
            redirect_js("jenis_p.php?m=jenisp");
        }
    } else if ($act=='jenisp_hapus'){
        $db->query("DELETE FROM pelanggaran WHERE id_anggar='$_GET[ID]'");
        header("location:jenisp/jenis_p.php?m=jenisp_hapus");
    } 
    if($mod=='pprogs_tambah'){
        $nama_stas = $_POST['nama_stas'];
        $progaca = $_POST['progaca'];
        $passal = $_POST['passal'];
        $keterangann = esc_field($_POST['keterangann']);

        if($nama_stas=='' || $progaca =='' || $passal =='' || $keterangann =='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO pprograms (nama_stas, progaca, passal, keterangann) 
                    VALUES ('$nama_stas', '$progaca', '$passal', '$keterangann')");                       
            redirect_js("plprogtv.php?m=pprogs");
        }
    } else if ($act=='pprogs_hapus'){
        $db->query("DELETE FROM pprograms WHERE id_pprogs='$_GET[ID]'");
        header("location:pprog/plprogtv.php?m=pprogs_hapus");
    }
    /** PURA */    
    if($mod=='tv_tambah'){
        $hari = $_POST['hari'];
        $tanggal = $_POST['tanggal'];
        $nama_stasiun = $_POST['nama_stasiun'];
        $jam_tayang = $_POST['jam_tayang'];
        $program = $_POST['program'];
        $time_code = $_POST['time_code'];
        $keterangan = $_POST['keterangan'];
        $pasal = esc_field($_POST['pasal']);
        
        if($hari=='' || $tanggal=='' || $nama_stasiun=='' || $jam_tayang=='' || $program=='' || $time_code=='' || $keterangan=='' || $pasal=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO tb_tv (hari, tanggal, nama_stasiun, jam_tayang, program, time_code, keterangan, pasal) 
                    VALUES ('$hari', '$tanggal', '$nama_stasiun', '$jam_tayang', '$program', '$time_code', '$keterangan', '$pasal')");                       
            redirect_js("tv.php?m=tv");
        }
    } else if($mod=='tv_ubah'){
        $hari = $_POST['hari'];
        $tanggal = $_POST['tanggal'];
        $nama_stasiun = $_POST['nama_stasiun'];
        $jam_tayang = $_POST['jam_tayang'];
        $program = $_POST['program'];
        $time_code = $_POST['time_code'];
        $keterangan = $_POST['keterangan'];
        $pasal = esc_field($_POST['pasal']);
        
        if($hari=='' || $tanggal=='' || $nama_stasiun=='' || $jam_tayang=='' || $program=='' || $time_code=='' || $keterangan=='' || $pasal=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{           
            $db->query("UPDATE tb_tv SET hari='$hari', tanggal='$tanggal', nama_stasiun='$nama_stasiun', jam_tayang='$jam_tayang', program='$program', time_code='$time_code', keterangan='$keterangan', pasal='$pasal' WHERE id_tv='$_GET[ID]'");
            redirect_js("tv.php?m=tv");
        }    
    } else if ($act=='tv_hapus'){
        $db->query("DELETE FROM tb_tv WHERE id_tv='$_GET[ID]'");
        header("location:monitoring/tv.php?m=tv");
    } 

     /** PAGE */
    if($mod=='radio_tambah'){
        $penyiaran = $_POST['penyiaran'];
        $nama_stasiun_radio = $_POST['nama_stasiun_radio'];
        $frekuensi = $_POST['frekuensi'];
        $prog_unggulan = $_POST['prog_unggulan'];
        $pelanggaran = $_POST['pelanggaran'];
        $pasal = esc_field($_POST['pasal']);
        
        if($penyiaran=='' || $nama_stasiun_radio=='' || $frekuensi=='' || $prog_unggulan=='' || $pelanggaran=='' || $pasal=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("INSERT INTO tb_radio (penyiaran, nama_stasiun_radio, frekuensi, prog_unggulan, pelanggaran, pasal) 
                    VALUES ('$penyiaran', '$nama_stasiun_radio', '$frekuensi', '$prog_unggulan', '$pelanggaran', '$pasal')");                       
            redirect_js("radio.php?m=radio");
        }                    
     } else if($mod=='radio_ubah'){
        $penyiaran = $_POST['penyiaran'];
        $nama_stasiun_radio = $_POST['nama_stasiun_radio'];
        $frekuensi = $_POST['frekuensi'];
        $prog_unggulan = $_POST['prog_unggulan'];
        $pelanggaran = $_POST['pelanggaran'];
        $pasal = esc_field($_POST['pasal']);
        
        if($penyiaran=='' || $nama_stasiun_radio=='' || $frekuensi=='' || $prog_unggulan=='' || $pelanggaran=='' || $pasal=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $db->query("UPDATE tb_radio SET penyiaran='$penyiaran', nama_stasiun_radio='$nama_stasiun_radio', frekuensi='$frekuensi', prog_unggulan='$prog_unggulan', pelanggaran='$pelanggaran', pasal='$pasal' WHERE id_radio='$_GET[ID]'");
            redirect_js("radio.php?m=radio");
        }    
     } else if ($act=='radio_hapus'){
        $db->query("DELETE FROM tb_radio WHERE id_radio='$_GET[ID]'");
        header("location:radio/radio.php?m=radio");
    } 

         /** PAGE */
         if($mod=='langgar_tambah'){
            $namastas = $_POST['namastas'];
            $progjud = $_POST['progjud'];
            $bab = $_POST['bab'];
            $judul = $_POST['judul'];
            $pasal = $_POST['pasal'];
            $keterangan = esc_field($_POST['keterangan']);
            
            if($namastas=='' || $progjud=='' || $bab=='' || $judul=='' || $pasal=='' || $keterangan=='')
                print_msg("Field bertanda * tidak boleh kosong!");
            else{
                $db->query("INSERT INTO tb_langgar (namastas, progjud, bab, judul, pasal, keterangan) 
                        VALUES ('$namastas', '$progjud', '$bab', '$judul', '$pasal', '$keterangan')");                       
                redirect_js("langgar.php?m=langgar");
            }                    
         } else if($mod=='langgar_ubah'){
            $namastas = $_POST['namastas'];
            $progjud = $_POST['progjud'];
            $bab = $_POST['bab'];
            $judul = $_POST['judul'];
            $pasal = $_POST['pasal'];
            $keterangan = esc_field($_POST['keterangan']);
            
            if($namastas=='' || $progjud=='' || $bab=='' || $judul=='' || $pasal=='' || $keterangan=='')
                print_msg("Field bertanda * tidak boleh kosong!");
            else{
                $db->query("UPDATE tb_langgar SET namastas='$namastas', progjud='$progjud', bab='$bab', judul='$judul', pasal='$pasal', keterangan='$keterangan' WHERE id_langgar='$_GET[ID]'");
            redirect_js("langgar.php?m=langgar");
            }    
         } else if ($act=='langgar_hapus'){
            $db->query("DELETE FROM tb_langgar WHERE id_langgar='$_GET[ID]'");
            header("location:pelanggaran/langgar.php?m=langgar");
        } 
    
