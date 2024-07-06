
<form action="" class="form-group" method="post">

<?php
if(isset($_GET['update'])){
$cat_id = $_GET['update'];


$query = "SELECT * FROM categories WHERE id = $cat_id";
$update_result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($update_result)){
$cat_id = $row['id'];
$cat_title = $row['service_tyoe'];
?>

<input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" type="text" name="cat_title" class="form-control" >

<?php }
}

?>

<?php
/////////UPDATE QUERY
if(isset($_POST['update'])){
$cat_title = $_POST['post_cat_id'];

$query = "UPDATE categories SET service_tyoe = '{$cat_title}' WHERE id = {$cat_id}";
$update_result = mysqli_query($connection, $query);

if(!$update_result){
die("QUERY FAILED" . mysqli_error($connection));
} 

}

?>

<div>
<label for="cat_title">Edit Category</label>
    
</div>
<br>
<div>
    <input type="submit" class="btn btn-primary" name="update" value="Update Category">
</div>
</form>