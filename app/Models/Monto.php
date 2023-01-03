<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monto extends Model
{
    use HasFactory;

    protected $table = 'montos';

    protected $fillable = [
        'fecha',
        'monto',
        'user_id'
    ];

    protected $hidden = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
