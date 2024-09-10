<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'nama', 'asal', 'tutor_id'];

    public function Tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
