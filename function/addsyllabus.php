<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['code'])) {
                $code = $_POST['author'];
                $author = $_POST['subject'];

                if(empty($code) || empty($author)){
                    if(empty($code)){
                        echo "<front color='red'>Syllabus Code field is empty</font><br/>";
                    }
                    if(empty($author)){
                        echo "<front color='red'>Syllabus Author field is empty</font><br/>";
                    }
                    echo "<br/><a href= 'javascript:self/history.back();'>GO Back</a>";
                }
                else {
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus (syllabus_code, syllabus_author) VALUES('$code','$author')");
                    echo "<font color= 'green'>Data added successfully</font>";
                    echo "<br/><a href= '../index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>