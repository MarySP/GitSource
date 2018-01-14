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
        <title>All Tasks</title>
    </head>
    <body>
        <h1>All Tasks</h1>
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
         //   $result = mysqli_query($conn, 'select TaskID from list' ); 
            
            $result = mysqli_query($conn, "SELECT TaskID FROM pending") or die (mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($result)) {
        printf ("%s (%s)\n", $row["TaskID"], $row["TaskID"]);
    }
//                if ($row['COUNT(*)'] > 0) {
//                    
//                    while($row = mysqli_fetch_assoc($result)) {
//                        echo "Title: " . $row["Title"]. "<br>";
//                    }
//                } 
//                else 
//                    {
//                echo "0 results";
//                }
                
            mysqli_close($conn);
            ?>
      

    </body>
</html>