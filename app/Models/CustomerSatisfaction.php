<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSatisfaction extends Model
{
    use HasFactory;
    protected $table = 'customer_satisfaction';
    protected $fillable = [
        'ticket_id',
        'title',
        'score',
    ];

    // Relationship to Ticket
    public function customer_satisfaction_detail()
    {
        return $this->belongsTo(CustomerSatisfactionDetail::class);
    }
}
