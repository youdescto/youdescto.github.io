<?php
  $id_tv = $_GET['id'];
  include "conf/info.php";
  include_once "api/api_tv_id.php";
  include_once "api/api_tv_video_id.php";
  $title = "Watch TV (".$tv_id->original_name.")";
  include_once "header.php";
?>
    <?php
    if(isset($_GET['id'])){
      $id_tv = $_GET['id'];
      $rel = date('d F Y', strtotime($tv_id->last_air_date)); 
    ?>
    <h1><?php echo $tv_id->original_name ?></h1>
    <?php
      echo "<h5>~ <sub>Last Air Date</sub> : <span>".$rel."</span> ~</h5>";
    ?>

    

    <hr>
    <div class="row">
    <div class="col-md-4 text-center">
    <img src="http://image.tmdb.org/t/p/w300<?php echo $tv_id->poster_path ?>" />
    </div>
    <div class="col-md-6">
    <p>Title : <?php echo $tv_id->original_name ?></p>
    <p>Status : <?php echo $tv_id->status ?></p>
    <p>Genres : 
              <?php
                foreach($tv_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
    </p>
     <p>Duration : <?php echo $time ?> minutes</p>
    <p>Overview : <?php echo $tv_id->overview ?></p>
    <p>First Air Date : <?php $rel = date('d F Y', strtotime($tv_id->first_air_date)); echo $rel ?></p>
    <p>Production Companies : 
              <?php
                foreach($tv_id->production_companies as $pc){
                  echo $pc->name;
                }
              ?>
    </p>
    <p>Original Country : 
              <?php
                foreach($tv_id->origin_country as $pco){
                  echo $pco. "&nbsp;&nbsp;" ;
                }
              ?>
    </p>
  
    <p>Created by : 
              <?php
                foreach($tv_id->created_by as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
    </p>
    <p>Vote Average : <?php echo $tv_id->vote_average ?></p>
    <p>Vote Count : <?php echo $tv_id->vote_count ?></p>
    <p> Movie trailer : <?php foreach($tv_video_id->results as $video){
       echo '<li>'."https://www.youtube.com/watch?v=".$video->key.'</li>';
      }
     ?> </p>
 </div>
 </div>
<hr>

    <hr>
    <h3>Similar TV Show</h3>
    <ul class="molis">
      <?php
        $count = 4;
        $output=""; 
        foreach($tv_id_similar->results as $sim){
          $output.='<li><a href="tvshow.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w185'.$sim->poster_path.'"><h5>'.$sim->original_name.'</h5></a></li>';
          if($count <=0){
            break;
            $count--;
          }
        }
        echo $output;
      ?>
    </ul>

    
    <?php 
    } else{
      echo "<h5>Movie tidak ditemukan.</h5>";
    }
    ?>

<?php
  include_once "footer.php";
?>