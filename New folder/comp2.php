<?php 
	$a=$_POST['n'];
	$no=$_POST['no'];
	$qno=$_POST['qno'];
	$score=$_POST['score'];
?>
<html>
	<head>
	<title>
	</title>
	<style>
	svg:hover{
	transform:scale(1.15);
}
	html {
  scroll-behavior: smooth;
}
	body{
		margin:0;
		background-image:url('https://www.leadquizzes.com/wp-content/uploads/2019/02/New-blog-graphic.jpg');
		background-repeat: no-repeat;
		background-size: fill;
		background-size: 100% 100%;
		width:100%;
		height:100%;
		background-attachment: fixed;
	}
	#q{
		position:absolute;
		left:0.5%;
		bottom:91.8%;
    	}
	#add:hover{
		transform:scale(1.2);
		cursor: pointer;
		
	}
	input[type="radio"]{
		width:5%;
	}
	input[type="button"]{
		bottom: 35%;
	}
	#acc{ 
		background-color: black;
		color : white;
	}
	#acc:hover{
		color : orange;
	}
	#cat{
		padding : 3%;
		width : 5.5%;
		height : 2px;
		margin-left: 2%;
		margin-right: 3%;
		background-color: red;
	}
	#cat:hover{
		opacity: 0.5;
		box-shadow: 2px 2px;

	}
	p { 
		color: #7c795d;
		font-family: 'Trocchi', serif; font-size: 20px; 
		font-weight: normal; 
		line-height: 48px; 
		margin: 0; 
	}
	h1{	
		font-family: "Verdana", Courier, monospace;
		color:red;
		text-shadow: 0px 2px 2px grey,
                0px 8px 13px rgba(0,0,0,0.1),
                0px 18px 23px rgba(0,0,0,0.1);
		margin-left : 5px
	}
	h2{
		margin-left : 1%
	}
	.toggle { 
            position : relative ; 
            display : inline-block; 
            width : 40px; 
            height : 20px; 
            background-color: white; 
            border-radius: 30px; 
            border: 2px solid gray; 
        } 
                
        /* After slide changes */ 
        .toggle:after { 
            content: ''; 
            position: absolute; 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            background-color: gray; 
            top: 0px;  
            left: 0px; 
            transition:  all 0.5s; 
		
        } 
                
        /* Toggle text */ 
        #o{ 
            font-family: Arial, Helvetica, sans-serif; 
            font-weight: bold; 
        } 
	        
        /* Checkbox cheked effect */ 
        .checkbox:checked + .toggle::after { 
            left : 20px;  
        } 
                
        /* Checkbox cheked toggle label bg color */ 
        .checkbox:checked + .toggle { 
            background-color: black; 
        } 
                
        /* Checkbox vanished */ 
        .checkbox {  
            display : none; 
        } 
	input[type="text"]{
		width: 50%;
  		height: 20%;
  		border: double 4px transparent;
  		border-radius: 20px;
  		background-image: linear-gradient(white, white), radial-gradient(circle at top left, lightblue,white);
  		background-origin: border-box;
  		background-clip: content-box, border-box;
		margin-left:2%;
       		box-shadow:0 0 10px #000000;
		font-size:25px;
		transition: transform 0.1s;

	}
	input[id^="Ops"]{
		width:20%;
		height:10%;
		margin-right: 20%;
		font-size:15px;
	}
	submit{
		padding-top:5%;
		width: 5%;
  		height: 5%;
		border: 1px solid red;
	}
	input:hover{
		transform:scale(1.02);
	}
	div[id^=q]{
		width: 70%;
		margin-left: 5%;
		border: 1px solid blue;
		border-radius: 5px;
		box-shadow:0 0 4px #000000;
		margin-bottom: 2%;
	}
	#top{
		width:3%;
		height:6%;
		position:fixed;
		left:86.5%;
		bottom:11%;
		transition: transform 0.2s;
	}
	#top:hover{
		transform:scale(1.6);
		cursor: pointer;		
	}
	input[type="button"],input[type="submit"]{
		position:absolute;
		left:40%;
		bottom:18%;
		width:20%;
		font-size:20px;
		height:10%;
		border:3px solid blue;
		background-image: linear-gradient(to right , violet, lightblue);
		border-radius:10px;
		transition: transform 0.08s;
		position:fixed;
		cursor:pointer;
	}
	anime({
  targets: 'div',
  translateX: 250,
  rotate: '1turn',
  backgroundColor: '#FFF',
  duration: 800
});
	</style>
</head>
	<body>
	<input type="text" id="mytext" hidden name="mytext"/>
	<img src ="taskbar.png" width=100% height=10% id="task"></img>
	<img src ="q.jpg" style="position:absolute" width=4% height=7% id="q" class="item"></img>
	<h1 onClick="window.location.replace('../studenthome.html')" style="position:absolute;left:6%;bottom:89%;color:blue;cursor:pointer;">Quizepp</h1>
	<div onMouseDown="tog()" onMouseUp="tog()" style="position : absolute;left:85%;bottom:93%">
	<input type="checkbox" id="switch"
                    class="checkbox"/> 
	<label for="switch" class="toggle"> 
        </label>
	</div>
	<p id="acc"><pre id="acc" onClick="window.location.replace('../login.html')" style="position:absolute;bottom:91%;left:90%;width:7%;height:3.5%;cursor:pointer;">  Sign Out  </pre></p>
	<br><br><br>
	<svg style="margin-left:30%;border:0%;"id="Layer_1" enable-background="new 0 0 511.375 511.375" height="100" viewBox="0 0 511.375 511.375" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m511.375 255.688-57.89-64.273 9.064-86.046-84.651-17.92-43.18-75.012-79.03 35.321-10.667 207.93 10.667 207.929 79.031 35.321 43.179-75.011 84.651-17.921-9.064-86.046z" fill="#0ed678"/><path d="m176.656 12.437-43.179 75.012-84.651 17.921 9.064 86.045-57.89 64.273 57.89 64.272-9.064 86.046 84.651 17.921 43.18 75.011 79.031-35.321v-415.859z" fill="#04eb84"/></g><g><path d="m362.878 199.702-22.381-19.977-84.809 95.016-10.667 23.613 10.667 21.439z" fill="#f7f0eb"/><path d="m166.56 233.095-21.212 21.213 89.185 89.186 21.155-23.701v-45.052l-22.393 25.088z" fill="#fffbf5"/></g></g></svg>
	<h1 align="center">Submitted Successfully</h1>
	<br><br>
	<!--<div style="margin:0;padding-left: 0px ;width:100%;height:7.5%;background-color: #fff5ff; border-top: 1px solid #cccfcf ; position: fixed;left: 0px;bottom:0%;z-index:1"></div>
	<div style="height:100%;width:24%;position:fixed;left:76%;bottom:0%;background-color:black;z-index:-1;opacity:35%;border-style: groove;border-width: 10px;border-color:grey;box-shadow: -5px 0px 5px grey;"></div>-->
	<br>
	</div>
	<?php
		$dbhost = 'localhost';  
		$dbuser = 'root';
		$dbpass = 'Vinay@123';
		$dbname = 'a';
		$con= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$sql="INSERT INTO attempts (Name,no, qno,score) VALUES ('$a','$no','$qno','$score')";
		if (!mysqli_query($con,$sql))
		{
			die('Error: ' . mysqli_error($con));
		}
	?>
	<h2 align="center">Your Attempt Has been saved successfully</h2>
	</script>
	<form method="post" action="rec.php">
		<input type="text" id="n" name="n" hidden value=<?php echo $a?>/>
		<input type="submit" value="Want to see your Records?" />
	</form>
</html>