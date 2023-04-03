<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

 public function index()
 {
   $this->load->view('biodata');
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_aritmatika');
 $hasil = $this->Model_aritmatika->jumlah($n1, $n2);
 echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = " .$hasil;
 }
}