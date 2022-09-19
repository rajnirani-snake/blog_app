
    <?php
    
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $database = "demo2";
    
        $con = mysqli_connect($servername, $username, $password, $database);
        
        if(!$con) {
            echo "connect successfully!";
        } 
        // else {
        //     die("Error". mysqli_connect_error()); 
        // } 
        
    ?>