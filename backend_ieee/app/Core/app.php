<?php
class App{
    
    protected $controllers ="HomeController";
    protected $action = "index";
    protected $param =[]; 

    public function __construct(){
        $this->prepareUrl();
        $this->render();
    }
/**
 * perpare method to git  url 
 * @return viod
 */
    private function prepareUrl(){
        //to get url
        $url= $_SERVER['QUERY_STRING'];
        if(!empty($url)){
    
            $url = trim($url,'/'); 
            $url = explode('/',$url);
            // echo $url[0]." hellow every one";
            // to git controllers from url and captial fist cahr and add Controllers to url
            $this->controllers = isset($url[0]) ? ucwords($url[0])."Controller"   :"HomeController"; 
            // echo $this->controllers;
            // to git second param in url is method
            $this->action = isset($url[1]) ? $url[1]:"index";
            // echo $this->action;
            unset($url[0],$url[1]);
            // var_dump($url);
         // to git second param in url is method
            $this->param = !empty($url) ? array_values($url):[];
            // var_dump($this->param);
        }
    }

    // to do render to controller
    private function render(){
        if(class_exists($this->controllers)){
            $controller = new $this->controllers;
            if(method_exists($controller,$this->action)){
                call_user_func_array([$controller,$this->action], $this->param);
            };

        }else{
            echo "this controller :".$this->controllers."is not exists";
        }
    }
};

?>