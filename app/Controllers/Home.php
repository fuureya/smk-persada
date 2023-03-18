<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $path = '../public/img/gallery';
        $gambar = array_diff(scandir($path), array('.', '..'));
        $data = [
            "title" => "Home",
            "gambar" => $gambar
        ];
        return view('index', $data);
    }

    public function gallery()
    {
        $path = '../public/img/galleries';
        $gambar = array_diff(scandir($path), array('.', '..'));
        $data = [
            "title" => "Gallery",
            "gambar" => $gambar
        ];
        return view('gallery', $data);
    }
}
