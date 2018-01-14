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
        <title>Add Task</title>
    </head>
    <body>
        <h1>Add a Task to the To-Do List</h1>
        
        <div class="btn-group">
          <div class="btn-group">
          <button class="button"><a href="AddTask.php">Add a Task</a></button>
          <button class="button"><a href="AllTasks.php">All Tasks</a></button>
          <button class="button"><a href="PendingTasks.php">Pending Tasks</a></button>
          <button class="button"><a href="StartedTasks.php">Started Tasks</a> </button>
          <button class="button"><a href="CompletedTasks.php">Completed Tasks</a> </button>
          <button class="button"><a href="LateTasks.php">Late Tasks</a></button>
          
        </div>
          
          <br><br><br>
          <h2> Task Title: </h2> 
          <input id = "AddTitle" name = "AddTitle" Type = 'text' Placeholder = "Title..." size="30px"/>
         
          <h2> Due Date: </h2> 
          <input id ="DueDate" name ="DueDate" type='Date' />
          <h2> Status of the task: </h2> 
          <select id = 'Status' name="Status">
              <option>Started</option>
              <option>Pending</option>
          </select>
          <h2></h2>
          <input id = 'AddTask' type="submit" value="Add Task" name="Add Task" />
          
    </body>
</html>
