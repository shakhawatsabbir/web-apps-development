<?php

namespace App\classes;

class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'      => 'Shakahwat',
                'mobaile'   => '104354454',
                'location'  => 'Kathalbagan',
            ],
            1 => [
                'name'      => 'Hossain',
                'mobaile'   => '467414535',
                'location'  => 'Kolobagan',
            ],
        ];
        return$this->user;
    }
}