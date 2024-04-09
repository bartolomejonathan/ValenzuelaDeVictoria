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
        <a href="profile.php" target="_self">
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
        <!-- Main container -->
    <div class="container">
      <!-- msg-header section starts -->
      <div class="msg-header">
        <div class="container1">
          <img src="../image/user2.jpg" class="msgimg" />
          <div class="active">
            <p>John Doe</p>
          </div>
        </div>
      </div>
      <!-- msg-header section ends -->
<section>
      <!-- Chat inbox  -->
      <div class="chat-page">
        <div class="msg-inbox">
          <div class="chats">
            <!-- Message container -->
            <div class="msg-page">
              <!-- Incoming messages -->

              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="../image/user2.jpg" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p>
                      Hi !! This is message from John . Lorem ipsum, dolor sit
                      amet consectetur adipisicing elit. Non quas nemo eum,
                      earum sunt, nobis similique quisquam eveniet pariatur
                      commodi modi voluptatibus iusto omnis harum illum iste
                      distinctio expedita illo!
                    </p>
                    <span class="time">18:06 PM | April 9</span>
                  </div>
                </div>
              </div>
              <!-- Outgoing messages -->
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="../image/user1.jpg" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p class="multi-msg">
                      Hi John , Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Illo nobis deleniti earum magni
                      recusandae assumenda.
                    </p>
                    <p class="multi-msg">
                      Lorem ipsum dolor sit amet consectetur.
                    </p>

                    <span class="time">18:30 PM | April 9</span>
                  </div>
                </div>
              </div>
              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="../image/user2.jpg" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p class="single-msg">
                      Hi !! This is message from John Lewis. Lorem ipsum, dolor
                      sit amet consectetur adipisicing elit. iste distinctio
                      expedita illo!
                    </p>
                    <span class="time">18:31 PM | April 90</span>
                  </div>
                </div>
              </div>
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="../image/user1.jpg" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Velit, sequi.
                    </p>

                    <span class="time">18:34 PM | April 9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- msg-bottom section -->

          <div class="msg-bottom">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Write message..."
              />

              <span class="input-group-text send-icon">
                <i class="bi bi-send"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  <!-- Scripts -->
  <script src="../script.js"></script>
</body>
</html>