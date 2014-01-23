<?php
require_once 'util.php';

class Sales {

    private $id;
    private $product_id;
    private $sales_at;
    private $quantity;  
	
			  
public function all() 
 			 {
	  $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2exam; charset=utf8;', 'root', '1');
	  
	 try {
   
    //  $result=$this->pdo->query("SELECT * from sales");
	 $result=$this->pdo->query("SELECT * from sales as s, products as p where s.product_id=p.id");

         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
	
 public function save($product_id,$sales_at,$quantity){
	 {
		 
	 $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2exam; charset=utf8;', 'root', '1');
	  
	 try {
   
      $result=$this->pdo->query("INSERT INTO sales ( `product_id`, `sales_at`, `quantity`) VALUES ( '" . $product_id . "', '" . $sales_at . "', '" . $quantity . "');");
	  
	  
	// $result=$this->pdo->query("INSERT INTO sales (content) VALUES ('" . $quantity . "')");
	
         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
	
		}	
	
	
   public function getId() {
      return $this->id;
   }

    public function setId($id) {
        $this->id = $id;
   }

    public function getProductId() {
        return $this->product_id;
    }

    public function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    public function getSalesAt() {
        return $this->sales_at;
   }

    public function setSalesAt($sales_at) {
        $this->sales_at = $sales_at;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


	
}

    
	
	

 //  public function __construct($params) {
//        $this->id         = isset($params['id']) ? $params['id'] : null;
//        $this->product_id = isset($params['product_id']) ? $params['product_id'] : null;
//        $this->sales_at   = isset($params['sales_at']) ? $params['sales_at'] : null;
//        $this->quantity   = isset($params['quantity']) ? $params['quantity'] : null;
//    }
//
//
//    public static function all() {
//    }
//
//    public function save() {
//    }
//
//    public function getId() {
//        return $this->id;
//    }
//
//    public function setId($id) {
//        $this->id = $id;
//    }
//
//    public function getProductId() {
//        return $this->product_id;
//    }
//
//    public function setProductId($product_id) {
//        $this->product_id = $product_id;
//    }
//
//    public function getSalesAt() {
//        return $this->sales_at;
//    }
//
//    public function setSalesAt($sales_at) {
//        $this->sales_at = $sales_at;
//    }
//
//    public function getQuantity() {
//        return $this->quantity;
//    }
//
//    public function setQuantity($quantity) {
//        $this->quantity = $quantity;
//    }
//
//}
//
