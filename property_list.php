<?php
session_start();

$_SESSION['url']= basename($_SERVER['HTTP_REFERER']);
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$_SESSION['city_name'] = $_GET["city"];
$city_name =$_SESSION['city_name'];
$sql_1 = "SELECT * FROM cities WHERE name = '$city_name'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$city = mysqli_fetch_assoc($result_1);
if (!$city) {
    echo "Sorry! We do not have any PG listed in this city.";
    return;
}
$city_id = $city['id'];

$sql_3 = "SELECT * 
            FROM interested_users_properties iup
            INNER JOIN properties p ON iup.property_id = p.id
            WHERE p.city_id = $city_id";
$result_3 = mysqli_query($conn, $sql_3);
if (!$result_3) {
    echo "Something went wrong!";
    return;
}
$interested_users_properties = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Best PG's in <?php echo $city_name ?> | PG Life</title>
        <link href="css/property_list.css" rel="stylesheet" />
        <?php
        include "includes/head_links.php";
        ?>
        <link href="css/property_list.css" rel="stylesheet" />
    </head>

    <body>
        <?php
        include "includes/header.php";
        ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $city_name;?>
                </li>
            </ol>
        </nav>

        <div class="page-container">
            <div class="filter-bar row justify-content-around">
                <div class="col-auto" data-toggle="modal" data-target="#filter-modal">
                    <img src="img/filter.png" alt="filter" />
                    <span>Filter</span>
                </div>
                <form action="property_list_highlow.php" name="form" id="form" method="GET">
                    <input type="radio" id="high" name="sort" value="high-rent" />
                    <label for="high">Highest Rent First</label>
                    <input type="radio" id="low" name="sort" value="low-rent" checked/>
                    <label for="low">Lowest Rent First</label>
                </form>
                
            </div>

            <?php

            
            $sql_2 = "SELECT p.* FROM properties p,cities c WHERE p.city_id = c.id and c.name='$city_name' order by rent ASC";
            $result_2 = mysqli_query($conn, $sql_2);
            if (!$result_2) {
                echo "Something went wrong!";
                return;
            }
            $properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
            
            $j=0;
            
            foreach ($properties as $property) {
                
                $property_images = glob("img/properties/" . $property['id'] . "/*");
            ?>
                <div class="property-card row">
                    <div class="image-container col-md-4">
                        <img src="<?= $property_images[0] ?>" />
                    </div>
                    
                    <div class="content-container col-md-8">
                        <div class="row no-gutters justify-content-between">
                            <?php
                            $total_rating = ($property['rating_clean'] + $property['rating_food'] + $property['rating_safety']) / 3;
                            $total_rating = round($total_rating, 1);
                            ?>
                            <div class="star-container" title="<?= $total_rating ?>">
                                <?php
                                $rating = $total_rating;
                                for ($i = 0; $i < 5; $i++) {
                                    if ($rating >= $i + 0.8) {
                                ?>
                                        <i class="fas fa-star"></i>
                                    <?php
                                    } elseif ($rating >= $i + 0.3) {
                                    ?>
                                        <i class="fas fa-star-half-alt"></i>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="far fa-star"></i>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            
                            <div class="interested-container" >
                                <?php
                                $interested_users_count = 0;
                                $is_interested = false;
                                foreach ($interested_users_properties as $interested_user_property) {
                                    if ($interested_user_property['property_id'] == $property['id']) {
                                        $interested_users_count++;

                                        if ($interested_user_property['user_id'] == $user_id) {
                                            $is_interested = true;
                                        }
                                    }
                                }
                                ?>
                                
                                <?php
                                if ($is_interested) {
                                ?>
                                    <i class="fas fa-heart"></i>
                                <?php
                                } else {
                                ?>
                                    <i class="far fa-heart"></i>
                                <?php
                                } 
                                ?>
                                <div class="interested-text"><?= $interested_users_count ?> interested</div>
                            </div>
                            
                        </div>
                        <div class="detail-container">
                            <div class="property-name"><?= $property['name'] ?></div>
                            <div class="property-address"><?= $property['address'] ?></div>
                            <div class="property-gender">
                                <?php
                                if ($property['gender'] == "male") {
                                ?>
                                    <img src="img/male.png" />
                                <?php
                                } elseif ($property['gender'] == "female") {
                                ?>
                                    <img src="img/female.png" />
                                <?php
                                } else {
                                ?>
                                    <img src="img/unisex.png" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="rent-container col-6">
                                <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                                <div class="rent-unit">per month</div>
                            </div>
                            <div class="button-container col-6">
                                <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }

            if (count($properties) == 0) {
            ?>
                <div class="no-property-container">
                    <p>No PG to list</p>
                </div>
            <?php
            }
            ?>
            <?php if(isset($_SESSION['user_id'])): ?>
                <p><a href="api/form.php" id="click" style="font-size: 22px;text-decoration: none;color:green;">Click</a> <span style="font-size:20px;">[</span> If you want to change the interested or add new PG's <span style="font-size:20px;">]</span><?php endif;?></p>
        </div>
        <div class="note1">
            <p>NOTE:The Above place images are just taken randomly from the google.</p>
        </div>
        <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="filter-heading">Filters</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h5>Gender</h5>
                        <hr />
                        <div>
                            <button class="btn btn-outline-dark btn-active" onclick="myfunction1()" >
                                No Filter
                            </button>
                            <button class="btn btn-outline-dark" onclick="myfunction2()">
                            
                                <i class="fas fa-venus-mars"></i>Unisex
                            </button>
                            <button class="btn btn-outline-dark" onclick="myfunction3()" name="gender" value="male">
                                
                                <i class="fas fa-mars"></i>Male
                            </button>
                            <button class="btn btn-outline-dark"  onclick="myfunction4()" name="gender" value="female">
                            
                                <i class="fas fa-venus"></i>Female
                                <?php $_SESSION['filter']='none1';?>
                            </button>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-success">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
        ?>
        <script>
            
            function submitfunction() {
        document.getElementById("formfilter").submit();
        } 
        jQuery(document).ready(function($) {
            $('input[type=radio]').on('change', function() {
                $(this).closest("form").submit();
            });
        });
        function myfunction1(){
            window.location.href="property_list_highlow.php?filter=none1";
        }

        function myfunction2(){
            
            window.location.href="property_list_highlow.php?filter=unisex";
        }

        function myfunction3(){
            
            window.location.href="property_list_highlow.php?filter=male";
        }

        function myfunction4(){
            
            window.location.href="property_list_highlow.php?filter=female";
        }



        </script>
        
    </body>
</html>
