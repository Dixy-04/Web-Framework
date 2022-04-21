<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\mhs_model;

class mahasiswa extends Controller
{
    public function index()
    {
        $model = new mhs_model;
        $data['title']     ='Data Mahasiswa';
        $data['getMhs'] = $model->getMhs();
        echo view('header', $data);
        echo view('mahasiswa', $data);
        echo view('footer', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Data Mahasiswa';
        echo view('header', $data);
        echo view('tambah', $data);
        echo view('footer', $data);
    }
    public function add()
    {
        $model = new mhs_model;
        $data = array(
            'nama_mahasiswa' => $this->request->getMhs('nama'),
        );
        $model->saveBarang($data);
        echo '<script>
                alert("Sukses Tambah Data Mahasiswa");
                window.location="'.base_url('mahasiswa').'"
            </script>';

    }
}