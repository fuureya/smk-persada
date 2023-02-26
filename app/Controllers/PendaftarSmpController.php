<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\PendaftarSmkModel;

class PendaftarController extends BaseController
{
    public function smp()
    {
        session();
        $validation["validation"] = \Config\Services::validation();
        $data = [
            "title" => "Form Pendaftaran smp",
            "body" => $validation

        ];

        return view('daftar-smp', $data);
    }

    public function insertSmp()
    {
        $pendaftar = new PendaftarSmkModel();
        // validasi form
        if (!$this->validate([
            "nama" => [
                "rules" => 'required|is_unique[pendaftar.nama_pendaftar]',
                "errors" => [
                    "required" => " Nama Harus di isi",
                    "is_unique" => " Nama Sudah Terdaftar"
                ]
            ],
            "tempat" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Tempat Lahir Wajib Di Isi"
                ]
            ],
            "ttl" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Tanggal Lahir Wajib Di Isi"
                ]
            ],
            "no-wa" => [
                "rules" => "required|max_length[15]|min_length[3]",
                "errors" => [
                    "required" => "Tanggal Lahir Wajib Di Isi",
                    "max_length" => "Nomor tidak boleh lebih dari 15 nomor",
                    "min_length" => "Nomor tidak boleh kurang dari 3 angka"
                ]
            ],
            "ortu" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Wajib mengisi form orangtua/wali"
                ]
            ],
            "wa-wali" => [
                "rules" => "required|max_length[15]|min_length[3]",
                "errors" => [
                    "required" => "Wajib mengisi form orangtua/wali",
                    "max_length" => "Nomor tidak boleh lebih dari 15 nomor",
                    "min_length" => "Nomor tidak boleh kurang dari 3 angka"
                ]
            ],

            "jurusan" => [
                "rules" => 'required',
                "errors" => [
                    "required" => " Wajib memilih jurusan"
                ]
            ],
            "siap" => [
                "rules" => 'required',
                "errors" => [
                    "required" => " Anda Harus Mencentang Siap"
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $pendaftar->insert([
            "nama_pendaftar" => $this->request->getPost('nama'),
            "tempat_lahir" => $this->request->getPost("tempat"),
            "ttl" => $this->request->getVar('ttl'),
            "wa_siswa" => $this->request->getPost('no-wa'),
            "nama_wali" => $this->request->getPost('ortu'),
            "wa_ortu" => $this->request->getPost('wa-wali'),
            "siap_mengikuti" => $this->request->getPost('siap'),
            "status_pendaftar" => "belum registrasi ulang",
            "tanggal_daftar" => date("Y-m-d h-i-sa")
        ]);

        return redirect()->back();
    }

    public function viewSmp()
    {
        
    }
}
