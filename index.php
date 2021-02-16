<?php
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description',  FILTER_SANITIZE_STRING);

    $stmt = $pdo->prepare('SELECT * FROM todoitems WHERE title = :title AND description =:description');
    $stmt->execute([$title, $description]);
    $todoitems = $stmt->fetchAll();


    $title=$_POST['title'];
    $description=$_POST['description'];
    
    require('database.php'); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <div class="heading">
            <h2>Add a Task to Your To Do List</h2> 
        </div>
            <section>
                <form action='index.php' method="POST">
                    <label for ='title'>Title:</label>
                    <input type="text" id="title" name="title" required size="" maxlength="30"/>
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" required size="" maxlength="100"/>
                    <button type="submit" class="task_btn" name="submit">Add Task</button>
                </form>
            </section>
            <section>
                <h1> My To Do List </h1>
                    <table action="index.php" method="GET">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                        <tbody>                  
                            <tr>
                                <td class="task"><?php echo $title; ?></td>
                                <td class="description"><?php echo $description; ?></td>
                                <td class="delete">
                                    <a href="#">x</a>
                                </td>
                            <tr>  
                        </tbody>
                    </table>
            </section>
                    

            
           
            
               
           

    </main>
    
    
</body>
</html>