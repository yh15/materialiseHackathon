<!DOCTYPE html>
<html lang="en">


<!--Header part for the website--><head>
	
   	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://localhost/materialiseHackathon/resources/js/three.min.js"></script>
    <script src="http://localhost/materialiseHackathon/resources/js/OrbitControls.js"></script>
    
        
    
    <link rel="stylesheet" type="text/css" href="http://localhost/materialiseHackathon/resources/css/bootstrap.css">
    <link href="http://localhost/materialiseHackathon/resources/css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


 
	<title>BRAILLE3D&reg;</title>
    <script src="http://localhost/materialiseHackathon/resources/js/Braille.js"></script>
	<script language="javascript">
	function BrailleText() {
	var message = document.getElementById("Textbox1").value;
	document.getElementById('myBraille').innerHTML=Braille(message);
	}
</script>
	</head>

<!-- Script for the main texts -->
<body>

	<div class="container">
    
    <!--Navigation bar-->
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
    
    
    <!--Surround the main body of the website
    	and restrict the sizes-->
<div class="container-fluid"> <!--Surround class-->
    
    <!-- Text conversion tools -->
    <div class="container">
    	<div class="container-des">  <!--PLEASE INCLUDE THIS CLASS IN STYLE.HTML-->
    		<h1>Content Page</h1>
            <br><br><!--Line breaks-->
            
        </div><!--//container-des-->    
    </div><!--//container-fluid-->    
    
    

    <!-- Result page display -->
    <div class="container">  
                        
    		<!--Action button-->
            <div class="btn-group" role="group" aria-label="..." style="float: inherit;">
            	<button type="button" class="btn btn-primary" title="Insert description here: Naan Cheese">Text</button>
                <button type="button" class="btn btn-default" title="Insert description here: Mamak" onclick="javascript:BrailleText()">Braille</button>
                <!--<button type="button" class="btn btn-default" title="Insert description here: Satay">Option 3</button>-->
            </div>     
        
	        <!--Text display area-->
    	    <div class="display-area">
            	<textarea class="textarea" id="Textbox1" draggable="false" placeholder="<?php echo file_get_contents($article);?>"></textarea>
				<P><span id="myBraille"></span></P>
            </div><!--//End of display-area-->
            
            
            <div class="print-btn">
            	<!--<button type="button" class="btn btn-primary btn-align" data-toggle="button" aria-pressed="false" autocomplete="off">
                3D Print</button>-->
            </div>
    </div><!--//Container-->
    
    
    
    <!--Displaying the images-->
  <div class="container-fluid">
    	<!--Descriptions-->
        <div class="container-des">
        	<h4>3D Image</h4>
        	
        </div><!--// End of the container-fluid class-->
        
        
    	<!--Displaying the image area-->
        <!--Implementing the 3D API-->	
        
        
        
        <div class="print-btn">
            	<button type="button" class="btn btn-primary btn-align" data-toggle="button" aria-pressed="false" autocomplete="off">
                3D Print</button>
        </div>    
       </div><!--//End of second container-->
        
         
  

		</div><!--//End of surround class-->

		
        <!--Adjustting the footer-->
        <div class="container-fluid">
            <div class="footer-block">
                <h6>Created by NottsTeam &copy;2014. All rights reserved.</h6>
            </div><!--//footer-block-->
        </div><!--//container-->


</body>
</html>
