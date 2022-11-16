<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();

    function getTasks($status)
    {
        global $link;
        
        //SQL SELECT
        $query  = "SELECT priorities.name AS prior, types.name AS type, tasks.*
            FROM `tasks`
            INNER JOIN priorities ON tasks.priority_id = priorities.id
            INNER JOIN types ON tasks.type_id = types.id";

        // CODE HERE
        if($result = mysqli_query($link, $query))
        {
            while ($rows = mysqli_fetch_assoc($result))
            {
                $i++;
                $id   = $rows['id'];
                $icon = checkIcon($status);
                
                if ($rows['status_id'] == $status)
                {
                    echo '
                        <div class="col-xl-4 col-lg-6">
                            <div class="card mb-5 m-auto" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex">
                                        <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem">
                                            string
                                        </div>
                                        <img src="https://source.unsplash.com/600x900/?tech,street" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8 ">
                                        <div class="card-body">
                                            <h4 class="card-title">product Name</h4>
                                            <p class="card-text fst-italic"><small class="text-muted">#1 created in 2/4/2020</small></p>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="fs-5">
                                            <span class="fst-italic text-muted px-4">
                                                <strong>Quantity</strong>
                                                <small class="px-2">:</small>
                                            </span>
                                            <strong class="px-4">45</strong> <br>

                                            <span class="fst-italic text-muted px-4">
                                                <strong>Price</strong>
                                                <small class="px-2">:</small>
                                            </span>
                                            <span class="text-muted text-decoration-line-through">$20.00</span>
                                            <strong>$18.00</strong>
                                        </div>
                                        <div class="text-end px-4 py-4"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
            echo "Fetch all tasks";
        }
        else {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }
    
    function saveTask()
    {
        global $link;

        // CODE HERE
        $price       = $_POST['task-price'];
        $quantity    = $_POST['task-quantity'];
        $date        = test_input($_POST['task-date']);
        $title       = test_input($_POST['task-title']);
        $description = test_input($_POST['task-description']);

        //SQL INSERT
        $query  = "INSERT INTO `products` VALUES (null, '$title', '$price', '$quantity', '$date', '$description')";
        $result = mysqli_query($link, $query);

        // PROTECTION
        if (!isset($result))
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        else
            $_SESSION['message'] = "Task has been added successfully !";
        header('location: index.php');
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>