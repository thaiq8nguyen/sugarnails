<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ItemCategory extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }


}
