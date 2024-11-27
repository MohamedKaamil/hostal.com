<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hostel.com</title>
    <link rel="stylesheet" href="home.css">
    <script>
      function toggleMenu() {
        document.querySelector(".navbar").classList.toggle("active");
      }

      function toggleHamburgerMenu() {
        const menu = document.querySelector(".hamburger-menu");
        menu.style.display = menu.style.display === "block" ? "none" : "block";
        menu.style.opacity = menu.style.display === "block" ? "1" : "0";
        menu.style.transform =
          menu.style.display === "block"
            ? "translateY(0)"
            : "translateY(-20px)";
      }

      // Add scroll event listener for content reveal
      document.addEventListener("scroll", () => {
        document.querySelectorAll(".reveal").forEach((element) => {
          const rect = element.getBoundingClientRect();
          if (rect.top <= window.innerHeight && rect.bottom >= 0) {
            element.classList.add("in-view");
          }
        });
      });
    </script>
  </head>

  <body>
    <header class="navbar">
      <div class="brand">Hostel.com</div>
      <ul class="menu">
        <li><a href="#header-section">Home</a></li>
        <li><a href="unregistered_reservation.php">Reservation</a></li>
        <li><a href="#reviews-section">Ratings and Reviews</a></li>
        <li><a href="#about-section">About Us</a></li>
      </ul>
      <!-- Hamburger and User Icon Buttons -->
      <div>
        <span class="hamburger" onclick="toggleHamburgerMenu()">&#9776;</span>
        <span class="user-icon"></span>
      </div>
      <!-- Hamburger Menu Dropdown -->
      <div class="hamburger-menu">
        <a href="Login_Signup.php">Login</a>
      </div>
    </header>

    <!-- Sliding Text Example -->
    <div class="slider">
      <div class="slider-text">
        Welcome to Hostel.com - Your Ideal Stay Destination
      </div>
    </div>

    <header class="section__container header__container" id="header-section">
      <div class="header__image__container">
        <div class="header__content">
          <h1>Enjoy Your Dream Hostel</h1>
          <p>
            Book your rooms, feels like your home and stay packages at lowest
            price.
          </p>
        </div>
      </div>
    </header>

    <!-- First Row: Image on Left, Description on Right -->
    <div class="parallax">
      <div class="container">
        <div class="image-container">
          <img src="images/single room/hos1.jpg" />
        </div>
        <div class="description-container">
          <h2>Title for First Section</h2>
          <p>
          Located in the heart of the city, our hostel offers the perfect balance of comfort, convenience, and affordability. Designed to cater to students, professionals, and travelers alike, the hostel features modern amenities such as high-speed Wi-Fi, a communal kitchen, laundry service, and 24/7 security. Whether for short or long stays, guests can enjoy comfortable rooms and cozy common areas, including study lounges and recreation spaces. Our dedicated staff ensures a seamless experience by providing round-the-clock assistance and personalized service. The hostel’s friendly environment fosters meaningful connections among guests, making it feel more like a community than just a place to stay. Whether you're here for business, study, or leisure, our hostel provides a stress-free and enjoyable experience, with easy access to local attractions and transportation. Come experience a welcoming, homely atmosphere and make lasting memories with us.
          </p>
          </p>
        </div>
      </div>

      <!-- Second Row: Description on Left, Image on Right -->
      <div class="container">
        <div class="description-container">
          <h2>Title for Second Section</h2>
          <p>
          Our single rooms provide a peaceful retreat with a perfect blend of privacy and comfort. Each room is thoughtfully furnished with a comfortable bed, study desk, private en-suite bathroom, air conditioning, and wardrobe space. Designed for solo travelers, business guests, or students, these rooms offer a quiet environment conducive to both work and relaxation. Large windows allow for natural light, creating a bright, airy space. Guests also have access to shared amenities, such as a rooftop lounge and a dining area, offering opportunities to socialize without compromising personal space. Whether you need a restful break or focused time for study, our single rooms offer the ideal solution. Clean, secure, and modern, they provide everything necessary for a relaxing stay. With personalized service and well-maintained facilities, staying in a single room ensures both comfort and convenience during your time with us.
        </div>
        <div class="image-container">
          <img src="images/single room/si1.jpg"/>
        </div>
      </div>

      <!-- third Row: Image on Left, Description on Right -->

      <div class="container">
        <div class="image-container">
          <img src="images/dormitory/share1" />
        </div>
        <div class="description-container">
          <h2>Title for First Section</h2>
          <p>
          Our sharing rooms offer the perfect environment for guests looking to connect with others while enjoying comfortable accommodation. These rooms are designed to host two to four people, making them ideal for friends, students, or solo travelers who enjoy socializing. Each guest has their own bed, wardrobe, and secure locker for personal belongings. The rooms are bright and spacious, with access to shared bathrooms and common areas, such as lounges and game rooms. We maintain strict hygiene standards to ensure a clean and comfortable environment. Sharing rooms offer the best of both worlds—affordable pricing with the opportunity to meet new people and create lasting friendships. Whether you want to relax after a day of exploring or engage in fun conversations with fellow guests, these rooms foster a vibrant and welcoming atmosphere, ensuring an enjoyable stay.
          </p>
        </div>
      </div>

      <!-- forth raw: Description on Left, Image on Right -->
      <div class="container">
        <div class="description-container">
          <h2>Title for Second Section</h2>
          <p>
          Our dormitory rooms provide budget-friendly accommodation in a social environment, ideal for students and solo travelers. Featuring bunk beds, personal lockers, reading lights, and charging stations, each guest has access to essential amenities for a comfortable stay. Dormitories are designed to promote interaction and community spirit, making them perfect for guests who enjoy meeting new people. Shared bathrooms and common areas, such as lounges and dining spaces, encourage relaxation and camaraderie. Despite their affordability, we ensure that dormitories are maintained with high hygiene standards, offering both comfort and security. Guests benefit from access to recreational spaces and hostel-organized activities, fostering a lively, dynamic environment. Our dormitory rooms are an excellent choice for those looking to explore on a budget without compromising on quality. Whether you're traveling with friends or exploring alone, these rooms ensure a sociable, enjoyable experience.
          </p>
        </div>
        <div class="image-container">
        <img src="images/dormitory/d4.webp" />
        </div>
      </div>

      <div class="review-section" id="reviews-section">

      <?php include 'fetch_reviews.php'; ?> 

      </div>
    </div>

    <section class="about-section reveal" id="about-section">
      <h2>About Us</h2>
      <p>
        Welcome to Hostel.com, your ideal stay destination. Our hostel offers a
        comfortable and friendly environment where you can relax and enjoy your
        stay. We are known for our excellent service, cleanliness, and modern
        facilities. Whether you are traveling for leisure or business, our rooms
        are designed to meet your needs with utmost comfort and convenience.
        Experience the best of hospitality at Hostel.com.
      </p>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>Hostel.com</h3>
          <p>
            Hostel.com is a premier platform for finding and booking hostels
            around the world, offering a seamless and convenient experience for
            travelers.
          </p>
          <p>
            With an intuitive interface and a diverse range of hostel options,
            Hostel.com is dedicated to providing a stress-free way for travelers
            to discover their ideal accommodation.
          </p>
        </div>
        <div class="footer__col">
          <h4>hostel.com</h4>
          <p>About Us</p>
          <p>Our Team</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <p>Social Media</p>
          <p>Help Center</p>
          <p>Partnerships</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 ICBT HD Student Final Project . All rights reserved.
      </div>
    </footer>
  </body>
</html>
