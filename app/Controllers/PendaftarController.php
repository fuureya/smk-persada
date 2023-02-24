<?php

namespace App\Controllers;

use App\Models\PendaftarModel;

class PendaftarController extends BaseController
{
    public function smk()
    {
        $data = [
            "title" => "Form Pendaftaran SMK"
        ];
        return view('/daftar-smk', $data);
    }

    public function smkInsert()
    {
        $pendaftar = new PendaftarModel();
// dd($this->request->getVar());
        $pendaftar->insert([
            "nama_pendaftar" => $this->request->getPost('nama'),
            "tempat_lahir" => $this->request->getPost("tempat"),
            "ttl" => $this->request->getVar('ttl'),
            "wa_siswa" => $this->request->getPost('no-wa'),
            "nama_wali" => $this->request->getPost('ortu'),
            "wa_ortu" => $this->request->getPost('wa-wali'),
            "jurusan" => $this->request->getVar('jurusan'),
            "siap_mengikuti" => $this->request->getVar('siap'),
            "status_pendaftar" => "belum registrasi ulang",
            "tanggal_daftar" => date("Y-m-d")
        ]);
    }

    public function viewSmk()
    {
        $pendafatar = new PendaftarModel();
        $data = [
            "title" => "admin",
            "body" => $pendafatar->findAll()
        ];

        return view('admin/admin-smk', $data);
    }

    public function smp()
    {
        $data = [
            "title" => "Form Pendaftaran smp"
        ];

        return view('daftar-smp', $data);
    }
}
