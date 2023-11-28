<?php
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsubjects.subject_id = tblsubjects.subject_id ";
    $result = mysqli_query($dbc, $query);
?>