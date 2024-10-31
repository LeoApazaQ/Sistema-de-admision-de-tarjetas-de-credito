<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestAction extends Model
{
    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
