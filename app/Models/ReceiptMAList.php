<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptMAList extends Model
{
    use HasFactory;
    protected $table = 'receiptMAList';
    protected $fillable = [
        'receiptMA_id',
        'title',
        'cost'
    ];

    public function receiptMA()
    {
        return $this->belongsTo(ReceiptMA::class);
    }
}
