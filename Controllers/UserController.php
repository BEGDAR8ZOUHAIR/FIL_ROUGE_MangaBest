<?php

require_once "./Models/User.php";

class UserController
{

	public function __construct()
	{
		session_start();
	}

	// serch to manga ==========================================================

	public function index()
	{
		$db = new db();
		$search = "";
		if (isset($_POST['submit_search']))
			$search = $_POST['search'];
		if (!empty($_POST['search']))
			$arr = ["title" => $search];
		else
			$arr = [];
		$data = $db->selectAll("mangas", $arr);

		require_once "./Views/index.php";
	}

	// logout ==========================================================

	public function logout()
	{
		unset($_SESSION['user']);
		unset($_SESSION['email']);
		unset($_SESSION['userId']);
		session_destroy();
		header('Location: http://localhost/fileRougeMangaBest/User/index');
	}

	// login ==========================================================
	public function userLogin()
	{
		$inccorect = false;

		if (isset($_POST['submit'])) {

			if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
				$user = new User($_POST['uname'], $_POST['psw']);
				$users = $user->select();
				$uname = $_POST['uname'];
				$psw = $_POST['psw'];

				foreach ($users as $us) {
					if ($uname == $us["username"] && $psw == $us["password"]) {
						$_SESSION["user"] = $us["username"];
						$_SESSION["email"] = $us["email"];
						$_SESSION["userId"] = $us["id"];
						$_SESSION["admin"] = $us["admin"];

						unset($_SESSION['signUp']);
						header("Location: http://localhost/fileRougeMangaBest/User/index");
					} else {
						$inccorect = true;
					}
				}
			} else {
				$inccorect = true;
			}
		}


		require_once "./Views/authu.php";
	}
	// register ==========================================================

	public function userSignUp()
	{
		if (isset($_SESSION['signUp'])) {
			unset($_SESSION['signUp']);
		}
		$required = false;
		if (isset($_POST['submit'])) {
			if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['gender'])) {

				$user = new User($_POST['name'], $_POST['psw']);
				$user->insertUser($_POST['name'], $_POST['email'], $_POST['password'], $_POST['gender']);
				$_SESSION['signUp'] = $_POST['name'];
				header("Location: http://localhost/fileRougeMangaBest/User/userlogin");
			}
		} else {
			$required = true;
		}
		require_once "./Views/login.php";
	}

	// profile =============================================

	public function profile()
	{
		$db = new db();
		$user = new User();
		// $user = new Profile();
		$data = [];
		$data = $user->profileInfo();
		
		require_once "./Views/profile.php";
	}
     public function delete ($id){
       
		$db = new db();
		$user = new User();
		if($user->deleteUser($id)){
			header("Location: http://localhost/fileRougeMangaBest/User/profile");
		}
	 }

	
}
