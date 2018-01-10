<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$id= $_GET['id'];
$queryResult=Student::getStudentInfoById($id);
$student=mysqli_fetch_assoc($queryResult);
//echo '<pre>';
//print_r($student);

$message='';
if (isset($_POST['btn'])){
    $message= Student::updateStudentInfo($_POST);
}
?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<hr/>
<a href="View.php" class="btn btn-info">Add Student</a>
<a href="view-student.php" class="btn btn-success">View Student</a>
<h1 class="text-danger"><?php echo $message;?></h1>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="starting_number">Name</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" value="<?php echo $student['name'];?>" name="name" id="staring_number" class="form-control" size="50">
                                    <input type="hidden" value="<?php echo $student['id'];?>" name="id" id="staring_number" class="form-control" size="50">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="ending_number">Email</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" value="<?php echo $student['email'];?>" name="email" id="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="result">Mobile</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="number" value="<?php echo $student['mobile'];?>" name="mobile" id="result" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5"></label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="submit" name="btn" value="Update" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
