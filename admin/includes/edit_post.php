<?php
if (isset($_GET['p_id'])){
    $post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = {$post_id}";
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
    }   
    
    if(isset($_POST['update'])){

        
        $post_author = $_POST['post_author'];
        $post_title = $_POST['title'];
        $post_cat = $_POST['service_tyoe'];
        $post_status = $_POST['post_status'];
        $post_pic = $_FILES['post_img'] ['name'];
        $post_pic_temp = $_FILES['post_img'] ['tmp_name'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        
        move_uploaded_file($post_pic_temp, "../images/$post_pic");


        if(empty($post_pic)){

            $query = "SELECT * FROM posts WHERE post_id = $post_id";
            $result = mysqli_query($connection, $query);
            
            while($row = mysqli_fetch_array($result)){
                $post_pick = $row['post_pic'];
            
        }
    }
        $query = "UPDATE posts SET  post_author = '{$post_author}', post_title = '{$post_title}', post_cat_id = '{$post_cat}', post_status = '{$post_status}', post_pic = '{$post_pic}', post__date = now(), post_tags = '{$post_tags}', post_content = '{$post_content}' WHERE post_id = {$post_id} ";
        
        $result = mysqli_query($connection, $query);
        
        Confirm($result);
        
    }    

}

?>

<div class="form-group">

    <form action="" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" value="<?php if(isset($_GET['p_id'])) echo $post_title; ?>" class="form-control" name="title" class="form-control">
        </div>

        <div class="form-group">
        <select name="service_tyoe" id="service_tyoe">
        <?php
            $query = "SELECT * FROM categories";
            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)){
                $cat_id = $row['id'];
                $post_cat = $row['service_tyoe'];
            
                echo "<option value='{$cat_id}'>{$post_cat}</option>";
            }  
        ?>
        </select>
        </div>

        <div>
            <label for="post_author">Post Author</label>
            <input type="text" value="<?php if(isset($_GET['p_id'])) echo $post_author; ?>" class="form-control" name="post_author" class="form-control">
        </div>

        <div>
            <label for="post_status">Post Status</label>
            <input type="text" value="<?php if(isset($_GET['p_id'])) echo $post_status; ?>" class="form-control" name="post_status" class="form-control">
        </div>

        <div>
            <img width="100" src="../images/<?php echo $post_pic ?>" alt="">
            <input type="file" class="" name="post_img" class="form-control">
        </div>

        <div>
            <label for="post_tags">Post Tags</label>
            <input type="text" value="<?php if(isset($_GET['p_id'])) echo $post_tags; ?>" class="form-control" name="post_tags" class="form-control">
        </div>

        <div>
            <label for="post_content">Post Content</label>
            <textarea name="post_content" value="<?php if(isset($_GET['p_id'])) echo $post_content; ?>" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="create_post"></label>
            <input type="submit" class="btn btn-primary" name="update" value="Update">
        </div>
</form>
</div>