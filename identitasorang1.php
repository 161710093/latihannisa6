<?php

require_once 'identitas1.php';
$identitas = new identitas('putri','XI RPL 2','Single');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('Nisa','XI RPL 1','Jomblo');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('firyal','XI TKR 1','Menikah');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('callista','XI TKR 2','Pacaran');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

?>