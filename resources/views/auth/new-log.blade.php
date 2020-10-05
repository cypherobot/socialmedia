<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
</head>

<body>

    <div class="container">
        <h1>User Login</h1>

        <form action="logs" method="post">
            @csrf

            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Create password">
            </div>

            <Button type="submit" class="btn btn-primary">Login</Button>
        </form>

    </div>




</body>

</html>