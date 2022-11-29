<?php 

    // Array Dimensi

    // $nama = array ("joni","tejo","budi","esti",100, 2.5) ;

    // var_dump($nama) ;

    // echo "<br>" ;

    // echo $nama[5] ;

    // echo "<br>" ;

    // for ($i = 0; $i < 6 ; $i++) { 
    //     echo $i ;
    //     echo $nama[$i]. "<br>" ;
    // }

    // foreach ($nama as $k) {
    //     echo $k. '<br>' ;
    // }


    // Array Asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang raya",
    //     "tejo" => "jakarta",
    //     "esti" => "sidoarjo" 
    // ) ;

    $nama["joni"]="surabaya" ;
    $nama["budi"]="malang raya" ;
    $nama["tejo"]="jakarta" ;
    $nama["esti"]="sidoarjo" ;
    $nama["edi"]="semarang" ;

    var_dump($nama) ;

    echo "<br>" ;

    // echo $nama['budi'] ;

    foreach ($nama as $k => $v) {
        echo $k. " => ". $v ;

        echo "<br>" ;
    }





?>