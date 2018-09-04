    <?php
      function generate_rss_items($id, $sequence, $title, $date, $podcast_link, $podcast_description, $podcast_duration, $podcast_file_size){
        return '<item>
                <itunes:author>Steven Lane</itunes:author>
                <itunes:duration>'.$podcast_duration.'</itunes:duration>
                <title>#'.$sequence.' - '.$title.'</title>
                <guid isPermaLink="true">http://www.bitchinwinetalkshow.com/podcast2.php?id='.$id.'</guid>
                <description>'.$podcast_description.'</description>
                <itunes:category text="Arts">
                <itunes:category text="Food" />
                </itunes:category>
                <pubDate>'.$date.'</pubDate>
                <enclosure length="'.$podcast_file_size.'" url="'.$podcast_link.'" type="audio/mpeg"/>
                </item>';
      }
    ?>