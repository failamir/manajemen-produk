<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Produk extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'produks';

    protected $appends = [
        'gambar',
        'bump_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_produk',
        'url_checkout',
        'kode_produk',
        'kategori_produk',
        'koleksi_produk',
        'status_produk',
        'captcha',
        'visibilitas',
        'jumlah_maksimal',
        'deskripsi',
        'tipe_produk',
        'setting_harga',
        'manajemen_stock',
        'gudang_persediaan',
        'status_stok',
        'setting_bump',
        'setting_pengiriman',
        'ongkos_kirim',
        'kurir_pengiriman',
        'layanan_pengiriman',
        'dikirim_dari',
        'penambahan_biaya_pengiriman',
        'asuransi',
        'metode_pembayaran',
        'kode_unik',
        'reseller',
        'jenis_komisi',
        'tiers',
        'cs_rotator',
        'customer_service',
        'shipper',
        'admin',
        'nama_checkout',
        'template',
        'warna_background',
        'section_titles',
        'header_image',
        'header_setting',
        'gambar_checkout',
        'label_garansi',
        'variasi_produk',
        'bidang_yang_diminta',
        'dropship',
        'button_setting',
        'video',
        'konten',
        'kolom_kupon',
        'poin_poin',
        'ringkasan_pesanan',
        'testimonials',
        'tracking_produk',
        'logo_bispro',
        'redirect_finish',
        'headline_setting',
        'video_finish',
        'setting_bank',
        'setting_text_finish',
        'tracking_finish',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function produkTransaksis()
    {
        return $this->hasMany(Transaksi::class, 'produk_id', 'id');
    }

    public function getGambarAttribute()
    {
        $files = $this->getMedia('gambar');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }

    public function getBumpImageAttribute()
    {
        $file = $this->getMedia('bump_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
