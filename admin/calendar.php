<!DOCTYPE html>
<html lang="en">
<head>
  <title>Victoria De Valenzuela</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="admin.css">
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
        <a  href="dashboard.php" target="_self">
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
        <a href="" target="_self">
          <i class="bx bx-calendar"></i>
          <span class="link_name">Calendar</span>
        </a>
        <span class="tooltip">Calendar</span>
      </li>
     
      <li>
        <a href="messagelist.php">
          <i class="bx bx-message-alt-dots"></i>
          <span class="link_name">Message</span>
        </a>
        <span class="tooltip">Message</span>
      </li>
      <li>
        <a href="twouser.php" target="_self">
          <i class="bx bx-user circle"></i>
          <span class="link_name">User</span>
        </a>
        <span class="tooltip">User</span>
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
  <h1>Admin Page</h1>
    <div id="inbox">
        <h2>Appointment Bookings</h2>
        <table id="bookingTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                </tr>
                <tr onclick="window.location.href='booking_details.html';">
        <td>2024-04-10</td>
        <td>John Doe</td>
        <td>Consultation</td>
        <td>johndoe@example.com</td>
    </tr>
    <tr onclick="window.location.href='booking_details.html';">
        <td>2024-04-11</td>
        <td>Jane Smith</td>
        <td>Appointment</td>
        <td>janesmith@example.com</td>
    </tr>
            </thead>
            <tbody>
                <!-- Bookings will be dynamically added here -->
            </tbody>
        </table>
    </div>


  </section>
  <!-- Scripts -->
  <script src="../script.js"></script>
</body>
</html>