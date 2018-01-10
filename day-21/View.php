<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message='';
if (isset($_POST['btn'])){
    $message= Student::saveStudentInfo($_POST);
}
?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<hr/>
<a href="Student.php" class="btn btn-outline-info">Add Student</a>
<a href="view-student.php" class="btn btn-secondary">View Student</a>
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
                                    <input type="text" name="name" id="staring_number" class="form-control" size="50">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="ending_number">Email</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" name="email" id="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="result">Mobile</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="number" name="mobile" id="result" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5"></label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="submit" name="btn" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
