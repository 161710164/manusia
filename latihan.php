<?php
echo "<center>";

	require_once 'coba.php';

	$identitas1 = new identitas("Budi", "Bandung", "XI RPL 1", "Pelajar");
		echo "Nama = ".$identitas1->get_nama().'<br>';
		echo "Tempat Lahir = ".$identitas1->get_tl().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "Status = ".$identitas1->get_status().'<br>';
		echo "=============================================".'<br>';

	$identitas1 = new identitas("Alif Firmansyah", "Bandung", "XI RPL 2", "Pelajar");
		echo "Nama = ".$identitas1->get_nama().'<br>';
		echo "Tempat Lahir = ".$identitas1->get_tl().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "Status = ".$identitas1->get_status().'<br>';
		echo "=============================================".'<br>';
	
	$identitas1 = new identitas("Syaindra Aji", "Bandung", "XI RPL 2", "Pelajar");
		echo "Nama = ".$identitas1->get_nama().'<br>';
		echo "Tempat Lahir = ".$identitas1->get_tl().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "Status = ".$identitas1->get_status().'<br>';
		echo "=============================================".'<br>';
	
	$identitas1 = new identitas("Udin", "Bandung", "XI RPL 1", "Pelajar");
		echo "Nama = ".$identitas1->get_nama().'<br>';
		echo "Tempat Lahir = ".$identitas1->get_tl().'<br>';
		echo "kelas = ".$identitas1->get_kelas().'<br>';
		echo "Status = ".$identitas1->get_status().'<br>';
		echo "=============================================".'<br>';
	
	$identitas1 = new identitas("Jajang", "Bandung", "XI RPL 2", "Pelajar");
		echo "Nama = ".$identitas1->get_nama().'<br>';
		echo "Tempat Lahir = ".$identitas1->get_tl().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "Status = ".$identitas1->get_status();

?>