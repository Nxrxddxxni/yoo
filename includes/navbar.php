<?php include "includes/db.php"?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./index.php">CMS Front</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li><a href="admin">Admin</a></li>
                    <?php
            
            // $query = "SELECT * FROM categories";
            // $result = mysqli_query($connection, $query);

            // while($row = mysqli_fetch_assoc($result)){
            //     $service_type = $row['service_tyoe'];

            //     echo "<li><a href='#'>{$service_type}</a></li>";                
            // }
                
            ?>
                </ul>
            </div>                           
                </ul>
            </div>
        </div>
</nav>        