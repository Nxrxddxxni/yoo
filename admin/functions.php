<?php

function Confirm($him){
    global $connection;
    if(!$him){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}


//Adding into Categories
function Inserting_cat(){
    
global $connection;
    if(isset($_POST['submit'])){
        $submit = $_POST['cat_title'];
    
        if($submit == "" || empty($submit)) {
            echo "This field should not be empty";
        }else{
    
            $submitQuery = "INSERT INTO categories(service_tyoe) VALUES ('$submit')";
            $submitResult = mysqli_query($connection, $submitQuery);
        
        }
    }
    
?>
    <form action="" class="form-group" method="post">
        
    <div>
    <label for="cat_title">Add Category</label>
        <input type="text" name="cat_title" class="form-control" >
    </div>
    <br>
    <div>
        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
    </div>
    </form>

    <?php
                           
}

function Reading_Cat(){
    global $connection;
    //Reading Categories
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)) {

$service_id = $row['id'];
$service_type = $row['service_tyoe'];
?>
<tr>
<?php
echo "<td>{$service_id}</td>";
echo "<td>{$service_type}</td>";
echo "<td><a href='categories.php?delete={$service_id}'</a>Delete</td>";
echo "<td><a href='categories.php?update={$service_id}'</a>Update</td>";
?>
</tr>

<?php 

}
}

//Deleting From categoriesS
function Deleting_Cat(){
    global $connection;

        if(isset($_GET['delete'])){
        $the_id = $_GET['delete'];


        $query = "DELETE FROM categories WHERE id = {$the_id}";
        $delete_result = mysqli_query($connection, $query);
        header("Location: categories.php");
        }                  
                                
}

//Updating Categories
function Updating_Cat(){
    global $connection;
if(isset($_GET['update'])){
    $cat_id = $_GET['update'];

    include "includes/edit_categories.php";
}
}


//Updating Posts

?>