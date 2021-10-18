<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'tb_pendaftaran';
    protected $allowedFields = ['Nama', 'Email', 'Telepon', 'Password', 'Prodi'];
}
