<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    use HasUuids;

    protected $with = ['cookies', 'headers'];

    protected $hidden = [
        'session_id'
    ];

    public function cookies()
    {
        return $this->hasMany(Cookie::class);
    }

    public function headers()
    {
        return $this->hasMany(Header::class);
    }
}
