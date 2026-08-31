<?php

namespace App\Oop;

class Book extends CategoryBook
{
    private $penerbit = 'Elex Media';
    protected $publisher = 'Yoga';
    private $title;

    public function __construct($title = 'Belajar OOP PHP', $category = 'Pemrograman')
    {
        parent::__construct($category);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPenerbit()
    {
        return $this->publisher;
    }

    public function getBookInfo()
    {
        return "Judul: {$this->title} | kategori: {$this->getCategory()} | Penerbit: {$this->penerbit}";
    }
}

