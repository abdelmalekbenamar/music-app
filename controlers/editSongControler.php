<?php


function showEditSongForm(){
    require_once("./models/categoryModel.php");
    
    $categoryObj= new Category();
    $categories = $categoryObj->getAllCategories();
    
    require_once("./views/editSongView.php");

}
