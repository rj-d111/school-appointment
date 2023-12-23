<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
        <link href="path/to/fontawesome/css/all.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/admin.css">
    </head>
</head>

<body>
    <!-- Start of Admin Navbar -->
    <div class="main-container d-flex">
        <div class="sidebar text-iwata" id="side_nav">
            <div class="header-box px-3 pt-3 pb-4 d-flex flex-column">
                <button class="btn close-btn px-1 py-0 text-white text-end"><i class="fas fa-times"></i></button>
                <h1 class="text-center" style="font-size: 80px;">
                    <i class="far fa-user-circle text-center text-white"></i>
                </h1>
                <p class="text-center text-white">Hello, Admin</p>
            </div>
            <ul class="list-unstyled">
                <li class="active"><a href="" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-users"></i> Customers</a></li>
                <li><a href="" class="text-decoration-none d-flex justify-content-between">
                        <span><i class="fas fa-comment"></i> Messages</span><span class="bg-white rounded-pill text-maroon fw-bold py-0 px-2">12</span>
                    </a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-envelope-open-text"></i> Services</a></li>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled">
                <li><a href="" class="text-decoration-none"><i class="fas fa-gear"></i> Settings</a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-bell"></i> Notifications</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-maroon">
                <div class="container-fluid">
                    <div class="d-flex align-items-center me-auto d-md-none d-block">
                        <a href="#" class="navbar-brand d-flex align-items-center"><img src="../img/lpu-logo.png" alt="" srcset="" style="max-height: 43px;">
                            <!-- <h6 class="text-iwata text-white d-flex align-items-center ms-2 mb-0">LYCEUM OF THE PHILIPPINES UNIVERSITY <br>CAVITE</h6> -->
                        </a>

                        <button class="btn px-1 py-0 open-btn"><i class="fas fa-stream text-white"></i></button>
                    </div>

                    <!-- <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        </div> -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white fs-3" aria-current="page" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="dashboard-content px-3 pt-4">
                <h2 class="text-dark fw-bold mb-4">Appointments</h2>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Appointment Type</th>
                            <th scope="col">Purpose of Visit</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Student</td>
                            <td>Department</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>Pending</td>
                            <td>
                                <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover"><i class="fas fa-eye pe-2"></i>View</a></p>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        More Actions
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Approve</a></li>
                                        <li><a class="dropdown-item" href="#">Reject</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- End of Admin Navbar -->

    <script>
        $(".sidebar ul li").on("click", function() {
            $(".sidebar ul li.active").removeClass("active");
            $(this).addClass("active");
        });

        $(".open-btn").on("click", function() {
            $('.sidebar').addClass("active");
        });

        $(".close-btn").on("click", function() {
            $(".sidebar").removeClass("active");
        });
    </script>