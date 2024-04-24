<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function images()
    {
        return $this->hasMany('App\ItemImage', 'item_1c_id', '1c_id');
    }

    public function characteristics()
    {
        return $this->belongsToMany('App\Characteristic', 'characteristic_item', 'item_1c_id', 'characteristic_1c_id')->withPivot('value');
    }

    public function charValues()
    {
        return $this->hasMany('App\CharacteristicItem', 'item_1c_id', '1c_id');
    }

}
