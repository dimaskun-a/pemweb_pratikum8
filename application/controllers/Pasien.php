<?php

class Pasien extends CI_Controller{
    public function index(){
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->nama = 'Dimas Aprillianto';
        $this->pasien1->kode = '011021';
        $this->pasien1->gender = 'L';
        $this->pasien1->tmp_lahir = 'Cilacap';
        $this->pasien1->tgl_lahir = '2001-17-09';
        $this->pasien1->email = 'dimasaprillianto6@gmail.com';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->nama = 'eriri';
        $this->pasien2->kode = '011022';
        $this->pasien2->gender = 'P';
        $this->pasien2->tmp_lahir = 'Jakarta';
        $this->pasien2->tgl_lahir = '2002-12-12';
        $this->pasien2->email = 'eriri@gmail.com';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->nama = 'megumi';
        $this->pasien3->kode = '011023';
        $this->pasien3->gender = 'L';
        $this->pasien3->tmp_lahir = 'Surakarta';
        $this->pasien3->tgl_lahir = '1961-21-06';
        $this->pasien3->email = 'jokowi@gmail.com';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien'] = $list_pasien;

        $this->load->view('layout/header');
        $this->load->view('pasien/index',$data);
        $this->load->view('layout/footer');
    }
}

?>