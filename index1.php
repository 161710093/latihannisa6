<?php
require_once 'robot1.php';

$robot1= new robot ('linininiini',70);
$robot2= new robot ('teoteoteoteot',30);

$robot1->set_berat(90);
$robot2->set_suara('boringboringboring');

echo 'Berat robot adalah : '.$robot1->get_berat().'<br>';
echo 'Suara robot adalah :'.$robot2->get_suara().'<br>';