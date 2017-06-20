<?php

class UltimateExtraction{
    
    public function ExtractDownloads($connection){
        $get_dwl_app = mysqli_query($connection,'select * from app_downloads');
        if($get_dwl_app){
            while($row=mysqli_fetch_array($get_dwl_app)){
                echo '
                
                   <a href="'.$row["button_link"].'">
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                         
                         <button class="widget-button-class" id=" '.$row["button_link"].' ">'.$row["button_name"].'</button>
                      
                      </div>
                    
                    </a>
                  
                ';
            }
        }
        else{
            echo " Servers Down ! Pal ";
        }
    }
    
}

?>