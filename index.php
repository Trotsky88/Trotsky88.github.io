<?php
    RewriteEngine On
    RewriteBase /

    RewriteCond %{REQUEST_URI} ^$
    RewriteCond %{HTTP_HOST} ^zacsliker.com$
    RewriteRule ^$ http://zacsliker.com/index.php [L,R=301]
session_start();
require_once 'headder.php';
    $error = $user = $pass = "";
echo<<<_END
<h1> Zac Sliker </h1>
    <p>Website in progress</p>
    <div>
        <img id = 'Zac' src='img/zac.jpg' alt='zac' height='300' weight='300'>
    </div>
_END;
require_once 'footer.php';
?>
