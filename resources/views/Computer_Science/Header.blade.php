
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Doc</title>
     <link href='css/app.css' type='text/css' rel='stylesheet'>
     <link href="css/canvas.css" type='text/css' rel= 'stylesheet'>
     <link href="css/Computer_Science.css" type='text/css' rel= 'stylesheet'>
     <link href="css/css/bootstrap.min.css" type="stylesheet" rel="text/css"> 
      <link href="css/fontawesome/css/all.css">
 </head>
 <body>
   @yield('content')  
 <div class="container cs">
        <div class="Computer_Science">
            <li class="btn-group data-toggle dropdown" data-toggle="dropdown"><a href="#">First Year</a></li>
                   <ul class="dropdown-menu bg-success">
                       <a href="/Courses"class="dropdown-item">First_Semester</a>
                       <a href=""class="dropdown-item">Second_Semester</a>
                   </ul>
            <li class="btn-group data-toggle dropdown" data-toggle="dropdown"><a href="#">Second Year</a></li>
                  <ul class="dropdown-menu bg-success">
                       <a href=""class="dropdown-item">First_Semester</a>
                       <a href=""class="dropdown-item">Second_Semester</a>
                   </ul>
            <li class="btn-group data-toggle dropdown" data-toggle="dropdown"><a href="#">Third Year</a></li>
                    <ul class="dropdown-menu bg-success">
                       <a href=""class="dropdown-item">First_Semester</a>
                       <a href=""class="dropdown-item">Second_Semester</a>
                   </ul>
            <li class="btn-group data-toggle dropdown" data-toggle="dropdown"><a href="#">Fourth Year</a></li>
                   <ul class="dropdown-menu bg-success">
                       <a href=""class="dropdown-item">First_Semester</a>
                       <a href=""class="dropdown-item">Second_Semester</a>
                   </ul>
        </div>
    </div>
      <div class="container">
       <div class="row">
          <div class="col-md-3">
           <div class="card bg-dark mt-2 ">
               @section('Links')
                 <h3>Related Links</h3>
               @show
           </div>
              
          </div>
          <div class="col-md-7">
              @section('Questions')
              <li>hello</li>
              <li>hello</li>
              <li>hello</li>
              <li>hello</li><li>hello</li>
              @show
          </div>
          <div class="col-md-2">
             <div class="card">
               @section('Advertisement')
               @show
             </div>
      </div>     
          </div>
      </div>
 </body>
 <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/app.js"></script>
<script src= "js/bootstrap.js"></script>
<script>

$(document).ready(function(){
          
          $('button').click(function()
          {
              $('.Answer').toggle(1000);
              $('.Answer').css({'background-color': 'yellow'})
      
          });
                
          
       });</script>
 </html>

 
   