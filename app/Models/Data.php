<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';
    protected $fillable = [
        'bt',
        'user_id',
        'pulse',
        'Trb_bw',
        'Tra_bw',
        'fatigue',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
