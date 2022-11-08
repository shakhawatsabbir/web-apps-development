<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Category;
use App\classes\Blog;


$category= new Category();
$categoris = $category->getAllCategory();

$blog= new Blog();
$blogs = $blog->getAllBlogsdata();

if (isset($_GET['page']))
{

    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'category')
    {
        $id = $_GET['id'];
        $blogs= $blog->getAllBlogByCategoryId($id);
        include 'pages/category.php';
    }
}