<?php
 class bangundatar{
 	public $p,$l;
 	public $s;
 	public $a,$t;

 	function set_luas1($panjang,$lebar){
 		$this->p=$panjang;
 		$this->l=$lebar;
 	}
 	function get_luas1 (){
 		return $this->p * $this->l;
 	}
 	function get_luas11 (){
 		return 2 * $this->p + 2 * $this->l;
 	}
 	function set_luas2($sisi){
 		$this->s=$sisi;
 	}
 	function get_luas2(){
 		return 2 * $this->s;
 	}
 	function get_luas22(){
 		return 4 * $this->s;
 	}
 	function set_luas3($alas,$tinggi){
 		$this->a=$alas;
 		$this->t=$tinggi;
 		 	}
 	function get_luas3(){
 		return 1/2 * $this->a * $this->t;
 	}
 	function get_luas33(){
 		return 3 * $this->a;
 	}
 }
 $bangundatar = new bangundatar;
 $bangundatar->set_luas1(70,20);
 $bangundatar->set_luas2(60);
 $bangundatar->set_luas3(30,50);
 echo "Luas Persegi Panjang :".$bangundatar->get_luas1().'<br>';
 echo "Keliling Persegi Panjang :".$bangundatar->get_luas11().'<br>';
 echo "Luas Persegi :".$bangundatar->get_luas2().'<br>';
 echo "Keliling Persegi :".$bangundatar->get_luas22().'<br>';
 echo "Luas Segitiga :".$bangundatar->get_luas3().'<br>';
 echo "Keliling Segitiga :".$bangundatar->get_luas33().'<br>';
?>