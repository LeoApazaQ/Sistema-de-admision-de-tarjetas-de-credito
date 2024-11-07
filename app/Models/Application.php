<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function actions()
    {
        return $this->hasMany(ApplicationAction::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
