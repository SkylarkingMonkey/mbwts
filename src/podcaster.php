<?php
        function generate_podcaster($title, $sequence, $podcast_link) {
          return
          	' <div class="audio-player">
                <div class="play-btn"></div>
                <div class="audio-wrapper player-container" href="javascript:;">
                  <audio class="player">
			               <source src="'.$podcast_link.'" type="audio/mp3">
			             </audio>
                </div>
                <div class="player-controls scrubber">
                    <p class="episode-title">Podcast Ep. '.$sequence.': '.$title.' </p><p class="small-paragraph" ><small>from</small><br />My Bitchin Wine Talkshow</p>
                    <span class="seekObjContainer">
			                 <progress class="seekObj" value="0" max="1"></progress>
			              </span>
                    <br>
                    <small style="float: left; position: relative; left: 15px;" class="start-time"></small>
                    <small style="float: right; position: relative; right: 20px;" class="end-time"></small>
                </div>
                <a class="podcast_symbol_link" href="" target="_blank"><img class="podcast_symbol" src="../resources/images/tinkered-podcast-logo-correct-purple.png"></img></a>
              </div>';
  }
?>

