<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPage extends Model
{
    use HasFactory;

    protected $table = 'other_pages';

    protected $fillable = [
        'page_type',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'c_schema',
        'faq',
    ];

    protected $casts = [
        'faq' => 'array',
    ];
}
