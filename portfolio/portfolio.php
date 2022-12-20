<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jelmark M Perlaoan</title>
  <link rel="icon" type="image/x-icon" href="/icons/icon.png">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                                  
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
  crossorigin="anonymous"
/>
<link
  href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap"
  rel="stylesheet"
/>
</head>
<body>
<!-- START NAV -->

<nav id="navbar" class="nav">
  <ul class="nav-list">
    <li>
      <a href="#welcome-section">About</a>
    </li>
    <li>
      <a href="#projects">Work</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
  </ul>
</nav>

<!-- END NAV -->

<!-- START WELCOME SECTION -->
<section id="welcome-section" class="welcome-section intro">
 <div class="intro" id="home">
  <img src="icons/me.jpg" alt="Jelmark Perlaoan" class="intro__img">
    <h1 class="section__title section__title--intro">
      Hi, I'm<strong> Jelmark M. Perlaoan</strong>
    </h1> <p ></p><br>
     <p class="label">Web Developer<br>
  jelmark.perlaoan@gmail.com<br>
  +63905-043-0323</p><br>
  <a href="https://www.facebook.com/jelmark.perlaoan/" class="facebook"></a>
  </div>

  <!-- <h2>Hi! I am </h2><h1>Jelmark M. Perlaoan</h1>
  <p>Web Developer</p>
  <p>jelmark.perlaoan@gmail.com</p>
  <p>+63905 043 0323</p>
  <a href="https://www.facebook.com/jelmark.perlaoan/" class="facebook"></a> -->
</section>

<section id="about" class="about">

  <h2>About</h2><br><br>
  <p>Hello! I am Jelmark M. Perlaoan, student of Central Luzon State University taking Bachelor of Science in Information Technology degree with a major in System Development. My dream job is to become a Web Developer.</p><br>
  <p>The programming language that i've learn during colleges are Java, Html, CSS, JavaScript, PHP, Python and Android development.</p>

</section>

<!-- END WELCOME SECTION -->

<!-- This is your lightbox, it is contained in a modal. Here you provide all the images,
     controls, and another set of preview images as the dots. Dots show your user which
     image is currently active. Note that you use entities (e.g. &times;), more info on
     them at the bottom. -->
     
<div id="Lightbox" class="modal">
  
  <div class="modal-content">
    <div class="slide">
        <img src="icons/sonata.jpg" class="image-slide" alt="Sonata" />
    </div>
    <div class="slide">
        <img src="icons/main.png" class="image-slide" alt="Library Management" />
    </div>    
    <div class="slide">
        <img src="icons/taravel.jpg" class="image-slide" alt="Travel Reservation" />
    </div>
  <span class="close pointer" onclick="closeLightbox()">&times;</span>
    <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
  

  </div>
</div>

<section id="projects" class="projects-section">
  <h2 class="projects-section-header">These are some of my projects</h2>

  <div class="projects-grid">
    <a
    onclick="openLightbox();toSlide(1)"
    class="project "
    >
      <img
        class="project-image"
        src="icons/sonata.png"
        alt="project"
      />
      <p class="project-title">
        Sonata(Android Music Player)
      </p>
    </a>

    <a
      onclick="openLightbox();toSlide(2)"
      target="_blank"
      class="project "
    >
      <img
        class="project-image"
        src="icons/main.png"
        alt="project"
      />
      <p class="project-title">
        Library Management System
      </p>
    </a>

    <a
   onclick="openLightbox();toSlide(3)"
      target="_blank"
      class="project "
    >
      <img
        class="project-image"
        src="icons/taravel.jpg"
        alt="project"
      />
      <p class="project-title">
        
        Taravel 
        
      </p>
    </a>
 
</div>

</section>

<!-- END PROJECTS SECTION -->

<!-- START CONTACT SECTION -->

<section id="contact" class="contact-section">
  <div class="contact-section-header">
    <h2>You can reach me...</h2>
    
  </div>
  <div class="contact-links">
    <a
      href="https://www.facebook.com/jelmark.perlaoan/"
      target="_blank"
      class="btn contact-details"
      ><i class="fab fa-facebook-square"></i> Facebook</a
    >
    <a
      id="profile-link"
      href="https://github.com/Jelmark"
      target="_blank"
      class="btn contact-details"
      ><i class="fab fa-github"></i> GitHub</a
    >
    <a href="mailto:jelmark.perlaoan@gmail.com" class="btn contact-details"
      ><i class="fas fa-at"></i> Send a mail</a
    >
  </div>
</section>

<!-- END CONTACT SECTION -->

<!-- START FOOTER SECTION -->

<footer>

  <p>
    &copy; 
    Jelmark Mateo Perlaoan</a>
  </p>
</footer>

<!-- END FOOTER SECTION -->


<script>
// Initialize here and run showSlide() to give your lightbox a default state.

let slideIndex = 1;
showSlide(slideIndex);

// You are providing the functionality for your clickable content, which is 
// your previews, dots, controls and the close button.

function openLightbox() {
  document.getElementById('Lightbox').style.display = 'block';
}

function closeLightbox() {
  document.getElementById('Lightbox').style.display = 'none';
};

// Note that you are assigning new values here to our slidIndex.

function changeSlide(n) {
  showSlide(slideIndex += n);
};

function toSlide(n) {
  showSlide(slideIndex = n);
};

// This is your logic for the light box. It will decide which slide to show 
// and which dot is active.

function showSlide(n) {
  const slides = document.getElementsByClassName('slide');
  let modalPreviews = document.getElementsByClassName('modal-preview');

  if (n > slides.length) {
    slideIndex = 1; 
  };
  
  if (n < 1) {
    slideIndex = slides.length;
  };

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  };
  
  for (let i = 0; i < modalPreviews.length; i++) {
    modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
  };
  
  slides[slideIndex - 1].style.display = 'block';
  modalPreviews[slideIndex - 1].className += ' active';
};
</script>
</body>
</html>
