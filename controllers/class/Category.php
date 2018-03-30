<?php
/**
* Class category
*/
class Category
{
	private $_id;
	private $_name;
	private $_color;
	private $_isDefault;
	
	function __construct($id, $name, $color, $isDefault)
	{
		$this->_id = $id;
		$this->_name = $name;
		$this->_color = $color;
		$this->_isDefault = $isDefault;		
	}

	/* Getters */
	public function getId() {
		return $this->_id;
	}
	public function getName() {
		return $this->_name;
	}
	public function getColor() {
		return $this->_color;
	}
	public function getIsDefault() {
		return $this->_isDefault;
	}
}