<?php 
class Shop 
{
	function __construct($name, $price, $description){
		$this-> $productShop = new Product($name, $price, $description);
	}
	function workBasket($name)
	{	
		$ul = new Basket();
		$this->ul->add($name);
	}
}

class Product 
{
	private $nameProduct;
	private $priceProduct;
	private $descriptionProduct;

	public function __construct($name, $price, $description){
 		echo $this->nameProduct = $name;
 		echo $this->priceProduct = $price;
 		echo $this->descriptionProduct = $description;
	}

	public function getProduct($name, $price, $description){
		$this->nameProduct = $name;
		$this->priceProduct = $price;
		$this->descriptionProduct = $description;
	}


}

class Basket 
{
  private $_list = array();
 
  public function __construct( $names )
  {
    if ( $names != null )
    {
      foreach( $names as $name )
      {
        $this->_list []= $name;
      }
    }
  }
 
  public function add( $name )
  {
    $this->_list []= $name;
  }
 
}

/*class Order 
{
	
	function __construct()
	{
		# code...
	}
}

class Checkpoint 
{
	
	function __construct()
	{
		# code...
	}
}

class Sale
{
	
	function __construct()
	{
		# code...
	}
}

class Delivery
{
	
	function __construct()
	{
		# code...
	}
}*/

class Users
{
  public static function Load($id) 
  {
      return new User($id);
  }
 
  public static function Create() 
  {
      return new User(null);
  }
  public function __construct($id){

  }
  public function getName($name)
  {
      return $this-> $name;
  } 
}

$sh= new Shop('апельсин', '60', '10');
 ?>