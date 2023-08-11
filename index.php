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

    <title>Teacher Data</title>
  </head>

  <body>
    <div class="container mt-5">

        <?php include('msg.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Teachers List
                            <a href="teacher-add.php" class="btn btn-primary float-end">Add Teacher</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Teacher ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Phone number</th>
                                    <th>Subject name</th>
                                    <th>Update/Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query="SELECT * FROM teachers";
                                $run_query=mysqli_query($con,$query);
                                if(mysqli_num_rows($run_query)>0)
                                {
                                    foreach($run_query as $teacher)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $teacher['id']; ?></td>
                                            <td><?= $teacher['name']; ?></td>
                                            <td><?= $teacher['age']; ?></td>
                                            <td><?= $teacher['phoneno']; ?></td>
                                            <td><?= $teacher['subject']; ?></td>
                                            <td>
                                                <a href="teacher-update.php?id=<?= $teacher['id']; ?>" class="btn btn-success btn-sm">Update</a>
                                        
                                                <form action="action_page.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_teacher" value="<?= $teacher['id']; ?>"class="btn btn-danger btn-sm">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<h6>Records are empty</h6>";
                                }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>