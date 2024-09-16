<?php 
 $hname = 'localhost';
 $uname = 'root';
 $pass = '';
 $db = 'luxinn';

//  Establishing the connection
 $con = mysqli_connect($hname, $uname, $pass);

 if (!$con) {
     die('Connection Failed: ' . mysqli_connect_error());
 }

// Select the database
if (!mysqli_select_db($con, $db)) {
    die('Database Selection Failed: ' . mysqli_error($con));
}

function filtration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value); // Remove spaces
        $data[$key] = stripslashes($value); // Removes backslashes
        $data[$key] = htmlspecialchars($value); // Converts special characters to HTML entities
        $data[$key] = strip_tags($value); // Remove empty tags and HTML tags in input
    }
    return $data; // Returns and passes filtered data to the function
}

function select($sql, $values, $datatypes) {
    $con = $GLOBALS['con']; // Use the global connection everywhere
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); // Bind parameters
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt); 
            return $res;
        } else {
            mysqli_stmt_close($stmt); 
            die("Cannot be executed - Select");
        }
    } else {
        die("Cannot be Prepared - Select");
    }
}
?>
