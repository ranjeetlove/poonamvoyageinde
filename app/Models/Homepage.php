<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $table = 'homepage_contents';

    protected $fillable = [
        'page_title',
        'meta_description',
        'meta_keywords',
        'section1_heading',
        'section1_description',
        'section2_heading',
        'section2_description',
        'schema',
        'faq_questions',
        'faq_answers',
    ];

    protected $casts = [
        'faq_questions' => 'array',
        'faq_answers' => 'array',
    ];
}
