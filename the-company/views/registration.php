<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card w-50 mx-auto border-0">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 text-center text-danger fw-bold">REGISTRATION</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required>
                        </div>

                        <div class="col">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="20" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-danger w-100">Register</button>
                            <p class="text-center small mt-3">Already registered? <a href="../views" class="">Sign In</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>