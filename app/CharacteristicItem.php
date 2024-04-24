<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacteristicItem extends Model
{
    protected $table = 'characteristic_item';

    public function characteristic()
    {
        return $this->hasOne('App\Characteristic', '1c_id', 'characteristic_1c_id' );
    }
}
