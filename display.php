<?php
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];


    echo "
    <center>
        <table border='1' width='500' cellspacing='0'cellpadding='5''>
            <tr>
                <th>Name </th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Roll No</th>
                <td>$rollno</td>
            </tr>
            <tr>
                <th>Phone </th>
                <td>$phone</td>
            </tr>
        </table>
    </center>
    ";
?>

<html>
    <head>
        <title>Database Window</title>
    </head>
    <body>
        <center>
            <button onclick="add();"  style="margin-top: 20px; height:30px; background-color:lightgreen;">Add to Database</button>
        </center>
        </script>
    </body>
</html>
