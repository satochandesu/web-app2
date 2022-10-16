<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = 'profile_tables';
    protected $fillable = [
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
}
