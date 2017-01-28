<?php
  $xml = simplexml_load_file('http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=lukedagnall&api_key=4a731c419199a688eda9f3a30416cae0');
  $i = 0;

  $colours = array('blue', 'yellow', 'red', 'green');

  foreach($xml->recenttracks->track as $x){
    $title = $x->name;

    if($i == 4 ) { break;}?>
     <div class="track <?php if($x['nowplaying'][0] =='true'){echo 'track--now-playing';}?> <?php echo 'track--'.$colours[$i];?>">
       <span class="track__title"><?php echo strtok($title, '-');?></span>
       <span class="track__artist"><?php echo $x->artist;?></span>
     </div>

<?php $i++;
  }
?>
