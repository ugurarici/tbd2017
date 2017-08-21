<?php

class Student
{
	public $id;
	public $name;
	public $number;
	public $birth_year;
	public $school;
	public $department;
	public $telephone;
	public $email;
	public $created_at;

	protected $con;

	public function __construct()
	{
		$this->con = new PDO("mysql:host=localhost;dbname=tbd2017_sis;charset=utf8;", "root", "root");
	}

	public function save()
	{
		// id değeri var mı
		if( is_null( $this->id ) ) {
			//	yeni ekleme işlemi
			return $this->create();
		} else {
			//	güncelleme işlemi
			return $this->update();
		}
	}

	protected function create()
	{
		//	veritabanında yeni ekleme işlemlerini burada yapacağız
		$add = $this->con->prepare("INSERT INTO students (name, number, birth_year, school, department, telephone, email) VALUES (:name, :number, :birth_year, :school, :department, :telephone, :email)");
		$result = $add->execute(array(
			'name' 			=> $this->name,
			'number' 		=> $this->number,
			'birth_year' 	=> $this->birth_year,
			'school' 		=> $this->school,
			'department' 	=> $this->department,
			'telephone' 	=> $this->telephone,
			'email' 		=> $this->email,
			));
		if($result) $this->id = $this->con->lastInsertId();
		return $result;
	}

	protected function update()
	{
		//	veritabanındaki mevcut kaydı güncelleme işlemlerini burada yapacağız
		$update = $this->con->prepare("UPDATE students SET name = :name, number = :number, birth_year = :birth_year, school = :school, department = :department, telephone = :telephone, email = :email WHERE id = :id");
		$result = $update->execute(array(
			'id'			=> $this->id,
			'name' 			=> $this->name,
			'number' 		=> $this->number,
			'birth_year' 	=> $this->birth_year,
			'school' 		=> $this->school,
			'department' 	=> $this->department,
			'telephone' 	=> $this->telephone,
			'email' 		=> $this->email,
			));
		return $result;
	}

	public function initById($id)
	{
		$getRow = $this->con->query("SELECT * FROM students WHERE id = $id")->fetchObject();
		if($getRow) {
			$this->id = $getRow->id;
			$this->name = $getRow->name;
			$this->number = $getRow->number;
			$this->birth_year = $getRow->birth_year;
			$this->school = $getRow->school;
			$this->department = $getRow->department;
			$this->telephone = $getRow->telephone;
			$this->email = $getRow->email;
			$this->created_at = $getRow->created_at;
			return true;
		} else {
			return false;
		}
	}

	public static function find($id)
	{
		$student = new self;
		if($student->initById($id))
			return $student;
		else
			return false;
	}

	public function getAll($order = "FIRST")
	{
		$order = strtolower($order);
		$orderBy = "ASC";
		$availableOrders = ['first' => 'ASC', 'last' => 'DESC'];
		if(isset($availableOrders[$order])) $orderBy = $availableOrders[$order];
		$all = $this->con->query("SELECT * FROM students ORDER BY created_at $orderBy")->fetchAll(PDO::FETCH_CLASS, 'Student');
		// var_dump($all);
		return $all;
	}


	public static function all($order = "FIRST")
	{
		$student = new self;
		return $student->getAll($order);
	}

	public function getBy($order = "FIRST", $count = 10, $pass = 0)
	{
		$order = strtolower($order);
		$orderBy = "ASC";
		$availableOrders = ['first' => 'ASC', 'last' => 'DESC'];
		if(isset($availableOrders[$order])) $orderBy = $availableOrders[$order];
		$students = $this->con->query("SELECT * FROM students ORDER BY created_at $orderBy LIMIT $pass , $count")->fetchAll(PDO::FETCH_CLASS, 'Student');
		return $students; 
	}

	public static function get($order = "FIRST", $count = 10, $pass = 0)
	{
		$student = new Student;
		return $student->getBy($order, $count, $pass);
	}

	public function delete()
	{
		$delete = $this->con->exec("DELETE FROM students WHERE id = $this->id");
		if($delete) {
			$this->id = null;
			$this->name = null;
			$this->number = null;
			$this->birth_year = null;
			$this->school = null;
			$this->department = null;
			$this->telephone = null;
			$this->email = null;
			$this->created_at = null;
		}
		return $delete;
	}

	public function searchBy($any)
	{
		$search = $this->con->query("SELECT * FROM students WHERE name LIKE '%$any%' OR number LIKE '%$any%' OR telephone LIKE '%$any%' OR email LIKE '%$any%'")->fetchAll(PDO::FETCH_CLASS, 'Student');
		return $search;
	}


	public static function search($any)
	{
		$obj = new self;
		return $obj->searchBy($any);
	}


}