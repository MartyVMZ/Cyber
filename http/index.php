<html><head><title>10.183.13.13</title>
<style>
	body{ 
		 font-family: system-ui, sans-serif;
		background-color: #71b09f;
		color: #fff;
	 }
	 a{	
		font-style: bold;
		border: solid 1px;
		padding : 1px;
		text-decoration: none;
				 background-color: #fff;
				 color: #000;
	}
	pre{
		background-color: #fff;
		color: #71b09f;
	}
</style>
<script>
var images = ['pict1.png', 'pict2.png', 'pict3.png'];
    
function getRandomImage(imgAr, path) {
    path = path || 'img/'; // default path here
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}
</script>

</head>
<body>
<script type="text/javascript">getRandomImage(images, 'img/')</script>
<?php
phpinfo();
?>
</body>
</html>
