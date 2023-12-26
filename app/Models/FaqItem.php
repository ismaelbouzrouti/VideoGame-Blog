<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'question',
        'answer'
    ];

    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }
}
