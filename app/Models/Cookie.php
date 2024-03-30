<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookie extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['id', 'cookietable_id', 'cookietable_type', 'key', 'value'];

    public $timestamps = false;

    protected $hidden = [
        'cookietable_id', 'cookietable_type'
    ];

    public function cookietable()
    {
        return $this->morphTo();
    }
}
