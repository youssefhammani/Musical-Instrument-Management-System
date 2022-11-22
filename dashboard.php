<?php
    include ('database.php');

    function capital()
    {
        global $link;
        
        $total = 0;
        // $userid = $_SESSION['user']['id'];
        $sql   = "SELECT * FROM `products`";

        if ($result = mysqli_query($link, $sql))
        {
            while ($rows = mysqli_fetch_assoc($result))
            {
                $total += $rows['price'] * $rows['quantity'];
            }
            return $total;
        }
        else
        {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function divideAmount()
    {
        $sum    = capital();
        $result = $sum / 50;

        return $result;
    }

    function allCustomers()
    {
        global $link;

        $total = 0;
        $query = "SELECT * FROM `users`";

        if ($result = mysqli_query($link, $query))
        {
            while ($rows = mysqli_fetch_assoc($result))
            {
                $total++;
            }
            return $total;
        }
        else
        {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function divideCustomers()
    {
        $sum    = allCustomers();
        $result = $sum / 2;

        return $result;
    }

    function totalProducts()
    {
        global $link;

        $total = 0;
        $query = "SELECT * FROM `products`";

        if ($result = mysqli_query($link, $query))
        {
            while ($rows = mysqli_fetch_assoc($result))
            {
                $total++;
            }
            return $total;
        }
        else
        {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function divideProducts()
    {
        $sum    = totalProducts();
        $result = $sum * 10;

        return $result;
    }
?>