<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = ['name','path','imageable_id','imageable_type'];
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
    public function imageable()
    {
        return $this->morphTo();
    }
}
