<!DOCTYPE html>
<html lang="en">
<head>
  <title>Victoria De Valenzuela</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="content.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link
  href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
  rel="stylesheet"/>
</head>
<body>
  
  <div class="sidebar">
    <div class="logo_details">
      <div class="logo">
                <img src="image/victorialogo.png" alt="">
            </div>
            <div  class="logo_name">
            <p class="first"><b>VICTORIA</b></p>  
            <p class="second">DE VALENZUELA</p>
            </div>
     
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
       <li>
        <a href="condo.php" target="_self">
          <i class="bx bx-home-alt"></i>
          <span class="link_name">Condo Units</span>
        </a>
        <span class="tooltip">Condo Units</span>
      </li>
      <li>
        <a href="calendar.php" target="_self">
          <i class="bx bx-calendar"></i>
          <span class="link_name">Calendar</span>
        </a>
        <span class="tooltip">Calendar</span>
      </li>
     
      <li>
        <a href="notification.php" target="_self">
          <i class="bx bx-bell"></i>
          <span class="link_name">Notification</span>
        </a>
        <span class="tooltip">Notification</span>
      </li>
      <li>
        <a  href="aboutus.php" target="_self">
          <i class="bx bx-info-circle"></i>
          <span class="link_name">About Us</span>
        </a>
        <span class="tooltip">About Us</span>
      </li>
      <li>
        <a href="profile.php" target="_self">
          <i class="bx bx-user circle"></i>
          <span class="link_name">Profile</span>
        </a>
        <span class="tooltip">Person</span>
      </li>
      <li class="profile">

        <div class="profile_details">
          <div class="profile_content">
            <div class="designation">Log Out</div>
          </div>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>

      <a href="login/signin.php" target="_self">
          <i class="bx bx-log-out"></i>
          <span class="link_name">Log Out</span>
        </a>
        <span class="tooltip">Log Out</span>

      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="mains">
      <img src="image/mains.png" alt="House 1"  style="width:1500px;height:800px;">
  </div>
  
  <div class="dropdown-home">
    <button class="dropbtn">Type</button>
    <div class="dropdown-content">
      <a href="#">Studio Type</a>
      <a href="#">Combine Unit</a>
      <a href="#">Triple Combine Unit</a>
      <a href="#">Dormitory</a>

    </div>
  
    <div class="dropdown-home">
    <button class="dropbtn">Price</button>
    <div class="dropdown-content">
      <a href="#">1,200,000</a>
      <a href="#">300,000</a>
      <a href="#">500,000</a>
    </div>
  
  <div id="listings-home">
    <div class="container-home">
    <h2> Condo</h2> 
      <div class="listings-container" >
        <a href="list1.php" class="listing-home">
          <img src="image/main.jpg" alt="House 1"  style="width:200px;height:200px;">
          <h3>Studio Type Unit</h3>
          <p>$500,000</p>
        </a>
        <a href="list.html" class="listing-home">
          <img src="image/main.jpg " alt="House 2" style="width:200px;height:200px;">
          <h3>Combined Unit</h3>
          <p>$1,200,000</p>
        </a>
        <a href="list.html" class="listing-home">
          <img src="image/main.jpg" alt="House 3"  style="width:200px;height:200px;">
          <h3>Triple Combined Unit</h3>
          <p>$300,000</p>
        </a>
      <br>
        <a href="list1.php" class="listing-home">
          <img src="image/main.jpg" alt="House 1"  style="width:200px;height:200px;">
          <h3>Studio Type Unit</h3>
          <p>$500,000</p>
        </a>
        <a href="listing2.html" class="listing-home">
          <img src="image/main.jpg " alt="House 2" style="width:200px;height:200px;">
          <h3>Combined Unit</h3>
          <p>$1,200,000</p>
        </a>
        <a href="listing3.html" class="listing-home">
          <img src="image/main.jpg" alt="House 3"  style="width:200px;height:200px;">
          <h3>Triple Combined Unit</h3>
          <p>$300,000</p>
        </a>
        <br>
        <a href="list1.php" class="listing-home">
          <img src="image/main.jpg" alt="House 1"  style="width:200px;height:200px;">
          <h3>Studio Type Unit</h3>
          <p>$500,000</p>
        </a>
        <a href="listing2.html" class="listing-home">
          <img src="image/main.jpg" alt="House 2" style="width:200px;height:200px;">
          <h3>Combined Unit</h3>
          <p>$1,200,000</p>
        </a>
        <a href="listing3.html" class="listing-home">
          <img src="image/main.jpg" alt="House 3"  style="width:200px;height:200px;">
          <h3>Triple Combine Unit</h3>
          <p>$300,000</p>
        </a>
      </div>
    </div>
  </div>
  
    <footer>
      <p>&copy; 2024 Victoria De Valenzuela</p>
    </footer>
  </section>
  <!-- Scripts -->
  <script src="script.js"></script>
</body>
</html>