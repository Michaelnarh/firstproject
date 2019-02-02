
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="chrome://resources/css/text_defaults_md.css">
     <link href="css/canvas.css" type='text/css' rel= 'stylesheet'>
     <link href="css/app.css" type='text/css' rel= 'stylesheet'>
  <title> </title>
</head>
<body>
<nav class="">
    <div class="navbrand">
     <a href="/"class="navbar navbar-brand">Fonton.com</a>
       <button class="navbar-toggler"data-toggle="collapse" data-target="#Colap"> 
          <span class="data-toggle-icon"></span>
        </button>
        <div class="list-group">
        <ul class="Colleges">
        <div class ="dropdown">
           <div class="btn-group dropdown-toggle scisa" data-toggle="dropdown"><li> <a href="#" > College of Science  | </a>
           </div>
             <ul class="dropdown-menu bg-success">
               <a href="/Computer_Science"  class="dropdown-item">Computer Science</a>
               <a href="#"  class="dropdown-item"> Mathematics</a>
               <a href="#"  class="dropdown-item">Biological Science</a>
               <a href="#"  class="dropdown-item">Statistics</a>
               <a href="#"  class="dropdown-item">Optometry</a>
               <a href="#"  class="dropdown-item">Physics</a>
               <a href="#"  class="dropdown-item">Chemistry</a>
               <a href="#"  class="dropdown-item">Biology</a>
             </ul>
              </li>
          </div>
          <div class="dropdown">
         
           <li class="  btn-group data-toggle" data-toggle="dropdown">  <a href="#"> College of Engineering  |</a> 
           <ul class="dropdown-menu bg-success">
               <a href="#"  class="dropdown-item">Electrical & Electronics</a>
               <a href="#"  class="dropdown-item"> Civil</a>
               <a href="#"  class="dropdown-item">Biomdical</a>
               <a href="#"  class="dropdown-item">Chemical</a>
            </ul>
           </li>
           </div>
           <li> <a href="#"> Facaulty of Art and Industry  | </a></li>
           <li> <a href="#"> Facaulty of Sociology   |</a></li>
           <li> <a href="#"> School Medical Sciences  | </a></li>
           <li> <a href="#"> Facaulty of Agriculture  </a></li>
        </ul>
        </div>
 </nav>
@section('carousel')
@show

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/app.js"></script>
<script src= "js/bootstrap.js"></script>
<script>
     $("#mycarousel").carousel();
 
 </script>
</html>


