<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';
    protected $fillable = [
        'name',
        'bt',
        'user_id',
        'pulse',
        'Trb_bw',
        'Tra_bw',
        'fatigue',
        'training',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    
}
