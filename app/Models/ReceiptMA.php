<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptMA extends Model
{
    use HasFactory;
    protected $table = 'receiptMA';
    protected $fillable = [
        'ticket_id',
        'total_cost',
        'created_by'
    ];

    public function receiptMALists()
    {
        return $this->hasMany(ReceiptMAList::class, 'receiptMA_id', 'id');
    }
}
