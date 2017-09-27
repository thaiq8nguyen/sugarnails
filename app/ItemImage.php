<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemImage
 * @package App
 */
class ItemImage extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
