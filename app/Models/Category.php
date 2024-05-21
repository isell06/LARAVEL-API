<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type'
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id', 'categories_id'); 
    }
}
