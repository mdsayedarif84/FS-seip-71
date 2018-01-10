<?php
session_start();
if ($_SESSION['id']==null){
    header('Location:index.php');
}
require_once '../vendor/autoload.php';
$login=new App\classes\Login();

if (isset($_GET['logout'])){
    $login->adminLogout();
}
$message='';
if (isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=$login->deletAddCategoryData($id);
}
$queryResult=$login->getAddCategoryData();

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
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-title">
                    <h1 class="text-center text-info">Manage Category</h1>
                </div>
                <h2 class="text-center text-danger"><?php echo $message;?></h2>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Sl No</th>
                                <th scope="col" class="text-center">Category Name</th>
                                <th scope="col" class="text-center">Category Description</th>
                                <th scope="col" class="text-center">Publication Status</th>
                                <th scope="col" class="text-center"> Action</th>
                            </tr>
                        </thead>
                        <?php
                            while ($blogs=mysqli_fetch_assoc($queryResult)){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center"><?php echo $blogs['id']?></th>
                                <td class="text-center"><?php echo $blogs['category_name']?></td>
                                <td class="text-center"><?php echo $blogs['category_discription']?></td>
                                <td class="text-center"><?php echo $blogs['status']?></td>
                                <td class="text-center">
                                    <a href="edit-manage-category.php?id=<?php echo $blogs['id']?>" class="btn btn-info">Edit</a>
                                    <a href="?delete=true&id=<?php echo $blogs['id']?>" onclick="return confirm('Are you delete your data')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
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