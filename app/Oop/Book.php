<?php

namespace App\Oop;

class Book extends CategoryBook implements InterfaceBook
{
    private $penerbit = 'Elex Media';
    protected $publisher = 'Yoga';
    private $title;

    public static $journal = 'My Journal';
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

    public function showData(){
        //return $this->iniprotected;
        return parent::getProtected();
    }

    protected function totalPages(){
        return 100;
    }

    public function read()
    {
        return "Saya sedang membaca buku ".$this->getCategory()." dengan total halaman ".$this->totalPages();
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public static function theJournal()
    {
        return static::$journal;
    }
}

