 <?php
 require_once 'model/sales.php';
 require_once 'model/products.php';
 
 class SalesController 
{
   


	public function indexAction()
	 {
		
	 
	// $Salle 
        // echo "sales";
	 $products = Products::all();
      
        $Sales = Sales::all();

    //    $id = Sales::setProductId();
		//$id=2;
       // echo var_dump($id);
	 // $products = Products::load($id);
	  require_once 'views/sales/index.php';
	 }
	
	
	
	public function newAction()
	{
	
      // echo "new";
      $products = Products::load($_GET['id']);
	//  echo var_dump($products);
      require_once 'views/sales/new.php';
	  
	
	}	
	
	public function createAction()
	{
		
	 // echo "create";
      $Sales = Sales::save($_POST['product_id'],$_POST['sales_at'],$_POST['quantity']); 
	//  echo var_dump($Sales);
     header("location:../../webpro2exam/Products/index");
	}		
	
	
	
	
}

