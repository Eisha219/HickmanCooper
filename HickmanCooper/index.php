<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
  .explore .card img{
        margin-top: 4rem;
        text-align: center;
         max-width: 220px;
         height: 80px;
    
}
.explore .Learn-more-btn{
    margin-top: 80px!important;
}
.explore .UX-UI-btn{
    margin-top: 40px!important;
}

.solution{
     background: #0109C4;
    background-image: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('./assets/images/home/body-graphic 2.svg');
}
.choose-us{
  background: #E7ECFF;;
}
.success-story-bg{
  background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 40vh;  
}
.success-story-bg-1{
  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('./assets/images/home/Rectangle 10.svg');
}
.success-story-bg-2{
  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('./assets/images/home/Rectangle 11.svg');
}

.success-story small{
position: relative;
top:80px;
}
.Secondary-button{
  padding-left: 630px;
  position: relative;
}
.second-btn{
    background: #fff;
    border-radius:5px;
    color:#0109C4;
    padding: 10px 18px;
    line-height: 21px;
    font-weight: 500;
    transition: 0.3s all;
    border: 0.2rem solid #0109C4;
  
    }
    .second-btn:hover{
        background: #0109C4;
        color:#fff;
        border: 0.2rem solid var(--primary-color);
      
    }
    /* ---------industry-expertise styling------- */
    .industry-expertise .img-icon{
      left: 30px!important;
      position: relative;
    }
    .industry-cards{
       width:250px;
       height:150px;  
       border:none;
       box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.3);
    }
 /* ---------Consultation styling------- */
    .form-control-custom {
      width: 100%;
      padding: 0.75rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control-custom:focus {
      border-color: #0109C4;
      box-shadow: 0 0 0 0.25rem rgba(1, 9, 196, 0.25);
    }
</style>
<body>

  
<!------------------------- Navbar section start----------------- -->
 <?php
 include_once 'nav.php'
?>

<!------------------------- Home Banner section start----------------- -->
<section class="home banner-section">
    <div class="container">
    <div class="d-flex justify-content-center align-items-center">
    <div class="col-8">
    <div class="text-center banner-description">
      <h1 class="mb-4 banner-heading ">Software consulting and solutions for your digital transformation</h1>
      <hr class="dropdown-divider w-25 mx-auto mb-5">
      <p class="banner-paragraph mb-5">Since 2015, <span>HickmanCooper</span> has built and deployed powerful, adaptable software solutions to our customers. Our solutions have satisfied their needs of today and unlocked their opportunities of tomorrow.</p>
      <a href="#" class="main-btn my-5">Let’s Realize Your Ideas</a>
    </div>
  </div>
  </div>
    </div>
</section>

 
    <!------------------------- Exploring our section start----------------- -->
    <section class="explore">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Explore Our Offering</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    <div class="row">
    <div class="col-md-3 col-12 ">
 <div class="card mb-3 mb-3" style="width: 20rem; height:30rem">
 <div class="explore-img">
 <img src="./assets/images/home/explore-1.svg" class="card-img-top" alt="explore-img" >
 </div>
  <div class="card-body">
    <h5 class="card-title card-heading">Software Development</h5>
    <p class="card-text card-paragraph">We are a software development company with 10 years of business excellence,
         we develop reliable, scalable and secure software solutions for any OS, browser and device</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem;  height:30rem;">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Testing and QA</h5>
    <p class="card-text card-paragraph">We offer full-range QA and testing outsourcing services, 
      can develop your QA, Assist you in TCoE setup and evolution. we do end to end testing for mobile, 
      web and desktop application.</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem;  height:30rem">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Application Services</h5>
    <p class="card-text card-paragraph">Our experts help mid-sized and large firms build, test, protect, manage, migrate and optimize digital solutions ensuring they’re
       always up and running and achieve the optimal TCO.</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem; height:30rem">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">UI/UX Design</h5>
    <p class="card-text card-paragraph">User experience and user interface design for all types of websites, SaaS, and web/mobile apps. We combine the latest UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, 
      and impactful designs that power up businesses.</p>
         <div class="text-end card-button  UX-UI-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
   
    </div>
    <div class="row mt-5">
    <div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem; height:30rem">
 <div class="explore-img">
 <img src="./assets/images/home/explore-1.svg" class="card-img-top" alt="explore-img" >
 </div>
  <div class="card-body">
    <h5 class="card-title card-heading">IT Consulting</h5>
    <p class="card-text card-paragraph">We are a software development company with 10 years of business excellence,
         we develop reliable, scalable and secure software solutions for any OS, browser and device</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem;  height:30rem;">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Data Analytics</h5>
    <p class="card-text card-paragraph">We offer full-range QA and testing outsourcing services, can develop your QA, Assist you in TCoE setup and evolution. 
      we do end to end testing for mobile, web and desktop application.</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem;  height:30rem">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Help Desk Services</h5>
    <p class="card-text card-paragraph">Our experts help mid-sized and large firms build, test, protect, manage, migrate and optimize digital solutions ensuring they’re always up and 
      running and achieve the optimal TCO.</p>
         <div class="text-end card-button Learn-more-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12">
 <div class="card mb-3" style="width: 20rem; height:30rem">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Infrastructure Services</h5>
    <p class="card-text card-paragraph">User experience and user interface design for all types of websites, SaaS, and web/mobile apps. We combine the latest UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful designs that power up businesses.</p>
         <div class="text-end card-button  UX-UI-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
<div class="col-md-3 col-12 my-5">
 <div class="card mb-3" style="width: 20rem; height:30rem">
  <img src="./assets/images/home/testing 1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title card-heading">Cybersecurity Services</h5>
    <p class="card-text card-paragraph">User experience and user interface design for all types of websites, SaaS, and web/mobile apps. We combine the latest UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, 
      and impactful designs that power up businesses.</p>
         <div class="text-end card-button  UX-UI-btn">
          <a href="#" class="text-primary ms-5">LEARN MORE</a>
        </div>
  </div>
</div>
</div>
   
    </div>
 
 
    <div class="row justify-content-center">
          <div class="col-12 text-center pb-5 mx-auto">
            <h2 class="card-paragraph mx-auto">Can’t find what you need?</h2>
            <form class="d-flex find">
        <input class="form-control me-2" type="search" placeholder="E.g., Web Development or help desk services" aria-label="Search"> 
          </form>
          </div>
    </div>
   
</div>
    </section>

    <!-------------------------Ecosystem section start------------------- -->

 <section class="ecosystem">
    <div class="container ecosystem-section">
    <div class="row ">
        <div class="col-md-6 col-12 mt-4">
        <div class="col-12 text-start pb-5">

            <h2 class="section-title w-50 ps-4 mx-3 mt-2">Every Part oy Your IT Ecosystem Taken Care Of</h2>
            <div class="ps-4">
            <hr class="sub-heading-dropdown-divider mx-start mb-2 ps-4">
            </div>
      
          </div>
          <div>
          <p class="section-subtitle w-75 ps-4">Comprehensive care of your cloud or on-premises infrastructure and applications:</p>
          <ul class="list-unstyled ps-4">
            <div class="row">
                  <div class="col-md-6">
                    <li>Consulting</li>
                    <li>Security</li>
                </div>
                <div class="col-md-6">
                    <li>Implementation</li>
                    <li>Helpdesk Services</li>
                </div>
                <div class="col-md-6">
                    <li>Management and Support</li>
                    <li>Migration</li>
                </div>
            </div>
        </li>
         </ul>
          </div>      
        </div> 
        <div class="col-md-6 col-12  mt-lg-n4">
       <img src="./assets/images/home/ecosystem.svg" alt="" srcset=""> 
             
        </div> 
    </div>
    <div class="">
          <a href="#" class="text-primary ">LEARN MORE</a>
        </div>
   
    </div>
   
    </section>
   
    <!-------------------------Improve/innovate section start------------------ -->

    <section class="innovate">
    <div class="container ">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Improve and Innovate With The Tech Trends</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
            <p class="section-subtitle mt-4">Our team can assist you in transforming your business with the latest tech capabilities to stay ahead of the curve</p>
          </div>
    </div>
    <div class="container improve-container">
    <div class="row">
        <div class="col-md-2">
            <img src="./assets/images/home/big data 1.svg" alt="">
        </div>
        <div class="col-md-2">
            <img src="./assets/images/home/ai 1.svg" alt="">
        </div>
        <div class="col-md-2">
            <img src="./assets/images/home/computer vision 1.svg" alt="">
        </div>
        <div class="col-md-2">
            <img src="./assets/images/home/internet of things 1.svg" alt="">
        </div>
        <div class="col-md-2">
            <img src="./assets/images/home/Block chain 1.svg" alt="">
        </div>
        <div class="col-md-2">
            <img src="./assets/images/home/mixed reality 1.svg" alt="">
        </div>
    </div>
    <p>Tame your big data through robust solutions that empower data collection, storage, processing and analysis.</p>
    <div class="service-offer">
    <h5 class="card-title card-heading text-start ">SERVICE WE OFFER:</h5>
    <ul class=" ps-4">
            <div class="row">
                  <div class="col-md-6">
                    <li class="fw-bold">Consulting and implementation </li>
                    <li class="fw-bold">Support and evolution</li>
                </div>
                <div class="col-md-6">
                    <li class="fw-bold">Data governance </li>
                    <li class="fw-bold">Data security</li>
                   
            </div>
           
                </div>
                <a href=""><small class="text-primary text-end ">Find Out More</small></a>
            </div>
          
        
         </ul>
    </div>
    </div>
    
    </div>


    </section>
 
    <!-------------------------Our Solution section start----------------- -->
  <section class="solution banner-section">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title text-white">Our Sol<span class="text-dark">utions</span>  </h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
          <p class="text-white">We IT-enable all kinds of B2B , B2C interactions and internal operations</p>
    </div>
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
</section>

    <!-------------------------Why Choose us section start----------------- -->
    <section class="choose-us banner-section mt-5" style="  min-height: 50vh;  ">
    <div class="container">  
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Why Businesses Choose HickmanCooper</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-6">
           <ul class="list-unstyled">
            <li class="mb-2">
            2,634 Success stories.
            </li> 
            <li class="mb-2">1,500+ Happy clients.</li> 
           <li class="mb-2">  An inspired, close-knit team of 25 IT Specialists, including IT Consultants, project manager, technical architects, developers, QA engineers, security and DevOps engineers, AI and blockchain experts, AWS and Azure professionals.
            </li>
           </ul>
        </div>
        <div class="col-md-6 col-6">
           <ul class="list-unstyled">
            <li class="mb-2">
            Partnership with Microsoft and AWS. 
            </li> 
            <li class="mb-2"> A quality-first Approach based on a proper quality management system.</li> 
           <li class="mb-2">  Security management based on field-tested security knowledge, ever-green policies, effective processes, advanced security technology, and skilled professionals.
            </li>
           </ul>
        </div>
      </div>
    </div>
</section>

    <!-------------------------success story section start----------------- -->
  <section class="success-story">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Success stories</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12 success-story-bg success-story-bg-1">
      <p class=" card-heading" style="margin-top:90px">Software Products Development for an Image Processing Company</p>
     <small class="text-primary mb-0 ">COMPUTER VISION</small>
      </div>
      <div class="col-md-6 co-sm-12 success-story-bg success-story-bg-2 mx-5">
      <p class=" card-heading" style="margin-top:90px; max-width:90%">Development of Java Back End for a Hotel Guest Self-Service Application</p>
     <small class="text-primary " >REACTIVE PROGRAMMING</small>
      </div>
    </div>
    <div class="row m mt-4">
      <div class="col-md-4 col-sm-12 success-story-bg success-story-bg-1">
      <p class=" card-heading" style="margin-top:90px">Full-cycle Automation of Polio Vaccine order and Manufacturing</p>
     <small class="text-primary mb-0 ">healthcare</small>
      </div>
      <div class="col-md-3 co-sm-12 success-story-bg success-story-bg-2 mx-5">
      <p class=" card-heading" style="margin-top:90px">Managed Testing Services for Kenyan Multi-Industry Corporation</p>
     <small class="text-primary " >QA AND SOFTWARE TESTING</small>
      </div>
      <div class="col-md-3 co-sm-12 success-story-bg success-story-bg-2 mx-5">
      <p class=" card-heading" style="margin-top:90px">Modernization of SaaS Gaming Platform to SOA</p>
     <small class="text-primary " >PRODUCT DEVELOPMENT</small>
      </div>
    </div>
 
    </div>
    <div class="mt-5 Secondary-button">  <a href="#" class=" second-btn my-5">All Case Studies</a></div>
  
   
</section>

     <!-------------------------industry expertise section start----------------- -->

     <section class="industry-expertise banner-section mt-5">
    <div class="container">  
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Industry Expertise at HickmanCooper</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row">
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/healthcare 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Enterprise Applications</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/main-page-1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Banking</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/lending 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Landing</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/professional-services-1 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Investment</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/insurance 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Insurance</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/retail 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Retail</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/manufacturing 3.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Manufacturing</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/information-technologies 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">information-technologies</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/oil-and-gas 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">oil-and-gas </div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/telecoms 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">telecommunication</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/transportation 3.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Logistic and transportation</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/professional-services-1 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Professional Services</div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/marketing-and-advertising 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">marketing-and-advertising </div>
         </div>
        </div>
          </div>
          <div class="col-md-3 mb-3">
          <div class="card industry-cards" >
        <div class="card-body">
          <div class="mx-5 img-icon"> <img src="./assets/images/home/public-sector 1.svg" alt="" ></div>
          <div class="text-center mt-3 fw-bold">Public Services </div>
         </div>
        </div>
          </div>
          
        </div>
    </div>
</section>

 
     <!-------------------------Consultation section start----------------- -->
     <section class="consultation">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-12 text-start pb-5">
            <h2 class="section-title">Need a Consultation?</h2>
            <hr class="sub-heading-dropdown-divider mx-start mb-2">
          </div>
          <p>Drop Us a line we are her to answer your questions 24/7.</p>
    </div>
    <div class="container">
  <form>
    <div class="row my-3">
      <div class="col-md-3">
        <input type="text" class="form-control form-control-custom" id="fullName" placeholder="Full Name">
      </div>
      <div class="col-md-3">
     
        <input type="text" class="form-control form-control-custom" id="company" placeholder="Company (optional)">
      </div>
      <div class="col-md-3">   
        <input type="email" class="form-control form-control-custom" id="email" placeholder="Email">
      </div>
      <div class="col-md-3">
        <input type="number" class="form-control form-control-custom" id="company" placeholder="Phone number">
      </div>
      <div class="col-12 mt-5">
      <textarea class="form-control" id="message" rows="5" placeholder="How can we help you today?"></textarea>
      </div>
    </div>
    <div class="mt-5 Secondary-button" style="position:relative; padding-left:590px!important"> 
    <button type="submit" class="main-btn my-5 px-5">Send</button>
    </div>
<div class="mx-auto">

</div>
  
  </form>
</div>





  </section>

     <!------------------------- footer section start---------------------- -->
 <?php
 include_once 'footer.php'
?>


</body>
</html>