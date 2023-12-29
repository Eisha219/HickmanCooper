<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
.customer-banner-section{
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 60vh;  
    background-color: #0109C49E;
}
.sub-banner{

  width:80% ;height:50vh;top:-30px;position:relative;
  border: 4px solid #0109C4;
  
}
.carousel-control-prev,
.carousel-control-next {
    background-color: #0109C49E; /* Replace with your desired color */

    
}
.carousel-controls {
        position: absolute;
        top: 100%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .carousel-controls button {
      position: absolute;
      margin-left: -140px;


   
    }
    .carousel-controls  .carousel-control-next-icon{
      position: absolute;
      margin-right:-250px;

    }

    .carousel-controls button span {
        color: red!important
    }
  

/* Change the color of the carousel control icons */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #0109C4; /* Replace with your desired color */
    color: red; /* Replace with the desired icon color */

}
.card-body .custom-list {
    list-style: disc; /* or list-style-type: disc; */
    padding-left: 20px; /* Adjust the padding as needed */
    color: red!important;
    list-style-type: disc!important;
}
@media (max-width: 1200px) {
    .solution-card .card-body {
        max-height: 1000px; /* Adjust as needed */
    }
}

@media (max-width: 992px) {
    .solution-card .card-body {
        max-height: 800px; /* Adjust as needed */
    }
}
.customer-box {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
        }

        .customer-image {
            border-radius: 50%;
            margin:30px
        }

     

        .customer-review {
            margin-top: 10px;
        }
        .customer-vendor .customer-image{
    margin-top: 5px;
        }
      
  </style>
<body>

  
<!------------------------- Navbar section start----------------- -->
 <?php
 include_once 'nav.php'
?>

    <!------------------------- Banner section start----------------- -->
    <section class="about banner-section">
    <div class="container">
    <div class="d-flex justify-content-center align-items-center">
    <div class="col-8">
    <div class="text-center banner-description">
      <h4 class="mb-4 banner-heading fs-2  mt-0 ">About HickmanCooper - Kenyan IT Company</h4>
      <hr class="dropdown-divider w-25 mx-auto mb-5">
    </div>
  </div>

  </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-8">
    <div>
<img src="./assets/images/about/it staff 1.svg" alt="">
<p class="my-4">
 Founded in 2015, HickmanCooper is a provider of IT <span>consulting</span>   and 
 <span> software development services</span>  
 Having started as a small IT product firm, We switched to full IT 
services in 2017 and ever since, we have helped both non-IT organizations and software 
product companies improve business performance and quickly win new 
customers.  
     </p>
    </div>
         </div>
        <div class="col-3 mx-2 banner-right">
            <h3>About us</h3>
            <p><span>HickmanCooper in numbers</span></p>
            <p>Whom we serve</p>
            <p>Our service map</p>
            <p>Industries we serve</p>
            <p>Solution competencies</p>
            <p>Our technological expertise</p>
            <p>Why HickmanCooper</p><br>

        </div>
    </div>
  </div>
</section>


    <!------------------------- Number section start----------------- -->
    <section class="number">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">HickmanCooper in Numbers</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    <div class="container-fluid number">
        <div class="row">
            <div class="col-2 col-md-2 col-sm-12">
                <div class="left-vertical">
                    <h1><span>8</span></h1>
                    <p class="text-center">years in IT</p>
                </div>
           </div>
           <div class="col-2 col-md-2 col-sm-12">
                <div class="left-vertical">
                    <h1><span>29</span></h1>
                    <p class="text-center">IT professionals</p>
                </div>
           </div>
           <div class="col-2 col-md-2 col-sm-12">
                <div class="left-vertical">
                    <h1><span>2634</span></h1>
                    <p class="text-center">success stories</p>
                </div>
           </div>
           <div class="col-2 col-md-2 col-sm-12">
                <div class="left-vertical">
                    <h1><span>30+</span></h1>
                    <p class="text-center">industries covered</p>
                </div>
           </div>
        </div>
    </div>
   
</div>

    </section>

    <!-------------------------Serve section start------------------- -->
    <section class="serve">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Whom we Serve</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-3">
            <div class="card" style="height:160px" class="mb-sm-3">
                <div class="card-body">
                <h5 class="card-title card-heading text-start">Non-IT enterprises</h5>
                    <p class="text-start">Services to improve business performance, optimize customer service, and tap in digital transformation</p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 offset-md-5">
            <div class="card" style="height:160px" >
                <div class="card-body">
                <h5 class="card-title card-heading text-start">Software product companies</h5>
                    <p class="text-start">Services to help bring new products to the market and win customers fast</p>
                </div>
            </div>
            </div>
        </div>
     
       </div>
    </div>
 
   
</div>
    </section>

    <!-------------------------Customer section start------------------ -->
     <section class="customer">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h3 class="fs-4 fw-bolder">Our Customers</h4>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    <p>We pride ourselves to have collaborated with companies from East and Central Africa and have 78% of our revenue generated from contracts lasting for more than 2 years. Some of our prominent clients include:</p>
    </div>
    <hr class="w-100 " style="height:100px">
    <div class="col-12 text-start pb-5 my-4">
            <h3 class="fs-4 fw-bolder">What Our Customers say</h4>
     </div>
     <div class="customer-banner-section">
    <div class="container bg-light sub-banner ">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
<div class="carousel-inner">
  <div class="carousel-item active ">
      <img src="./assets/images/about/testifier picture.svg" class="m-4" alt="...">
      <div class="d-flex justify-content-start align-items-center">
      <div class="ms-3">
        <h3>Victor B Kiara</h3>
        <h6>CTO</h6>
        <h4>FLUTTER WAVE</h4>
    </div>
    
    </div>
    
      <div class="carousel-caption d-none d-md-block py-4">
        <p class="text-dark align-items-center justify-content-center ">
          “Over the years,  HickmanCooper has
           become an indispensable part of our team. We are pleased to work with HickmanCooper
           and would recommend them as a valued and trustworthy business partner” 
          </p>
          <a href="" class="float-md-end float-sm-right mt-3">Read Original</a> 
      </div>
    </div>
    <div class="carousel-item  ">
      <img src="./assets/images/about/testifier picture.svg" class="m-4" alt="...">
      <div class="d-flex justify-content-start align-items-center">
      <div class="ms-3">
        <h3>Victor B Kiara</h3>
        <h6>CTO</h6>
        <h4>FLUTTER WAVE</h4>
    </div>
    
    </div>
    
      <div class="carousel-caption d-none d-md-block py-4">
        <p class="text-dark align-items-center justify-content-center ">
          “Over the years,  HickmanCooper has
           become an indispensable part of our team. We are pleased to work with HickmanCooper
           and would recommend them as a valued and trustworthy business partner” 
          </p>
          <a href="" class="float-md-end float-sm-right mt-3">Read Original</a> 
      </div>
    </div>
    <div class="carousel-item ">
      <img src="./assets/images/about/testifier picture.svg" class="m-4" alt="...">
      <div class="d-flex justify-content-start align-items-center">
      <div class="ms-3">
        <h3>Victor B Kiara</h3>
        <h6>CTO</h6>
        <h4>FLUTTER WAVE</h4>
    </div>
    
    </div>
    
      <div class="carousel-caption d-none d-md-block py-4">
        <p class="text-dark align-items-center justify-content-center ">
          “Over the years,  HickmanCooper has
           become an indispensable part of our team. We are pleased to work with HickmanCooper
           and would recommend them as a valued and trustworthy business partner” 
          </p>
          <a href="" class="float-md-end float-sm-right mt-3">Read Original</a> 
      </div>
    </div>
  </div>
  <div class="carousel-controls">
  <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
 
</div>
    </div>
     </div>
    
    </div>
 
   
</div>
    </section>

 
    <!-------------------------Our Solution section start----------------- -->
    <section class="Solution-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Our Services Map</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    <div class="container">
    <div class="row">
 <div class="col-lg-4 col-md-6 col-12 solution-card ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body" >
    <h5 class="card-title card-heading text-dark fw-bolder">IT Consulting</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Software Development</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Testing and QA</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Application Services</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Data Analytics</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Infrastructure Services</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Infrastructure Services</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>
<div class="col-md-4 col-12 ">
 <div class="card mb-3 mb-3" style="  height:18rem ;border-top: 4px solid #0109C4;">
 <div class="card-body">
    <h5 class="card-title card-heading text-dark fw-bolder">Infrastructure Services</h5>
    <div class="card-text card-paragraph " >
        <p style=" padding-left: 20px; custom-list ">
            In-depth analysis of your IT needs, challenges, and the existing IT ecosystem.<br>
            Expert assistance in achieving the goals of IT modernization, IT infrastructure optimization and ongoing management, cloud migration.<br>
            Digital transformation of business workflows.
        </p>
    </div>
</div>


</div>
</div>

    </div>
    </div>
</section>

    <!------------------------Industry Hickman Serves----------------- -->
<section class="Serves-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Industries HickmanCooper Serves</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    <div class="container mt-5">
        <div class="row">
      <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/bank 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/Group.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Healthcare</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/manufacturing.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Manufacturing</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/Group.svg" alt="" class="mx-auto" style="width:80px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/oil-and-gas-red 1.svg" alt="" class="mx-auto" style="width:80px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/transportation 1.svg" alt="" class="mx-auto" style="width:80px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/professional-services 1.svg" alt="" class="mx-auto" style="width:80px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
       <div class="col-md-3 mb-3 col-sm-mx-auto">
          <div class="card" style="width:250px; height:180px;border:none;border-top: 4px solid #0109C4;">
          
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/Telecoms 1.svg" alt="" class="mx-auto" style="width:80px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">BFSI</div>
       
       </div>
      </div>
       </div>
     
        </div>
    </div>
</section>

    <!-------------------------Solution cover section----------------- -->
<section class="Solution-cover-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Solutions We Cover</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
            <p>With over 8 years in Information Technology, we have built up expertise in dozens of domains, including: </p>
          </div>
          <div class="container mt-5">
        <div class="row">
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Enterprise Applications</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">ERP</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">CRM</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">HR Software</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">eLearning Software</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">eCommerce</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Mobile Apps</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Collaboration</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Fleet Management</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Data Analytics</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Web Portals</div>
    
         </div>
        </div>
          </div> <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:none">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">ITSM</div>
    
         </div>
        </div>
          </div>
          
        </div>
    </div>
    </div>
</section>

     <!-------------------------Capabilities section----------------- -->
     <section class="Capabilties-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Our Capabilities and Technological Expertise</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
            <p class="w-75">We are proud of having 28 IT professionals on board, 22% of whom are senior-level,
               who are well-versed in the Tech Industry and Application environments. 
               We continue to grow yearly. Additionally, we are working on a partner network of five
                companies with 1500+ employees, which, combined with our strong technological expertise,
                 will cement all the development 
              and infrastructure needs of midsized and large organizations. </p>
          </div>
</section>

     <!-------------------------Technology partnership----------------- -->
   <section class="Technology-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h4 class="mb-4">Our Technology partnership</h4>
            <p class="w-75">Throughout our history, we have developed a number of partnerships with technology leaders, 
              who highly attested our technical competencies 
              and the ability to understand our customers’ needs and translate them into quality services </p>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand3.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand2.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand4.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand5.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
              <div class="col-lg-1 col-md-2 col-sm-3">
              <img src="./assets/images/about/brand7.svg" alt="" class="mx-auto" style="width:100px;height:110px">
              </div>
            </div>
          </div>
          <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h4 class="mb-4">We eagerly put in use IT innovations</h4>
            <p class="w-75">Throughout our history, we have developed a number of partnerships with technology leaders, 
              who highly attested our technical competencies 
              and the ability to understand our customers’ needs and translate them into quality services </p>
          </div>
          <div class="container mt-5">
     <div class="row ">
     <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/big_data 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Big Data</div>
       
       </div>
      </div>
      
    </div>
       <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/ai 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Artifical Intelligence</div>
       
       </div>
      </div>
      
    </div>
    <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/iot.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Internet of Things</div>
       
       </div>
      </div>
      
    </div>
    <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/computer-vision 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Computer Vision</div>
       
       </div>
      </div>
      
    </div>
       
       
     
     </div>
     <div class="row ">
     <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/vr 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Augmented Reality</div>
       
       </div>
      </div>
      
    </div>
       <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/data-science 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Virtual Reality</div>
       
       </div>
      </div>
      
    </div>
    <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/blockchain.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Block Chain</div>
       
       </div>
      </div>
      
    </div>
    <div class="col-lg-2 col-md-3 mb-3 col-sm-mx-auto ">
       <div class="card" style="border:none;border-top: 4px solid #0109C4;">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
          <img src="./assets/images/about/big_data 1.svg" alt="" class="mx-auto" style="width:100px;height:110px">
          </div>
          <div class="text-center mt-3 fw-bold">Big Data</div>
       
       </div>
      </div>
      
    </div>
       
       
     
     </div>
    </div>
</section>
      <!-------------------------pricing policy----------------- -->
      <section class="Technology-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h4 class="mb-4">Our Pricing Policy</h4>
            <p class="w-75">
            Depending on a project and the nature of the delivered  service, we resort to one of the following pricing models
            </p>
          </div>
          <div class="container mt-5">
        <div class="row">
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:2px solid black">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Fixed Price</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:2px solid black">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Time & Material</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:2px solid black">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Consumption-based pricing</div>
    
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card" style="width:250px; height:85px;border:2px solid black">
        <div class="card-body">
          <div class="text-center mt-3 fw-bold">Monthly subscription fee</div>
    
         </div>
        </div>
          </div>
         
          
        </div>
    </div>
  <div class="row">
    <div class="col-10 "> 
      <div class="container customer-box col-lg-8 me-0">
      <div class="row ">
        <div class="col-lg-4">
        <img src="./assets/images/about/cus.svg" alt="" width="80" height="80" class="customer-image">
       <div class="customer-info">
            <h4>Hickman O. Alela</h4>
            <p>Director HickmanCooper</p>
        </div>
        </div>
    
  <div class="col-lg-8">
        <div class="customer-review ">
            <p class="my-5">
            “It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. 
            Low rates tend to result in excessive hours spent. We, at HickmanCooper,
             don't practice reducing IT service costs by hiring low-paid employees. Instead, we raise productivity, i.e., deliver more in less time. It results in a lower cost of output (new application functionality, 
            stable infrastructure, user issues resolved).” 
            </p>
        </div>
        </div>
    </div>
    </div>
  </div>
  </div>
   <p>To increase productivity and provide for the project cost reduction for our customers, we invest a part of our revenue in</p>
   <ul class="list-unstyled ">
    <li class="my-2">Quality management and process optimization.</li>
    <li  class="my-2">Adoption of new Technologies</li>
    <li  class="my-2">Employee training and further education  </li>
    <p class="my-2">In addition, to implement software solutions faster and optimize the solutions’ Total Cost of Ownership, we resort to using the following technologies and methodologies</p>
    <ul  class="list-unstyled">
      <li  class="my-2">Cloud-native architecture. </li>
      <li  class="my-2">DevOps and the implementation of CI/CD pipelines.</li>
      <li  class="my-2">Test automation.</li>
      <li  class="my-2">Application Performance Management.</li>
      <h4 class="mb-4 fw-bolder">What Our Customers Get Choosing HickmanCooper as a Vendor</h4>
     

    </ul>
   </ul>
   <div class="container customer-vendor ">
     <div class="row">
    <div class="col-12 "> 
      <div class="container customer-box col-lg-8 me-0">
      <div class="row ">
        <div class="col-lg-3">
        <img src="./assets/images/about/vendor-1.svg" alt="" width="80" height="80" class="customer-image">
       <div class="customer-info">

        </div>
        </div>
    
  <div class="col-lg-9">
        <div class="customer-review ">
            <p class="my-5">
            <h4 class="my-5"> A quality-first company</h4>
            We provide only high-quality software and services to our clients.
             We guarantee you will get tangible business value from your IT investments,
              enjoy healthy project processes, professional and motivated teams, effective 
              communication between HickmanCooper, your teams, and stakeholders.
            </p>
            <p>To achieve this, HickmanCooper has developed a comprehensive quality management system that resides in quality-centered leadership, committed employees, transparent KPIs, data-driven decision making, continuous process improvement, 
                quality controls throughout the SDLC, and more. </p>
        </div>
        </div>
    </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-12 "> 
      <div class="container customer-box col-lg-8 me-0">
      <div class="row ">
        <div class="col-lg-3">
        <img src="./assets/images/about/vendor-2.svg" alt="" width="80" height="80" class="customer-image">
       <div class="customer-info">

        </div>
        </div>
    
  <div class="col-lg-9">
        <div class="customer-review ">
            <p class="my-5">
            <h4 class="my-5"> Top-notch security</h4>
            Since we went into business, there has never been any security breaches in our end. We guarantee full protection of our customers’ data. We have invested heavily in a mature information security system compliant with ISO 27001 and sustainable security culture, retain top security experts on board and follow the requirements and recommendations. Our approach builds on diligent IT asset management, secure environment, strict access control, strong encryption algorithms, 
            continuous IT infrastructure monitoring, and the “security is everyone’s responsibility” mindset.  
            </p>
           
        </div>
        </div>
    </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-12 "> 
      <div class="container customer-box col-lg-8 me-0">
      <div class="row ">
        <div class="col-lg-3">
        <img src="./assets/images/about/vendor-4.svg" alt="" width="80" height="80" class="customer-image">
       <div class="customer-info">

        </div>
        </div>
    
  <div class="col-lg-9">
        <div class="customer-review ">
            <p class="my-5">
            <h4 class="my-5"> Fast development while retaining application stability</h4>
           <p> We established a set of management and technology practices that allows us to release new application versions every 2–3 weeks and implement minor updates up to several times a day. We achieve that due to an iterative approach to development, resorting to Agile project management practices, and relying on 
            cloud-native architectures and modern approaches to infrastructure management. 
            continuous IT infrastructure monitoring, and the “security is everyone’s responsibility” mindset.  
            </p>
           
        </div>
        </div>
    </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-12 "> 
      <div class="container customer-box col-lg-8 me-0">
      <div class="row ">
        <div class="col-lg-3">
        <img src="./assets/images/about/vendor-3.svg" alt="" width="80" height="80" class="customer-image">
       <div class="customer-info">

        </div>
        </div>
    
  <div class="col-lg-9">
        <div class="customer-review ">
            <p class="my-5">
            <h4 class="my-5"> Commitment to excellence</h4>
            Since we went into business, there has never been any security breaches in our end. We guarantee full protection of our customers’ data. We have invested heavily in a mature information security system compliant with ISO 27001 and sustainable security culture, retain top security experts on board and follow the requirements and recommendations. Our approach builds on diligent IT asset management, secure environment, strict access control, strong encryption algorithms, 
            continuous IT infrastructure monitoring, and the “security is everyone’s responsibility” mindset.  
            </p>
           
        </div>
        </div>
    </div>
    </div>
  </div>
  </div>
  <div class="customer-box">
  <h5 class="my-5 fw-bolder">
  Looking for a Partner to support Your Business Growth or Monetize your Idea?</h5>
  <div class="d-flex justify-content-between">
 <p class="w-50">HickmanCooper will help you improve your business operations with an optimal service or assist you in launching a product that
would win customers fast </p>
<a href="" class="main-btn">Discuss my needs</a>
</div>
  </div>

 </div>
  </section>
          

     <!------------------------- footer section start---------------------- -->
 <?php
 include_once 'footer.php'
?>


</body>
</html>