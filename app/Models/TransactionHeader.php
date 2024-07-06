<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionHeader extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'transaction_headers';

    protected $dates = [
        'date_paid',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'description',
        'code',
        'rate_euro',
        'date_paid',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function transactionTransactionDetails()
    {
        return $this->belongsToMany(TransactionDetail::class);
    }

    public function getDatePaidAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDatePaidAttribute($value)
    {
        $this->attributes['date_paid'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function transaction_details()
    {
        return $this->belongsToMany(TransactionDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(MsCategory::class, 'category_id');
    }
}