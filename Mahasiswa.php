<?php
class Mahasiswa extends CI_Controller
{
 public function index() {

 $this->load->view('view-form-mahasiswa');
 }
 public function cetak() {
 $this->load->helper('url');
 $data = [
 'kode' => $this->input->post('kode'),
 'nama' => $this->input->post('nama'),
 'alamat' => $this->input->post('almat'),
 'sks' => $this->input->post('sks')
 ];
 $this->load->view('view-data-mahasiswa', $data);
 }
}