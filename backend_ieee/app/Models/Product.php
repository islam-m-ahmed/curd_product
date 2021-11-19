<?php
// model 
class Product extends DB{
    private $table = "products";
    private $conn;
   
    // conn to check connection
    public function __construct(){
            // var_dump($this->connect());
            $this->conn = $this->connect();
    }

    // rutern all products
    public function gitAllProudcts(){ 
        return $this->conn->get($this->table);
    }
   
    // to store data 
   public function storeProducts($data){
       return $this->conn->insert($this->table,$data);
   }
   
   // to edit data
   public function editProduct($id){
    $db = $this->conn->where('id',$id);
    return $db->getOne ($this->table);
    }

    //to update data
    public function updateProduct($id ,$data){
        $db = $this->conn->where('id',$id);
        return $db->update($this->table,$data);
  }
   // to delete any record
   public function deleteProduct($id){
         $db = $this->conn->where('id',$id);
         return $db->delete($this->table);
   }
   
    
    }
?>