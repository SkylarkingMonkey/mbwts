<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>MY BITCHIN WINE TALK SHOW</title>
    <link href="./resources/css/reset.css" type="text/css" rel="stylesheet">
    <link href="./resources/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  </head>
  <body>
    <div class="top-container">
      <div class="landing-photo-container"><img class="landing-photo" src="./resources/images/connect.jpg"></img></div>
      <div class="menu">
        <div class="title">
          <p class="title-link" href="./index.html">MY</br>BITCHIN</br>WINE</br>TALKSHOW</p>
        </div>
        <div class="menu-link-container">
          <div class="menu-link">
            <a class="podcast-link" href="./podcast.php">PODCAST</a>
          </div>
          <div class="menu-link insta-menu-link">
            <a class="insta-link" target="_blank" href="https://www.instagram.com/st.lane/"><img class="instasymbol-image" src="./resources/images/instasymbol.png"></a>
          </div>
        </div>  
      </div>
    </div>
    <div class="banner-container">
      <div class="next-bottle-banner">
        <a class="next-bottle" href="">LIBRARY OF INEBRIATION</a>
      </div>
    </div>
    <div class="podcast-episode-box">

         <?php
        //ini_set('display_errors', 'On');
        include_once"./src/connect_to_mysql.php";
        include_once"./src/sharing_function.php";
        include_once"./src/podcaster.php";


        date_default_timezone_set('America/Vancouver');
        $date = date('Y-m-d H:i:s', time());

        $sql = "SELECT id, title, sequence, date, sharing, podcast_link FROM entries WHERE date IS NOT NULL AND date < ? ORDER BY sequence DESC";
        $query = $conn->prepare($sql);
        $query->bind_param('s', $date);
        $query->execute();
        $result = $query->get_result();
        $list = '';




        if(isset($_GET['id'])){
          $permalink=$_GET['id'];
          $sql = "SELECT id, title, sequence, date, content, sharing, podcast_link FROM entries WHERE id=?";
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
          $list .= '<h5 class="podcast-date">'.$date.'<sup></sup></h5>';
          $list .= generate_podcaster($title, $sequence, $podcast_link);
          $list .= generate_sharing_buttons_for_podcast_page($title, $id, $sharing);
          $list .= '<div class="article-box"><a class="permalink" href="index.php?id='.$id.'">Permalink for ' .$title. '</a><p></div><br /><br />';
        }
        ?>
        <p class="mobile-top-page-links"><a class="itunes-link internal-link" href="FILL THIS IN WITH ITUNES LINK" target="_blank">Listen on Itunes</a><a class="reverse-order internal-link" href="http://www.tinkeredthinking.com/reverse_order_podcast.php">Start at the beginning</a></p> 
        <p><?php echo $list; ?></p>
    </div> 
    <div class="bottom-banner">
      <a class="lastest-episode-link next-bottle" href="">LISTEN TO THE LATEST EPISODE</a>
    </div> 
    </div>
    <div class="copyright">
      <p>&copy; 2018, MY BITCHIN WINE TALK SHOW</p>
    </div>
  </body>
</html>



<!-- .substr($content,0,-strlen($content)+250). -->