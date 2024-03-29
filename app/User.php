<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

    // public function commentsOn(Post $post, $body)
    // {
    //     return (new Comment(compact('body')))
    //     ->user()->associate($this)
    //     ->post()->associate($post)
    //     ->save();
    // }

    public function setPasswordAttribute($password)
    {
    $this->attributes['password'] = bcrypt($password);
    }
}
