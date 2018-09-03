
function addToShareCounter(post_id) {
  $.post("../../src/share_count.php", {id: post_id}, function(response){
      console.log('sent')
  });
}










  //ajax pass to shareCount.php and then write sql autoincrement push function
