<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSatisfactionDetail extends Model
{
    use HasFactory;
    protected $table = 'customer_satisfaction_detail';
    protected $fillable = [
        'customer_satis_id',
        'title',
        'score',
        'remark',
    ];

    public function customer_satisfaction()
    {
        return $this->hasMany(CustomerSatisfaction::class);
    }
}
