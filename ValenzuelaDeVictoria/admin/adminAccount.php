<!DOCTYPE html>
<html lang="en">
<head>
  <title>Victoria De Valenzuela</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="content.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <a  href="home.php" target="_self">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
       <li>
        <a href="listing.php" target="_self">
          <i class="bx bx-home-alt"></i>
          <span class="link_name">Condo Units</span>
        </a>
        <span class="tooltip">Condo Units</span>
      </li>
      <li>
        <a href="user.php" target="_self">
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
        <a href="#">
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
        <span class="tooltip">Profile</span>
      </li>

      <li class="profile">
        <div class="profile_details">
          <div class="profile_content">
            <div class="designation">Log Out</div>
          </div>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="home-section">
        <div>Admin Accounts</div>
  </section>
  <!-- Scripts -->
  <script src="script.js"></script>
</body>
</html>