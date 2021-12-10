<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
          <section class="section-default">
            
            <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "emptyfields") {
                      echo '<p class="signuperror">Fill in all fields!</p>';
                    }
                    else if($_GET['error'] == "invaliduidmail") {
                      echo '<p class="signuperror">Invalid username and e-mail!</p>';
                    }
                    else if($_GET['error'] == "invaliduid") {
                      echo '<p class="signuperror">Invalid username!</p>';
                    }
                    else if($_GET['error'] == "invaliduidmail") {
                      echo '<p class="signuperror">Invalid e-mail!</p>';
                    }
                    else if($_GET['error'] == "passwordcheck") {
                      echo '<p class="signuperror">Your passwords do not match!</p>';
                    }
                    else if($_GET['error'] == "usertaken") {
                      echo '<p class="signuperror">Username is already taken!</p>';
                    }
                }
                else if (isset($_GET["signup"]) && $_GET["signup"] == "success") {
                  echo '<p class="signupsuccess">Signup is successful!</p>';
                }
            ?>
            
          </section>
      </div>
    </main>