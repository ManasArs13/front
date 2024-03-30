<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    use HasFactory, HasUuids;

    protected $with = ['inputs', 'headers', 'cookies'];

    protected $fillable = ['id', 'meth', 'url', 'session_id'];

    protected $hidden = [
        'session_id'
    ];
    
    
    protected $table = 'requests';

    public function headers()
    {
        return $this->morphMany(Header::class, 'headertable');
    }

    public function cookies()
    {
        return $this->morphMany(Cookie::class, 'cookietable');
    }

    public function inputs()
    {
        return $this->hasMany(Input::class, 'request_id');
    }
}
