<?php 

class Shop 
{
	function __construct(){
		$productShop = Product:: getProduct('апельсин', '60', '20');
		return echo($productShop);
	}
	function workBasket()
	{

		return echo(new basket());
	}
}

/*class programm
{
	function __construct()
	{
		$this-> new Order();
	}
}*/

class Product 
{
	private $nameProduct;
	private $priceProduct;
	private $descriptionProduct;

	public function getProduct($name, $price, $description){
		$this->$nameProduct = $name;
		$this->$priceProduct = $price;
		$this->$descriptionProduct = $description;
	}


}

class Basket extends Product
{
	$newUser = User::getName('Алексей');
	$newProduct = Product:: getProduct('апельсин', '60', '20')
	public $list = array();
	function putBasket()
	{
		foreach ($list as $productBasket) {
			if ($this->$descriptionProduct == 0 ) {
				echo "Данный товар закончался";
			}
		}
	}
}

class Order 
{
	
	function __construct(argument)
	{
		# code...
	}
}

class Checkpoint 
{
	
	function __construct(argument)
	{
		# code...
	}
}

class Sale
{
	
	function __construct(argument)
	{
		# code...
	}
}

class Delivery
{
	
	function __construct(argument)
	{
		# code...
	}
}

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

$sh= new Shop();
 ?>