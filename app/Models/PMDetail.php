<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMDetail extends Model
{
    use HasFactory;
    protected $table = 'pm_details'; // tell laravel to map this model into the correct table

    protected $fillable = [
        'pm_id',
        'title',
        'status',
    ];

    public function pm()
    {
        return $this->belongsTo(Pm::class);
    }
}
