<?php
	session_start();
	include 'includes/conn.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Use prepared statements to prevent SQL injection
		$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('ss', $username, $password);
		$stmt->execute();
		$query = $stmt->get_result();

		if ($query->num_rows < 1) {
			$_SESSION['error'] = 'Cannot find account with the username';
		} else {
			$row = $query->fetch_assoc();
			if ($username == $row['username']) {
				$_SESSION['admin'] = $row['id'];
			} else {
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
		$stmt->close();
	} else {
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');
?>
