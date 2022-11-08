<?php

namespace App\classes;

class Category
{
    public $category = [];

    public function __construct()
    {
        $this->category = [
            0=>[
                'id' => 1,
                'name' => 'National'
            ],
            1=> [
                'id' => 2,
                'name' => 'International'
            ],
            2=> [
                'id' => 3,
                'name' => 'Sports'
            ],
            3 => [
                'id' => 4,
                'name'=> 'Entertainment'
            ]
        ];
    }
    public function getAllCategory()
    {
        return $this->category;
    }
}