<?php

namespace App\classes;

class blog
{
    public $blogs = [];
    public $data = [];

    public function __construct()
    {
        $this->blogs = [
        0 => [
            'id'  => 1,
            'category_id' => 1,
            'title' => 'শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার ',
            'description' => 'শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার ',
            'image' => 'news 2.webp'
        ],
        1 => [
            'id'  => 2,
            'category_id' => 1,
            'title' => 'This is National blog title Two ',
            'description' => 'This is National blog description Two',
            'image' => 'download1.jpg'
        ],
        2 => [
            'id'  => 3,
            'category_id' => 1,
            'title' => 'This is National blog title Three ',
            'description' => 'This is National blog description Three',
            'image' => 'download2.jpg'
        ],
        3 => [
            'id'  => 4,
            'category_id' => 3,
            'title' => 'This is sports blog title one ',
            'description' => 'This is sports blog description one',
            'image' => 'download3.jpg'
        ],
        4 => [
            'id'  => 5,
            'category_id' => 4,
            'title' => 'This is Entertainment  title one ',
            'description' => 'This is Entertainment blog description one',
            'image' => 'images4.jpg'
        ],
        5 => [
            'id'  => 6,
            'category_id' => 2,
            'title' => 'This is International blog title one ',
            'description' => 'This is National blog description one',
            'image' => 'download1.jpg'
        ],
        6 => [
            'id'  => 7,
            'category_id' => 2,
            'title' => 'This is International blog title two ',
            'description' => 'This is National blog description two',
            'image' => 'download2.jpg'
        ],
        7 => [
            'id'  => 8,
            'category_id' => 3,
            'title' => 'This is sports blog title Two ',
            'description' => 'This is sports blog description one',
            'image' => 'download3.jpg'
        ],
        8 => [
            'id'  => 9,
            'category_id' => 4,
            'title' => 'This is Entertainment  title Two ',
            'description' => 'This is Entertainment blog description one',
            'image' => 'images4.jpg'
        ],
        9 => [
            'id'  => 10,
            'category_id' => 1,
            'title' => 'সেই পুরোনো সমস্যার ঘেরাটোপেই কি বন্দী থাকবে পাবলিক পরীক্ষা ',
            'description' => '',
            'image' => 'news 1.webp'
            ],
        ];
    }


    public function getAllBlogs()
    {
        return $this->blogs;
    }

    public function getBlogByCategoryId($id)
    {
        foreach ($this->blogs as $blog)
            {
                if ($blog['category_id'] == $id)
                {
                    array_push($this->data, $blog);
                }
            }
        return $this->data;
    }

    public function getDescriptionByBlogId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                array_push($this->data, $blog);
            }
        }
        return $this->data;
    }


}