
<?php
     header('Content-type: application/xml');
     //header("Content-Type: application/rss+xml; charset=ISO-8859-1");
     ini_set('display_errors', 'On');
      include_once"./connect_to_mysql.php";
      include_once"./generate_rss_items.php";

      

      date_default_timezone_set('America/Vancouver');
      $current_date = date('Y-m-d H:i:s', time());

      $sql = "SELECT date FROM bitchin_episodes WHERE date IS NOT NULL AND date < ? ORDER BY sequence DESC LIMIT 1";
      $query = $conn->prepare($sql);
      $query->bind_param('s', $current_date);
      $query->execute();
      $build_date = $query->get_result();
      
      while ($row=mysqli_fetch_array($build_date, MYSQLI_ASSOC)){
        $last_build_date = $row['date'];
      }


      $sql = "SELECT id, sequence, title, date, sharing, podcast_link, podcast_description, podcast_duration, podcast_file_size FROM bitchin_episodes WHERE date IS NOT NULL AND date < ? ORDER BY sequence DESC";
      $query = $conn->prepare($sql);
      $query->bind_param('s', $current_date);
      $query->execute();
      $result = $query->get_result();

      $rss_feed = '';

      $rss_items = '';

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $id = $row["id"];
        $sequence = $row["sequence"];
        $title = $row["title"];
        $date = date('D, d M Y H:i:s', strtotime($row["date"]));
        $podcast_link = $row["podcast_link"];
        $podcast_description = $row["podcast_description"];
        $podcast_duration = $row["podcast_duration"];
        $podcast_file_size = $row["podcast_file_size"];
        $rss_items .= generate_rss_items($id, $sequence, $title, $date, $podcast_link, $podcast_description, $podcast_duration, $podcast_file_size);  
       //var_dump($rss_channel_items);
      }        

      $rss_feed =
     '
      <rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">
        <channel>
          <title>My B*tchin Wine Talkshow</title>
          <link>http://www.bitchinwinetalkshow.com</link>
          <description>A delightfully irreverent approach to wine</description>
          <itunes:author>Steven Lane</itunes:author>
          <copyright>© 2018 My Bitchin Wine Talkshow</copyright>
          <language>en-us</language>
          <pubDate>September 5, 2018</pubDate>
          <lastBuildDate>'.$last_build_date.'</lastBuildDate>
          <itunes:category text="">Food</itunes:category>
          <itunes:image href="../../resources/images/mbwts_podcast_logo.png"></itunes:image>
          <itunes:explicit>yes</itunes:explicit>
          <itunes:subtitle>Drinking alone is no longer a problem.</itunes:subtitle>
          <itunes:summary>We open bottles of wine.  We drink them.  We bitch and wine about all of it.  But mostly we figure out how to enjoy almost anything.  You should too.</itunes:summary>
          <itunes:owner>
            <itunes:name>Steven Lane</itunes:name>
            <itunes:email>steventhomaslane@gmail.com</itunes:email>
          </itunes:owner>
          '.$rss_items.'
        </channel>
      </rss>';




    echo $rss_feed; 
    ?>

