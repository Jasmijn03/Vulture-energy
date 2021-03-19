
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="J vd HAM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/Homepage.css">
  </head>
	<body>
       <header>
          <section class="item-logo"> <a href="Homepage.html"><img src="images/Gietje2.0kaas.png" alt="Logo" height="80px"; width="80px";></a></section>
        <nav class="item-navbar">
            <ul>
                    
                       <li><a href="Producten.html">Producten</a></li>
                       <li><a href="Aanbiedingen.html">Aanbiedingen</a></li>
                       <li><a href="Artiesten.html">Artiesten</a></li>
                       <li><a href="Contact.html">Contact</a></li>
                       <li><a href="Over ons.html">Over ons</a></li>
                             </ul>
           </nav>
  </header>
  <br>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/Snowboard.jpg" alt="Jane" style="width: 100%;">
        <div class="container">
          <h2><img src="images/switzerland.png" height="20px"; width="20px";>   Zermatt Open</h2>
          <p class="title"><img src="images/calender.png" height="20px"; width="20px";>    15-16 Mei 2021</p>
          <p><img src="images/SNowboard.png" height="20px"; width="20px";>    Snowboarding</p>
          <br>
          <form action="ZermattOpen.html"
          <p><button class="button">Evenement bekijken</button></p></form>
          <br>
        </div>
      </div>
    </div>
  <div class="column">
      <div class="card">
        <img src="images/mountainbike.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2><img src="images/germany.png" height="20px"; width="20px";>      Moutainbike, Tiergarten</h2>
          <p class="title"><img src="images/calender.png" height="20px"; width="20px";>    28-29 April 2021</p>
          <p><img src="images/mountainbikeicon.png" height="20px"; width="20px";>  MTB</p>
          <br>
          
          <p><button class="button">Evenement bekijken</button></p>
          <br>
        </div>
      </div>
    </div>
    
  <div class="column">
      <div class="card">
        <img src="images/Rally6.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2><img src="images/cyprus.png" height="20px"; width="20px";>    Rally Cyprus </h2>
          <p class="title"><img src="images/calender.png" height="20px"; width="20px";>    7-10 Juni 2021</p>
          <p><img src="images/rallycaricon.png" height="20px"; width="20px";>   Rally</p>
          <br>
          <form action="GermanyTiergarten.html"
             <p><button class="button">Evenement bekijken</button></p>
             <br>
        </div>
      </div>
    </div>
  </div> 
  <canvas id="myCanvas">
    Your browser does not support the canvas tag.
    </canvas>
    
    <script>
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "red";
    ctx.fillRect(20, 20, 75, 50);
    
    
    ctx.globalAlpha = 0.2;
    ctx.fillStyle = "blue"; 
    ctx.fillRect(50, 50, 75, 50); 
    ctx.fillStyle = "green"; 
    ctx.fillRect(80, 80, 75, 50);
    </script> 
      
      <canvas id="myCanvas2">
        Your browser does not support the canvas tag.
        </canvas>
        
        <script>
        var c = document.getElementById("myCanvas2");
        var ctx = c.getContext("2d");
        ctx.fillStyle = "red";
        ctx.fillRect(80, 20, 75, 50);
        
        
        ctx.globalAlpha = 0.2;
        ctx.fillStyle = "blue"; 
        ctx.fillRect(50, 50, 75, 50); 
        ctx.fillStyle = "green"; 
        ctx.fillRect(20, 80, 75, 50);
        </script>   
        
        <section id="item-strawberry">
          <div class="shadow"><img src="images/Strawberry.png" alt="Strawberry" height="300px"; width="400px";></div>
          
        </section>
        <section class="item-blikjes">
          <img src="images/Tropical.png" alt="Tropical" height="300px"; width="400px";>
          <img src="images/Lemon.png" alt="Lemon" height="300px"; width="400px";>
          <img src="images/Apple.png" alt="Apple" height="300px"; width="400px";>
        </section>
   
           
                       
     
	
  </body>
</html>