<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    
        <link href="https://fonts.googleapis.com/css?family=PT+Serif|Rufina:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Style/Style.css?" />
        <meta charset="UTF-8">
        <title>Inserted to Database</title>
    </head>
    <body>
        <form action="AllTasks.php" method="POST"> 
        <?php
        require 'config.php';
        $message = $_POST["AddTitle"];
        $Due = $_POST["DueDate"];
        $stat = $_POST["Status"];
        date_default_timezone_set('America/Detroit');
        $date = date("Y/m/d h:i:s ", time());
         
        if (!empty($message)&&!empty($Due)) {
               $conn->query("INSERT INTO TheList VALUES (Null, '$date', '$Due', '$message', '$stat')");
               if ($stat == "STARTED")
               {
                   $conn->query ("insert into Started (select TaskID from Thelist where theStatus = 'STARTED')");
               }
               else 
               {
                   $conn->query ("insert into Pending  (select TaskID from Thelist where theStatus = 'PENDING');");
               }
                $result = $conn->query("SELECT TaskID, Title, DueDate,theStatus FROM theList");
                echo ("<br><br><br>");
                while ($result->num_rows != 0 && $row = ( $result->fetch_assoc() )) {
                    echo( "<br><div class='Itemlist'> "
                            . "<input type='checkbox' class='itemCheckBox' name='listItemArray[]' value=$row[TaskID]>"
                            . "$row[Title] - $row[DueDate] - $row[theStatus]"
                            . "</input>"
                            . "</div>" );
                }         
            mysqli_close($conn);   
        }else{  
            echo "<h1>Missing Information</h1>";
        }
        ?>
    </form>
    </body>
</html>
