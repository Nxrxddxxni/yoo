

<table class="table table-bordered table-hover">
<thead>
    <tr>
        <th>id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
   
<?php    
        $query = "SELECT * FROM posts";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result)){
          
            $post_id = $row['post_id'];
            $post_author = $row['post_author'];
            $post_title = $row['post_title'];
            $post_cat = $row['post_cat_id'];
            $post_status = $row['post_status'];
            $post_pic = $row['post_pic'];
            $post_tags = $row['post_tags'];
            $post_content = $row['post_content'];
            $post_date = $row['post__date'];
            
            echo " <tr>"; 
            echo "<td>{$post_id}</td>";
            echo "<td>{$post_author}</td>";
            echo "<td>{$post_title}</td>";
            
            $query ="SELECT * FROM  categories";
            $result_selet = mysqli_query($connection, $query);
            
            Confirm($result_selet);

            $query = "SELECT * FROM categories WHERE id = {$post_cat}";
$update_result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($update_result)){
$cat_id = $row['id'];
$cat_title = $row['service_tyoe'];
echo "<td>{$cat_title}</td>";
}

            
            echo "<td>{$post_status}</td>";
            echo "<td><img width = 100 src='../images/{$post_pic} 'alt=' IMG'></td>";
            echo "<td>{$post_tags}</td>";
            echo "<td>{$post_content}</td>";
            echo "<td>{$post_date}</td>";
            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'</a>Edit</td>";
            echo "<td><a href='posts.php?delete={$post_id}'</a>Delete</td>";
            
            echo "</tr>";
            
        }

        
               
?>

    
</tbody>
</table>

<?php

if(isset($_GET['delete'])){
    $post_id = $_GET['delete'];

    $query = "DELETE FROM posts WHERE post_id = {$post_id}";
    $result = mysqli_query($connection, $query);
    header("Location: ./posts.php");
    }           

?>