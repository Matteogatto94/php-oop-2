<?php

require_once __DIR__ . '/Categories.php';
class Product
{
    public string $type;
    public string $image;
    public string $name;



    public function __construct($type, $image, $name, $price, Category $type_article)
    {
        $this->type = $type;
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->type_article = $type_article;
    }
}
