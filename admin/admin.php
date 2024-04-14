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
        <a href="calendar.php" target="_self">
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
<table class="user-table">
  <h2>Admin Accounts</h2>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Victoria D. Valenzuela</td>
            <td>victoriadevalenzuela@gmail.com</td>
            <td><button class="delete-btn">Delete</button> <button class="edit-btn">Edit </button></td>
        </tr>
        <!-- Add more users as needed -->
    </tbody>
</table>
  </section>
  <!-- Scripts -->
  <script src="../script.js"></script>
</body>
</html>