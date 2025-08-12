<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class incomes extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'income_id', 'number', 'date', 'last_change_date', 'supplier_article',
        'tech_size', 'barcode', 'quantity', 'total_price', 'date_close', 'warehouse_name',
        'nm_id',
    ];
    protected $casts = [
        'dateFrom' => 'datetime',
        'dateTo' => 'datetime',
    ];
}
