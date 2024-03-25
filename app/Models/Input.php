<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['id', 'key', 'value', 'request_id'];

    public $timestamps = false;

    public function request()
    {
        return $this->belongsTo(Req::class, 'request_id');
    }
}
