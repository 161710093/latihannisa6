<?php
class identitas{
	public $nama;
	public $kelas;
	public $status;

	public function __construct($n,$k,$s){
		$this->nama=$n;
		$this->kelas=$k;
		$this->status=$s;
	}
	public function get_nama(){
		return $this->nama;
	}
	public function get_kelas(){
		return $this->kelas;
	}
	public function get_status(){
		return $this->status;
	}
}
?>