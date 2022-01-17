<!DOCTYPE HTML>
<html>
         <head>
<body>
<marquee behavior="scroll"
direction="left"><font size=30 color="blue">WELCOME TO RESTAURANT MANAGEMENT SYSTEM......</font></marquee>
</body>
            <style>
body {
  background-color: lightblue;
}

p {
  font-family: verdana;
  font-size: 20px;
  text-align: center;
  background-color: linen;
}
</style>
</head>
<body>

<p>LOGIN USER FORM</p>

</body>
<body>
<marquee behavior="scroll"
direction="right" scrollamount="10">
<img src= "restaurant2.jpg" width="300" height="230">
<img src= "restaurant1.jpg" width="300" height="230">
<img src= "restaurant3.jpg" width="300" height="230">
<img src= "restaurant4.jpg" width="300" height="230">
<img src= "restaurant5.jpg" width="300" height="230">
<img src= "restaurant6.jpg" width="300" height="230">
<img src= "restaurant7.jpg" width="300" height="230">
<img src= "restaurant8.jpg" width="300" height="230">
</marquee>
</body>

         <body>
                <h2> LOGIN</h1>
                  <form method="post">
                        <fieldset>
                            <legend> Username input</legend>
                                <p>
                               <label> Enter the username:<br/></label>
                          <input type ="text" name="username"></br>
                          </p>
                          <legend>Password input</legend>
                          <p>
                           <label> Enter the password:<br/> </label>
                         <input type="password" name="password"<br/>
                         <input type="submit" value="Login!">
                        </p>
                        </fieldset>
                  </form>
          </body>
</html>

<?php     
         $username="";
         $password="";

         if (isset($_POST['username']) && isset($_POST['password'])) {
             if ($_POST['username'] == $username && $_POST['password'] == $password)
{
                 header("Location: listoftab.php");
             }
             else echo "Invalid login! Enter again";
}
?>
