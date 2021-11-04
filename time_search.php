<?php 
    include "topbit.php"; /*  header php */

    // if find button pushed
    if(isset($_POST['find_time']))

    {

    // Retreaves time and sanitises it
    $time=test_input(mysqli_real_escape_string($dbconnect, $_POST['time']));

    
    $showall_sql="SELECT * FROM `food_reviews` WHERE `Time` LIKE '%$time%' ORDER BY `Food` ASC";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);

?>
        
        <div class="box main">
            <h2>Time search</h2>

            <?php
            
            // check if there are any results 

            if ($count<1)

            {
            ?>

            <div class="error">
                Sorry! there are no reults that match your search.
                Please use the search box in the sidebar to try again?

            </div>

            <?php
            } // end count 'if'

            // if there are no results output an error
            else {
                do {
                ?>
                    <!-- results go here -->
                    <div class="results">

                        <p>Name: <span class="sub_heading"><?php echo $showall_rs['Food']; ?></span></p>

                        <p>Place: <span class="sub_heading"><?php echo $showall_rs['Place']; ?></span></p>

                        <p>Time: <span class="sub_heading"><?php echo $showall_rs['Time']; ?></span></p>

                        <p>Vegetarian: <span class="sub_heading"><?php echo $showall_rs['Vegetarian']; ?></span></p>

                        <p>Rating: <span class="sub_heading">
                            
                            <?php 
                                for ($x=0; $x <$showall_rs['Rating']; $x++)

                                {
                                    echo "&#9733;";
                                }
                            
                            ?>
                    
                        </span></p>

                        <p><span class="sub_heading">Review / Response</span></p>

                        <p>
                            <?php echo $showall_rs['Review']; ?>  
                        </p>

                    </div>
                    
                    <br />

                <?php   
                } // end do 

                while ($showall_rs=mysqli_fetch_assoc($showall_query));

            } // end else

            // if there are results display them

            } //end if
            
            ?>

        </div>    <!-- / main -->
        
<?php 
    include "bottombit.php"; /*  footer php */
?>
