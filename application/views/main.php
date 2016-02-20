<!DOCTYPE html>
<html lang="en">


<!--Header part for the website-->
<head>
	
    <link rel="stylesheet" type="text/css" href="http://localhost/resources/css/bootstrap.css">
    <link href="http://localhost/materialiseHackathon/resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/materialiseHackathon/resources/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/materialiseHackathon/resources/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/materialiseHackathon/resources/css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BRAGS&reg;</title>
	
<script>
    $('#search').click(function () {
		alert("it ran!");
        var mysave = $('#results').html();
        $('#searchterm').val(mysave);
		alert(mysave);
	});	
 </script>
    
</head>

<!--The main structure for the website-->
<body>
	
    <!--Scripting for the first section
-->

<div class="container-custom">    

    <nav class="navbar navbar-default navbar-fixed-top"> 
    	<div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!--Navigation bar-->
          <a class="navbar-brand" href="#">NOTTINGHAM TEAM</a>
      </div><!--//navbar-header-->

      <div class="collapse navbar-collapse" id="navBar">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="#">TEXT</a></li>
           <li><a href="#">IMAGE</a></li>
           <li><a href="#">OTHERS</a></li>
       </ul>
   </div> <!--//collapse-->               
</div> <!--//container-->
</nav>   



<!--Major content sections-->
<div class="container"> <!--Setting the whole margin-->





 <div class="container-fluid bg-1 text-center">
     <div class="img-responsive center-block" style="padding-top: 5%; padding-bottom:0%"> 
         <img src="http://localhost/materialiseHackathon/resources/graphic/main_index.png" alt="Welcome" width="400" height="300">
     </div><!--//End of container fluid-->
 </div><!--//Img-responsive-->

 <!--Search bar section-->
 <div class="container-fluid">
    <div class="row">
     <div class="col-lg-8, col-lg-offset-2 ">
         <div class="input-group" style="padding-right: 15%;">
             <span class="input-group-btn">
                 <!--Change the label!-->
                 <div class="col-lg-2" style="padding:0;">
					 <form action="dbcontroltest" method="post">             
					 <input type="hidden" id="searchterm" name="term"/>
					 <input type="hidden" id="category" name="type" value="name"/>
					 <button class="btn btn-default" id="search" type="submit">Search</button>
					 </form>
                 </div>
                 <div class="col-lg-8" style="padding:0;">
                 <div id="results">
                  <span id="final_span" class="final"></span>
                  <span id="interim_span" class="interim"></span>
                  <p>
                  </div>
                  <div class="col-lg-2" style="padding:0;">
                     <button id="start_button" onclick="startButton(event)">
                      <img id="start_img" src="http://localhost/materialiseHackathon/resources/graphic/mic.gif" alt="Start"></button>
                  </div>
              </div>
          </span>


      </div><!--//input-group-btn-->
  </div><!--//input-group-->
</div><!--//col-lg-6-->


</div>

    <!--div class="container-fluid bg-2">
    
    	<div class="col-lg-4 padding-icon">
        <a href="#">
        	<img src="http://localhost/materialiseHackathon/resources/graphic/square_one.png" style="max-height:400px; max-width:400px" />
        </a>
        </div>
        
        <div class="col-sm-4 padding-icon">
        <a href="#">
        	<img src="http://localhost/materialiseHackathon/resources/graphic/square_two.png" style="max-height:400px; max-width:400px"/>        
        </a>
        </div>
        
        <div class="col-sm-4 padding-icon">
        <a href="#">
        	<img src="http://localhost/materialiseHackathon/resources/graphic/square_three.png" style="max-height:400px; max-width:400px" />
        </a>
        </div>
    </div>-->


    <!--Adjustting the footer-->
    <div class="container-fluid">
    	<div class="footer-block">
         <h6>Created by NottsTeam &copy;2014. All rights reserved.</h6>
     </div><!--//footer-block-->
 </div><!--//container-->
 
 <script>
  var final_transcript = '';
  var recognizing = false;
  var ignore_onend;
  var start_timestamp;

  if (!('webkitSpeechRecognition' in window)) {
    upgrade();
} else {
    start_button.style.display = 'inline-block';
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.interimResults = true;
    recognition.onstart = function() {
      recognizing = true;
      showInfo('info_speak_now');
  };
  recognition.onresult = function(event) {
      var interim_transcript = '';
      for (var i = event.resultIndex; i < event.results.length; ++i) {
        if (event.results[i].isFinal) {
          final_transcript += event.results[i][0].transcript;
      } else {
          interim_transcript += event.results[i][0].transcript;
      }
  }
  final_transcript = capitalize(final_transcript);
  final_span.innerHTML = linebreak(final_transcript);
  interim_span.innerHTML = linebreak(interim_transcript);

};
}
function upgrade() {
    start_button.style.visibility = 'hidden';
    showInfo('info_upgrade');
}
var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
    return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}
var first_char = /\S/;
function capitalize(s) {
    return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function startButton(event) {
    if (recognizing) {
      recognition.stop();
      return;
  }
  final_transcript = '';
  recognition.lang = 'en-US';
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  start_img.src = 'mic-slash.gif';
  showInfo('info_allow');
  showButtons('none');
  start_timestamp = event.timeStamp;
}
function showInfo(s) {
    if (s) {
      for (var child = info.firstChild; child; child = child.nextSibling) {
        if (child.style) {
          child.style.display = child.id == s ? 'inline' : 'none';
      }
  }
  info.style.visibility = 'visible';
} else {
  info.style.visibility = 'hidden';
}
}
var current_style;

</script>


</div> <!--// End of the main content-->

</body>
</html>