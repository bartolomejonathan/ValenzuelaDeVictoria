window.onload = function(){
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })

    searchBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })

    function menuBtnChange(){
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu","bx-menu-alt-right")
        }else{
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu")
        }
    }
}

// calendar
//message
function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value.trim();
    if (message !== '') {
      const chatMessages = document.querySelector('.chat-messages');
      const messageElement = document.createElement('div');
      messageElement.classList.add('message');
      messageElement.textContent = message;
      chatMessages.appendChild(messageElement);
      messageInput.value = '';
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }
  
  // Event listener
  document.getElementById('send-button').addEventListener('click', sendMessage);
  document.getElementById('message-input').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
      event.preventDefault();
      sendMessage();
    }
  });


// admin message list

document.addEventListener("DOMContentLoaded", function() {
    // Get all message elements
    const messages = document.querySelectorAll('.message');

    // Add click event listener to each message
    messages.forEach(message => {
        message.addEventListener('click', function() {
            // Add your click event logic here
            alert('You clicked a message!');
        });
    });
});

function goBack() {
    window.history.back();
  }

// admin condo list

function changeStatus(event) {
    var row = event.target.closest('tr');
    var statusCell = row.querySelector('td:nth-child(5)');
    
    if (statusCell.textContent === "Available") {
        statusCell.textContent = "Unavailable";
        row.classList.remove('available');
        row.classList.add('unavailable');
    } else {
        statusCell.textContent = "Available";
        row.classList.remove('unavailable');
        row.classList.add('available');
    }
}

// Add event listeners to each "Change Status" button
document.querySelectorAll('.status-btn').forEach(function(btn) {
    btn.addEventListener('click', changeStatus);
});


