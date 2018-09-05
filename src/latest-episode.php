<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>MY BITCHIN WINE TALK SHOW</title>
    <link href="../resources/css/reset.css" type="text/css" rel="stylesheet">
    <link href="../resources/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline" rel="stylesheet">
  </head>
  <body>
    <div class="top-container">
     <!-- <div class="landing-photo-container"><img class="landing-photo" src="../resources/images/podcast2.jpg"></img></div>
      <div class="menu">
        <div class="title">
          <a class="title-link next-bottle" href="../index.html">MY</br>BITCHIN</br>WINE</br>TALKSHOW</a>        
        </div>
        <div class="menu-link-container">
          <div class="menu-link">
            <a class="connect-link" href="../connect.html">CONNECT</a>
          </div>        
          <div class="menu-link insta-menu-link">
            <a class="insta-link" target="_blank" href="https://www.instagram.com/st.lane/"><img class="instasymbol-image" src="../resources/images/instasymbol.png"></a>
          </div>
        </div>  
      </div>-->
    </div>
    <div class="banner-container">
      <div class="next-bottle-banner-2 latest-episode-title">
        <a class="next-bottle drinking-next latest-episode-title" href="../index.html">MY BITCHIN WINE TALKSHOW</a>
      </div>
      <div class="bottom-banner bottom-banner-2 latest-episode-library-link">
        <p class="lastest-episode-link next-bottle next-episode-link drinking-next latest-episode-library-link">THE LATEST EPISODE</p>
      </div>       
    </div>
    <div class="podcast-episode-box-frame">
      <div class="podcast-episode-box">

          <?php
          ini_set('display_errors', 'On');
          include_once"./connect_to_mysql.php";
          include_once"./sharing_function.php";
          include_once"./podcaster.php";


          date_default_timezone_set('America/Vancouver');
          $date = date('Y-m-d H:i:s', time());

          $sql = "SELECT id, title, sequence, date, sharing, podcast_link, podcast_description FROM bitchin_episodes WHERE date IS NOT NULL AND date < ? ORDER BY sequence ASC LIMIT 1";
          $query = $conn->prepare($sql);
          $query->bind_param('s', $date);
          $query->execute();
          $result = $query->get_result();
          $list = '';



          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $id = $row["id"];
            $title = $row["title"];
            $date = date('F jS, Y', strtotime($row["date"]));
            $sequence = $row["sequence"];
            $sharing = $row["sharing"];
            $podcast_link = $row["podcast_link"];
            $podcast_description = $row["podcast_description"];
            $list .= '<h5 class="podcast-date">'.$date.'<sup></sup></h5>';
            $list .= generate_podcaster($id, $title, $sequence, $podcast_link);
            $list .= generate_sharing_buttons_for_podcast_page($title, $id, $sharing, $podcast_description);
            //$list .= '<div class="article-box"><a class="permalink" href="index.php?id='.$id.'">Permalink for ' .$title. '</a><p></div><br /><br />';
          }*/
          ?>
          <br /><p class="mobile-top-page-links"><a class="itunes-link internal-link" href="../we-hope.html" target="_blank">Listen on Itunes</a><!--<a class="reverse-order internal-link" href="">Start at the beginning</a>--></p><br /><br /> 
          <p><?php echo $list; ?></p>
      </div> 
    </div>  
    <div class="next-bottle-banner-2 latest-episode-library-link">
      <a class="next-bottle drinking-next" href="./podcast.php">LIBRARY OF INEBRIATION</a>
    </div>     
    </div>
    <div class="copyright">
      <p>&copy; 2018, MY BITCHIN WINE TALK SHOW</p>
    </div>
  </body>
</html>