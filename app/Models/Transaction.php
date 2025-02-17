<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'categories_id',
        'transaction_date',
        'description'
    ];

    public function categories() 
    {
        return $this->belongsTo(Category::class, 'id', 'categories_id');
    }
}
