<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggan";
    protected $primaryKey = "pelanggan_id";
    protected $guarded = [];
    protected $fillable = [
        'pelanggan_id',
        'pelanggan_nik',
        'pelanggan_nama',
        'pelanggan_alamat',
        'pelanggan_jenkel',
        'pelanggan_email',
        'pelanggan_nohp'
    ];
    public function pesanan() :HasMany
    {
        return $this->hasMany(Pesanan::class, 'pesanan_pelanggan_id', 'pelanggan_id');    
    }
}
