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
    <script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>    
    <script language="Javascript" type="text/javascript" src="../resources/javascript/addShare.js"></script>   
    <script language="Javascript" type="text/javascript" src="../resources/javascript/audio_functionality.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="top-container">
      <div class="landing-photo-container">
        <img class="landing-photo" src="../resources/images/podcast2.jpg"></img>
        <!--<div class="overlap-title upper-connect"><p><a class="my">MY</a><a class="mobile-font">BITCHIN</a></p></div>
        <div class="overlap-title lower"><p>WINE<br/>TALKSHOW</p></div>-->
        <div class="steven-title">MY<br/>BITCHIN<br/>WINE<br/>TALKSHOW</div>
      </div>  
    <div class="menu">
        <div class="title">
          <p class="title-link" href="./index.html">MY</br><a class="mobile-font">BITCHIN</a></br>WINE</br>TALKSHOW</p>
        </div>
        <div class="menu-link-container">
          <div class="menu-link">
            <a class="podcast-link podcast-link-page" href="./src/podcast.php">PODCAST</a>
          </div>
          <div class="menu-link">
            <a class="connect-link connect-link-page" href="../connect.html">CONNECT</a>
          </div>
          <div class="menu-link insta-menu-link">
            <a class="insta-link" target="_blank" href="https://www.instagram.com/st.lane/"><img class="instasymbol-image" src="../resources/images/instasymbol.png"></a>
          </div>
        </div>  
      </div>
    </div>
    <div class="menu-link-container-mobile">
      <div class="menu-link">
        <a class="podcast-link podcast-link-page" href="./src/podcast.php">PODCAST</a>
      </div>
      <div class="menu-link">
        <a class="connect-link connect-link-page" href="../connect.html">CONNECT</a>
      </div>
    </div>  
    <div class="banner-container">
      <div class="next-bottle-banner">
        <a class="next-bottle drinking-next" href="podcast.php">LIBRARY OF INEBRIATION</a>
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

          $sql = "SELECT id, title, sequence, date, sharing, podcast_link, podcast_description FROM bitchin_episodes WHERE date IS NOT NULL AND date < ? ORDER BY sequence ASC";
          $query = $conn->prepare($sql);
          $query->bind_param('s', $date);
          $query->execute();
          $result = $query->get_result();
          $list = '';




          if(isset($_GET['id'])){
            $permalink=$_GET['id'];
            $sql = "SELECT id, title, sequence, date, sharing, podcast_link, podcast_description FROM bitchin_episodes WHERE id=?";
            $query =$conn->prepare($sql);
            $query->bind_param('i', $permalink);
            $query->execute();
            $result = $query->get_result();
          }

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
          }
          ?>
          <br /><p class="mobile-top-page-links"><a class="itunes-link internal-link" href="FILL THIS IN WITH ITUNES LINK" target="_blank">Listen on Itunes</a><!--<a class="reverse-order internal-link" href="">Start at the beginning</a>--></p><br /><br /> 
          <p><?php echo $list; ?></p>
      </div> 
    </div>  
    <div class="bottom-banner">
      <a class="lastest-episode-link next-episode-link" href="./latest-episode.php">LISTEN TO THE LATEST EPISODE</a>
    </div> 
    </div>
    <div class="copyright">
      <p>&copy; 2018, MY BITCHIN WINE TALK SHOW</p>
    </div>
  </body>
</html>



<!-- .substr($content,0,-strlen($content)+250). -->
