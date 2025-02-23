<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
