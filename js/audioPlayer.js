function audioPlayer(){
  var current = 0;
  var audio = $('#audio');
  var playlist = $('#playlist');
  var tracks = playlist.find('li a');
  var len = tracks.length-1;
  audio[0].volume = 1;
  audio[0].play();
  playlist.find('a').click(function(e){
    e.preventDefault();
    link = $(this);
    current = link.parent().index();
    $('#playlist2').siblings().removeClass('active');
    $('#playlist3').siblings().removeClass('active');
    $('#playlist4').siblings().removeClass('active');
    run(link, audio[0]);
  });

  audio[0].addEventListener('canplay',function(e){
    audio[0].play();
  })

  audio[0].addEventListener('ended',function(e){
    current ++;
    if(current==len){
      current = 0;
      link = playlist.find('a')[0];
    }else{
      link = playlist.find('a')[current];
    }
    run((link,audio[0]));
  });
}

function audioPlayer2(){
  var current = 0;
  var audio = $('#audio');
  var playlist = $('#playlist2');
  var tracks = playlist.find('li a');
  var len = tracks.length-1;
  audio[0].volume = 1;
  playlist.find('a').click(function(e){
    e.preventDefault();
    link = $(this);
    current = link.parent().index();
    run(link, audio[0]);
    $('#playlist').siblings().removeClass('active');
    $('#playlist3').siblings().removeClass('active');
    $('#playlist4').siblings().removeClass('active');
  });

  audio[0].addEventListener('canplay',function(e){
    audio[0].play();
  })

  audio[0].addEventListener('ended',function(e){
    current ++;
    if(current==len){
      current = 0;
      link = playlist.find('a')[0];
    }else{
      link = playlist.find('a')[current];
    }
    run((link,audio[0]));
  });
}
function audioPlayer3(){
  var current = 0;
  var audio = $('#audio');
  var playlist = $('#playlist3');
  var tracks = playlist.find('li a');
  var len = tracks.length-1;
  audio[0].volume = 1;
  playlist.find('a').click(function(e){
    e.preventDefault();
    link = $(this);
    current = link.parent().index();
    run(link, audio[0]);
  });

  audio[0].addEventListener('canplay',function(e){
    audio[0].play();
  })

  audio[0].addEventListener('ended',function(e){
    current ++;
    if(current==len){
      current = 0;
      link = playlist.find('a')[0];
    }else{
      link = playlist.find('a')[current];
    }
    run((link,audio[0]));
  });
}

function audioPlayer4(){
  var current = 0;
  var audio = $('#audio');
  var playlist = $('#playlist4');
  var tracks = playlist.find('li a');
  var len = tracks.length-1;
  audio[0].volume = 1;
  playlist.find('a').click(function(e){
    e.preventDefault();
    link = $(this);
    current = link.parent().index();
    run(link, audio[0]);
  });

  audio[0].addEventListener('canplay',function(e){
    audio[0].play();
  })

  audio[0].addEventListener('ended',function(e){
    current ++;
    if(current==len){
      current = 0;
      link = playlist.find('a')[0];
    }else{
      link = playlist.find('a')[current];
    }
    run((link,audio[0]));
  });
}


function run(link,player){
  player.src = link.attr('href');
  parent = link.parent();
  parent.addClass('active').siblings().removeClass('active');
  player.load();
  player.play();
}
