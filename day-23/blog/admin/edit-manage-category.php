<?php
?>
<?php
session_start();
require_once '../vendor/autoload.php';
$login=new App\classes\Login;
$id=$_GET['id'];
$queryResult=$login->editAddCategoryData($id);
$blog=mysqli_fetch_assoc($queryResult);
$message='';
if (isset($_POST['btn'])){
    $message=$login->updateAddCategoryData($_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>

<?php include 'includes/menu.php'; ?>
<!--<h2 class="text-primary text-center">--><?php //echo $message;?><!--</h2>-->
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title">
                    <h1 class="text-center text-info">Add Category</h1>
                </div>
                <h2 class="text-info"><?php $message;?></h2>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $blog['category_name'] ?>" name="category_name" class="form-control" id="inputEmail3">
                                <input type="hidden" value="<?php echo $blog['id'];?>" name="id" class="form-control" size="50">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="category_discription" class="form-control" id="inputPassword3" placeholder="Category Description">
                                    <?php echo $blog['category_discription'] ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9" >
                                <input type="radio" name="status" value="1" >Published
                                <input type="radio" name="status" value="0">Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
