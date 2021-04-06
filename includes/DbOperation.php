<?php 
class DbOperation 
{
	private $con;

	function __construct()
	{
		require_once dirname(__FILE__) . '/DbConnect.php';

		$db = new DbConnect();
		$this->con = $db->connect();
	}

	function createHero($name, $realname, $rating, $teamaffiliation){
		$stmt = $this->con->prepare("INSERT INTO heroes (name, realname, rating, teamaffiliation) VALUES (?, ?, ?, ?)");
		if ($stmt->execute())
			return true;
		return false
	}

	funtion getHeroes(){
		$stmt = $this->con->prepare("SELECT id, name, realname, rating, teamaffiliation FROM heroes");
		$stmt->execute();
		$stmt->bind_result($id, $name, $realname, $rating, $teamaffiliation);

		$heroes = array();

		while($stmt->fetch()){
			$hero  = array();
			$hero['id'] = $id;
			$hero['name'] = $name;
			$hero['realname'] = $realname;
			$hero['rating'] = $rating;
			$hero['teamaffiliation'] = $teamaffiliation;

			array_push($heroes, $hero);
		}

		return $heroes;
	}

	function updateHero($id, $name, $realname, $rating, $teamaffiliation){
		$stmt = $this->con->prepare
	}

	function deleteHero($id){
		$stmt = this->con->prepare("DELETE FROM heroes WHERE id = ?");
		$stmt->bind_param("i", $id);
		if ($stmt->execute())
			return true;
		return false;
		}
	}
}

?>