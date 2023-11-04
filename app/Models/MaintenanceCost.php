<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'title',
    ];

    // Relationship to Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
