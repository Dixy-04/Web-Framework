<?php

namespace App\Controllers;

class Home extends BaseController { 
    public function index(){
        $data['nama'] = 'Dicky';
        $data['mhs'] = ['Anto','Budi','Caca','Dede'];
            echo view("navbar");
            echo view("header");
            echo view("home");
            echo view("footer");
    }
}