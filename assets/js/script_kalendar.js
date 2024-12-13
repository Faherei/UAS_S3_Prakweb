const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span"),
modal = document.getElementById('event-modal'),
closeBtn = document.querySelector('.close');

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"];

let events = [];

// Fetch events from server
const fetchEvents = async () => {
    try {
        const response = await fetch('../API/server_kalender.php');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        events = await response.json();
    } catch (error) {
        console.error('There was a problem with fetching events:', error);
    }
};


const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        let dateStr = `${currYear}-${String(currMonth + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
                    && currYear === new Date().getFullYear() ? "active" : "";

        liTag += `<li class="${isToday}" data-date="${dateStr}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    attachDateClickHandlers();
};

const attachDateClickHandlers = () => {
    const dateElements = document.querySelectorAll('.days li:not(.inactive)');
    dateElements.forEach(el => {
        el.addEventListener('click', (e) => {
            const selectedDate = e.target.getAttribute('data-date');
            openModal(selectedDate);
        });
    });
};

const openModal = (dateStr) => {
    modal.style.display = 'block';
    document.getElementById('start-date').value = dateStr;
    document.getElementById('end-date').value = dateStr;
};

closeBtn.onclick = () => modal.style.display = 'none';

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) {
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        } else {
            date = new Date();
        }
        renderCalendar();
    });
});

const addEvent = async (eventData) => {
    try {
        const response = await fetch('../API/server_kalender.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(eventData)
        });
        const result = await response.json();
        if (result.success) {
            alert('Event added successfully!');
            fetchEvents();  // Refetch events and re-render calendar
            renderCalendar();
        } else {
            alert('Failed to add event');
        }
    } catch (error) {
        console.error('Error adding event:', error);
    }
};


// Fetch and render events
fetchEvents().then(() => renderCalendar());
