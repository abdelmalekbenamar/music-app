<?php


function displayAddSongForm(){
    
    require_once("./models/categoryModel.php");
    
    $categoryObj = new Category();
    $categories = $categoryObj->getAllCategories();
    
    require_once("./views/addSongView.php");
}