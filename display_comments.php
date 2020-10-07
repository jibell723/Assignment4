<?php
    require('database.php'); 
    $comment = filter_input(INPUT_POST, 'comment');
    $time = date("Y-m-d H:i:s");
    // inserts user's comment and the current date/time into comments table
    $query = "INSERT INTO comments (Comment, Time) VALUES ('$comment', '$time')";
    $statement1 = $db->prepare($query);
    $statement1->execute();
    $statement1->closeCursor();
    // Retrieve data from comments table
    $queryAll = 'SELECT * FROM comments';
    $statement2 = $db->prepare($queryAll);
    $statement2->execute();
    $results = $statement2->fetchAll();
    $statement2->closeCursor();
  ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Comments</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header>
            <h1>Submitted Comments</h1>
        </header>
        
        <main>
            <h2>These are your submitted comments:</h2>
            <section>
                <table>
                    <tr>
                        <th>Comment</th>
                        <th>Time</th>
                    </tr>
                    
                    <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?php echo $result[0]; ?></td>
                        <td><?php echo $result[1]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </section>
            
            <h2>Enter additional comments here:</h2>
            <form action="display_comments.php" method="POST">
                <textarea name="comment" rows="4" cols="50"></textarea>
                <input type="submit" value="Submit" />
            </form>
        </main>
            
    </body>
</html>

