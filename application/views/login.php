<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    </head>
    <body>
    <form action="Home.php">
     
        <div class="container" style="width:500px;margin-top:100px">
        <h1 class="">Login page</h1>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="pwd"><br>
        </div>
        <button type="submit" class="btn btn-primary" >Submit
        </button><br>

        <small id="Help" class="form-text text-muted">If you doesn't have a account please click on SignUp</small>&nbsp
        </form>
       
     
        </div>
        <a href="<?= base_url() ?>home" ></a>
    </body>
</html>