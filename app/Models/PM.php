<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PM extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'date',
        'type',
        'technician',
        'equipment_id',
        'status',
        'checking_date',
        'done_date',
    ];

    // Relationship to Equipment
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    // Relationship to User (technician)
    public function technician()
    {
        return $this->belongsTo(User::class, 'technician');
    }
}
