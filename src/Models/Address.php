<?php

namespace mitul\addresses\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * @var string
     */
    protected $table = 'address';

    /**
     * @var array
     */
    protected $fillable = [
        'formated_address', 'latitude', 'longitude', 'is_primary', 'order', 'extra_attributes'
    ];
}
