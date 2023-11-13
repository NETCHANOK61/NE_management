<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';

    protected $fillable = [
        'code',
        'serial_number',
        'name',
        'brand',
        'category',
        'department',
        'user',
        'warrant_year',
        'date_of_start_using',
        'place',
        'status',
        'remark',
    ];

    // relation to tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
