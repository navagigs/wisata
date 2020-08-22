<?php

// Beranda
if ($_GET['page']=='home'){ 
include "home.php";
}

// Data Pengguna

else
if ($_GET['page']=='pengguna'){ 
include "modul/pengguna/pengguna.php";
}
else
if ($_GET['page']=='pengguna_tambah'){ 
include "modul/pengguna/pengguna_tambah.php";
}
else
if ($_GET['page']=='pengguna_edit'){ 
include "modul/pengguna/pengguna_edit.php";
}

else
if ($_GET['page']=='pengguna_hapus'){ 
include "modul/pengguna/pengguna_hapus.php";
}

else
if ($_GET['page']=='telp'){ 
include "modul/telp_penting/telp.php";
}
else
if ($_GET['page']=='telp_tambah'){ 
include "modul/telp_penting/telp_tambah.php";
}
else
if ($_GET['page']=='telp_edit'){ 
include "modul/telp_penting/telp_edit.php";
}

else
if ($_GET['page']=='telp_hapus'){ 
include "modul/telp_penting/telp_hapus.php";
}


else
if ($_GET['page']=='data_profil'){ 
include "modul/pengguna/data_profil.php";
}

else
if ($_GET['page']=='profil'){ 
include "modul/pengguna/profil.php";
}

else
if ($_GET['page']=='profil_tambah'){ 
include "modul/pengguna/profil_tambah.php";
}

else
if ($_GET['page']=='logo_edit'){ 
include "modul/pengguna/logo_edit.php";
}


else
if ($_GET['page']=='wisata'){ 
include "modul/wisata/wisata_view.php";
}

else
if ($_GET['page']=='detail_wisata'){ 
include "modul/wisata/detail_wisata.php";
}

else
if ($_GET['page']=='wisata_tambah'){ 
include "modul/wisata/wisata_tambah.php";
}

else
if ($_GET['page']=='wisata_hapus'){ 
include "modul/wisata/wisata_hapus.php";
}

else
if ($_GET['page']=='wisata_edit'){ 
include "modul/wisata/wisata_edit.php";
}

else
if ($_GET['page']=='spbu'){ 
include "modul/spbu/spbu_view.php";
}

else
if ($_GET['page']=='detail_spbu'){ 
include "modul/spbu/detail_spbu.php";
}

else
if ($_GET['page']=='spbu_tambah'){ 
include "modul/spbu/spbu_tambah.php";
}
else
if ($_GET['page']=='spbu_edit'){ 
include "modul/spbu/spbu_edit.php";
}

else
if ($_GET['page']=='spbu_hapus'){ 
include "modul/spbu/spbu_hapus.php";
}

else
if ($_GET['page']=='atm'){ 
include "modul/atm/atm_view.php";
}

else
if ($_GET['page']=='detail_atm'){ 
include "modul/atm/detail_atm.php";
}

else
if ($_GET['page']=='atm_tambah'){ 
include "modul/atm/atm_tambah.php";
}

else
if ($_GET['page']=='atm_edit'){ 
include "modul/atm/atm_edit.php";
}

else
if ($_GET['page']=='atm_hapus'){ 
include "modul/atm/atm_hapus.php";
}



else
if ($_GET['page']=='hotel'){ 
include "modul/hotel/hotel_view.php";
}

else
if ($_GET['page']=='detail_hotel'){ 
include "modul/hotel/detail_hotel.php";
}

else
if ($_GET['page']=='hotel_tambah'){ 
include "modul/hotel/hotel_tambah.php";
}
else
if ($_GET['page']=='hotel_edit'){ 
include "modul/hotel/hotel_edit.php";
}

else
if ($_GET['page']=='hotel_hapus'){ 
include "modul/hotel/hotel_hapus.php";
}




else
if ($_GET['page']=='rumah_makan'){ 
include "modul/rumah_makan/rumah_makan_view.php";
}

else
if ($_GET['page']=='detail_rumah_makan'){ 
include "modul/rumah_makan/detail_rumah_makan.php";
}

else
if ($_GET['page']=='rumah_makan_tambah'){ 
include "modul/rumah_makan/rumah_makan_tambah.php";
}
else
if ($_GET['page']=='rumah_makan_edit'){ 
include "modul/rumah_makan/rumah_makan_edit.php";
}

else
if ($_GET['page']=='rumah_makan_hapus'){ 
include "modul/rumah_makan/rumah_makan_hapus.php";
}

else
if ($_GET['page']=='rumah_ibadah'){ 
include "modul/rumah_ibadah/rumah_ibadah_view.php";
}

else
if ($_GET['page']=='detail_rumah_ibadah'){ 
include "modul/rumah_ibadah/detail_rumah_ibadah.php";
}

else
if ($_GET['page']=='rumah_ibadah_tambah'){ 
include "modul/rumah_ibadah/rumah_ibadah_tambah.php";
}
else
if ($_GET['page']=='rumah_ibadah_edit'){ 
include "modul/rumah_ibadah/rumah_ibadah_edit.php";
}

else
if ($_GET['page']=='rumah_ibadah_hapus'){ 
include "modul/rumah_ibadah/rumah_ibadah_hapus.php";
}
else
if ($_GET['page']=='rumah_sakit'){ 
include "modul/rumah_sakit/rumah_sakit_view.php";
}

else
if ($_GET['page']=='detail_rumah_sakit'){ 
include "modul/rumah_sakit/detail_rumah_sakit.php";
}

else
if ($_GET['page']=='rumah_sakit_tambah'){ 
include "modul/rumah_sakit/rumah_sakit_tambah.php";
}
else
if ($_GET['page']=='rumah_sakit_edit'){ 
include "modul/rumah_sakit/rumah_sakit_edit.php";
}

else
if ($_GET['page']=='rumah_sakit_hapus'){ 
include "modul/rumah_sakit/rumah_sakit_hapus.php";
}



else
if ($_GET['page']=='transportasi'){ 
include "modul/transportasi/transportasi_view.php";
}

else
if ($_GET['page']=='detail_transportasi'){ 
include "modul/transportasi/detail_transportasi.php";
}

else
if ($_GET['page']=='transportasi_tambah'){ 
include "modul/transportasi/transportasi_tambah.php";
}
else
if ($_GET['page']=='transportasi_edit'){ 
include "modul/transportasi/transportasi_edit.php";
}

else
if ($_GET['page']=='transportasi_hapus'){ 
include "modul/transportasi/transportasi_hapus.php";
}


else
if ($_GET['page']=='info'){ 
include "modul/info/info_view.php";
}

else
if ($_GET['page']=='detail_info'){ 
include "modul/info/detail_info.php";
}

else
if ($_GET['page']=='info_tambah'){ 
include "modul/info/info_tambah.php";
}
else
if ($_GET['page']=='info_edit'){ 
include "modul/info/info_edit.php";
}

else
if ($_GET['page']=='info_hapus'){ 
include "modul/info/info_hapus.php";
}



else
if ($_GET['page']=='kecamatan'){ 
include "modul/kecamatan/kecamatan_view.php";
}


else
if ($_GET['page']=='kecamatan_tambah'){ 
include "modul/kecamatan/kecamatan_tambah.php";
}
else
if ($_GET['page']=='kecamatan_edit'){ 
include "modul/kecamatan/kecamatan_edit.php";
}

else
if ($_GET['page']=='kecamatan_hapus'){ 
include "modul/kecamatan/kecamatan_hapus.php";
}


else
if ($_GET['page']=='rute'){ 
include "modul/rute/rute_view.php";
}


else
if ($_GET['page']=='rute_tambah'){ 
include "modul/rute/rute_tambah.php";
}
else
if ($_GET['page']=='rute_edit'){ 
include "modul/rute/rute_edit.php";
}

else
if ($_GET['page']=='rute_hapus'){ 
include "modul/rute/rute_hapus.php";
}


else
if ($_GET['page']=='infowisata'){ 
include "modul/infowisata/infowisata_view.php";
}

else
if ($_GET['page']=='detail_infowisata'){ 
include "modul/infowisata/detail_infowisata.php";
}

else
if ($_GET['page']=='infowisata_tambah'){ 
include "modul/infowisata/infowisata_tambah.php";
}

else
if ($_GET['page']=='infowisata_hapus'){ 
include "modul/infowisata/infowisata_hapus.php";
}

else
if ($_GET['page']=='infowisata_edit'){ 
include "modul/infowisata/infowisata_edit.php";
}


else
if ($_GET['page']=='wisatawan'){ 
include "modul/wisatawan/wisatawan_view.php";
}




else
if ($_GET['page']=='beranda'){ 
include "beranda.php";
}





else{
include "not_found.php";	
}
?>