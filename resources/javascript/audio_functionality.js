
console.log('file loaded');

function calculateTotalValue(length) {
  var minutes = Math.floor(length / 60),
    seconds_int = length - minutes * 60,
    seconds_str = seconds_int.toString(),
    seconds = seconds_str.substr(0, 2),
    time = minutes + ':' + seconds

  return time;
}

function calculateCurrentValue(currentTime) {
  var current_hour = parseInt(currentTime / 3600) % 24,
    current_minute = parseInt(currentTime / 60) % 60,
    current_seconds_long = currentTime % 60,
    current_seconds = current_seconds_long.toFixed(),
    current_time = (current_minute < 10 ? "0" + current_minute : current_minute) + ":" + (current_seconds < 10 ? "0" + current_seconds : current_seconds);

  return current_time;
}

function updateProgressBar(parent_element) {
  var player = parent_element.find('.player').get(0);
  var length = player.duration
  var current_time = player.currentTime;

  // calculate total length of value
  var totalLength = calculateTotalValue(length)
  parent_element.find(".end-time").html(totalLength);

  // calculate current value time
  var currentTime = calculateCurrentValue(current_time);
  parent_element.find(".start-time").html(currentTime);

  var progressbar = parent_element.find('.seekObj').get(0);

  progressbar.value = (player.currentTime / player.duration);
  //progressbar.addEventListener("click", seek);

  if (player.currentTime == player.duration) {
    parent_element.find('.play-btn').removeClass('pause');
  }

  function seek(evt) {
    var percent = evt.offsetX / this.offsetWidth;
    player.currentTime = percent * player.duration;
    progressbar.value = percent / 100;
  }
};


function initPlayersMurat() {
  $(document).ready(function(){
    $('.play-btn').on('click', function(e){
      var playBtn = $(this);
      var player = $(this).parents('.audio-player').find('.player');


      if(playBtn.hasClass('pause')) {
        // pause the thing
        playBtn.removeClass('pause');
        player.get(0).pause()
      } else {
        // play
        playBtn.addClass('pause');
        player.get(0).play()
      }


      console.log("Play clicked!!!", player)
    })

    $('.player').on('timeupdate', function(e){
      var parent = $(this).parents('.audio-player');
      updateProgressBar(parent);
    })

    // for every player, call update progress bar once on pageload
    
    $('.player').on('loadedmetadata', function(e) {
      var parent = $(this).parents('.audio-player');
      updateProgressBar(parent);
    })

    $('.seekObj').on('click', function(evt){
      var parent = $(this).parents('.audio-player');
      var player = parent.find('.player').get(0);
      var progressbar = parent.find('.seekObj').get(0);

      var percent = evt.offsetX / this.offsetWidth;
      player.currentTime = percent * player.duration;
      progressbar.value = percent / 100;
    })
  })
}

//initPlayers(jQuery('#player-container').length);
initPlayersMurat();



