<!DOCTYPE html>
<html>
   <head>
      <title>INI JUDUL YANG SANGAT KEREN</title>
	  <meta charset="utf-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css"/>
   </head>
   <body>
       <header> 
	       <a href="index.php" class="logo">MyKitchen<span>.</span></a>
		      <div class="menuToggle" onclick="toggleMenu();"></div>
			 <ul class="navigation">
			   <li><a href="<?=base_url()?>index.php" onclick="toggleMenu();">Home</a></li>
			   <li><a href="<?=base_url()?>index.php/About" onclick="toggleMenu();">About</a></li>
			   <li><a href="<?=base_url()?>index.php/Menu" onclick="toggleMenu();">Menu</a></li>
			   <li><a href="<?=base_url()?>index.php/Member" onclick="toggleMenu();">Our Member</a></li>
			   <!-- <li><a href="Recipe.php" onclick="toggleMenu();">Recipe</a></li> -->
			   <li><a href="<?=base_url()?>index.php/Contact" onclick="toggleMenu();">Contact Us</a></li>
			 </ul>
	   </header>