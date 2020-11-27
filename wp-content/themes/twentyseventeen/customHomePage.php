<?php /* Template Name: CustomHomePage */ 
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<Header>

    <div class="bg-white header">
        <img src="<?php the_field('logo'); ?>" class="h-25 logo mt-5" >
        <hr width="75%">
        <div class="row">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Single Trip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Annual Multi-Trip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Medical</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Covid Cover</a>
                </li>
            </ul>
            <div class="nav2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Avanti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Claims</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">My Avanti</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</Header>
<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 col-lg-6">
                <h1 class="display-4 textColor">
                <?php

                    if(get_field('title'))
                    {
                        echo '<p>' . get_field('title') . '</p>';
                    }

                ?>
                <!-- Travel Insurance -->

                </h1>
                <h2 class="textColor">
                <?php

                        if(get_field('banner_sub_title'))
                        {
                            echo '<p>' . get_field('banner_sub_title') . '</p>';
                        }
                ?>
                <!-- that give you a little bit extra! -->
                </h2>
                <ul class="icons-list check-2 colored-list textColor">
                    <li><strong>
                    <?php

                            if(get_field('list_item'))
                            {
                                echo '<p>' . get_field('list_item') . '</p>';
                            }
                    ?>
                    </strong></li>
                    <li><strong>
                    <?php

                            if(get_field('list_item_2'))
                            {
                                echo '<p>' . get_field('list_item_2') . '</p>';
                            }
                    ?>
                    </strong></li>
                    <li><strong>
                    <?php
                            if(get_field('list_item_3'))
                            {
                                echo '<p>' . get_field('list_item_3') . '</p>';
                            }
                    ?>
                    </strong></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-5 col-lg-6">
                <img src="<?php the_field('banner_image'); ?>" class="img-responsive center-img app-image ml-5 h-100 w-100">
            </div>

        </div>
    </div>
    
</div>
            <div class="row">
            <div class="col-md-6 box1 ml-4">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="ml-5"><?php echo  get_field('box_1_title'); ?></h2>
                        <?php echo '<p>' . get_field('box_1_description') . '</p>'; ?>
                        <button class="mb-5 mt-2 ml-2 btn btn-light"> <?php echo  get_field('box_1_button_text') ; ?></button>
                    </div>
                    <div class="col-md-6">
                       
                        <img src="<?php the_field('box_1_image'); ?>" class="img-responsive h-100 w-50 ml-5">
                    </div>
                </div>
            </div>
            
            <div class="col-md-5 box2 ml-5">
            <div class="row">
                <div class="col-md-6">
                <div class="row">
                    <h2 class="ml-5"><?php echo  get_field('box_2_title'); ?></h2>
                    <?php echo '<p>' . the_field('box_2_description') . '</p>'; ?>
                </div>
                <div class="row">
                    <button class="mb-5 mt-2 ml-2 btn btn-light"> <?php echo  get_field('box_2_button_text') ; ?></button>
                </div>
                </div>
                <div class="col-md-6">
                   
                    <img src="<?php the_field('box_2_image'); ?>" class="img-responsive h-100 w-50 ">
                </div>
            </div>
            </div>
            </div>

            <h2 class="mt-5">Recent Posts</h2>
                
            <div class="row mt-3">
                    <?php
                        $args = array( 'numberposts' => '3' );
                        $recent_posts = wp_get_recent_posts( $args );
                        
                        foreach( $recent_posts as $recent ){
                         
                            ?>
                            
                            <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://chathugra.local/wp-content/uploads/2020/11/index.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php  echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> '; ?></h5>
                                <p class="card-text"><?php  echo $recent["post_content"]; ?></p>
                            </div>
                            </div>
                            </div>
                            
                        <?php 
                        }

                        

                        ?>
            </div>
                  
                

  

<style>
    .logo{
        margin-left:150px;
    }
    .box1{
        background: #ffdc78;
        border-radius: 50px;
      
    }
    .box2{
        background: #135a5e;
        border-radius: 50px;
       
    }
    .nav{
        margin-left:200px;
    }
    .nav2{
        margin-left:300px
    }
    .header{
        height:105px;
    }
    .textColor{
        color: #135a5e;
    }
    .nav-link{
        color: #135a5e;
    }
    .nav-link:hover{
        color: #135a5e;
    }
    .jumbotron {
        color: white;
        background: #fee1e4;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }
    .app-image {
        width: 100%;
        max-width: 400px;
        margin: 5% auto;
    }
    @media screen and (min-width: 992px) {
        .app-image {
            margin-top: 0;
        }
    }
</style>
<script>
    $(".jumbotron").css({ height: $(window).height() + "px" });

    $(window).on("resize", function() {
        $(".jumbotron").css({ height: $(window).height() + "px" });
    });
</script>


