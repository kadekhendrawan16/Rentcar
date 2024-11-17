<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $table = 'tb_supir';
    protected $primaryKey = 'id_supir';

    protected $fillable = ['nama_supir'];
}
