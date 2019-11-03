<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $guarded = [];

    public function  member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
