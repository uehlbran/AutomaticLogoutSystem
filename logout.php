<?php
session_start();
if ( isset( $_COOKIE[session_name()] ) )
    setcookie( session_name(), "", time()-3600, "/" );
session_destroy();
?>

<!DOCTYPE>
<html lang="en">
    <head>
        <title>Logout</title>
    </head>
    <body>
        <h1>You have successfully been logged out!</h1>
    </body>
</html>
