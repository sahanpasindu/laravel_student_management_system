<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable{
    use HasApiTokens, HasFactory, Notifiable;

    protected $attributes = [
        'type' => 0, // default type is 'student'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function isStudent(){
    //     return $this->type === 0; // 0 represents the student type
    // }

    // public function isAdmin(){
    //     return $this->type === 1; // 1 represents the admin type
    // }

    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute{
        return new Attribute(
            get: fn ($value) =>  ["student", "admin"][$value],
        );
    }

    public function getTypeAttribute($value){
        return ["student", "admin"][$value];
    }
}
