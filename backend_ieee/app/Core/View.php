<?php 
    class View{
        // view method
        public static function load($view_name,$view_data=[]){
            $file = VIEWS.$view_name.'.php';
            if(file_exists($file)){
                //to convert key to variable
                extract($view_data);
                // start
                ob_start();
                require($file);
                ob_end_flush();
            } else{
                echo "this file ".$view_name."is not exists";
            } 
           
        }
    }

?>