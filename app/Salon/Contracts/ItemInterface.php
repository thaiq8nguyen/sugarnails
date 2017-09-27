<?php
namespace Salon\Contracts;

interface ItemInterface
{
    public function getAll();

    public function getSpecialItems();

    public function getClassicItems();

    public function getSignatureItems();

    public function getFullSetItems();

    public function getSugarPamperItems();

    public function getBackFillItems();

    public function getAdditionItems();

    public function getChildrenItem();

    public function getItemById($itemId);


}