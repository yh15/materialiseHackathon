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
    		<h1>Maintitle</h1>
            <br><br><!--Line breaks-->
            <h4>Secondment title here</h4>
            <p>Insert your simple desc on how to make char kueh teow</p>
        </div><!--//container-des-->    
    </div><!--//container-fluid-->    
    
    

    <!-- Result page display -->
    <div class="container">  
                        
    		<!--Action button-->
            <div class="btn-group" role="group" aria-label="..." style="float: inherit;">
            	<button type="button" class="btn btn-primary" title="Insert description here: Naan Cheese">Option 1</button>
                <button type="button" class="btn btn-default" title="Insert description here: Mamak">Option 2</button>
                <button type="button" class="btn btn-default" title="Insert description here: Satay">Option 3</button>
            </div>     
        
	        <!--Text display area-->
    	    <div class="display-area">
            	<textarea class="textarea" draggable="false"></textarea>
            </div><!--//End of display-area-->
            
            
            <div class="print-btn">
            	<button type="button" class="btn btn-primary btn-align" data-toggle="button" aria-pressed="false" autocomplete="off">
                3D Print</button>
            </div>
    </div><!--//Container-->
    
    
    
    <!--Displaying the images-->
  <div class="container-fluid">
    	<!--Descriptions-->
        <div class="container-des">
        	<h4>Insert second title here</h4>
        	<p>How do you describe the flavour of nasi dagang to ang mo? Add in description for 3D image rendering here</p>
        </div><!--// End of the container-fluid class-->
        
        
    	<!--Displaying the image area-->
        <!--Implementing the 3D API-->
        <div class="display-area">
            <div class="img-container">
            
                        <!--3D Controll Graphic Script -->
            <script>//<![CDATA[
                
                            // Set up the scene, camera, and renderer as global variables.
                    var scene, camera, renderer;
                    
                    init();
                    animate();
                    
                    // Sets up the scene.
                    function init() {
                      // Create the scene and set the scene size.
                      scene = new THREE.Scene();
                      var WIDTH = 400,
                          HEIGHT = 300;
                    
                      // Create a renderer and add it to the DOM.
                      renderer = new THREE.WebGLRenderer({antialias:true});
                      renderer.setSize(WIDTH, HEIGHT);
                      document.body.appendChild(renderer.domElement);
                      renderer.domElement.id = "context"
                    
                      // Create a camera, zoom it out from the model a bit, and add it to the scene.
                      camera = new THREE.PerspectiveCamera(45, WIDTH / HEIGHT, 0.1, 20000);
                      camera.position.set(0,6,0);
                      scene.add(camera);
                    
                      // Create a light, set its position, and add it to the scene.
                      var light = new THREE.PointLight(0xffffff);
                      light.position.set(-100,200,100);
                      scene.add(light);
                    
                      // Add a white PointLight to the scene.
                      var loader = new THREE.JSONLoader();
                      loader.load( '', function(geometry){ // ADD SCRIPT TO GRAB RELATIVE IMAGE ENTRY FROM DATABASE
                        var material = new THREE.MeshLambertMaterial({color: 0x55B663});
                        mesh = new THREE.Mesh( geometry, material);
                        scene.add(mesh);
                      });
                    
                      // Add OrbitControls so that we can pan around with the mouse.
                      controls = new THREE.OrbitControls(camera, renderer.domElement);
                    }
                    
                    // Renders the scene and updates the render as needed.
                    function animate() {
                      requestAnimationFrame( animate );
                      renderer.render( scene, camera );
                      controls.update();
                    }
            </script>
            
            
            
            </div>
        </div><!--End of image display area-->
        
        
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
