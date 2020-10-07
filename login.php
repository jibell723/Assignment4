<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Comments</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <h1>Login:</h1>
        </header>
        
        <main>
         <div class="container">
            <form action="comments_request.php" method="POST">
               <div id="login">
                   
               <label for="uname">User Name:</label>
               <div>
                    <input type="text" name="uname" id="uname" required="required" maxlength="100">
               </div>
               
               <label for="password">Password:</label>
               <div>
                    <input type="password" name="password" id="password" required="required" maxlength="100">
               </div>
               
               <div>
                    <input type="submit" value="Submit">
               </div>
               
               </div>
            </form>
          </div>
        </main>
    </body>
</html>


