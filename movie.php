<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_movie_similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
  
?>

    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <h1><?php echo $movie_id->original_title ?></h1>
    <?php
      echo "<h5>~ ".$movie_id->tagline." ~</h5>";
    ?>

    

    <hr>
    <div class="row">
    <div class="col-md-4 text-center">
          <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
    </div>
    <div class="col-md-6">
   
          <p>Title : <?php echo $movie_id->original_title ?> <?php $rel = date('Y', strtotime($movie_id->release_date)); echo $rel ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Genres : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
          <p>Duration : <?php echo $movie_id->runtime ?> minutes</p>
          <p>Overview : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
          <p>Production Companies :
              <?php
                foreach($movie_id->production_companies as $pc){
                  echo $pc->name.", ";
                }
              ?>
          </p>
          
          <p>Production Countries:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. ",&nbsp;" ;
                }
              ?>
          </p>
          <p>Budget: $ <?php echo $movie_id->budget ?> </p>
          <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
          <p>Vote Count : <?php echo $movie_id->vote_count ?></p>
          <p> Movie trailer : <?php foreach($movie_video_id->results as $video){ echo '<li>'."https://www.youtube.com/watch?v=".$video->key.'</li>';
      }
     ?> </p>
    </div>
 </div>
    <hr>
    <h3>Similar Movies</h3>
      <ul class="molis">
      <?php
        $count = 4;
        $output=""; 
        foreach($movie_similar_id->results as $sim){
          $output.='<li><a href="movie.php?id='.$sim->id.'"><img src="http://image.tmdb.org/t/p/w185'.$sim->poster_path.'"><h5>'.$sim->title.'</h5></a></li>';
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