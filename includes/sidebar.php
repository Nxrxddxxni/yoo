<div class="col-md-4">

                <!-- Blog Search Well -->
                 <form action="search.php" method="post">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                 
                <div class="well">
                <?php

                    $query = "SELECT * FROM categories";
                    $result = mysqli_query($connection, $query) 
               ?>
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
            <?php                              
                        
                while($row = mysqli_fetch_assoc($result)){
                    $cat_id = $row['id'];
                    $service_type = $row['service_tyoe'];
    
                    echo "<li><a href='category.php?category={$cat_id}'>{$service_type}</a></li>";                
                }
            ?>

                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>