<?php
namespace Salon\Repositories;

use Salon\Contracts\ItemInterface;
use App\Item;

class ItemRepository implements ItemInterface
{

    /**
     * return all items
     * @return mixed
     */
    public function getAll()
    {
        return Item::all();
    }

    public function getSpecialItems()
    {
        return Item::with('images')->itemCategory('Special')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getClassicItems()
    {
        return Item::with('images')->itemCategory('Classic')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getSignatureItems()
    {
        return Item::with('images')->itemCategory('Signature')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getFullSetItems()
    {
        return Item::with(['images','details'])->itemCategory('Full Set')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getBackFillItems()
    {
        return Item::with('images')->itemCategory('Back Fill')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getSugarPamperItems()
    {
        return Item::with('images')->itemCategory('Sugar Pamper')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getAdditionItems()
    {
        return Item::with('images')->itemCategory('Additional Services')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    public function getChildrenItem()
    {
        return Item::with('images')->itemCategory('Children')->orderBy('name')->get(['items.id','name','regular_price','special_price']);
    }

    /**return filtered item by its id
     * @param $itemId
     */
    public function getItemById($itemId)
    {
        // TODO: Implement getItemById() method.
    }
}
