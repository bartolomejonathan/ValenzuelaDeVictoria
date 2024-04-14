<html>
  <head>
    <title>Chat Box UI Design</title>
    <link rel="stylesheet" href="admin/admintoo.css" />

    <!-- Import this CDN to use icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>

  <body>
  <button class="back-button" onclick="location.href='messagelist.php'" href=>Back</button>
    <!-- Main container -->
    <div class="container">
      <!-- msg-header section starts -->
      <div class="msg-header">
        <div class="container1">
          <img src="image/user1.jpg" class="msgimg" />
          <div class="active">
            <p>Admin</p>
          </div>
        </div>
      </div>
      <!-- msg-header section ends -->

      <!-- Chat inbox  -->
      <div class="chat-page">
        <div class="msg-inbox">
          <div class="chats">
            <!-- Message container -->
            <div class="msg-page">
              <!-- Incoming messages -->

              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="image/user1.jpg" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p>
                      Hi !! This is message from John Doe . Lorem ipsum, dolor sit
                      amet consectetur adipisicing elit. Non quas nemo eum,
                      earum sunt, nobis similique quisquam eveniet pariatur
                      commodi modi voluptatibus iusto omnis harum illum iste
                      distinctio expedita illo!
                    </p>
                    <span class="time">18:06 PM | July 24</span>
                  </div>
                </div>
              </div>
              <!-- Outgoing messages -->
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="image/user2.jpg" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p class="multi-msg">
                      Hi John Doe , Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Illo nobis deleniti earum magni
                      recusandae assumenda.
                    </p>
                    <p class="multi-msg">
                      Lorem ipsum dolor sit amet consectetur.
                    </p>

                    <span class="time">18:30 PM | July 24</span>
                  </div>
                </div>
              </div>
              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="image/user1.jpg" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p class="single-msg">
                      Hi !! This is message from John Lewis. Lorem ipsum, dolor
                      sit amet consectetur adipisicing elit. iste distinctio
                      expedita illo!
                    </p>
                    <span class="time">18:31 PM | July 24</span>
                  </div>
                </div>
              </div>
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="image/user2.jpg" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Velit, sequi.
                    </p>

                    <span class="time">18:34 PM | July 24</span>
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
  </body>
</html>


