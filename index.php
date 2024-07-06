<?php include "includes/header.php"?>
<?php include "includes/navbar.php"?>


<body>

    <!-- Navigation -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <?php
            
            $query = "SELECT * FROM posts";
            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post__date'];
                $post_pic = $row['post_pic'];
                $post_content = substr($row['post_content'], 10);
                
?>

                <h2>
                <a href='post.php?p_id=<?php echo $post_id; ?>'><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <?php echo $post_author;?>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <a href='post.php?p_id=<?php echo $post_id; ?>'>
                <img class="img-responsive"  src="images/<?php echo $post_pic ?>" alt="">
            </a>
                <hr>
                <p><?php echo $post_content;?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
<?php } ?>
                <!-- Second Blog Post -->

                <!-- Third Blog Post -->

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "includes/footer.php"?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>