<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])){
            $code = $_POST['code'];
            $name = $_POST['name'];

            if(empty($code) || empty($name)){
                if(empty($code)){
                    echo "<front color='red'>Subject Code field is empty.</font><br/>";
                }
                if(empty($name)){
                    echo "<front color='red'>Subject Name field is empty.</font><br/>";
                }
            }
            echo "<br/><a href= 'javascript:self/history.back();'>GO Back</a>";
        }
        else {
            $result = mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subject_name) VALUES('$code','$name')");

            echo "<font color= 'green'>Data added successfully.";
            echo "<br/><a href= '../index.php'>View Result";
        }
    ?>
</body>
</html>