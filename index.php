<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="css/main.css" rel="stylesheet" type="text/css">  
        <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
        <script src="js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="swfobject.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <!-- the jScrollPane script -->
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript">
            
            function getCssProperty(elmId, property){
                var elem = document.getElementById(elmId);
                return window.getComputedStyle(elem,null).getPropertyValue(property);
            }
            function positionMain(){
                $("#container").animate({
                    width : 'toggle'
                },"slow"
            );
                var left = window.innerWidth/2-145;
                //alert( left+"px");
                //document.getElementById("main").style.left = left+"px";
                //document.getElementById("main").style.visibility = "visible";
                $("#container2").delay(1000).animate({
                    height : '600px',
                    top : '10px'
                }); 
            }
            $(document).ready(function() {  
                var left = window.innerWidth/2-230;
                //Background color, mouseover and mouseout
                var colorOver = '#31b8da';
                var colorOut = '#1f1f1f';

                //Padding, mouseover
                var padLeft = '20px';
                var padRight = '200px'
                //alert( left+"px");
                document.getElementById("main").style.left = left+"px";
                document.getElementById("main").style.visibility = "visible";
                $('#menu li').mouseover(function (){
		
                    //mouse over LI and look for A element for transition
                    $(this).find('a')
                    .animate( { paddingLeft: padLeft, paddingRight: padRight},500 )
                    .css('background-color','gray');
                    
                    $(this).find('ul').css("visibility", 'visible');
                    $(this).find('ul').css("height", '100%');

                }).mouseout(function () {
	
                    //mouse oout LI and look for A element and discard the mouse over transition
                    $(this).find('a')
                    .animate( { paddingRight: "18px" },500 )
                    .css('background-color','#1f1f1f');
                    $(this).find('ul').css("visibility", 'hidden');
                    $(this).find('ul').css("height", '0');
                }); 
                
                //$('#main').jScrollPane();
                
                home();
                
            });
            
            function home(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "home.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            function about(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "about.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            function contact(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "contact.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            
            function challenge_school(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "challenge_school.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            
            function challenge_undergrad(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "challenge_undergrad.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            
            function register_undergrad(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "register_undergrad.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                    
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            function register_school(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "register_school.php",
                    data: {}
                }).done(function( result ) {
                    $("#main").html(result);
                    
                });
                $("#main").animate(
                {height:'toggle'}
                
                
            ).delay(500);
                $("#sidebar").animate(
                {width:'toggle'}
            );
            }
            
            function gallery(){
                var fo = new SWFObject("TiltViewer.swf", "viewer", "100%", "100%", "9.0.28", "#000000");			
		
                // TILTVIEWER CONFIGURATION OPTIONS
                // To use an option, uncomment it by removing the "//" at the start of the line
                // For a description of config options, go to: 
                // http://www.airtightinteractive.com/projects/tiltviewer/config_options.html
		
                //TRANSPARENT OPTIONS
                fo.addParam("wmode", "transparent");
                fo.addVariable("bkgndTransparent", "true");
                fo.addVariable("showFullscreenOption", "false");

                
                //FLICKR GALLERY OPTIONS
                // To use images from Flickr, uncomment this block
                //fo.addVariable("useFlickr", "true");
                //fo.addVariable("user_id", "48508968@N00");
                //fo.addVariable("tags", "jump,smile");
                //fo.addVariable("tag_mode", "all");
                //fo.addVariable("showTakenByText", "true");			
		
                // XML GALLERY OPTIONS
                // To use local images defined in an XML document, use this block		
                fo.addVariable("useFlickr", "false");
                fo.addVariable("xmlURL", "gallery.xml");
                fo.addVariable("maxJPGSize","640");
		
                //GENERAL OPTIONS		
                fo.addVariable("useReloadButton", "false");
                fo.addVariable("columns", "3");
                fo.addVariable("rows", "3");
                //fo.addVariable("showFullscreenOption", "true");
                //fo.addVariable("showFlipButton", "true");
                //fo.addVariable("showLinkButton", "true");		
                //fo.addVariable("linkLabel", "View image info");
                //fo.addVariable("frameColor", "0xFF0000");
                //fo.addVariable("backColor", "0xDDDDDD");
                //fo.addVariable("bkgndInnerColor", "0xFF00FF");
                //fo.addVariable("bkgndOuterColor", "0x0000FF");				
                //fo.addVariable("langAbout", "About");				
		
                //PRO OPTIONS
                //fo.addVariable("frameWidth", "40");
                //fo.addVariable("zoomedInDistance", "1400");
                //fo.addVariable("zoomedOutDistance", "7500");
                //fo.addVariable("fontName", "Times");
                //fo.addVariable("titleFontSize", "90");
                //fo.addVariable("descriptionFontSize", "32");
                //fo.addVariable("linkFontSize", "41");
                //fo.addVariable("linkTarget", "_self");
                //fo.addVariable("navButtonColor", "0xFF00FF");
                //fo.addVariable("flipButtonColor", "0x0000FF");
                //fo.addVariable("textColor", "0xFFFFFF");
                //fo.addVariable("linkTextColor", "0x000000");
                //fo.addVariable("linkBkgndColor", "0xFFFFFF");
                //fo.addVariable("enableSounds", "true");
                //fo.addVariable("tiltAmountIn", "75");
                //fo.addVariable("tiltAmountOut", "120");

                
                // END TILTVIEWER CONFIGURATION OPTIONS
		
                fo.addParam("allowFullScreen","true");
                fo.write("main");
            }
            
        
        </script>
    </head>
    <body background="images/background.jpg">
        <div id="title" style="width: 100%;height: 50px;top: 0px;position: absolute"></div>
        <div id="content" style="width: 100%;height: 600px;top: 50px;position: absolute">
            <div id="sidebar" >
                <ul id="menu">
                    <li> <a href="#" onclick="home()">Home</a> </li>
                    <li> <a href="#" onclick ="about()">About</a> </li>
                    <li> <a href="#">Challenge</a>
                        <ul>
                            <li> <a href="#" onclick="challenge_school()">School</a>
                            <li> <a href="#" onclick="challenge_undergrad()">UnderGraduate</a>
                        </ul>
                    </li>
                    <li> <a href="#">Register</a>
                        <ul>
                            <li> <a href="#" onclick ="register_school()">School</a>
                            <li> <a href="#" onclick="register_undergrad()">UnderGraduate</a>
                        </ul>

                    </li>
                    <li> <a href="#">Resources</a> </li>
                    <li> <a href="#" onclick="gallery()">Gallery</a> </li>
                    <li> <a href="#" onclick ="contact()">Contact</a> </li>
                </ul>
            </div>
            <div id="container2" style=" ;height: 400px;width: 100%;-o-background-size: cover;position: absolute;top: 70px;">

                <img src="" height="100%"style="display: block; margin: 0 auto; top: 20px" ></img>

            </div>
            <div id="container" style=" ;height: 600px;width: 100%;-o-background-size: cover;position: absolute;top: 10px;">

                <img src="images/back.png" height="100%"style="display: block; margin: 0 auto; top: 20px" id="baseimg"></img>
                <div id="main" style="position: absolute;width: 700px;height: 520px;top: 35px;overflow:  auto">      
                    

                </div>
            </div>
        </div>
        <div id="footer" style="width: 100%;height: 50px;top: 650px;position: absolute"></div>
    </body>
</html>
