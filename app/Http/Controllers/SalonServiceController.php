<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Salon\Contracts\ItemInterface as Item;

class SalonServiceController extends Controller
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function index()
    {
        $specialItems = $this->item->getSpecialItems();
        $classicItems =  $this->item->getClassicItems();
        $signatureItems = $this->item->getSignatureItems();
        $fullSetItems = $this->item->getFullSetItems();
        $backFillItems = $this->item->getBackFillItems();
        $additionalItems = $this->item->getAdditionItems();
        $childrenItems = $this->item->getChildrenItem();

        $items = ['specialItems' => $specialItems, 'classicItems' => $classicItems,
            'signatureItems' => $signatureItems, 'fullSetItems' => $fullSetItems, 'backFillItems' => $backFillItems,
            'additionalItems' => $additionalItems, 'childrenItems' => $childrenItems
        ];

        return view('services')->with('items',$items);

    }
}
