
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IESL Robogames 2013</title>
        <style type="text/css">
            body  {margin:0;padding:0;background-color:#000000;font-size:0;overflow:hidden}
            canvas{width: 100%;height: 600px;top: 150px;position: absolute;background-color:black;overflow:hidden; opacity:0.7;z-index: 0}
        </style>
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
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            function about(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            function contact(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            
            function challenge_school(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            
            function challenge_undergrad(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            
            function register_undergrad(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }
            function register_school(){
                $("#main").animate(
                {height:'toggle'},1000
            );
                $("#sidebar").animate(
                //{width:'toggle'},1000
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
                // {width:'toggle'}
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
                fo.addVariable("maxJPGSize","720");
		
                //GENERAL OPTIONS		
                fo.addVariable("useReloadButton", "false");
                fo.addVariable("columns", "4");
                fo.addVariable("rows", "4");
                fo.addVariable("showFullscreenOption", "true");
                //fo.addVariable("showFlipButton", "true");
                //fo.addVariable("showLinkButton", "true");		
                //fo.addVariable("linkLabel", "View image info");
                //fo.addVariable("frameColor", "0xFF0000");
                fo.addVariable("backColor", "0xDDDDDD");
                //fo.addVariable("bkgndInnerColor", "0xFF00FF");
                //fo.addVariable("bkgndOuterColor", "0x0000FF");				
                //fo.addVariable("langAbout", "About");				
		
                //PRO OPTIONS
                //fo.addVariable("frameWidth", "100");
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
                
                //alert("Robot name cannot be empty");
                var validated= true;
                if(robot==""){
                    validated=false;
                    alert("Robot name cannot be left  empty");
                    $("#robot").focus();                    
                }else if(school==""){
                    validated=false;
                    alert("School name cannot be left empty");
                    $("#school").focus();                    
                }else if(address==""){
                    validated=false;
                    alert("Address cannot be left empty");
                    $("#address").focus();                    
                }else if(principal==""){
                    validated=false;
                    alert("Principal name cannot be left empty");
                    $("#principal").focus();                    
                }else if(teacher==""){
                    validated=false;
                    alert("Teacher name cannot be left empty");
                    $("#teacher").focus();                    
                }else if(mem1name==""){
                    validated=false;
                    alert("Leader's name cannot be left empty");
                    $("#mem1name").focus();                    
                }else if(mem1grade==""){
                    validated=false;
                    alert("Leader's grade cannot be left empty");
                    $("#mem1grade").focus();                    
                }else if(mem1email==""){
                    validated=false;
                    alert("Leader's email cannot be left empty");
                    $("#mem1email").focus();                    
                }else if(mem1no==""){
                    validated=false;
                    alert("Leader's phone no cannot be left empty");
                    $("#mem1no").focus();                    
                }
                
                if(validated)
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
                        alert('Data successfully added');
                        home();
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
                var validated= true;
                if(robot==""){
                    validated=false;
                    alert("Robot name cannot be left empty");
                    $("#robot").focus();                    
                }else if(university==""){
                    validated=false;
                    alert("University name cannot be left  empty");
                    $("#university").focus();                    
                }else if(mem1name==""){
                    validated=false;
                    alert("Leader's name cannot be left empty");
                    $("#mem1name").focus();                    
                }else if(mem1index==""){
                    validated=false;
                    alert("Leader's index no cannot be left empty");
                    $("#mem1index").focus();                    
                }else if(mem1dept==""){
                    validated=false;
                    alert("Leader's department cannot be left empty");
                    $("#mem1dept").focus();                    
                }else if(mem1sem==""){
                    validated=false;
                    alert("Leader's demester of study cannot be left empty");
                    $("#mem1sem").focus();                    
                }else if(mem1email==""){
                    validated=false;
                    alert("Leader's email address cannot be left empty");
                    $("#mem1email").focus();                    
                }else if(mem1no==""){
                    validated=false;
                    alert("Leader's phone no cannot be left empty");
                    $("#mem1no").focus();                    
                }
                
                if(validated)
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
                        alert('Data successfully added');
                        home();
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
                //{width:'toggle'},1000
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
                //{width:'toggle'}
            );
            }            
            
        
        </script>
        <script type="text/javascript">
            function $i(id) { return document.getElementById(id); }
            function $r(parent,child) { (document.getElementById(parent)).removeChild(document.getElementById(child)); }
            function $t(name) { return document.getElementsByTagName(name); }
            function $c(code) { return String.fromCharCode(code); }
            function $h(value) { return ('0'+Math.max(0,Math.min(255,Math.round(value))).toString(16)).slice(-2); }
            function _i(id,value) { $t('div')[id].innerHTML+=value; }
            function _h(value) { return !hires?value:Math.round(value/2); }

            function get_screen_size()
            {
                var w=document.documentElement.clientWidth;
                var h=document.documentElement.clientHeight;
                return Array(w,h);
            }

            var url=document.location.href;

            var flag=true;
            var test=true;
            var n=parseInt((url.indexOf('n=')!=-1)?url.substring(url.indexOf('n=')+2,((url.substring(url.indexOf('n=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('n=')+2+(url.substring(url.indexOf('n=')+2,url.length)).indexOf('&'):url.length):512);
            var w=0;
            var h=0;
            var x=0;
            var y=0;
            var z=0;
            var star_color_ratio=0;
            var star_x_save,star_y_save;
            var star_ratio=256;
            var star_speed=4;
            var star_speed_save=0;
            var star=new Array(n);
            var color;
            var opacity=0.1;

            var cursor_x=0;
            var cursor_y=0;
            var mouse_x=0;
            var mouse_y=0;

            var canvas_x=0;
            var canvas_y=0;
            var canvas_w=0;
            var canvas_h=0;
            var context;

            var key;
            var ctrl;

            var timeout;
            var fps=0;

            function init()
            {
                var a=0;
                for(var i=0;i<n;i++)
                {
                    star[i]=new Array(5);
                    star[i][0]=Math.random()*w*2-x*2;
                    star[i][1]=Math.random()*h*2-y*2;
                    star[i][2]=Math.round(Math.random()*z);
                    star[i][3]=0;
                    star[i][4]=0;
                }
                var starfield=$i('starfield');
                starfield.style.position='absolute';
                starfield.width=w;
                starfield.height=h;
                context=starfield.getContext('2d');
                //context.lineCap='round';
                context.fillStyle='rgb(0,0,0)';
                context.strokeStyle='rgb(255,255,255)';
                var adsense=$i('adsense');
                adsense.style.left=Math.round((w-728)/2)+'px';
                adsense.style.top=(h-15)+'px';
                adsense.style.width=728+'px';
                adsense.style.height=15+'px';
                adsense.style.display='block';
            }

            function anim()
            {
                mouse_x=cursor_x-x;
                mouse_y=cursor_y-y;
                context.fillRect(0,0,w,h);
                for(var i=0;i<n;i++)
                {
                    test=true;
                    star_x_save=star[i][3];
                    star_y_save=star[i][4];
                    star[i][0]+=mouse_x>>4; if(star[i][0]>x<<1) { star[i][0]-=w<<1; test=false; } if(star[i][0]<-x<<1) { star[i][0]+=w<<1; test=false; }
                    star[i][1]+=mouse_y>>4; if(star[i][1]>y<<1) { star[i][1]-=h<<1; test=false; } if(star[i][1]<-y<<1) { star[i][1]+=h<<1; test=false; }
                    star[i][2]-=star_speed; if(star[i][2]>z) { star[i][2]-=z; test=false; } if(star[i][2]<0) { star[i][2]+=z; test=false; }
                    star[i][3]=x+(star[i][0]/star[i][2])*star_ratio;
                    star[i][4]=y+(star[i][1]/star[i][2])*star_ratio;
                    if(star_x_save>0&&star_x_save<w&&star_y_save>0&&star_y_save<h&&test)
                    {
                        context.lineWidth=(1-star_color_ratio*star[i][2])*2;
                        context.beginPath();
                        context.moveTo(star_x_save,star_y_save);
                        context.lineTo(star[i][3],star[i][4]);
                        context.stroke();
                        context.closePath();
                    }
                }
                timeout=setTimeout('anim()',fps);
            }

            function move(evt)
            {
                evt=evt||event;
                cursor_x=evt.pageX-canvas_x;
                cursor_y=evt.pageY-canvas_y;
            }

            function key_manager(evt)
            {
                evt=evt||event;
                key=evt.which||evt.keyCode;
                //ctrl=evt.ctrlKey;
                switch(key)
                {
                    case 27:
                        flag=flag?false:true;
                        if(flag)
                        {
                            timeout=setTimeout('anim()',fps);
                        }
                        else
                        {
                            clearTimeout(timeout);
                        }
                        break;
                    case 32:
                        star_speed_save=(star_speed!=0)?star_speed:star_speed_save;
                        star_speed=(star_speed!=0)?0:star_speed_save;
                        break;
                    case 13:
                        context.fillStyle='rgba(0,0,0,'+opacity+')';
                        break;
                }
                top.status='key='+((key<100)?'0':'')+((key<10)?'0':'')+key;
            }

            function release()
            {
                switch(key)
                {
                    case 13:
                        context.fillStyle='rgb(0,0,0)';
                        break;
                }
            }

            function mouse_wheel(evt)
            {
                evt=evt||event;
                var delta=0;
                if(evt.wheelDelta)
                {
                    delta=evt.wheelDelta/120;
                }
                else if(evt.detail)
                {
                    delta=-evt.detail/3;
                }
                star_speed+=(delta>=0)?-0.2:0.2;
                if(evt.preventDefault) evt.preventDefault();
            }

            function start()
            {
                resize();
                anim();
            }

            function resize()
            {
                w=parseInt((url.indexOf('w=')!=-1)?url.substring(url.indexOf('w=')+2,((url.substring(url.indexOf('w=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('w=')+2+(url.substring(url.indexOf('w=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[0]);
                h=parseInt((url.indexOf('h=')!=-1)?url.substring(url.indexOf('h=')+2,((url.substring(url.indexOf('h=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('h=')+2+(url.substring(url.indexOf('h=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[1]);
                x=Math.round(w/2);
                y=Math.round(h/2);
                z=(w+h)/2;
                star_color_ratio=1/z;
                cursor_x=x;
                cursor_y=y;
                init();
            }

            //document.onmousemove=move;
            //document.onkeypress=key_manager;
            //document.onkeyup=release;
            //document.onmousewheel=mouse_wheel; if(window.addEventListener) window.addEventListener('DOMMouseScroll',mouse_wheel,false);

        </script>
    </head>
    <body background="images/background.jpg" onload="start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'" onmouseup="context.fillStyle='rgb(0,0,0)'">
        <canvas id="starfield" style="background-color:transparent"></canvas>
        <div id="adsense" style="position:absolute;background-color:transparent;display:none">
        </div>
        <div id="title" style="width: 100%;height: 50px;top: 0px;position: absolute"></div>
        <div id="content" style="width: 100%;height: 600px;top: 150px;position: absolute">
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
            <div id="container2" style="height: 400px;width: 100%;-o-background-size: cover;position: absolute;top: 70px;">


            </div>
            <div id="container" style="height: 600px;width: 100%;-o-background-size: cover;position: absolute;top: 10px;">

                <img src="images/back.png" height="100%"style="display: block; margin: 0 auto; top: 20px" id="baseimg"></img>
                <div id="main" style="position: absolute;width: 690px;height: 520px;top: 35px;overflow:  auto">      


                </div>
            </div>
        </div>
        <div id="footer" style="width: 100%;height: 50px;top: 750px;position: absolute"></div>
    </body>
</html>
