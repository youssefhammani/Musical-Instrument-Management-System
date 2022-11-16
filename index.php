<?php
    include('scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Musical Instrument Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="dsn.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Musical</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <!-- <button class="btn btn-outline-dark me-2" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button> -->
                        <button  type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal-task">
                            Add product
                            <i class="bi bi-plus-square-fill ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">welcome to</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Musical Instrument Management System</p>
                </div>
            </div>
        </header>
        <!-- Dashboard -->
        <div class="col-md-10 m-auto py-5">
            <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">New Orders</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        3,243
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Customers</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        15.07k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Ticket Resolved</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        578
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Revenue Today</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $11.61k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section-->
        <section class="m-5">
            <div class="row ">
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
                <div class="col-xl-4 col-lg-6">
                    <div class="card mb-5 m-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex">
                                <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem">
                                    string
                                </div>
                                <img src="https://source.unsplash.com/600x900/?tech,nater" class="card-img" alt="...">
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
                <div class="col-xl-4 col-lg-6">
                    <div class="card mb-5 m-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex">
                                <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem">
                                    string
                                </div>
                                <img src="https://source.unsplash.com/600x900/?tech,woman" class="card-img" alt="...">
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
                <div class="col-xl-4 col-lg-6">
                    <div class="card mb-5 m-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex">
                                <div class="badge bg-dark text-white position-absolute m-2" style="top: 0.5rem; right: 0.5rem">
                                    string
                                </div>
                                <img src="https://source.unsplash.com/600x900/?tech,music" class="card-img" alt="...">
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
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

        <!-- MODAL -->
        <div class="modal fade" id="modal-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="scripts.php" method="POST" id="form-task" name="Form" onsubmit="return validateForm()">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Task</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
                                <input type="hidden" name="task-id" id="task-id">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="task-title" id="task-title" placeholder="Product Name"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="price" name="task-price" id="task-price" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="quantity" name="task-quantity" id="task-quantity" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="task-date" id="task-date"/>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="task-description" rows="10" id="task-description"></textarea>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</a>
                            <button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
                            <button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>