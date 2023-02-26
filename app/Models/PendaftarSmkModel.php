<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarSmkModel extends Model
{
    protected $table = 'pendaftar-smk';
    protected $allowedFields = ["nama_pendaftar", "tempat-lahir", "tanggal-lahir", "wa_siswa", "nama-ortu", "wa_ortu", "jurusan", "siap_mengikuti", "status_pendaftar", "tanggal_daftar", "tanggal_edit"];
}