<?php 

session_start();


?>

<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cowin</title>
    <style type="text/css">
      #head{
        position:fixed;
        z-index:999;
        height:100px;
        width:100%;
        background-color: #480b4b;
        display:flex;
        justify-content:space-between;
      }
      #head img{
        position:absolute;
        height:100px;
        width:100px;
        clip-path:circle();
      }
      #head ul{
        position:absolute; 
        left:1200px;
        top:50px;
        display:inline-block;
      }
      #head ul li{
        display:inline-block;
        color:white;
        list-style-type:none;

      }
      #head ul li a{
        color:white;
text-decoration:none;
padding-right: 20px;
      }
      .carousel-item{
        height: 100vh;
      
      }
      #About {
       height:100vh;
       padding-right: 30px;
      }
      #About label,#inp,#output{
        position: relative;
        top:200px;
        left:200px;
        padding-right: 30px;
      }
          table{
      border-collapse: collapse;
      width:100%;
    }
table tr td{
  vertical-align: middle;
  text-overflow: none;
  text-align: center;
}

  #About #inp{
    position: relative;
    left:70px;
    top:30px;
    padding-right: 30px;
    border:2px solid #aaa;
    border-radius:4px;
  }
  #About #tab{
position:relative;
top:120px;
  }
 
  #About #pin{
    position:relative;
    left:70px;
    top:30px;
    border:2px solid #aaa;
    border-radius:4px;
    margin:10px;
  }
  #About button{
    position:relative;
    left: 70px;
top: 30px;
  }
  #About #div1{
    position: relative;
    top:80px;
  }
  #About #tab #row #thee,#theee{
    position:relative;
    left:40px;
  }
  #About #tab #row #thee{
    position: relative;
    text-align:center;
  }
  #About #div1 #inp,#pin{
  padding-right: 10px;
  }
  #About #div1 button{
    border-radius: 4px;
  }
  #About #tab #row #theeee{
    position:relative;
    left:20px;
  }
  #About #tab #row{
    
    border-radius: 4px;
    color:white;
  }
  #About #tab tr{
    font-size:20px;
    text-align:center;
  }
  #About #tab #row2:hover,#row1:hover,#row3:hover,#row5:hover,#row4:hover,#row6:hover{
    
    transform: scale(1.05);
    
  }
  #About{
    height:100vh;
    background-image:  url(/assets/Image.jpg);
    background-size: cover;
  }
#About #tab #row2,#row1,#row3,#row5,#row4,#row6{
  transition: 1s;
  color:white;
}
#Home,#About{
  /* @media(max-width: 10000px) and (min-width: 500px)
  {
    padding:0px;
    margin:0px;
  } */
}
#About #tab #row1 td .f a{
  border:1px;
  border-radius: circle;
}

  

  
  
    </style>
    <script type="text/javascript"> 

function Update()
{
  User_Information=document.getElementById('inp').value;
  httpRequest=new XMLHttpRequest();
  httpRequest.open("GET","https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?date=01-11-2021&pincode="+User_Information);
    httpRequest.send();
    httpRequest.onreadystatechange = function()
    {
      if(this.status==200)
      {
        User_Data=JSON.parse(this.responseText);
        console.log(User_Data);
        document.getElementById("output").innerHTML=User_Data.data.sessions[][];
      }else{
        alert("Some Error Occured");
      }
    }
}
</script>
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<section id="head">
  <img src="/assets/CoWin.jpg">
  <ul>
    <li><a href="#Home">Home </a> </li>
    <li><a href="#About">About </a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="covid_data.php">Covid Data</a> </li>
    <li><a href="slots_by_pincode.php"> <img src="/assets/blinking_new.gif" alt="" style="height: 30px; width: 50px; margin-left: -44px;">BookSlot </a> </li>
    <li><a href="">Contact</a> </li>
  </ul>
</section>

<!--Navbar  -->
<!-- <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid ">
      <a href="#"><img  src="Co-win.jpg" alt="COWIN" width="30%"></a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light bg-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vaccination Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown ">
              <li><a class="dropdown-item text-light bg-primary" href="#">Register Members</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="slot_find.html">Search Vaccination Centers</a></li>
               <li><hr class="dropdown-divider"></li> 
              <li><a class="dropdown-item text-light bg-primary" href="#">Book Vaccination Slots</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Manage Appointment</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Download Certificate</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light bg-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Platforms
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light bg-primary" href="#">CoWIN International</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Vaccinator</a></li>
               <li><hr class="dropdown-divider"></li> 
              <li><a class="dropdown-item text-light bg-primary" href="#">Department Login</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Verify Certificate</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Vaccination Statistics</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-light bg-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Resources
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light bg-primary" href="#">How to get Vaccinated</a></li>
              <li><a class="dropdown-item  text-light bg-primary" href="#">Dos And Dont's</a></li>
               <li><hr class="dropdown-divider"></li> 
              <li><a class="dropdown-item text-light bg-primary" href="#">Overview</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Api Guidlines</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Open API's</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Grievance Guidelines</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light bg-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Support
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light bg-primary" href="#">Frequently Asked Questions</a></li>
              <li><a class="dropdown-item text-light bg-primary" href="#">Certificate Correction</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

<?php 
      if(isset($_SESSION['logged_in'])){ ?>
      <span class>Welcome, <?php echo $_SESSION['email']; ?></span>
      <?php
        }
    ?>
<!-- Image and text -->
<!-- <nav class="navbar navbar-expand" id="head">
  <a class="navbar-brand" href="#">
    <img src="/assets/CoWin.jpg" width="100" height="80" style="margin-top: -50px" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
<section id="Home">
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/stop.webp" class="d-block w-100" alt="..." style="height:100vh">
    </div>
    <div class="carousel-item">
      <img src="/assets/Covid.jpg" class="d-block w-100" alt="..." style="height:100vh">
    </div>
    <div class="carousel-item">
      <img src="/assets/vaccine.jpg" class="d-block w-100" alt="..." style="height:100vh">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


</section>
<section id="About">
 <div id="div1">  <input type="text" id="inp" placeholder="Enter Date" required="required">
 <input type="text" id="pin" placeholder="Enter Pincode" required="required">
<button onclick="cowin()" > Submit</button></div>
<br>

 <table id="tab">
  <tr id="row">
    <th id="theee"> Center Name</th>
    <th id="thee"> Center Address</th>
    <th id="theeee"> State Name</th>
    <th > District Name</th>
    <th > Vaccine-</th>
    <th> Vaccine Timings</th>
  </tr>
  
  <tr id="row1">
    <td class="a"></td>
    <td class="b"></td>
    <td class="c"></td>
    <td class="d"></td>
    <td class="e"></td>
    <td ><p class="f" > <a href="www.google.com" target="_blank"></a></p> <p class="g"></p><p class="h"></p><p class="i"></p></td>
    
  </tr><tr id="row2">
  <td class="Aa"></td> 
  <td class="Bb"></td>
  <td class="Cc"></td>
  <td class="Dd"></td>
  <td class="Ee"></td>
  <td> <p class="Ff"> <a href="www.google.com" target="_blank"></a></p><p class="Gg"></p><p class="Hh"></p><p class="Ii"></p></td>

</tr>

<tr id="row3"> 
  <td class="A1"></td> 
  <td class="B1"></td>
  <td class="C1"></td>
  <td class="D1"></td>
  <td class="E1"></td>
  <td> <p class="F1"></p><p class="G1"></p><p class="H1"></p><p class="I1"></p></td>
</tr>
<tr id=row4> 
  <td class="A2"></td> 
  <td class="B2"></td>
  <td class="C2"></td>
  <td class="D2"></td>
  <td class="E2"></td>
  <td> <p class="F2"></p><p class="G2"></p><p class="H2"></p><p class="I2"></p></td>
</tr>
<tr id="row5"> 
  <td class="A3"></td> 
  <td class="B3"></td>
  <td class="C3"></td>
  <td class="D3"></td>
  <td class="E3"></td>
  <td> <p class="F3"></p><p class="G3"></p><p class="H3"></p><p class="I3"></p></td>
</tr>
<tr id="row5"> 
  <td class="A4"></td> 
  <td class="B4"></td>
  <td class="C4"></td>
  <td class="D4"></td>
  <td class="E4"></td>
  <td> <p class="F4"></p><p class="G4"></p><p class="H4"></p><p class="I4"></p></td>
</tr><tr id="row6"> 
  <td class="A5"></td> 
  <td class="B5"></td>
  <td class="C5"></td>
  <td class="D5"></td>
  <td class="E5"></td>
  <td> <p class="F5"></p><p class="G5"></p><p class="H5"></p><p class="I5"></p></td>
</tr>
</table>
<script >
       
    function cowin()
{
  var Date=document.getElementById('inp').value;
  var PINCODE=document.getElementById('pin').value;
  if(Date == 0 && PINCODE == 0)
  {
    alert('Enter details');
  }
  
 let centers=[];
  const httpRequest =new XMLHttpRequest();
  httpRequest.open("GET","https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode="+PINCODE+  "&date="+Date);
    httpRequest.send();
  httpRequest.onload = function()
  {
    if(this.status===200 && this.readyState===4)
  {
    
    let Data =JSON.parse(this.responseText);
      if(Data.sessions.length == 0)
{
    alert("Slots are not Availabe");
}
    if(Data.sessions !== [])
    {
    var Details=Data.sessions.map((e,i)=>{
        return(
        [e.name,
        e.address,
        e.state_name,
        e.district_name,
        e.vaccine,
        e.slots]
        )
      });
    console.log(Details)
    console.log(Details[0]);
  if(Details[0]!==[])
  { 
    document.querySelector('.a').innerHTML=Details[0][0];
  document.querySelector('.b').innerHTML=Details[0][1];
  document.querySelector('.c').innerHTML=Details[0][2];
    document.querySelector('.d').innerHTML=Details[0][3];
    document.querySelector('.e').innerHTML=Details[0][4];
  }
  else if(Details[0]==undefined)
 {
  document.querySelector('.Aa').innerHTML=" ";
  document.querySelector('.Bb').innerHTML=" ";
  document.querySelector('.Cc').innerHTML=" ";
    document.querySelector('.Dd').innerHTML=" ";
    document.querySelector('.Ee').innerHTML=" ";
 }
for(i=0;i<Details[0][5].length;i++)
{

  if(Details[0][5][i]!=[])
{
      if(Details[0][5][i-3]!==undefined){document.querySelector('.f').innerHTML= Details[0][5][i-3];}
      else if(Details[0][5][i-3]==undefined)
      {
        document.querySelector('.f').innerHTML =" ";
      }
      if(Details[0][5][i-2]!==undefined){document.querySelector('.f').innerHTML=Details[0][5][i-2];}
      else if(Details[0][5][i-2]==undefined)
      {
        document.querySelector('.g').innerHTML =" ";
      }
      if(Details[0][5][i-1]!==undefined){document.querySelector('.f').innerHTML=Details[0][5][i-1];}
      else if(Details[0][5][i-1]==undefined)
      {
        document.querySelector('.h').innerHTML =" ";
      }
      if(Details[0][5][i]!==undefined){document.querySelector('.f').innerHTML=Details[0][5][i] + "<br/><br/>";}
      else if(Details[0][5][i]==undefined)
      {
        document.querySelector('.i').innerHTML =" ";
      }
      
    }
   }
   if(Details[1]!==undefined)
  { 
    document.querySelector('.Aa').innerHTML=Details[1][0];
  document.querySelector('.Bb').innerHTML=Details[1][1];
  document.querySelector('.Cc').innerHTML=Details[1][2];
    document.querySelector('.Dd').innerHTML=Details[1][3];
    document.querySelector('.Ee').innerHTML=Details[1][4];
 } else if(Details[1]==undefined)
 {
  document.querySelector('.Aa').innerHTML=" ";
  document.querySelector('.Bb').innerHTML=" ";
  document.querySelector('.Cc').innerHTML=" ";
    document.querySelector('.Dd').innerHTML=" ";
    document.querySelector('.Ee').innerHTML=" ";
 }
 
for(i=0;i<Details[1][5].length;i++)
{if(Details[1][5][i]!==[])
{
  
      if(Details[1][5][i-3]==undefined){ document.querySelector('.Ff').innerHTML=" "; }
      else if(Details[1][5][i-3]!==undefined)
      {
        document.querySelector('.Ff').innerHTML= Details[1][5][i-3];
      }
      if(Details[1][5][i-2]==undefined){ document.querySelector('.Gg').innerHTML=" "; }
      else if(Details[1][5][i-2]!==undefined)
      {
        document.querySelector('.Gg').innerHTML= Details[1][5][i-2];
      }
      if(Details[1][5][i-1]==undefined){ document.querySelector('.Hh').innerHTML=" "; }
      else if(Details[1][5][i-1]!==undefined)
      {
        document.querySelector('.Hh').innerHTML= Details[1][5][i-1];
      }
      if(Details[1][5][i]==undefined){ document.querySelector('.Ii').innerHTML=" "; }
      else if(Details[1][5][i]!==undefined)
      {
        document.querySelector('.Ii').innerHTML= Details[1][5][i] + "<br/><br/>";
      }
}
 } 
 
if(Details[2]!==undefined)
  { 
    document.querySelector('.A1').innerHTML=Details[2][0];
  document.querySelector('.B1').innerHTML=Details[2][1];
  document.querySelector('.C1').innerHTML=Details[2][2];
    document.querySelector('.D1').innerHTML=Details[2][3];
    document.querySelector('.E1').innerHTML=Details[2][4];
 } else if(Details[2]==undefined)
 {
  document.querySelector('.A1').innerHTML=" ";
  document.querySelector('.B1').innerHTML=" ";
  document.querySelector('.C1').innerHTML=" ";
    document.querySelector('.D1').innerHTML=" ";
    document.querySelector('.E1').innerHTML=" ";
 }
 
for(i=0;i<Details[2][5].length;i++)
{if(Details[2][5][i]!==[])
{
  
      if(Details[2][5][i-3]==undefined){ document.querySelector('.F1').innerHTML=" "; }
      else if(Details[2][5][i-3]!==undefined)
      {
        document.querySelector('.F1').innerHTML= Details[2][5][i-3];
      }
      if(Details[2][5][i-2]==undefined){ document.querySelector('.G1').innerHTML=" "; }
      else if(Details[2][5][i-2]!==undefined)
      {
        document.querySelector('.G1').innerHTML= Details[2][5][i-2];
      }
      if(Details[2][5][i-1]==undefined){ document.querySelector('.H1').innerHTML=" "; }
      else if(Details[2][5][i-1]!==undefined)
      {
        document.querySelector('.H1').innerHTML= Details[2][5][i-1];
      }
      if(Details[2][5][i]==undefined){ document.querySelector('.I1').innerHTML=" "; }
      else if(Details[2][5][i]!==undefined)
      {
        document.querySelector('.I1').innerHTML= Details[2][5][i] + "<br/><br/>";
      }
}
 } 
if(Details[3]!==undefined)
  { 
    document.querySelector('.A2').innerHTML=Details[3][0];
  document.querySelector('.B2').innerHTML=Details[3][1];
  document.querySelector('.C2').innerHTML=Details[3][2];
    document.querySelector('.D2').innerHTML=Details[3][3];
    document.querySelector('.E2').innerHTML=Details[3][4];
 } else if(Details[3]==undefined)
 {
  document.querySelector('.A2').innerHTML=" ";
  document.querySelector('.B2').innerHTML=" ";
  document.querySelector('.C2').innerHTML=" ";
    document.querySelector('.D2').innerHTML=" ";
    document.querySelector('.E2').innerHTML=" ";
 }
 
for(i=0;i<Details[3][5].length;i++)
{if(Details[3][5][i]!==[])
{
  
      if(Details[3][5][i-3]==undefined){ document.querySelector('.F2').innerHTML=" "; }
      else if(Details[2][5][i-3]!==undefined)
      {
        document.querySelector('.F2').innerHTML= Details[3][5][i-3];
      }
      if(Details[3][5][i-2]==undefined){ document.querySelector('.G2').innerHTML=" "; }
      else if(Details[3][5][i-2]!==undefined)
      {
        document.querySelector('.G2').innerHTML= Details[3][5][i-2];
      }
      if(Details[3][5][i-1]==undefined){ document.querySelector('.H2').innerHTML=" "; }
      else if(Details[3][5][i-1]!==undefined)
      {
        document.querySelector('.H2').innerHTML= Details[3][5][i-1];
      }
      if(Details[3][5][i]==undefined){ document.querySelector('.I2').innerHTML=" "; }
      else if(Details[3][5][i]!==undefined)
      {
        document.querySelector('.I2').innerHTML= Details[3][5][i] + "<br/><br/>";
      }
}
 } 
 if(Details[4]!==undefined)
  { 
    document.querySelector('.A3').innerHTML=Details[4][0];
  document.querySelector('.B3').innerHTML=Details[4][1];
  document.querySelector('.C3').innerHTML=Details[4][2];
    document.querySelector('.D3').innerHTML=Details[4][3];
    document.querySelector('.E3').innerHTML=Details[4][4];
 } else if(Details[4]==undefined)
 {
  document.querySelector('.A3').innerHTML=" ";
  document.querySelector('.B3').innerHTML=" ";
  document.querySelector('.C3').innerHTML=" ";
    document.querySelector('.D3').innerHTML=" ";
    document.querySelector('.E3').innerHTML=" ";
 }
 
for(i=0;i<Details[4][5].length;i++)
{if(Details[4][5][i]!==[])
{
  
      if(Details[4][5][i-3]==undefined){ document.querySelector('.F3').innerHTML=" "; }
      else if(Details[4][5][i-3]!==undefined)
      {
        document.querySelector('.F3').innerHTML= Details[4][5][i-3];
      }
      if(Details[4][5][i-2]==undefined){ document.querySelector('.G3').innerHTML=" "; }
      else if(Details[4][5][i-2]!==undefined)
      {
        document.querySelector('.G3').innerHTML= Details[4][5][i-2];
      }
      if(Details[4][5][i-1]==undefined){ document.querySelector('.H3').innerHTML=" "; }
      else if(Details[4][5][i-1]!==undefined)
      {
        document.querySelector('.H3').innerHTML= Details[4][5][i-1];
      }
      if(Details[4][5][i]==undefined){ document.querySelector('.I3').innerHTML=" "; }
      else if(Details[4][5][i]!==undefined)
      {
        document.querySelector('.I3').innerHTML= Details[4][5][i] + "<br/><br/>";
      }
}
 } 
 if(Details[5]!==undefined)
  { 
    document.querySelector('.A4').innerHTML=Details[5][0];
  document.querySelector('.B4').innerHTML=Details[5][1];
  document.querySelector('.C4').innerHTML=Details[5][2];
    document.querySelector('.D4').innerHTML=Details[5][3];
    document.querySelector('.E4').innerHTML=Details[5][4];
 } else if(Details[5]==undefined)
 {
  document.querySelector('.A4').innerHTML=" ";
  document.querySelector('.B4').innerHTML=" ";
  document.querySelector('.C4').innerHTML=" ";
    document.querySelector('.D4').innerHTML=" ";
    document.querySelector('.E4').innerHTML=" ";
 }
 
for(i=0;i<Details[5][5].length;i++)
{if(Details[5][5][i]!==[])
{
  
      if(Details[5][5][i-3]==undefined){ document.querySelector('.F4').innerHTML=" "; }
      else if(Details[5][5][i-3]!==undefined)
      {
        document.querySelector('.F4').innerHTML= Details[5][5][i-3];
      }
      if(Details[5][5][i-2]==undefined){ document.querySelector('.G4').innerHTML=" "; }
      else if(Details[5][5][i-2]!==undefined)
      {
        document.querySelector('.G4').innerHTML= Details[5][5][i-2];
      }
      if(Details[5][5][i-1]==undefined){ document.querySelector('.H4').innerHTML=" "; }
      else if(Details[5][5][i-1]!==undefined)
      {
        document.querySelector('.H4').innerHTML= Details[5][5][i-1];
      }
      if(Details[5][5][i]==undefined){ document.querySelector('.I4').innerHTML=" "; }
      else if(Details[5][5][i]!==undefined)
      {
        document.querySelector('.I4').innerHTML= Details[5][5][i] + "<br/><br/>";
      }
}
 } 
 if(Details[6]!==undefined)
  { 
    document.querySelector('.A5').innerHTML=Details[6][0];
  document.querySelector('.B5').innerHTML=Details[6][1];
  document.querySelector('.C5').innerHTML=Details[6][2];
    document.querySelector('.D5').innerHTML=Details[6][3];
    document.querySelector('.E5').innerHTML=Details[6][4];
 } else if(Details[6]==undefined)
 {
  document.querySelector('.A5').innerHTML=" ";
  document.querySelector('.B5').innerHTML=" ";
  document.querySelector('.C5').innerHTML=" ";
    document.querySelector('.D5').innerHTML=" ";
    document.querySelector('.E5').innerHTML=" ";
 }
 
for(i=0;i<Details[6][5].length;i++)
{if(Details[6][5][i]!==[])
{
  
      if(Details[6][5][i-3]==undefined){ document.querySelector('.F5').innerHTML=" "; }
      else if(Details[6][5][i-3]!==undefined)
      {
        document.querySelector('.F5').innerHTML= Details[6][6][i-3];
      }
      if(Details[6][5][i-2]==undefined){ document.querySelector('.G5').innerHTML=" "; }
      else if(Details[6][5][i-2]!==undefined)
      {
        document.querySelector('.G5').innerHTML= Details[6][5][i-2];
      }
      if(Details[6][5][i-1]==undefined){ document.querySelector('.H5').innerHTML=" "; }
      else if(Details[6][5][i-1]!==undefined)
      {
        document.querySelector('.H5').innerHTML= Details[6][5][i-1];
      }
      if(Details[6][5][i]==undefined){ document.querySelector('.I5').innerHTML=" "; }
      else if(Details[6][5][i]!==undefined)
      {
        document.querySelector('.I5').innerHTML= Details[6][5][i] + "<br/><br/>";
      }
}
 }

} 

}
} 
      }
  </script>

  </section>

  </body>
</html>