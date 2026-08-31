<?php

namespace App\Oop;

class CategoryBook
{
    protected $categoryName = 'Umum';
    protected $publisher = 'Elex Media';

    public function __construct($category = 'Umum')
    {
        $this->categoryName = $category;
    }

    public function getCategory()
    {
        return $this->categoryName;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }
}
