
<?php
$result='';
if(isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName = new FullName();
   $result= $fullName -> myCalculator($_POST);
}
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Fist Number</th>
            <th><input type="text" name="first_number" value="<?php if(isset($_POST['first_number'])) echo $_POST['first_number'];?>"></th>
        </tr>
        <tr>
            <th>Last Number</th>
            <th><input type="text" name="last_number" value="<?php if(isset($_POST['last_number'])) echo $_POST['last_number'];?>"></th>
        </tr>
        <tr>
            <th>Result</th>
            <th><input type="text" value="<?php echo $result;?>" name="result"></th>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>
