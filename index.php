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
                    
                    //$(this).find('ul').css("visibility", 'visible');
                    //$(this).find('ul').css("height", '100%');

                }).mouseout(function () {
	
                    //mouse oout LI and look for A element and discard the mouse over transition
                    $(this).find('a')
                    .animate( { paddingRight: "18px" },500 )
                    .css('background-color','#1f1f1f');
                    //$(this).find('ul').css("visibility", 'hidden');
                    //$(this).find('ul').css("height", '0');
                }).click(function(){
                    $(this).find('ul').css("visibility", 'visible');
                    $(this).find('ul').css("height", '100%');
                }); 
                
                $('#menu li ul').mouseout(function (){
                    $(this).css("visibility", 'hidden');
                    $(this).css("height", '0');
                });
                $('#menu li ul').mouseover(function (){
                    $(this).css("visibility", 'visible');
                    $(this).css("height", '100%');
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
            
            function register_school_submit(){
                var robot = $("#robot").val();
                var school = $("#school").val();
                var address = $("#address").val();
                var principal = $("#principal").val();
                var teacher = $("#teacher").val();
                var teacherno = $("#teacherno").val();
                
                var mem1name = $("#mem1name").val();
                var mem1grade = $("#mem1grade").val();
                var mem1email = $("#mem1email").val();
                var mem1no = $("#mem1no").val();
                
                var mem2name = $("#mem2name").val();
                var mem2grade = $("#mem2grade").val();
                var mem2email = $("#mem2email").val();
                var mem2no = $("#mem2no").val();
                
                var mem3name = $("#mem3name").val();
                var mem3grade = $("#mem3grade").val();
                var mem3email = $("#mem3email").val();
                var mem3no = $("#mem3no").val();
                
                var mem4name = $("#mem4name").val();
                var mem4grade = $("#mem4grade").val();
                var mem4email = $("#mem4email").val();
                var mem4no = $("#mem4no").val();
                
                var mem5name = $("#mem5name").val();
                var mem5grade = $("#mem5grade").val();
                var mem5email = $("#mem5email").val();
                var mem5no = $("#mem5no").val();
                
                
                
                
                $.ajax({
                    type: "POST",
                    url: "register_school_submit.php",
                    data: {
                        
                        robot : robot,
                        school : school,
                        address : address ,
                        principal : principal,
                        teacher : teacher ,
                        teacherno : teacherno,
                
                        mem1name : mem1name,
                        mem1grade : mem1grade,
                        mem1email : mem1email ,
                        mem1no :  mem1no,
                
                        mem2name : mem2name,
                        mem2grade : mem2grade,
                        mem2email : mem2email,
                        mem2no : mem2no,
                
                        mem3name : mem3name ,
                        mem3grade : mem3grade,
                        mem3email : mem3email,
                        mem3no : mem3no,
                
                        mem4name : mem4name,
                        mem4grade : mem4grade,
                        mem4email : mem4email,
                        mem4no : mem4no,
                
                        mem5name : mem5name,
                        mem5grade : mem5grade,
                        mem5email : mem5email,
                        mem5no :mem5no
                    }
                }).done(function( result ) {  
                    $("#main").html(result);
                    //alert(result);
                    if(result=='success'){
                        alert('Data successfull added');
                    }else{
                        alert('Form submission has beed failed. Robot name already exists');
                    }
                    
                });
                
                
            }
            
            function register_undergrad_submit(){
                var robot = $('#robot').val();
                var university = $('#university').val();

                var mem1name = $('#mem1name').val();
                var mem1index = $('#mem1index').val();
                var mem1dept = $('#mem1dept').val();
                var mem1sem = $('#mem1sem').val();
                var mem1email = $('#mem1email').val();  
                var mem1no = $('#mem1no').val();

                var mem2name = $('#mem2name').val();
                var mem2index = $('#mem2index').val();
                var mem2dept = $('#mem2dept').val();
                var mem2sem = $('#mem2sem').val();
                var mem2email = $('#mem2email').val();
                var mem2no = $('#mem2no').val();

                var mem3name = $('#mem3name').val();
                var mem3index = $('#mem3index').val();
                var mem3dept = $('#mem3dept').val();
                var mem3sem = $('#mem3sem').val();
                var mem3email = $('#mem3email').val();
                var mem3no = $('#mem3no').val();

                var mem4name = $('#mem4name').val();
                var mem4index = $('#mem4index').val();
                var mem4dept = $('#mem4dept').val();
                var mem4sem = $('#mem4sem').val();
                var mem4email = $('#mem4email').val();
                var mem4no = $('#mem4no').val();

                var mem5name = $('#mem5name').val();
                var mem5index = $('#mem5index').val();
                var mem5dept = $('#mem5dept').val();
                var mem5sem = $('#mem5sem').val();
                var mem5email = $('#mem5email').val();
                var mem5no = $('#mem5no').val();
                
                $.ajax({
                    type: "POST",
                    url: "register_undergrad_submit.php",
                    data: {
                        
                    
                        robot : robot,
                        university : university,

                        mem1name : mem1name,
                        mem1index : mem1index,
                        mem1dept : mem1dept,
                        mem1sem : mem1sem,
                        mem1email : mem1email,  
                        mem1no : mem1no,

                        mem2name : mem2name,
                        mem2index : mem2index,
                        mem2dept : mem2dept,
                        mem2sem : mem2sem,
                        mem2email : mem2email,
                        mem2no : mem2no,

                        mem3name : mem3name,
                        mem3index : mem3index,
                        mem3dept : mem3dept,
                        mem3sem : mem3sem,
                        mem3email : mem3email,
                        mem3no : mem3no,

                        mem4name : mem4name,
                        mem4index : mem4index,
                        mem4dept : mem4dept,
                        mem4sem : mem4sem,
                        mem4email : mem4email,
                        mem4no : mem4no,

                        mem5name : mem5name,
                        mem5index : mem5index,
                        mem5dept : mem5dept,
                        mem5sem : mem5sem,
                        mem5email : mem5email,
                        mem5no :  mem5no
                
                    }
                }).done(function( result ) {  
                    $("#main").html(result);
                    //alert(result);
                    if(result=='success'){
                        alert('Data successfull added');
                    }else{
                        alert('Form submission has beed failed. Robot name already exists');
                    }
                    
                });
            
            }
            
            function resources(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                {width:'toggle'},1000
            );    
                $.ajax({
                    type: "POST",
                    url: "resources.php",
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
                            <li> <a href="#" onclick="challenge_undergrad()">underGraduate</a>
                        </ul>
                    </li>
                    <li> <a href="#">Register</a>
                        <ul>
                            <li> <a href="#" onclick ="register_school()">School</a>
                            <li> <a href="#" onclick="register_undergrad()">underGraduate</a>
                        </ul>

                    </li>
                    <li> <a href="#" onclick="resources()">Resources</a> </li>
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
