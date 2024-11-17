<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'tb_sewa';
    protected $primaryKey = 'id_sewa';

    protected $fillable = ['id_mobil', 'nama_mobil', 'plat_mobil', 'harga_sewa', 'lama_sewa', 'tanggal_sewa', 'tanggal_kembali', 'id_user', 'nama_user', 'id_status', 'status_sewa', 'telp', 'email', 'total'];

    // Add this relationship method
    public function mobil()
    {
        return $this->belongsTo(Rentcar::class, 'id_mobil');
    }
}