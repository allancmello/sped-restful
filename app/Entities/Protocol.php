<?php

namespace SpedRest\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Protocol extends Model implements Transformable
{
    use TransformableTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['protocol'];
    
    public function issuer()
    {
        return $this->belongsTo(Issuer::class);
    }
}
