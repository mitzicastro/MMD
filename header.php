<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <nav class="nav-header-main" >
            <a class="header-logo" href="index.php">
         
        </nav>
            <div class="header-login">    
                <?php
            if (isset($_SESSION['userId'])) {
                       echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                    </form>';
                    }
               ?>
                
              
            </div>
    </header>
