<?php

    session_start();
    require_once 'connect.php';

    
        $name = $_POST['name'];
        $s_name = $_POST['s_name'];
        $p_name = $_POST['p_name'];
        $fio_pacient = $s_name . ' ' . $name . ' ' . $p_name;
        $telephone = $_POST['telephone'];
        $uniqueid = $_POST['uniqueid'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $password = $_POST['password'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        #--$password = md5($password);

        mysqli_query($connect, "INSERT INTO clients (fio_pacient, name, s_name, p_name, telephone, uniqueid, address, sex, PASSWORD, is_active, last_session)
        VALUES ('$fio_pacient', '$name', '$s_name', '$p_name', '$telephone', '$uniqueid', '$address', '$sex', '$password', 1, NOW())");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
