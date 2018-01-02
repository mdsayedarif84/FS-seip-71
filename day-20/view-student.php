<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message='';
$queryResult=Student::getAllStudentInfo();
//while($student=mysqli_fetch_assoc($queryResult)){
//    echo '<pre>';
//print_r($student);
//};

?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<a href="View.php">Add Student</a>
<a href="view-student.php">View Student</a>
<h1 class="text-danger"><?php echo $message;?></h1>

<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Eamil</th>
        <th>Student Mobile</th>
    </tr>
    <?php
    while($student=mysqli_fetch_assoc($queryResult)){

    ?>
    <tr>
        <td><?php echo $student['id']?></td>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['mobile']?></td>
    </tr>
    <?php } ?>
</table>
<!--<div class="jumbotron">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-6 col-md-6 m-auto">-->
<!--                <div class="card">-->
<!--                    <div class="card-body">-->
<!--                        <form action="" method="post">-->
<!--                            <div class="form-group row">-->
<!--                                <label class="col-sm-5 col-md-5" for="starting_number">Name</label>-->
<!--                                <div class="col-sm-7 col-md-7">-->
<!--                                    <input type="text" name="name" id="staring_number" class="form-control" size="50">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label class="col-sm-5 col-md-5" for="ending_number">Email</label>-->
<!--                                <div class="col-sm-7 col-md-7">-->
<!--                                    <input type="text" name="email" id="ending_number" class="form-control">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label class="col-sm-5 col-md-5" for="result">Mobile</label>-->
<!--                                <div class="col-sm-7 col-md-7">-->
<!--                                    <input type="number" name="mobile" id="result" class="form-control">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label class="col-sm-5 col-md-5"></label>-->
<!--                                <div class="col-sm-7 col-md-7">-->
<!--                                    <input type="submit" name="btn" value="Submit" class="btn btn-success">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
