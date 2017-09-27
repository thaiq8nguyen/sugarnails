<?php namespace Salon\Contracts;

interface ItemCategoryInterface
{
    public function getAll();

    public function getItemCategoryByName($category);

}

