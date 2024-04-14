<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message</title>
    <!-- Import this CDN to use icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
          <span class="link_name">Condo List</span>
        </a>
        <span class="tooltip">Condo List</span>
      </li>
      <li>
        <a href="calendar.php" target="_self">
          <i class="bx bx-calendar"></i>
          <span class="link_name">Calendar</span>
        </a>
        <span class="tooltip">Calendar</span>
      </li>

      <li>
        <a href="#">
          <i class="bx bx-message-alt-dots"></i>
          <span class="link_name">Message</span>
        </a>
        <span class="tooltip">About Us</span>
      </li>
      <li>
        <a href="twouser.php" target="_self">
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
  <section class= "home-section">
  <table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Sender</th>
            <th>Subject</th>
        </tr>
    </thead>
    <tbody>
        <tr class="message-row" onclick="location.href='aadminmessage.php';">
            <td>2024-04-09</td>
            <td>John Doe</td>
            <td>Meeting Reminder</td>
        </tr>
        <tr class="message-row" onclick="location.href='message2.html';">
            <td>2024-04-08</td>
            <td>Jane Smith</td>
            <td>Project Update</td>
        </tr>
        <tr class="message-row" onclick="location.href='message3.html';">
            <td>2024-04-07</td>
            <td>Bob Johnson</td>
            <td>Important Announcement</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

    </section>
  <!-- Scripts -->
  <script src="../script.js"></script>
</body>
</html>