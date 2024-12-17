<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan1 extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit
    protected $table = 'karyawan1';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['NIP', 'Nama', 'Pangkat', 'Gaji'];

    // Tentukan kolom yang merupakan primary key
    protected $primaryKey = 'NIP';

    // Tentukan apakah primary key adalah integer (default 'false')
    public $incrementing = false;
}