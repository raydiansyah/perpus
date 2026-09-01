<?php

namespace App\Oop;

abstract class CategoryBook
{
    protected $categoryName = 'Umum';
    protected $publisher = 'Elex Media';

    private $iniprivate = 'the private';
    protected $iniprotected = 'the protected';
    public $inipublic = 'the public';

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

    protected function getProtected()
    {
        return $this->iniprotected;
    }

    abstract protected function totalPages();

}
