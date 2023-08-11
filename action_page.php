<?php
session_start();
require 'db.php';

if(isset($_POST['delete_teacher']))
{
    $teacher_id=mysqli_real_escape_string($con,$_POST['delete_teacher']);

    $query="DELETE FROM teachers WHERE id='$teacher_id'";
    $run_query=mysqli_query($con,$query);
    if($run_query)
    {
        $_SESSION['message']="Teacher data deleted successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Teacher data not deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_teacher']))
{
    $teacher_id=mysqli_real_escape_string($con,$_POST['id']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $phoneno=mysqli_real_escape_string($con,$_POST['phoneno']);
    $subject=mysqli_real_escape_string($con,$_POST['subject']);

    $query="UPDATE teachers SET name='$name',age='$age',phoneno='$phoneno',subject='$subject' WHERE id='$teacher_id'";
    $run_query=mysqli_query($con,$query);
    if($run_query)
    {
        $_SESSION['message']="Teacher data updated successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Teacher data not updated";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['add_teacher']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $phoneno=mysqli_real_escape_string($con,$_POST['phoneno']);
    $subject=mysqli_real_escape_string($con,$_POST['subject']);

    $query="INSERT INTO teachers (name,age,phoneno,subject) VALUES ('$name','$age','$phoneno','$subject')";
    $run_query=mysqli_query($con,$query);
    if($run_query)
    {
        $_SESSION['message']="Teacher data added successfully";
        header("Location: teacher-add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Teacher data not added";
        header("Location: teacher-add.php");
        exit(0);
    }
}

?>