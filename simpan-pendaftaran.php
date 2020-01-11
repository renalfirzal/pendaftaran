<?php

session_start();
//menerima nilai dari kiriman form pendaftaran
$Nama=$_POST["Nama"];
$tgl_lahir=$_POST["tgl_lahir"];
$kelamin=$_POST["kelamin"];
$umur= $_POST["umur"];
$alamat=$_POST["alamat"];
$riwayat=$_POST["riwayat"]; 

if (empty($Nama)) {
	header("location:pendaftaran.php?errNama= *Nama harus di isi");
}
elseif (empty($tgl_lahir)) {
	header("location:pendaftaran.php?errtgl_lahir= *tanggal harus di isi");
}
elseif (empty($kelamin)) {
	header("location:pendaftaran.php?errkelamin= *Jenis kelamin harus di isi");
}
elseif (empty($umur)) {
	header("location:pendaftaran.php?errumur= *umur harus di isi/minimal umur 40");
}
elseif (empty($alamat)) {
	header("location:pendaftaran.php?erralamat= *alamat wajib di isi");
}
else
{
	echo "Selamat Anda Berhasil Daftar<br/>";
	echo "Nama 				: $Nama<br/>";
	echo "Tanggal lahir 	: $tgl_lahir<br/>";
	echo "Jenis Kelamin 	: $kelamin<br/>";
	echo "Umur		    	: $umur<br/>";
	echo "Alamat			: $alamat<br/>";
	echo "Riwayat Pekerjaan : $riwayat<br/>";
}


  

//Kondisi apakah berhasil atau tidak



?>