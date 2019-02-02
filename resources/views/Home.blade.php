@extends('include.master')
 @section('carousel')
    </section>
         <div id="mycarousel" class="carousel" data-ride="carousel" >
         <ol class="carousel-indicators">
           <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
           <li data-target="#mycarousel" data-slide-to="1"></li>
           <li data-target="#mycarousel"  data-slide-to ="2"></li>
         </ol>
     <div class="carousel-inner slide">
            <div class="carousel-item active">
                <img src="images/sunset.jpg" width="100%" height="200px" alt="desert" class="img-responsive">
                   <ol class="carousel-caption t">
                    <h3 style="font-family: coiny,cursive"class=" animated bounceinRight">Post Your comments here</h3>
                      <p class="animated bounceinRight"style="">We appreciate your posts and comments 
                           We want to see more post from you!</p>
                    </ol>
            </div>
             <div class="carousel-item">
                 <img src="images/rock.jpg"width="100%" height="200px" alt="apple" class="img-responsive">
                   <ol class="carousel-caption">
                    <h5>Make money the first to use</h5>
                    </ol>
             </div> 
            <div class="carousel-item "> 
                <img src="images/rock.jpg"width="100%" height="200px" alt= "sweet-love" class="img-responsive">
                    <ol class="carousel-caption">
                    <h3 style="font-family: coiny,cursive"class="animated bounceinRight"> Academia Difference</h3>
                      <p class="animated bounceinRight"style="">Learn in its style</p>
                    </ol>
             </div>
     </div>      
        <div>
            <a class="left carousel-control" href="#mycarousel" data-slide="prev">
            <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#mycarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
  </div>
 @stop
