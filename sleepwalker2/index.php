<?php

require "_staticSockets/MakeConnection.php";
require "_staticSockets/ExtractionSocket.php";

$connectionObject = new CreateConnection;

$connectionObject->SetUserName("uzamaki");
$connectionObject->SetPassword("uzamaki");
$connectionObject->SetHost("localhost");
$connectionObject->SetDatabase("final_sleepwalker");

$connectionObject->Connect();

$UltimateExtractionClass = new UltimateExtraction();


?>


<html>
    
    <head>
    
        <title>SleepWalker</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--BootStrap Links Start-->
        
        
        
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        
        
        <!--Bootstrap Links Ends-->
        
        
        <!--jquery links Starts-->
        
        
            <!--Google CDN-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
               
        
        
        <!--jquery links ends-->
        
        
        
        <!--Our Style Sheets-->
        
        <link rel="stylesheet" type="text/css" href="_staticSpreads/index.css"/>

        
    </head>
    
    <body>
        
        <!--nav bar starts-->
        
        <div class="nav-bar-class" id="nav-bar-id">
            
            <div class="nav-left-snap-class" id="nav-left-snap-id">
                <a href="#"><img src="_dependencies/logo.png" class="nav-img-class" /></a>
            </div>
            
        </div>
        
        <!--nav bar ends-->
        
        <!--main flex starts-->
        
        <div class="main-flex-container-class center-this" id="main-flex-container-id">
        
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="main-flex-snap-left-class center-this">
                
                     <img src="_dependencies/logo.png" class="main-flex-img-class" />
                    
                    <p class="random" style="font-size:30;">Sleepwalker</p>
                    <p class="random" style="font-size:18; font-weight:lighter;">
                        " Sleepwalker is the community for everyone who wishes to show, compelete and improve his/her talent. We aim tocover all the possible fields and areas of indivisual interest. As we are still growing, we might not have community on the unique talent you possess. Thus feel free to write us and we would try hard to create that community for you . " <br/><br/>    
                    </p>
                    
                    <p class="random" style="font-size:20; font-weight:lighter;"> Apps On Other Platforms </p>
                    

                    <?php
                    
                      $UltimateExtractionClass->ExtractDownloads($connectionObject->Connect());
                    
                    ?>
                    
                    
                    
                    
                </div>
            </div>
            
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                
                <p class="random" style="font-size:30;"><snap class="glyphicon glyphicon-flash"></snap>Never Quit Dreaming</p>
                
               
                <p class="random" style="font-size:20; font-weight:lighter;">The Sleepwalker
                </p>
                
                <p class="random" style="font-size:30;">User Login<snap class=" glyphicon glyphicon-plane"></snap></p>
                
                <form class="sign-up-form" method="post" action="index.php">
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 center-this" style="margin-bottom:2px; padding:5px;">
                    
                        <input type="email" name="log-email" class="comman-input-class center-this" placeholder="Email Address"/>
                        
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 center-this" style="margin-bottom:2px; padding:5px;">
                    
                        <input type="password" name="log-password" class="comman-input-class center-this" placeholder="Password"/>
                        
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 center-this" style="margin-bottom:2px; padding:5px;">
                    
                        <input type="submit" name="log-submit" class="comman-button-class center-this" value="Log In"/>
                        
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 center-this" style="margin-bottom:2px; padding:5px;">
                    
                         <button type="button" class="comman-button-class center-this" style="background-color:#a8c67d; color:white;"> Sign Up </button>
                        
                    </div>
                    
                </form>
                
            </div>
            
        </div>
            
            
        
        <!--main flex ends-->
    
    </body>
    
</html>