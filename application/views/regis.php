<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title><?php echo $title ?></title>
  </head>
  <body>
    <h1>Regis  User</h1>
    
    <form action="<?php echo base_url('Auth/registrasion');?>" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">username</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">password</label>
            <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com" name="password">
        </div>
        <div class="col-6">
                <input type="submit" class="btn btn-primary btn-block" value="CEK">
        </div>
    </form>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>