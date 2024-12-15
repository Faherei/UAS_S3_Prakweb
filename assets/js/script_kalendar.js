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
    const response = await fetch('../api/server_kalender.php');
    const text = await response.text();

    try {
        // Jika respons kosong, gunakan array kosong sebagai default
        events = text ? JSON.parse(text).filter(event => event.start_date && event.title) : [];
    } catch (error) {
        console.error("Error parsing JSON:", error);
        events = []; // Atur events ke array kosong jika terjadi error
    }
};

// Render kalender dan tandai tanggal dengan event
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = "";

    // Menambahkan hari-hari dari bulan sebelumnya
    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    // Menambahkan hari-hari pada bulan ini
    for (let i = 1; i <= lastDateofMonth; i++) {
        let dateStr = `${currYear}-${String(currMonth + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
                    && currYear === new Date().getFullYear() ? "active" : "";

        // Cek apakah ada event untuk tanggal tersebut
        let eventsForDate = events.filter(event => event.start_date.startsWith(dateStr));

        liTag += `<li class="${isToday} ${eventsForDate.length > 0 ? 'has-event' : ''}" data-date="${dateStr}">
                    ${i}
                    ${eventsForDate.length > 0 ? `<span class="event-title">${getEventTitle(dateStr)}</span>` : ''}
                  </li>`;
    }

    // Menambahkan hari-hari dari bulan berikutnya
    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }

    // Update bulan dan tahun
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    attachDateClickHandlers();
};

// Ambil title event berdasarkan tanggal
const getEventTitle = (dateStr) => {
    const event = events.find(event => event.start_date.startsWith(dateStr));
    return event ? event.title : '';
};

// Attach event listener untuk klik tanggal
const attachDateClickHandlers = () => {
    const dateElements = document.querySelectorAll('.days li:not(.inactive)');
    dateElements.forEach(el => {
        el.addEventListener('click', (e) => {
            const selectedDate = e.target.getAttribute('data-date');
            openModal(selectedDate);
        });
    });
};

// Open modal saat klik tanggal
const openModal = (dateStr) => {
    modal.style.display = 'block';
    document.getElementById('start-date').value = dateStr;
    document.getElementById('end-date').value = dateStr;

    // Tampilkan event terkait tanggal yang dipilih
    const selectedEvent = events.find(event => event.start_date.startsWith(dateStr));
    if (selectedEvent) {
        document.getElementById('title').value = selectedEvent.title;
        document.getElementById('description').value = selectedEvent.description;
    } else {
        document.getElementById('title').value = '';
        document.getElementById('description').value = '';
    }
};

// Tutup modal
closeBtn.onclick = () => modal.style.display = 'none';

// Render kalender pada halaman load
renderCalendar();

// Navigation untuk bulan sebelumnya/berikutnya
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

// Fetch and render events
fetchEvents().then(() => renderCalendar());
