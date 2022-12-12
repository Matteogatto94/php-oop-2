<?php


class Category
{
    public function __construct($type_article)
    {
        if ($type_article === 'cane') {
            $this->type_article = 'Questo articolo è per cani';
        } else {
            $this->type_article = 'Questo articolo è per gatti';
        }
    }
}
