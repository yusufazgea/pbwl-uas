<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = "tb_kendaraan";
    protected $primaryKey = "kendaraan_id";
    protected $guarded = [];
    protected $fillable = [
        'kendaraan_id',
        'kendaraan_plat',
        'kendaraan_nama',
        'kendaraan_jenis',
        'kendaraan_tarif'
    ];
    public function pesanan() :HasMany
    {
        return $this->hasMany(Pesanan::class, 'pesanan_kendaraan_id', 'kendaraan_id');    
    }
}
