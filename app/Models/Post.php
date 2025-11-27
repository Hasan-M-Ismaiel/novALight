<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'reading_time',
    ];

    // حساب تلقائي لوقت القراءة عند الحفظ
    public static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            $wordCount = str_word_count(strip_tags($post->content));
            $post->reading_time = max(1, ceil($wordCount / 200)); // دقيقة لكل 200 كلمة
        });
    }

    // الحصول على رابط المقال
    public function getRoute()
    {
        return url('/blog/' . $this->slug);
    }
}
