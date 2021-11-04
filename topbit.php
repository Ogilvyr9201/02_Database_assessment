<!DOCTYPE HTML>

<html lang="en">

<?php 

    session_start();
    include("config.php");
    include("functions.php");

    // Connect database...

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno())

    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food reviews database">
    <meta name="keywords" content="Food, lunch, dinner, reviews">
    <meta name="author" content="Ryan Ogilvy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/foo.css"> 
    <link rel="stylesheet" href="css/font-awesome.css">
    
</head>
    
<body>
    
    <div class="wrapper">
    
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/gen_logo.png" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Tasty Reviews</h1>
        </div>    <!-- / banner -->

        
        <div class="box side">
        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
            <i>Type a sort of food / place if desired</i>

            <hr class="line"/>
            
            <!-- Start of Title Search -->

            <form method="post" action="food_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="food" size="40" value="" 
                required placeholder="Food Name..." />

                <input class="submit-wide" type="submit" name="find_food"
                 value="&#xf002;" />

            </form>

            <!-- End of Title Search -->
            <p></p>
            <!-- Start of Author Search -->

            <form method="post" action="place_search.php" enctype="multipart/form-data">

                <input class="search" type="text" name="place" size="40" value="" 
                required placeholder="Place..." />

                <input class="submit-wide" type="submit" name="find_place"
                 value="&#xf002;" />

            </form>

            <!-- End of Author Search -->
            <hr class="line"/>
            <i>Please use the drop down box to select Time and Ratings, also to select if you want 
            vegetarian</i>
            <hr class="line"/>
            <!-- Start of time Search -->

            <form method="post" action="time_search.php"
            enctype="multipart/form-data">

                <select class="search" name="time">
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Dessert">Dessert</option>
                
                </select>

                <input type="submit" class="submit-wide" name="find_time" value="&#xf002;" />

            </form>
            <!-- End of time Search -->
            <p></p>
            <!-- start of vegetarian search !-->

            <form method="post" action="vegetarian_search.php"
            enctype="multipart/form-data">

                <select class="search" name="vegetarian">
                    <option value="No">Non Vegetarian</option>
                    <option value="Yes">Vegetarian</option>
                
                </select>

            <input class="submit-wide" type ="submit" name="find_vegetarian" value="&#xf002;" />

            </form>
            <!-- end of vegetarian search !-->
            <p></p>
            <!-- Start of Rating Search -->

            <form method="post" action="rating_search.php"
            enctype="multipart/form-data">

                <select class="half_width" name="amount">
                    <option value="exactly">Exactly...</option>
                    <option value="more" selected>At least...</option>
                    <option value="less">At most...</option>
                </select>

                <select class="half_width" name="rating">
                    <option value=1>&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=3 selected>&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                
                </select>

                    <input type="submit" class="submit-wide" name="find_rating"
                     value="&#xf002;" />

            </form>
            <!-- End of Rating Search -->
            <hr class="line"/>

        </div>
