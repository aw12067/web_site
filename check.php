<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=student',
    'root', 'root');

    if ( isset($_POST['name'])  && isset($_POST['password'])) {
        $sql = "INSERT INTO user (user_id, pass)
                  VALUES (:name,  :password)";
        echo("<pre>\n".$sql."\n</pre>\n");
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['name'],

            ':password' => $_POST['password']));
    }
    ?>
    <html>
    <head></head><body>
    <p>Add A New User</p>
    <form method="post">
    <p>Name:
    <input type="text" name="name" size="40"></p>

    <p>Password:
    <input type="password" name="password"></p>
    <p><input type="submit" value="Add New"/></p>
    </form>
    </body>
