<?php
    if(isset($_POST['create_post'])){

        $post_title = $_POST['title'];
        $post_cat = $_POST['service_tyoe'];
        $post_author = $_POST['post_author'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['post_img'] ['name'];
        $post_image_temp = $_FILES['post_img'] ['tmp_name'];

        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        $post_comment_count = 4;

        move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = "INSERT INTO posts(post_cat_id, post_title, post_author, post__date, post_pic, post_content, post_tags, post_comment_count, post_status ) ";
        $query .="VALUES('{$post_cat}','{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}','{$post_tags}', '{$post_content}', '{$post_status}' ) ";
        $result = mysqli_query($connection, $query);

    Confirm($result);


}

?>

<div class="form-group">

    <form action="" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" name="title" class="form-control">
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
            <input type="text" class="form-control" name="post_author" class="form-control">
        </div>

        <div>
            <label for="post_status">Post Status</label>
            <input type="text" class="form-control" name="post_status" class="form-control">
        </div>

        <div>
            <label for="post_img">Post Image</label>
            <input type="file" class="" name="post_img" class="form-control">
        </div>

        <div>
            <label for="post_tags">Post Tags</label>
            <input type="text" class="form-control" name="post_tags" class="form-control">
        </div>

        <div>
            <label for="post_content">Post Content</label>
            <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="create_post">Post Status</label>
            <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
        </div>
</form>
</div>