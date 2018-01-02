<?php
//require_once 'App/classes/Demo.php';
//require_once 'App/classes/Student.php';
require_once 'vendor/autoload.php';
use App\classes\Student;
use App\classes\Demo;
Student::addition();
if(isset($_POST['btn'])){
    //$demo=new App\classes\Demo();
    //$result=$demo->wordCharacterCount($_POST);
}
if(isset($_POST['btn'])){
    $result=Demo::wordCharacterCount($_POST);
}
?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="starting_number">Enter Your String</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" name="given_string" id="staring_number" class="form-control" size="50">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="ending_number">Total Number Of Word</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" value="<?php if (isset($result['string_length'])) echo $result['string_length']; ?>" id="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-md-5" for="result">Total Number Of Character</label>
                                <div class="col-sm-7 col-md-7">
                                    <input type="text" value="<?php if (isset($result['word_length']))echo $result['word_length'];?>" id="result" class="form-control">
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
