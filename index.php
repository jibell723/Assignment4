<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Comments</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <header>
            <h1>Create an account to post comments:</h1>
        </header>
        
        <main>
          <div class="container">
            <form action="comments_request.php" method="POST">
          <div id="register">
               <label for="firstname">First Name:</label>
               <div>
                    <input type="text" name="firstname" id="firstname" required="required" maxlength="100">
               </div>
               
               <label for="lastname">Last Name:</label>
               <div>
                    <input type="text" name="lastname" id="lastname" required="required" maxlength="100">
               </div>
               
               <label for="uname">User Name:</label>
               <div>
                    <input type="text" name="uname" id="uname" required="required" maxlength="100">
               </div>
               
               <label for="email">Email:</label>
               <div>
                    <input type="email" name="email" id="email" required="required" maxlength="100">
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
            
            <h3>Already have an account? <a href="login.php">Click here to login</a> </h3>
        </main>
    </body>
</html>


