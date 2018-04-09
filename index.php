<?php
    include_once 'Includes/Database.php';
    include_once 'Includes/Student.php';
    include_once 'Includes/SQLQueries.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Administration Page</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="Includes/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>List of Users</h1>
            <div class="section">
                <?php
                    $object = new SQLQueries();
                    $students = $object->getbyStatus(1);
                 ?>
                <table class="responsive-table">
                    <?php
                    foreach ($students as $student) {
                        print '<tr>'
                            . '<td>' . $student->id . '</td>'
                            . '<td>' . $student->firstname . '</td>'
                            . '<td>' . $student->lastname . '</td>'
                            . '<td>' . $student->email . '</td>'
                            . '<td>' . $student->level . '</td>'
                            . '</tr>';
                    }
                ?>
                </table><br>
            </div>
    </div>
<footer></footer>
</body>
</html>