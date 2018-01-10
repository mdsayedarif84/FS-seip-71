<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message='';

if (isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=Student::deleteStudentInfo($id);
}




$queryResult=Student::getAllStudentInfo();
//while($student=mysqli_fetch_assoc($queryResult)){
//    echo '<pre>';
//print_r($student);
//};

?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<a href="View.php" class="btn btn-info">Add Student</a>
<a href="view-student.php" class="btn btn-warning">View Student</a>
<h1 class="text-danger"><?php echo $message;?></h1>

<table class="table table-hover">
    <thead class="bg-info">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Eamil</th>
            <th>Student Mobile</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    while($student=mysqli_fetch_assoc($queryResult)){

    ?>
        <tbody>
            <tr>
                <td><?php echo $student['id']?></td>
                <td><?php echo $student['name']?></td>
                <td><?php echo $student['email']?></td>
                <td><?php echo $student['mobile']?></td>
                <td>
                    <a href="edit-student.php?id=<?php echo $student['id'];?>" class="btn btn-success">Edit</a>
                    <a href="?delete=true&id=<?php echo $student['id'];?>" onclick="return confirm('Are you sure to delete this!!!');" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    <?php } ?>
</table>