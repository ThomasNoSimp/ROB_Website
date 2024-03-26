<?php 
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['user'])) {
        // Redirect to login page if user is not logged in
        // header("Location: login.html");
        // exit;
        // TODO: Uncomment after testing
    }
    
    // Retrieve user information from session
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Republic Of Burma | Profile</title>
    <link rel="stylesheet" href="src/styles/profile/index.css">
    <link rel="icon" type="x-image" href="src/images/favicon.webp">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-information-content-container">
                                <div class="profile-information-content">
                                    <div class="profile-information">
                                        <h3 class="profile-information-title">Profile Information</h3>
                                        <form class="form">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username: Legit_Thomas</label>
                                                <br>
                                                <label for="email" class="form-label">Email: hitthomas28@gmail.com</label>
                                                <br>
                                                <label for="password" class="form-label">Password: ***********</label>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>