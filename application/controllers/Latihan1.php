<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Latihan1 extends CI_Controller{
// hanya menggunakan controller
    public function index(){

        echo "Selamat datang... selamat belajar web programing";
    }
    //tidak pakai model
    public function penjumlahan()
    {
        $nilai1 = 10;
        $nilai2 = 20;
    
        $penjumlahan = $nilai1 + $nilai2;
       
        echo "Hasil Penjumlahan" . $nilai1 ." + ". $nilai2." = ". $penjumlahan;
    }
// pakai model
    public function penjumlahan2(){

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah();
       
        echo "Hasil Penjumlahan" . $hasil;
    }

    // pakai model dan parameter di method
    public function penjumlahan3($n1 = '0', $n2 = '0')
    {

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah2($n1, $n2);
       
        echo "Hasil Penjumlahan" . $hasil;
    }

    // pakai model dan parameter dan view
    public function penjumlahan4($n1 = '0', $n2 = '0')
    {

        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah2($n1, $n2);

        $data['hasilnilai'] = $hasil; 
       
        $this->load->view('view-latihan1', $data);
    }
}