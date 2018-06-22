<html>
<head>
<title>security</title>

<style>
body {margin: 0; padding: 0;
background-color: #4e6172;
color:#fffdd0;
font-family: arial;
}
pre{margin: 0; padding: 0;
font-family: system-ui, sans-serif;
	color:#71b9cf;font-size:18px;
}

a{
font-family: arial;
	color:#fdf6e3;
	text-decoration:none;
	font-size:18px;	
}

a:hover{
font-family: arial;
	color:#93a1a1;
	text-decoration:none;
	font-size:18px;	
}

#list{
padding: 20px;
}

#bottom{
text-align: left;
font-size:18px;
color: #ff0000;
position:absolute;
top: 90%;
left :50px;
width: 1000px;
height: 800px;
z-index:0;	
	
}

</style>


</head>



<?php
	$thelist = "FILE LIST:";

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">
CS
<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>


<?php
 $colors = array("c0362c" ,"FF8642","F4Dcb5","816c5b","c3b7ac","e7e3d7","668d3c","b1dda1","e5f3cf","0097ac","3cd6e6","97eaf4","007996","06c2f4","004159","65a8c4","aacee2","8c65d3","9a93ec","cab9f1","FAD8FA");
for ($n = 0; $n < 21; $n++){
	//echo "$colors[$n]&nbsp;";
	$text = "fff";
	if ($n == 4 || $n == 11 || $n == 12)$text = "000";
	echo "&nbsp;<span style=\"color:#$text; background-color:#$colors[$n]\";>$colors[$n]</span>&nbsp;";
	
}

?>

</footer>

</body>
</head>
