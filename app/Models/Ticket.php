<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'repair_type',
        'issue_type',
        'urgency',
        'issue',
        'attach_file',
        'technician',
        'status',
        'technician_attach_file',
        'service_date',
        'done_date',
        'remark',
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
