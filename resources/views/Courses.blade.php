<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='css/app.css' type='text/css' rel='stylesheet'>
     <link href="css/canvas.css" type='text/css' rel= 'stylesheet'>
     <link href="css/Computer_Science.css" type='text/css' rel= 'stylesheet'>
     <link href="css/css/bootstrap.min.css" type="stylesheet" rel="text/css"> 
      <link href="css/fontawesome/css/all.css">
</head>
<body>
@include('include.navbar')
@include('Computer_Science.Header')
<div class=" container Cs-Courses ">
  <div class=" container row">
      <div class="col-md-3">
         <ul class="card bg-dark text-center">
         <li><a href="">Programming</a></li>
         <li><a href="">Information technology</a></li>
         <li><a href="">Circuit Theory</a></li>
         <li><a href="">x h</a></li>
         <li><a href="">Circuit Theory</a></li>
         <li><a href="">Circuit Theory</a></li>
         <li><a href="">comm skills</a></li>
         <li><a href="">Discrete mathematics</a></li>
        <div class= " p-2 text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. S
              apiente harum hic consequatur! Quam impedit aut voluptas dolorum? Adipisci culpa obcaecati cupiditate 
              deleniti voluptatibus eveniet minima dolorum, et aspernatur optio repellendus.
           </div>
         </ul>
      </div> 
      <div class="col-md-7 col-sm-7 ">
          <ul class="well text-success"><b>These are questions on pseudocode for beginners </b></ul>
          <ul>
              1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, officiis. hello</p>  
              
          </ul>
          <ul>
              2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">A</p>  
              
          </ul>
          <ul>
              2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">A</p>  
              
          </ul>
          <ul>
              2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">A</p>  
              
          </ul>
          <ul>
              2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">A</p>  
              
          </ul>
          <ul>
              2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi cumque ab.
              Lorem ipsum dolor sit amet. <br>
              <b>a)</b>lorem4 jd <br>
              <b>b)</b>lorem4 jd <br>
              <b>c)</b>lorem4 jd <br>
              <b>d)</b>lorem4 jd <br>
                <button id="View">View Anwser</button>
                <p class="Answer text-center">A</p>  
              
          </ul>
          
         
      </div>
      <div class="col-md-3-sm-3">
      
      </div>
  </div>
</div>
 @include('include.footer')
</body>
<script src="js/app.js"></script>
<script src= "js/bootstrap.js"></script>
<script src="js/jquery-3.3.1.min.js" ></script>
<script>
  $(document).ready(function(){
          
    $('button').click(function()
    {
        $('.Answer').toggle(1000);
        $('.Answer').css({'background-color': 'yellow'})

    });
          
    
 });
  
</script>
<script>


    //   function Answer()
    // {
    // //   let a= document.querySelectorAll('.Answer');
    // //    a[1].style.backgroundColor
    // //   document.querySelectorAll(".Answer").style.display="none";
    //     // let x = document.getElementById("Answer");
    //     if(x.style.display==='none')
    //     {
    //         x.style.display='block';
    //         x.style.backgroundColor="yellow"
    //     }
    //     else
    //     {
    //         x.style.display="none"
    //     }
    
    // }

</script>
 
</html>