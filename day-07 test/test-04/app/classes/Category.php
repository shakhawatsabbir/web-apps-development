<?php

namespace App\classes;

class Category
{
    public $category = [];

    public function __construct()
    {
        $this->category = [
            0=>[
                'id'=> 1,
                'name' => 'National'
            ],
            1=>[
                'id'=>2,
                'name'=> 'International'
            ],
            3=>[
                'id'=>3,
                'name'=>'Sports'
            ],
            4=>[
                'id'=>4,
                'name'=>'Entertainment'
            ],
            5=>[
                'id'=>5,
                'name'=>'খেলা',
            ]
        ];

    }

    public function getAllCategory()
    {
        return $this->category;
    }
}