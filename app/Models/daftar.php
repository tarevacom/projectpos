<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    protected $table = "daftar";
    protected $primarykey = 'id';
    protected $fillabale = [
        'nama','alamat','tgl'
    ];


}
