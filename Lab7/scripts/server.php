<?php
	session_start();

	include("connect.php");
		$errors = array();
	if(isset($_POST['reg_user'])){
		$username = mysqli_real_escape_string($conn, $_POST['login']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['pass1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['pass2']);
		echo $username; 
		echo password_1;
		echo password_2;
		if (empty($username)) { array_push($errors, "Podaj Login"); }
		if (empty($password_1)) { array_push($errors, "Podaj hasło"); }
		if ($password_1 != $password_2) {array_push($errors, "Hasła nie są identyczne");}
		
		$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
  
		if ($user) { 
			if ($user['login'] === $username) {
				array_push($errors, "użytkownik istnieje");
			}
		}	

		if (count($errors) == 0) {
		$password = md5($password_1);

		$query = "INSERT INTO users (id_u,login, pass) VALUES(null,'$username', '$password')";
		echo $query;
		mysqli_query($conn, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Zalogowano";
		header('location: index.php');
		}
	}
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($conn, $_POST['login']);
		$password = mysqli_real_escape_string($conn, $_POST['pass']);
		
		if (empty($username)) {
			array_push($errors, "Podaj login");
		}
		if (empty($password)) {
			array_push($errors, "Podaj hasło");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE login='$username' AND pass='$password'";
			$results = mysqli_query($conn, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Zostałeś zalogowany";
				header('location: index.php');
			}else {
				array_push($errors, "Zły login lub hasło");
			}
		}
	}
?>