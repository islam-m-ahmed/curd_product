<?php
    class ProductController{

        public function index(){
            //object from model class
           $db = new Product();
           $db->gitAllProudcts();
          
           $data['products'] =  $db->gitAllProudcts();
           View::load('product/index',$data);
        }

        // to add 
        public function add(){
            View::load('product/add');
        }
        
        //to store data in database
        public function store(){
            if(isset($_POST['submit']))
            {
                $user_name = $_POST['user_name'];
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $product_quntity = $_POST['product_quntity'];
                $product_discount = $_POST['product_discount'];

                // echo  $user_name.$product_name. $product_price.  $product_quntity.$product_discount;
                $data = Array(
                    "user_name" =>$user_name ,
                    "product_name" =>$product_name ,
                    "product_price" =>  $product_price,
                    "product_quntity" =>$product_quntity,
                    "product_discount" => $product_discount
                );

                $db = new product();
                // $db->storeProducts($data);

                if($db->storeProducts($data)){
                    View::load("product/add",["success"=>"Data Created Successful"]);
                }
                else
                {
                    View::load('product/add');

                }
            
            } 
        }

        //to edit 
       public function edit($id){
           $db = new product();
            // var_dump($db->editProduct($id));
           if(  $db->editProduct($id)){
                $data["row"] = $db->editProduct($id);
                View::load('product/edit',$data);
            }
            else{
                    echo "errors";
            }
          
       }

       // to update
       public function update($id){
        if(isset($_POST['submit']))
        {
            $user_name = $_POST['user_name'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_quntity = $_POST['product_quntity'];
            $product_discount = $_POST['product_discount'];

            // echo  $user_name.$product_name. $product_price.  $product_quntity.$product_discount;
            $data = Array(
                "user_name" =>$user_name ,
                "product_name" =>$product_name ,
                "product_price" =>  $product_price,
                "product_quntity" =>$product_quntity,
                "product_discount" => $product_discount
            );

            $db = new product();
            // $db->storeProducts($data);

            if($db->updateProduct($id,$data)){
                // $insert["row"] = $db->editProduct($id);
                View::load("product/edit",["success"=>"Data Update Successful","row"=>$db->editProduct($id)]);
            }
            else
            {
                View::load('product/edit');
            }
        
        } 
    }


       // to delete single record
       public function delete($id){
           $db = new product();
           if(  $db->deleteProduct($id)){
               View::load('product/delete');
           }
           else{
               echo "errors";
           }
        }

        // to delete multi record
         public function delete_all(){
            $db = new product();
            // View::load('product/delete');
            if(isset( $_POST['check'])){
                $check = $_POST['check'];
                foreach($check as $i){
                   $db->deleteProduct($i) ;
                    }
                    View::load('product/delete');
                   
                   } 
             }
        






        ####
    }       


?>