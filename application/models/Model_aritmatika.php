<?php
class Model_aritmatika extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $nilai1, $nilai2, $hasil;
 //method penjumlahan
 public function jumlah($n1, $n2)
 {
 $this->nilai1 = $n1;
 $this->nilai2 = $n2;
 $this->hasil = $this->nilai1 + $this->nilai2;
 return $this->hasil;
 }
}