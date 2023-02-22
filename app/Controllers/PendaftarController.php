<?php

namespace App\Controllers;

class PendaftarController extends BaseController
{
    public function smk()
    {
        $data = [
            "title" => "Form Pendaftaran SMK"
        ];
        return view('daftar-smk', $data);
    }
    public function smp()
    {
        $data = [
            "title" => "Form Pendaftaran smp"
        ];
        return view('daftar-smp', $data);
    }
}
