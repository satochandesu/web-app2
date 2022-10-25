<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'profile_id',
        'profileName',
        'sports',
        'team',
        'number',
        'position',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function datas()
    {
        return $this->hasMany(Data::class);
    }
}

