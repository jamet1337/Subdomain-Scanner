<!DOCTYPE html>
<html>
<head>
	<title>Subdomain Scanner - Jamet1337</title>
	<meta name="description" content="Subdomain Scanner">
<meta name="viewport" content="initial-scale=1.0">
    <meta name="keyword" content="Subdomain Scanner,Tools Online, Subdomain Scanner Online">
    <link href="https://fonts.googleapis.com/css?family=Skranji|Play" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<style type="text/css">
		
		html{
			background: #333333;
		}
		textarea:hover{
			border:2px solid #33a7ff;
			color: white;
			border-radius: 4px 4px;	
		}
		input:hover{
			border:2px solid #33a7ff;
			color: black;
			border-radius: 4px 4px;	
		}
		h1{
			font-family: Skranji;
		}
		@media screen and (max-width: 780px){
			h1{
				width: auto;
				float: none;
			}
			p{
			font-family: Skranji;
		}
		@media screen and (max-width: 780px){
			p{
				width: auto;
				float: none;
			}
			.url{
				width: auto;
				float: none;
			}
			textarea{
				width: auto;
				float: none;
			}
			input{
				width: auto;
				float: none;
			}

		}
	
	</style>
	<center>
			<h1><font color="white">Subdomain Scanner By Jamet1337 </h1>
			<p>Kontak : wa.me/085654869732</p>
			<p>Indonesian Cyber Team - CytoXploit - Clan 1337</p>
</center>
<br>
<form action='<?= $_SERVER['PHP_SELF'] ?>' method='POST'>
<center>
<input type='text' name='url' style="width: 55%; height:30px; border-radius: 4px 4px;" placeholder="site.com">
</center>
<br>
<center><input type='submit' name='exe' value="Scanning" style="width: 300px;">
</center>
<br>


</form>
</div>
   <?php
    if(isset($_POST['exe'])){

      $url=$_POST['url'];
      $urlData = 'http://jamet1337.ml/api/subdo.php?url='.$url;
      $result = file_get_contents($urlData);
      $resultJson = json_decode($result, TRUE);

    ?>

 <center>
<textarea name='path' placeholder="Result Here" style="width: 80%; color: white; height: 250px; border:2px solid green; border-radius: 4px 4px; background: #444444;"><?= $resultJson['hasil']; ?></textarea>
</center> 

    <?php } ?>

</body>
</html>
