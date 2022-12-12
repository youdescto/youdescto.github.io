<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
<div class="row">
<div class="flex-onair">
 <?php
      include_once "api/api_now.php";
      $min = date('d F Y', strtotime($nowplaying->dates->minimum));
      $max = date('d F Y', strtotime($nowplaying->dates->maximum));
      echo "<h5><sub>from</sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h5>";
    ?>
    <hr>
    <ul class="molis">
      <?php
        
        foreach($nowplaying->results as $p){
          echo '<li class="molist"><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></li>";
        }
      ?>
    </ul>
    </div>
    </div>
    <h1>~ Top Rated Movies ~</h1>
    <hr>
    <ul class="molis">
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li class="molist"><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w185'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>
