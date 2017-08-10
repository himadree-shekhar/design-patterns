<?php

/*
 	Creational patterns->Abstract Factory Design Pattern: Provide an interface for creating
 	families of related or dependent objects without specifying their concrete classes.
 */

// Abstract factory
abstract class AbstractFactory{
	abstract public function createText(string $content);
}

// Derived concrete factory
class HTMLFactory extends AbstractFactory{
	public function createText(string $content){		
		return new HTMLText($content);
	}
}

// Derived concrete factory
class JSONFactory extends AbstractFactory{
	public function createText(string $content){
		return new JSONText($content);
	}
}

/*
 	AbstractProduct is applicable when you have multiple type of products.
 	AbstractProduct is not necessary to Abstract Factory Design Pattern. 
*/

// AbstractProduct
abstract class Text{
	abstract function getText();
}

// Product
class HTMLText extends Text{
	private $text;
	public function __construct($text){		
		$this->text = $text;
	}
	
	public function getText(){		
		return $this->text;
	}
	
}

// Product
class JSONText extends Text{
	private $text;
	public function __construct($text){
		$this->text = $text;
	}
	
	public function getText(){
		return $this->text;
	}
	
}

// client code
$html = new HTMLFactory();
$html_text = $html->createText('HTML Text');
echo $html_text->getText();

$json = new JSONFactory();
$json_text = $json->createText('JSON Text');
echo $json_text->getText();

?>
