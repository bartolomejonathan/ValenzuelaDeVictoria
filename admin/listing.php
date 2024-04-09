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
        <a href="users.php" target="_self">
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
  <h1>Condo List</h1>
  <a href="addindex.php" id="addLink" class="add-btn">Add Condo</a>
  <table>
        <thead>
            <tr>
                <th>Condo Name</th>
                <th>Location</th>
                <th>Price</th>
                <th>Available Units</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="available">
            <td>Studio Unit</td>
                <td>studio apartment is an apartment with a single room. They are also known as single-room dwelling places or studio flats.</td>
                <td>₱1,500,000</td>
                <td>10</td>
                <td>Available</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="status-btn">Change Status</button>
                </td>
            </tr>
            <tr class="unavailable">
            <td>Combined Studio Units</td>
                <td> A combined apartment is combining two or more apartments in the same building into one apartment. </td>
                <td>₱2,750,000</td>
                <td>0</td>
                <td>Unavailable</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="status-btn">Change Status</button>
                </td>
            </tr>
            <tr class="available">
            <td>Triple Combined Units</td>
                <td>A Triple combined apartment is a building that combines three separate residential units into one structure</td>
                <td>₱3,600,000</td>
                <td>8</td>
                <td>Available</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="status-btn">Change Status</button>
                </td>
            </tr>
            <tr class="available">
            <tr class="available">
                <td>Dormitory</td>
                <td> A studio apartment is a unit that consists of only one room. This serves as both a bedroom and a living room, which is called a "living room". </td>
                <td>₱600,000</td>
                <td>8</td>
                <td>Available</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="status-btn">Change Status</button>
                </td>
            </tr>
        </tbody>
    </table>

  </section>
  <!-- Scripts -->
  <script src="../script.js"></script>
</body>
</html>