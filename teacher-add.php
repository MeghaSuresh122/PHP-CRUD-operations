<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Teacher</title>
  </head>

  <body>
    <div class="container mt-5">

        <?php include('msg.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Teacher
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <form action="action_page.php" method="POST">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone No</label>
                                <input type="tel" name="phoneno" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Subject Name</label>
                                <input type="text" name="subject" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="add_teacher" class="btn btn-primary">Add Teacher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>