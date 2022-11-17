<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveProduct();
    if(isset($_POST['update']))      updateProduct();
    if(isset($_POST['delete']))      deleteTask();


    function addProduct()
    {
        global $link;
        
        //SQL SELECT
        $query = "SELECT category.name AS category, products.* FROM `products` INNER JOIN category ON products.category_id = category.id ";

        // CODE HERE
        if($result = mysqli_query($link, $query))
        {
            while ($rows = mysqli_fetch_assoc($result))
            {
                $id   = $rows['id'];
                echo '
                    <div class="col-xl-4 col-lg-6">
                        <div class="card mb-5 m-auto" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex">
                                    <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem" id="category'.$id.'" data="'.$rows['category_id'].'">
                                        '.$rows['category'].'
                                    </div>
                                    <img src="https://source.unsplash.com/600x900/?tech,street" class="card-img" alt="PRODUCT PHOTO">
                                </div>
                                <div class="col-md-8 ">
                                    <div class="card-body">
                                        <h4 class="card-title" id="name'.$id.'" data="'.$rows['title'].'">'.$rows['title'].'</h4>
                                        <p class="card-text fst-italic"><small class="text-muted" id="datetime'.$id.'" data="'.$rows['date'].'"><i class="far fa-clock"></i> created in '.$rows['date'].'</small></p>
                                        <p class="card-text" id="description'.$id.'" data="'.$rows['description'].'">'.$rows['description'].'</p>
                                    </div>
                                    <div class="fs-5">
                                        <span class="fst-italic text-muted px-4">
                                            <strong>Quantity</strong>
                                            <small class="px-2">:</small>
                                        </span>
                                        <strong class="px-4" id="quantity'.$id.'" data="'.$rows['quantity'].'">'.$rows['quantity'].'</strong> <br>

                                        <span class="fst-italic text-muted px-4">
                                            <strong>Price</strong>
                                            <small class="px-2">:</small>
                                        </span>
                                        <span class="text-muted text-decoration-line-through">$20.00</span>
                                        <strong id="price'.$id.'" data="'.$rows['price'].'">$'.$rows['price'].'</strong>
                                    </div>
                                    <div class="text-end px-4 py-4"><button href="#modal-task" data-bs-toggle="modal" class="btn btn-outline-dark mt-auto" onclick="editProduct('.$id.')">View options</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
        else {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }
    
    function saveProduct()
    {
        global $link;

        // CODE HERE
        $price       = $_POST['task-price'];
        $category    = $_POST['task-category'];
        $quantity    = $_POST['task-quantity'];
        $date        = test_input($_POST['task-date']);
        $name        = test_input($_POST['task-name']);
        $description = test_input($_POST['task-description']);

        //SQL INSERT
        $query  = "INSERT INTO `products` VALUES (null, '$name', '$price', '$quantity', '$date', '$description', '$category')";
        $result = mysqli_query($link, $query);

        // PROTECTION
        if (!isset($result))
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        else
            $_SESSION['message'] = "Task has been added successfully !";
        header('location: home.php');
    }

    function updateProduct()
    {
        global $link;

        //CODE HERE
        $id          = $_POST['task-id'];
        $price       = $_POST['task-price'];
        $category    = $_POST['task-category'];
        $quantity    = $_POST['task-quantity'];
        $date        = test_input($_POST['task-date']);
        $name        = test_input($_POST['task-name']);
        $description = test_input($_POST['task-description']);

        //SQL UPDATE
        $query  = "UPDATE `products` SET `title` = '$name', `price` = '$price', `quantity` = '$quantity', `date` = '$date', `description` = '$description', `category_id` = '$category' WHERE id = $id";

        
        // PROTECTION
        if(mysqli_query($link, $query)){
            $_SESSION['message'] = "Task has been updated successfully !";
		    header('location: home.php');
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>