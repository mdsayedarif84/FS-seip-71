<?php
//$result='';
//if(isset($_POST['btn'])){
//    require_once 'OddEven.php';
//    $oddEven=new OddEven();
//    //$result=$oddEven->makeResult($_POST['satartingNumber'],$_POST['endingNumber']);
//}
require_once 'OddEven.php';
$oddEven=new OddEven();
$res=$oddEven->OddEven();

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
                                <label class="col-sm-4 col-md-4" for="starting_number">Starting Number</label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="satartingNumber" id="staring_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-md-4" for="ending_number">Ending Number</label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="endingNumber" id="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-md-4">Your Choice</label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="radio" name="check" value="Odd">ODD
                                    ||
                                    <input type="radio" name="check" value="Even">EVEN
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-md-4" for="result">Result</label>
                                <div class="col-sm-6 col-md-6">
                                    <textarea rows="5" cols="30" name="result" id="result" class="form-control">
                                        <?php echo $res;?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-md-4"></label>
                                <div class="col-sm-6 col-md-6">
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
