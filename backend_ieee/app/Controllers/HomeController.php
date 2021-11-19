<?php 
class HomeController{
    // to load home page
    public function index(){
        View::load("home");
    }
    //for test 
    public function index2(){
        View::load("custom");
    }
}
?>