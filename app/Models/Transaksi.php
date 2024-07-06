<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'transaksis';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'produk_id',
        'tanggal',
        'qty',
        'total_harga',
        'total_bayar',
        'promo',
        'diskon',
        'kustomer',
        'metode_pembayaran',
        'keterangan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
    
}
