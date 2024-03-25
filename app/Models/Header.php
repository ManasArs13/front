<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['id', 'headertable_id','headertable_type', 'key', 'value'];

    protected $hidden = [
        'headertable_id','headertable_type'
    ];

    public $timestamps = false;

    public function headertable()
    {
        return $this->morphTo();
    }
}