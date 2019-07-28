<?php
require 'header.php';
?>


<main class='text-center'>
    <p>You are logged out!</p>
    <p>You are logged in</p>
</main>

<main>
    <div class="container">
         <div class="section-default">
        <h1>Signup</h1>
        <form id='reg-form' action="includes/signup.inc.php" method="post">
           <input type="text" name = 'uid' placeholder='Username'>

           <input type="email" name = 'main' placeholder='E-main'>

           <input type="password" name = 'pwd' placeholder='Password'>

           <input type="password" name = 'pwd-repeat' placeholder='Repeat password'>




           <button type='submit' name='signup-submit'>Signup</button>
        </form> 
    </div>
    </div>
   
</main>




<?php
require 'footer.php';
?>