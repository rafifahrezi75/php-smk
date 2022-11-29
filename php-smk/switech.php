<?php 

    // $hari = 4 ;

    // switch ($hari) {
    //     case 1:
    //         echo 'Minggu' ;
    //         break;
    //     case 2:
    //         echo 'Senin' ;
    //         break;
    //     case 3:
    //         echo 'Selasa' ;
    //         break;
        
    //     default:
    //         echo 'Hari Belum Dibuat' ;
    //         break;
    // }

    $pilihan = 'tambah' ;

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda memilih Tambah' ;
            break;
        case 'ubah':
            echo 'Anda memilih Ubah' ;
            break;
        case 'hapus':
            echo 'Anda memilih Hapus' ;
            break;
        
        default:
            echo 'Pilihan Belum Ada' ;
            break;
    }

?>