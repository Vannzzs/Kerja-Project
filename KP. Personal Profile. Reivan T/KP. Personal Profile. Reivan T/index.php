<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile / Reivan Trisha E</title>

    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<!-- header design -->
<header class="header">
    <a href="#" class="logo">Reivan Trisha</a>
    
<i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
        <a href="#Home" class="text" >Home</a>
        <a href="#AboutMe" class="text">About Me</a>
        <a href="#Services" class="text">Services</a>
        <a href="#Portofolio" class="text">Portofolio</a>
        <a href="#Contact" class="text">Feedback & Contact</a>
    </nav>
</header>

<!-- Home section design -->
<section class="Home" id="Home">
<div class="Home-content">
<h3>Hello, It's Me</h3>
<h1>Reivan Trisha Erlangga</h1>
<h3>And I'm a <span>Student</span></h3>
<p>My experience in programming is more or less 2 years. I usually use HTML, CSS, JS, and PHP. Sometimes using C++, and Python too.</p>

</div>
<div class="Home-img">
    <img src="foto/FotoKp-removebg-preview.png" alt="" id="imgsrc">
</div>
</section>

<!-- about section design -->
<section class="AboutMe" id="AboutMe">
<div class="AboutMe-img">
    <img src="foto/FotoKp-removebg-preview.png" alt="" id="imgsrc">
</div>

<div class="AboutMe-content">
<h2 class="heading">About <span>Me</span></h2>

<p>My full name is Reivan Trisha Erlangga <br>
I was born in Kebumen, 26 March 2007,<br>
My nationality is Indonesian. <br>
I live in Bekasi, South Tambun. <br>
Now I am studying at the SMK Telekomunikasi Telesandi Bekasi
and majoring in Software Engineering</p>
    <a href="#Services" class="btn">NEXT</a>
</div>
</section>

<!-- Services section design -->
<section class="Services" id="Services">
    <h2 class="heading">My <span>Services</span></h2>

    <div class="Services-container">
        <div class="Services-box">
            <i class='bx bx-code-alt'></i>
            <h3>Web Development</h3>
            <p>This is an example of a website about a coffee shop that I have created.</p>
        <a class="btn" id="button-web">Read More</a>

        </div>

        <div class="Services-box">
            <i class='bx bxs-palette'></i>
            <h3>UI/UX Designer</h3>
            <p>This is an example of a UI/UX design that I have created</p>
        <a  id="button-ui" class="btn">Read More</a>
        </div>

        <div class="Services-box">
            <i class='bx bx-bar-chart-alt'></i>
            <h3>Digital Marketing</h3>
            <p>This is an example of a digital marketing product that I have created</p>
        <a class="button-market btn">Read More</a>
        </div>

      
    </div>


   
  
     <div id="container-Img">
    <img src="foto/home.jpg" alt="" class="gambar-web" id="getwidth">
    <img src="foto/About us.jpg" alt="" class="gambar-web">
    <img src="foto/Our menu.jpg" alt="" class="gambar-web">
    <img src="foto/Galerry.jpg" alt="" class="gambar-web">
    <img src="foto/Contact.jpg" alt="" class="gambar-web">
    <div id="button-img">
    <i class='bx bx-x'></i>
    </div>
    </div>
    

    <div id="container-Img2">
        <img src="foto/Projek Pendidikan.jpg" alt="" class="gambar-web2">
        <div id="button-img2">
        <i class='bx bx-x'></i>
        </div>
        </div>

        <div id="container-Img3">
            <img src="foto/Marketing.jpg" alt="" class="gambar-web3">
            <div id="button-img3">
            <i class='bx bx-x'></i>
            </div>
            </div>




</section>


<!-- portofolio section design -->

<section class="Portofolio" id="Portofolio">


<h1 id="skill">MY SKILL</h1>

     <div class="container-proggress">

       <h1>HTML</h1>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
      </div>
      <H1>PHP</H1>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">20%</div>
      </div>
      <H1>JAVASCRIPT</H1>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">20%</div>
      </div>
      <H1>CSS</H1>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">35%</div>
      </div>

    </div>


    <h2 class="heading">Educational <span>Background</span></h2>
    <div class="kotak1">
        <div class="kotak1a"></div>
        <h1 class="text1">SDIT Alfath Jalen</h1>
        <h2>(2013-2019)</h2>
    </div>
    <div class="kotak2">
        <div class="kotak2a"></div>
        <h1 class="text1">SMPIT Islamia</h1>
        <h2>(2019-2022)</h2>
    </div>
    <div class="kotak3">
        <div class="kotak3a"></div>
        <div class="kotak3b">
            <h1 class="text1">(NOW) <br> SMK TELEKOMUNIKASI TELESANDI BEKASI </h1>
            <h2>(2022-2025)</h2>
        </div>
    </div>
</section>



<!-- Feedback -->

<section class="Contact" id="Contact">
   <h2 class="heading">Feedback</h2>

   <form>
        <div class="input-box">
            <input type="text" name="user" placeholder="Name" id="user">
        </div>
        <div class="input-box">
            <input type="text" name="email" placeholder="Email" id="email">
        </div>
        <textarea name="coment" id="" cols="30" rows="10" placeholder="Your Message" id="coment"></textarea>
       <input type="button" value="Send Feedback" class="btn" id="btnsend"> 
   </form>
</section>

<section id="komentar">
    <div class="komentar1">
        <p class="text-1">Komentar</p?>
        <div class="garis"></div>
        <?php
        $sql = "SELECT * FROM feedback1";
        $query = mysqli_query( $db, $sql);
        while( $message = mysqli_fetch_array($query)) {
            echo "<div class='isi'>";
            echo "<p class='text-2' style='margin-bottom: 2px;' id='message'>".$message['user']."<span class='text-3'>".$message['tanggal']."</span></p>";
            echo "<p class='tulisan' style='font-size: 12px;' id='message'>".$message['email']."</p>";
            echo "<p class='text-4' id='message'>".$message['coment']."</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>










<div class="container-contact">
    <h1 class="text6">my contact: </h1>
    <div class="social-media">
        <a href="https://www.facebook.com/reivan.trisha?mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.instagram.com/reivan.zx_/?igshid=MWplbXN4OGhsNmFnOA%3D%3D"><i class='bx bxl-instagram'></i></a>
    </div>
</div>
<!-- javascript -->



<script>
const btn = document.querySelector("#btnsend");
const form = document.querySelector("form");
const user = document.querySelector("#user");
const coment = document.querySelector("textarea");
const email = document.querySelector("#email");
const buttonWeb = document.getElementById("button-web")
const img = document.querySelector("#container-Img")
const buttonImg = document.getElementById("button-img")
const buttonUi = document.getElementById("button-ui")
const img2 = document.querySelector("#container-Img2")
const buttonImg2 = document.getElementById("button-img2")
const buttonImg3 = document.getElementById("button-img3")
const butttonMarket = document.querySelector(".button-market")
const img3 = document.querySelector("#container-Img3")
const li  = document.querySelectorAll(".text");
buttonWeb.addEventListener("click", () => {
    img.classList.add("activeimg")
})

buttonImg.addEventListener("click", () => {
    img.classList.remove("activeimg")
})


buttonUi.addEventListener("click", () => {
    img2.classList.add("active2")
})

buttonImg2.addEventListener("click", () => {
    img2.classList.remove("active2")
})


butttonMarket.addEventListener("click", () => {
    img3.classList.add("active3")
})

buttonImg3.addEventListener("click", () => {
    img3.classList.remove("active3")
})


li.forEach(a => {
     a.addEventListener("click", () => {
        li.forEach(a => {
            a.classList.remove("active");
        })
        a.classList.add("active")
     })
})


document.addEventListener("click", () => {
   if(event.target !== buttonWeb) {
    img.classList.remove("activeimg");
   } if (event.target !== buttonUi) {
    img2.classList.remove("active2");
   } if (event.target !== butttonMarket) {
    img3.classList.remove("active3");
   }
})


btn.addEventListener("click", () => {
    if (user.value == "" && email.value == "" &&  coment.value == "" || user.value && email.value == "" && coment.value == "" || user.value && email.value && coment.value == "" || user.value == "" && email.value  && coment.value == "" || user.value == "" && email.value == "" && coment.value || user.value == "" && email.value && coment.value || user.value && email.value && coment.value == "") {
        alert("the data you sent is empty or there is one that is empty")
    } else {     
         const User = user.value;
         const Email = email.value;
         const Coment = coment.value;


        fetch('insertfeedback.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ 
            user: User,
            email: Email,
            coment: Coment
         }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Response dari server:', data);
            alert("data successfully entered")
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
})

// Fungsi untuk mensensor kata-kata kasar
function sensorKataKasar(teks) {
        // Daftar kata-kata kasar yang ingin di-sensor
        var kataKasar = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
        
        // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
        for (var i = 0; i < kataKasar.length; i++) {
            var regex = new RegExp(kataKasar[i], "gi");
            teks = teks.replace(regex, '***');
        }
        
        return teks;
    }

    // Jalankan fungsi sensor setelah halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        var messages = document.querySelectorAll('#message');
        messages.forEach(function (message) {
            // Dapatkan teks pesan
            var teksPesan = message.innerHTML;
            
            // Sensor kata-kata kasar
            var teksSensor = sensorKataKasar(teksPesan);

            // Terapkan teks yang sudah disensor ke dalam elemen
            message.innerHTML = teksSensor;
        });
    });
</script>
</body>
</html>