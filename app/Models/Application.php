<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 *
 * @property $id
 * @property $title
 * @property $status_id
 * @property $client_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Status $status
 * @property ApplicationAction[] $applicationActions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Application extends Model
{

    protected $perPage = 20;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'status_id', 'client_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'client_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applicationActions()
    {
        return $this->hasMany(\App\Models\ApplicationAction::class, 'id', 'application_id');
    }

}
