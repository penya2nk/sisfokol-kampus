<?php
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
/////// SISFOKOL-KAMPUS         ///////
///////////////////////////////////////////////////////////
/////// Dibuat oleh :                               ///////
/////// Agus Muhajir, S.Kom                         ///////
/////// URL 	: http://sisfokol.wordpress.com     ///////
/////// E-Mail	:                                   ///////
///////     * hajirodeon@yahoo.com                  ///////
///////     * hajirodeon@gmail.com                  ///////
/////// HP/SMS	: 081-829-88-54                     ///////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


//nilai
$maine = "$sumber/admkemhs/index.php";


//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>HOME</strong>&nbsp;&nbsp;</a> | ';
//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu1" class="menuku"><strong>SETTING</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu1" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admkemhs/s/pass.php" title="Ganti Password">Ganti Password</a>
</LI>
</UL>';
//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//data ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu12" class="menuku"><strong>DATA</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu12" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admkemhs/d/ukm.php" title="UKM">UKM</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/d/mhs_kehadiran.php" title="Kehadiran Mahasiswa">Kehadiran Mahasiswa</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/d/mhs_cuti.php" title="Mahasiswa Cuti">Mahasiswa Cuti</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/d/mhs_do.php" title="Mahasiswa DO / Drop Out">Mahasiswa DO / Drop Out</a>
</LI>

</UL>';
//data ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//mhs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu16" class="menuku"><strong>MAHASISWA</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu16" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admkemhs/mhs/ukm.php" title="Info UKM">Info UKM</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/mhs/kalender.php" title="Kalender Akademik">Kalender Akademik</a>
</LI>
</UL>';
//mhs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







//pelanggaran ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu23" class="menuku"><strong>PELANGGARAN</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu23" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/admkemhs/k/pelanggaran.php" title="Data Master Pelanggaran">Data Master Pelanggaran</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/k/pelanggaran_siswa.php" title="Data Pelanggaran Mahasiswa">Data Pelanggaran Mahasiswa</a>
</LI>
<LI>
<a href="'.$sumber.'/admkemhs/k/rekap_siswa.php" title="Data Rekap Mahasiswa">Data Rekap Mahasiswa</a>
</LI>
</UL>';
//pelanggaran ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









//logout ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="'.$sumber.'/admkemhs/logout.php" title="Logout / KELUAR" class="menuku"><strong>LogOut</strong></A>
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>