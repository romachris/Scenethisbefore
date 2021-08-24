<?php 
                        if (isset($_SESSION['success'])):?>
<li class="menu-item"><a href="">My Account</a>
<li>
    <?php
                        else:?>

<li class="menu-item"><a href="../signup.php">Sign Up</a></li>
<li class="menu-item"><a href="../login.php">Log In</a></li>
<?php 
                            endif;
                        ?>
