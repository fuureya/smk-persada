<?php

namespace App\Controllers;

use Config\App;

class LoginController extends BaseController
{
    protected $member;

    public function __construct()
    {
        $this->member = new \App\Models\MemberModel();;
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $login = $this->request->getVar();
        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            // mengecek jika password kosong
            if ($member_username == "" || $member_password == "") {
                $error = "Silahkan Masukkan Username dan Password";
            }

            // menggecek apakah username ada di dalam tabel atau tidak? 
            if (empty($error)) {
                $dataMember = $this->member->where('member_username', $member_username)->first();

                $passMember = $dataMember["member_password"];
                // validasi password
                if ($dataMember["member_password"] != $passMember) {
                    $error = "password tidak sesuai hubungi admin";
                }
            }

            if (empty($error)) {
                $dataSesi = [
                    "member_id" => $dataMember["member_id"],
                    "member_username" => $dataMember["member_username"],
                    "member_password" => $dataMember["member_password"]
                ];
                session()->set($dataSesi);

                if($dataSesi["member_username"] == 'oktaguest')
                {
                    return redirect()->to('guestsmk');
                }

                if($dataSesi["member_username"] == 'ahmadguest')
                {
                    return redirect()->to('guestsmp');
                }
            }

            // mengirim message error 
            if ($error) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $error);
                session()->setFlashdata('pass_salah', $error);
                return redirect()->to('login');
            }
        }
        return view('login');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
