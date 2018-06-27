<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        $user_id = auth()->id();
        $this->comments()->create(compact('body', 'user_id'));
    }

    public function scopeFilter($query, $filters)
    {

        if ($month = $filters['month'])
        {
            $query->whereMonth('created_at', $month);
        }

        if ($year = $filters['year'])
        {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw("strftime('%Y', created_at) year, strftime('%m', created_at) month, 
        count(*) published")
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
