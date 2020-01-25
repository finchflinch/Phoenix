<!DOCTYPE html>
<html>
<head>
	<title>OPI Finder</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="style.css" type="text/css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="app.js" type="text/javascript"></script>

    <style type="text/css">

    body{
        font-family: 'Raleway', sans-serif;
        font-size: 20px;
        font-weight: 400;
        color: #777;
        background-image: url('tester.jpg');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
    }
   #team .card-2{
        background-color:rgb(219,193,178);
        border-radius: 0;
        box-shadow: 5px 5px 15px #000;
        transition: all 0.3s ease-in;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
    }
    #team .card-2:hover{
        background: #E0E0E0;
        color: #000;
        border-radius: 5px;
        border: none;
        box-shadow: 5px 5px 10px #E0E0E0;
    }
    #team .card-2:hover h3, #team .card-2:hover i{
        color: #FFF;
    }
</style>
</head>

<body>
    <section id="team">
	<div class="container">
        <h1>Your Account is linked with following social media platforms</h1>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="col-md-12">
            <div class="row">
            
            <?php 

            $i=0;
            $myfile = fopen("finallist.txt", "r") or die("Unable to open file!");

            while(!feof($myfile)){

                echo "  <div class= '.col-lg-3 col-md-4' style='padding-bottom:2em'>
                        <div class='card-2' style='padding-bottom:2em'>
                            <div class='card-body-2' style='padding-left:1em'>
                                <img src='' alt='' class='img-fluid rounded-circle wb-50 mb-3'>";?> 
                                <?php    
                                   
                                  $ok=fgets($myfile);
                                  echo $ok;?>
                                  <br><br>
                                <?php

                                
                                echo "Know how ".$ok." uses your data: "; ?>
                                <a href="https://tosdr.org"><?php echo $ok; ?></a>
                                
                                <!-- <?php 
                                echo "   https://tosdr.org/";
                                ?> -->
                                                                      
                                <?php
                                    echo "
                            </div>
                        </div>
                    </div>";
            $i++;
                }
            fclose($myfile);
            ?>
            </div>
        </div>
    </div>

</section>
</body>
</html>

