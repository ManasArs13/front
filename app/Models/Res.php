<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res extends Model
{
    use HasFactory;
    use HasUuids;

    protected $with = ['cookies', 'headers'];

    protected $fillable = ['id', 'session_id', 'body'];

    protected $hidden = [
        'session_id'
    ];

    protected $table = 'responses';

    public function cookies()
    {
        return $this->morphMany(Cookie::class, 'cookietable');
    }

    public function headers()
    {
        return $this->morphMany(Header::class, 'headertable');
    }
}
