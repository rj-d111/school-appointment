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
        <!-- <link rel="stylesheet" href="../style/style.css"> -->
        <link rel="stylesheet" href="../style/admin.css">
    </head>
</head>

<body>
    <!-- Start of Admin Navbar -->
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-4 d-flex justify-content-between d-block">
                <h1 class="fs-5"><span class="bg-white text-dark rounded shadow px-2 me-2">CL</span><span class="text-white">Coding League</span></h1>
                <button class="btn close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li><a href="" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-list"></i> Projects</a></li>
                <li><a href="" class="text-decoration-none d-flex justify-content-between">
                        <span><i class="fas fa-comment"></i> Messages</span><span class="bg-dark rounded-pill text-white py-0 px-2">02</span>
                    </a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-envelope-open-text"></i> Services</a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-users"></i> Customers</a></li>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li><a href="" class="text-decoration-none"><i class="fas fa-bars"></i> Settings</a></li>
                <li><a href="" class="text-decoration-none"><i class="fas fa-bell"></i> Notifications</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <a href="" class="navbar-brand fs-4"><span class="bg-dark rounded px-2 py-0">CL</span>Coding League</a>
                        <button class="btn px-1 py-0 open-btn"><i class="fas fa-stream"></i></button>
                    </div>

                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="dashboard-content px-3 pt-4">
                <h2 class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, doloremque soluta unde illo ex distinctio quasi nihil nesciunt recusandae suscipit consectetur quidem quam voluptas sequi, aliquid incidunt reprehenderit voluptatibus maxime.</h2>
            </div>
        </div>
    </div>

    <!-- End of Admin Navbar -->

    <script>
        $(".sidebar ul li").on("click", function() {
            $(".sidebar ul li.active").removeClass("active");
            $(this).addClass("active");
        });

        $(".open-btn").on("click", function(){
            $('.sidebar').addClass("active");
        });

        $(".close-btn").on("click", function(){
            $(".sidebar").removeClass("active");
        });
    </script>