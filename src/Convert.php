<?php 
namespace Pututiara\Konversi;

class Convert {
    public static function month_id($format, $tanggal="now", $bahasa="id"){
        $en=array("Jan","Feb", "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September", "Oktober","November","Desember");
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    public static function month_short_id($format, $tanggal="now", $bahasa="id"){
        $en=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sept","Okt","Nov","Des");
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    public static function month_time_id($format, $tanggal="now", $bahasa="id"){
        $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                    "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September", "Oktober","November","Desember");
        date_default_timezone_set('Asia/Jakarta');
        echo date('H:i:s ');
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    public static function just_date_id($format, $tanggal="now", $bahasa="id"){
        $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                 "Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sept",
                 "Okt","Nov","Des");
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }
}
?>