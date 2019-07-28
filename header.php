<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!--ccs -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
 <header>
        <nav>
            <a href=""></a>
        </nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div id='level'>
            <form action="includes/login.inc.php" method='post'>

                <input type="text" name="miluid" placeholder='Username/Email....'>
                <input type="password" name="pwd" placeholder='Password...'>

                <button type='submit' name='login-submit'>Log in</button>
            </form>

        </div>
        <a id='pad' href="signup.php">Signup</a>

        <form action="includes/logout.inc.php" method='post'>
            <button type='submit' name='logout-submit'>Logout</button>
        </form>




    </header>

  </div>

   