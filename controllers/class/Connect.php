<?php
/**
* Connect to database
*/
class Connect
{
	private $_user = "root";
	private $_password = "root";
	private $_db = "mysql:dbname=simplon_todolist;host=localhost;charset=utf8";
	
	/** 
	 * Select elements in database
	 * 
	 * @param $request string request
	 * @param [$exec] array prepare values
	 *
	 * @return array
	 */
	private function selectLines($request, $exec = [])
	{
		$datas = [];

		try {
			/* Connect to database */
			$db = new PDO($this->_db, $this->_user, $this->_password);
			$req = $db->prepare($request);
			$req->execute($exec);

			$datas = $req->fetchAll();

		} catch (Exception $e) {
			$datas['error'] = $e;
	    }

	    return $datas;
	}

	/** 
	 * Return categories in database
	 *
	 * @return array
	 */
	public function getCategories()
	{	
		$categories = [];
		$request = 'SELECT * from categories';
		$datas = $this->selectLines($request);

		if(!isset($datas['error'])) {
			foreach ($datas as $data) {
				$categories[] = new Category($data['ID_category'], $data['name'], $data['color'], $data['cat_default']);
			}
		}
		
		return $categories;
	}

	/** 
	 * Return a category in database
	 *
	 * @return array
	 */
	


	/** 
	 * Return tasks in database
	 *
	 * @return array
	 */
	public function getTasks()
	{	
		$tasks = [];
		$request = 'SELECT t.ID_task AS id, t.content AS content, t.state AS state, t.date AS task_date, t.category AS category_id, c.name AS category_name, c.color AS category_color, t.priority AS priority_id, p.name AS priority_name
		FROM tasks AS t
		INNER JOIN categories AS c
		ON c.ID_category = t.category
		INNER JOIN priority AS p
		ON p.ID_priority = t.priority';

		/*$request = 'SELECT t.ID_task AS id, t.content AS content, t.state AS state, t.date AS task_date, t.priority AS priority_id, p.name AS priority_name, t.category AS category_id, c.name AS category_name, c.color AS category_color
		FROM tasks AS t
		INNER JOIN priorities AS p, categories AS c
		ON t.priority = p.ID_priority, t.category = c.ID_category';*/

		$datas = $this->selectLines($request);

		if(!isset($datas['error'])) {
			foreach ($datas as $data) {
				$tasks[] = new Task(
					$data['id'],
					$data['content'],
					"1",
					"tot",
					$data['task_date'],
					$data['category_id'],
					$data['category_name'],
					$data['category_color'],
					$data['state']
				);
			}
		}

		return $tasks;
	}
}