<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSatisfactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'title',
        'score',
    ];

    // Relationship to Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
