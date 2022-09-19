    <?php 
    include 'header.php';
    session_start();
    ?>
    
    <?php
    if($_SESSION["username"]) {
    ?>
    <h5>Hii <?php echo $_SESSION["username"]; ?>!!Please <button class="btn btn-light" type="submit" name=""><a href="logout.php" tite="Logout">Logout.</h5></a></button>

    <?php
    }else echo "<h3>Please login first .</h2>";
    ?>

    <p><h5> Go to <a href="blogs.php"><button class="btn btn-success" type="submit" name=""> blogs page </button></a></h5></p>

    <?php
  include 'footer.php';
    ?>