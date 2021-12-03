<?php
if (isset($_POST['create'])) {
    include '../db_conn.php';

    function validate($data)
    {
        $data = trim($data);
        $data =stripcslashes($data);
        return htmlspecialchars($data);
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = 'name=' . $name . '&email=' . $email;

    if (empty($name)) {
        header("Location: ../index.php?error=Name is required&$user_data");
    } elseif (empty($email)) {
        header("Location: ../index.php?error=Email is required&$user_data");
    } else {
        $sql = "INSERT INTO `users` (`name`, `email`) VALUES ('$name', '$email')";
        $conn = createConn();
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'success';
        } else {
            header("Location: ../index.php?error=unknown error occurred&$user_data");
        }
    }
}