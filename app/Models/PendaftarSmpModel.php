<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarSmpModel extends Model
{
    protected $table = 'pendaftar-smp';
    protected $allowedFields = ["nama_pendaftar", "tempat-lahir", "tanggal-lahir", "wa_siswa", "nama-ortu", "wa_ortu", "siap_mengikuti", "status_pendaftar", "tanggal_daftar", "tanggal_edit"];
}
