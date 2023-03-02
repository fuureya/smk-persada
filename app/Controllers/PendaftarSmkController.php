<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\PendaftarSmkModel;
use CodeIgniter\I18n\Time;

class PendaftarSmkController extends BaseController
{
    public function index()
    {
        session();
        $validation["validation"] = \Config\Services::validation();

        $data = [
            "title" => "Form Pendaftaran SMK",
            "body" => $validation
        ];
        return view('/daftar-smk', $data);
    }

    public function viewSmk()
    {
        $pendafatar = new PendaftarSmkModel();
        $data = [
            "title" => "admin",
            "body" => $pendafatar->findAll()
        ];
        return view('admin/admin-smk', $data);
    }

    public function smkInsert()
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
            "tgl-lahir" => [
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

        date_default_timezone_set("Asia/Makassar");
        $pendaftar->insert([
            "nama_pendaftar" => htmlspecialchars($this->request->getPost('nama')),
            "tempat-lahir" => htmlspecialchars($this->request->getPost("tempat")),
            "tanggal-lahir" => htmlspecialchars($this->request->getVar('tgl-lahir')),
            "wa_siswa" => htmlspecialchars($this->request->getPost('no-wa')),
            "nama-ortu" => htmlspecialchars($this->request->getPost('ortu')),
            "wa_ortu" => htmlspecialchars($this->request->getPost('wa-wali')),
            "jurusan" => htmlspecialchars($this->request->getPost('jurusan')),
            "siap_mengikuti" => htmlspecialchars($this->request->getPost('siap')),
            "status_pendaftar" => htmlspecialchars("belum registrasi ulang"),
            "tanggal_daftar" => htmlspecialchars(date("Y-m-d h-i-sa"))
        ]);
        return redirect()->back();
    }

    public function smkDelete($nama)
    {
        $namaPendaftar = new PendaftarSmkModel();
        $namaPendaftar->delete($nama);
        return redirect('admin');
    }

    public function getDataEdit($id)
    {
        $pendafatar = new PendaftarSmkModel();
        $id = $pendafatar->where('id', $id)->first();
        $data = [
            "title" => "admin",
            "body" => $id
        ];
        return view('admin/adminEdit', $data);
    }

    public function smkEdit($edit)
    {
        date_default_timezone_set("Asia/Makassar");
        $pendaftar = new PendaftarSmkModel();
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
        return redirect('admin');
    }
}
