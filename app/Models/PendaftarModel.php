<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
    protected $table = 'pendaftar';
    protected $allowedFields = ["nama_pendaftar","tempat_lahir", "ttl", "wa_siswa", "nama_wali", "wa_ortu", "jurusan", "siap_mengikuti", "status_pendaftar", "tanggal_daftar"];
}