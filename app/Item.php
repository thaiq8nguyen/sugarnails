<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ItemCategory::class);
    }

    public function details()
    {
        return $this->hasMany(ItemDetail::class);
    }

    public function images()
    {
        return $this->hasMany(ItemImage::class);

    }

    public function scopeItemCategory($query, $category)
    {

        return $query->join('item_categories','items.item_category_id','=','item_categories.id')
            ->where('item_categories.category', '=', $category);

    }



}
