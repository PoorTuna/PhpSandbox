<?php
	class Person{
		//Type of Variables on OOP :
		#Public - > can be accessable anywhere
		#Private - > can only be accessed within the class
		#Protected - > can only be accessed within the class and its extentions

		private $name; 
		private $email;

		private static $agelimit = 25;
		//Constructor type parameters : 
		public function __construct($name,$email){ 
		// THERE ARE 3 Constructors like in java -> default,parameters,copy an object

			$this->name = $name;
			$this->email = $email;
		}

		//SETTERS AND GETTERS :
		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		//To String :

		public function toString(){
			//__CLASS__ : returns class name
			return __CLASS__.":".$this->name.",".$this->email;
		}

		// STATIC FUNCTION THAT RETURNS STATIC VARIABLE

		public static function ageLimit(){
			//IN Static variables we use self instead of this because it is not related to a appearance (mofa) of a class.
			return self::$agelimit;
		}
	}

	#$person1 = new Person("Name","name@gmail.com"); // SET AN OBJECT
	#$person1->setName('John Cena');

	#echo $person1->toString();

	//Class which inherits from other classes (allows the use of protected variables)
	class Customer extends Person{
		private $balance;

		public function __construct($name,$email,$bal){
			parent::__construct($name,$email,$bal);

			$this->balance = $bal;
		}

		public function getBalance(){
			return $this->balance;
		}

		public function setBalance($bal){
			$this->balance = $bal;
		}
	}

	//$customer1 = new Customer("name","mail@gmail.com",300);
	//echo $customer1->getBalance();

	//Call the static variable(if was defined as public)
	#echo Person::$agelimit;
	//Call the static function
	#echo Person::ageLimit();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>

</body>
</html>