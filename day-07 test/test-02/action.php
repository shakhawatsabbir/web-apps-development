<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Blog;


$category= new Category();
$categories = $category->getAllCategory();

$blog = new Blog();
$blogs = $blog->getAllBlog();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'category')
    {
        $id = $_GET['id'];
        $blogs = $blog->getBlogByCategoryId($id);
        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'description')
    {
        $id = $_GET['id'];
        $blogs = $blog->getDescriptionByBlogId($id);
        include 'pages/description.php';
    }
}