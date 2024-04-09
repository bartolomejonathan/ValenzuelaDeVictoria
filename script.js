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
//notification
function showContent(notification) {
    var content = notification.querySelector('.notification-content');
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
}

// calendar

document.addEventListener("DOMContentLoaded", function() {
    const calendarContainer = document.getElementById("calendar");
    const confirmBtn = document.getElementById("confirmBtn");
    const monthSelect = document.getElementById("month");
    const yearInput = document.getElementById("year");
    const bookedDates = [];

    function generateCalendar(month, year) {
        const daysInMonth = new Date(year, month, 0).getDate();
        const firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // Get day index of the first day of the month
        const dayLabels = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

        calendarContainer.innerHTML = ''; // Clear previous calendar
        
        // Generate day labels
        for (let i = 0; i < 7; i++) {
            const label = document.createElement("div");
            label.className = "day-label";
            label.textContent = dayLabels[i];
            calendarContainer.appendChild(label);
        }

        // Add empty cells before the first day of the month
        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyCell = document.createElement("div");
            emptyCell.className = "empty-cell";
            calendarContainer.appendChild(emptyCell);
        }

        // Generate calendar grid
        for (let i = 1; i <= daysInMonth; i++) {
            const day = document.createElement("div");
            day.className = "day";
            day.textContent = i;
            calendarContainer.appendChild(day);
            day.addEventListener("click", function() {
                if (!day.classList.contains("booked")) {
                    day.classList.toggle("booked");
                    bookedDates.push(`${year}-${month}-${i}`);
                } else {
                    day.classList.remove("booked");
                    const index = bookedDates.indexOf(`${year}-${month}-${i}`);
                    if (index > -1) {
                        bookedDates.splice(index, 1);
                    }
                }
            });
        }
    }

    // Initial generation
    generateCalendar(monthSelect.value, yearInput.value);

    // Event listeners for month and year changes
    monthSelect.addEventListener("change", function() {
        generateCalendar(monthSelect.value, yearInput.value);
    });

    yearInput.addEventListener("change", function() {
        generateCalendar(monthSelect.value, yearInput.value);
    });

    // Confirm selected date(s)
    confirmBtn.addEventListener("click", function() {
        if (bookedDates.length > 0) {
            alert("Confirmed Dates: " + bookedDates.join(", "));
            // Here you can send the bookedDates array to the backend for further processing (e.g., saving to the database)
        } else {
            alert("Please select at least one date.");
        }
    });
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
