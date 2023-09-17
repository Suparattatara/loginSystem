<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container my-2">
        <div class="card">
            <div class="card-header p-3 bg-info text-center">Login</div>
            <div class="card-body">

                <form method="post" action="chackLogin.php">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Username</span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>

                    <div class="input-group ">
                        <span class="input-group-text">Password</span>
                        <input type="password" class="form-control" placeholder="Password"name="password">
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="button" value="Add User " class="btn btn-success form-control">

                        </div>
                        <div class="col">
                            <input type="Submit" value="Login " class="btn btn-primary form-control">


                        </div>
                    </div>
            </div>
            </form>
            <div class="card-footer">Footer</div>
            </form>


        </div>
</body>

</html>