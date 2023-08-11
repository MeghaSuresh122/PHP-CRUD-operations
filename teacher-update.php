<?php
session_start();
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Teacher Details</title>
  </head>

  <body>
    <div class="container mt-5">

        <?php include('msg.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Teacher Data
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <?php
                            if(isset($_GET['id']))
                            {
                                $teacher_id=mysqli_real_escape_string($con, $_GET['id']);
                                $query="SELECT * FROM teachers WHERE id='$teacher_id'";
                                $run_query=mysqli_query($con,$query);
                                if(mysqli_num_rows($run_query)>0)
                                {
                                    $teacher=mysqli_fetch_array($run_query);
                                    ?>

                                    <form action="action_page.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $teacher['id']; ?>" class="form-control">

                                        <div class="mb-3">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?= $teacher['name']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Age</label>
                                            <input type="number" name="age" value="<?= $teacher['age']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Phone No</label>
                                            <input type="tel" name="phoneno" value="<?= $teacher['phoneno']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Subject Name</label>
                                            <input type="text" name="subject"  value="<?= $teacher['subject']; ?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="update_teacher" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>

                                    <?php
                                }
                                else
                                {
                                    echo "<h6>ID not found</h6>";
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>