<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION["userlevel"]);
unset($_SESSION["userpoint"]);

echo ("
       <script>
          location.href = 'https://{$_SERVER['HTTP_HOST']}/index.php';
         </script>
       ");
