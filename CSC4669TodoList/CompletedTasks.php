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
        <title>Completed Tasks</title>
    </head>
    <body>

        <h1>Completed Tasks</h1>
        <div class="btn-group">
          <button class="button"><a href="AddTask.php">Add a Task</a></button>
          <button class="button"><a href="AllTasks.php">All Tasks</a></button>
          <button class="button"><a href="PendingTasks.php">Pending Tasks</a></button>
          <button class="button"><a href="StartedTasks.php">Started Tasks</a> </button>
          <button class="button"><a href="CompletedTasks.php">Completed Tasks</a> </button>
          <button class="button"><a href="LateTasks.php">Late Tasks</a></button>
          
        </div>
         <?php
            require 'config.php';
            $listItem = array();
            global $listItem ;
            $result = $conn->query("SELECT c.TaskID, Title, DueDate FROM  complete c, Thelist l "
                    . "where l.TaskID = c.TaskID and l.theStatus = 'COMPLETED'");
            echo ("<br><br><br>");
            while ($result->num_rows != 0 && $row = ( $result->fetch_assoc() )) {
                $listItem[] = $row['TaskID'];
                print( "<br><div class='Itemlist'> "
                        . "<input type='checkbox' class='itemCheckBox' name='listItemArray[]' value=$row[TaskID]>"
                        . "$row[Title] - $row[DueDate]"
                        . "</input>"
                        . "</div>" );  
            }
            mysqli_close($conn);
            echo ("<h2>Number of Completed Tasks</h2>".count($listItem));
            ?>
    </body>
</html>
