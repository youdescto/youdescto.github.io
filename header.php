<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
      <?php echo $tagline ?>
    </title>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'/>
<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' id='bootstrap-css' media='all' rel='stylesheet' type='text/css'/>
<link href='//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css' id='jasny-css' media='all' rel='stylesheet' type='text/css'/>
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' id='awesome-css' media='all' rel='stylesheet' type='text/css'/>
<link href='//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css' id='simple-css' media='all' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Oswald|Open+Sans' id='google-font' media='all' rel='stylesheet' type='text/css'/>
<link href="./assets/css/style.css"  media='all' rel='stylesheet' type='text/css'/>
  </head>
  <body>
    <h1>
      <?php echo $sitename ?>
    </h1>
    <p>
      <small>"
        <?php echo $tagline ?>"
      </small>
    </p>
    <div class="row">
      <div class="col-md-4">
    <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">CARI
      </button>
    </form>
     </div>
    <div class="col-md-6">
    <ul>
      <li>
        <a href="index.php">Home
        </a>
      </li>
      <li>
        <a href="popular.php">Popular Movies
        </a>
      </li>
      <li>
        <a href="now-playing.php">Now Playing Movies
        </a>
      </li>
      <li>
        <a href="upcoming.php">Upcoming Movies
        </a>
      </li>
      <li>
        <a href="tv-series.php">TV SERIES
        </a>
      </li>
    </ul>
    </div>
    </div>
   