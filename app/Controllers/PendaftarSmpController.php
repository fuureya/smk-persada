<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\PendaftarSmpModel;

class PendaftarSmpController extends BaseController
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
        date_default_timezone_set("Asia/Makassar");
        $pendaftar = new PendaftarSmpModel();
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
            "tempat-lahir" => $this->request->getPost("tempat"),
            "ttl" => $this->request->getPost('ttl'),
            "wa_siswa" => $this->request->getPost('no-wa'),
            "nama-ortu" => $this->request->getPost('ortu'),
            "wa_ortu" => $this->request->getPost('wa-wali'),
            "siap_mengikuti" => $this->request->getPost('siap'),
            "status_pendaftar" => "belum registrasi ulang",
            "tanggal_daftar" => date("Y-m-d h-i-sa")
        ]);

        return redirect()->back();
    }

    public function viewSmp()
    {
        $pendafatar = new PendaftarSmpModel();
        $data = [
            "title" => "admin",
            "body" => $pendafatar->findAll()
        ];
        return view('admin/admin-smp', $data);
    }

    public function viewGuestSmp()
    {
        $pendafatar = new PendaftarSmpModel();
        $data = [
            "title" => "Monitor Pendaftar",
            "body" => $pendafatar->findAll()
        ];
        return view('admin/guest-smp', $data);
    }

    public function smpDelete($nama)
    {
        $namaPendaftar = new PendaftarSmpModel();
        $namaPendaftar->delete($nama);
        return redirect('adminsmp');
    }

    public function getEditSmp($id)
    {
        $pendafatar = new PendaftarSmpModel();
        $id = $pendafatar->where('id', $id)->first();
        $data = [
            "title" => "admin",
            "body" => $id
        ];
        return view('admin/adminEditSmp', $data);
    }

    public function editSmp($edit)
    {
        date_default_timezone_set("Asia/Makassar");
        $pendaftar = new PendaftarSmpModel();
        $id = $pendaftar->where('id', $edit)->first();
        $updateData = [
            "nama_pendaftar" => $this->request->getPost('nama_pendaftar'),
            "tempat-lahir" => $this->request->getPost("tempat-lahir"),
            "tanggal-lahir" => $this->request->getVar('tanggal-lahir'),
            "wa_siswa" => $this->request->getPost('wa-pendaftar'),
            "nama-ortu" => $this->request->getPost('nama-ortu'),
            "wa_ortu" => $this->request->getPost('wa-wali'),
            "status_pendaftar" => $this->request->getPost('status'),
            "tanggal_edit" => date("Y-m-d h-i-sa")
        ];
        $pendaftar->update($id, $updateData);
        return redirect('adminsmp');
    }
}
