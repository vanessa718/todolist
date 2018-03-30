<?php
/**
* Class task
*/
class Task
{
	private $_id;
	private $_content;
	private $_priority = [];
	private $_date;
	private $_category = [];
	private $_state;
	
	function __construct($id, $content, $priorityId, $priorityName, $date, $categoryId, $categoryName, $categoryColor, $state)
	{
		$this->_id = $id;
		$this->_content = $content;
		$this->_priority = [
			"id" => $this->_priorityId,
			"name" => $this->_priorityName
		];
		$this->_date = $date;		
		$this->_category = [
			"id" => $this->_categoryId,
			"name" => $this->_categoryName,
			"color" => $this->_categoryColor
		];	
		$this->_state = $state;		
	}

	/* Getters */
	public function getId() {
		return $this->_id;
	}
	public function getContent() {
		return $this->_content;
	}
	public function getPriority() {
		return $this->_priority;
	}
	public function getDate() {
		return $this->_date;
	}
	public function getCategory() {
		return $this->_category;
	}
	public function getState() {
		return $this->_state;
	}

	public function changeState() {
		if($this->_state) {
			$this->_state = false;
		} else {
			$this->_state = true;
		}
	}
}