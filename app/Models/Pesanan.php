<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "tb_pesanan";
    protected $primaryKey = "pesanan_id";
    protected $guarded = [];
    protected $fillable = [
        'pesanan_id',
        'pesanan_pelanggan_id',
        'pesanan_kendaraan_id',
        'pesanan_hari',
        'pesanan_total'
    ];
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'pesanan_kendaraan_id');    
    }
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pesanan_pelanggan_id');    
    }
}
