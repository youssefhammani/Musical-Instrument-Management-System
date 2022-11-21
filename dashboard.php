<?php
    include ('database.php');

    function capital()
    {
        global $link;
        
        $total  = 0;
        // $userid = $_SESSION['user']['id'];
        $sql    = "SELECT * FROM `products` WHERE `user-id`= $userid ";
        $result = mysqli_query($link, $sql);
        
        while($rows = mysqli_fetch_assoc($result))
        {
            $total += $rows['price'] * $rows['quantity'];
        }
        return $total;
    }


?>