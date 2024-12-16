const daysTag = document.querySelector(".days"), //Mengacu pada elemen tempat tanggal ditampilkan.
      currentDate = document.querySelector(".current-date"), //Menampilkan bulan dan tahun saat ini di atas kalender.
      prevNextIcon = document.querySelectorAll(".icons span"), //Tombol navigasi untuk berpindah bulan sebelumnya atau berikutnya.
      modal = document.getElementById('event-modal'), 
      closeBtn = document.querySelector('.close');
    //Modal digunakan untuk menampilkan informasi event, dan tombol closeBtn menutup modal.

let date = new Date(), //objek Date untuk mendapatkan tanggal sekarang
    currYear = date.getFullYear(), 
    currMonth = date.getMonth(); //Menyimpan tahun dan bulan yang sedang ditampilkan.

const months = ["January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"]; //menggunakan array unyuk bulan, dari 0,1,2,3 dst

let events = [];

// Fetch events from server
const fetchEvents = async () => { //fungsi ini untuk mengambil data event dari API.
    const response = await fetch('../api/server_kalender.php');
    const text = await response.text();

    try {
        // Jika respons kosong, gunakan array kosong sebagai default
        events = text ? JSON.parse(text).filter(event => event.start_date && event.title) : []; //Mengubah respon JSON menjadi array objek event
    } catch (error) { //filter start_date dan title : hanya untuk menyimpan event yang memiliki tanggal mulai dan judul.
        console.error("Error parsing JSON:", error);
        events = []; // Atur events ke array kosong jika terjadi error
    }
};

// Render kalender dan tandai tanggal dengan event
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), //Hari pertama bulan aktif (0=minggu, 1=senin, dst)
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), //Jumlah hari dalam bulan aktif (Contoh :Februari ada 29 hari, maka lastDateofMonth = 29)
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), //Hari terakhir bulan akhir (Contoh : Jika 31 maret adalah minggu, )
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); //Jumlah hari dalam bulan sebelumnya (Contoh : februari 2024 memiliki 29 hari, maka lastDateofMont = 29)

    let liTag = "";

    // Menambahkan hari-hari dari bulan sebelumnya
    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    // Menambahkan hari-hari pada bulan ini
    for (let i = 1; i <= lastDateofMonth; i++) { //Perulangan dari 1 hingga lastDateofMonth : Tambahkan semua tanggal dalam bulan aktif ke kalender
        let dateStr = `${currYear}-${String(currMonth + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`; //Memformat tanggal saat ini menjadi YYYY-MM-DD.
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() //Periksa apakah tanggal dalam loop hari adalah hari ini : Tanggal (i) sama dengan tanggal hari ini (date.getDate()). 
                    && currYear === new Date().getFullYear() ? "active" : ""; //Bulan dan tahun cocok dengan tanggal saat ini, maka ditambahkan ke kelas active.

        // Cek apakah ada event untuk tanggal tersebut
        let eventsForDate = events.filter(event => event.start_date.startsWith(dateStr)); //Filter array events untuk mencocokkan tanggal (start_date.startsWith(dateStr)).
        //Jika ada event, tambahkan kelas has-event dan tampilkan judul event.
        liTag += `<li class="${isToday} ${eventsForDate.length > 0 ? 'has-event' : ''}" data-date="${dateStr}">
                    ${i}
                    ${eventsForDate.length > 0 ? `<span class="event-title">${getEventTitle(dateStr)}</span>` : ''}
                  </li>`;
    }
    //Tanggal yang memiliki event diberi tanda (kelas has-event) dan ditampilkan judulnya. Tanggal hari ini diberi tanda (kelas active).

    // Menambahkan hari-hari dari bulan berikutnya
    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    } //ini untuk buat nambah tanggal setelah bulan ini habis pake tanggal bulan berikutnya.
    //Cara kerjanya loop dimulai dari lastDayofMonth hingga hari sabtu (6).
    //Tambahkan tanggal mulai dari 1 bulan berikutnya.
    //contoh kasusnya Jika 31 Maret adalah Jumat (lastDayofMonth = 5), maka 1 dan 2 April ditambahkan (kelas inactive).

    // Update bulan dan tahun (memperbarui elemen html)
    currentDate.innerText = `${months[currMonth]} ${currYear}`; //Menampilkan nama bulan dan tahun aktif (contoh: "Maret 2024")
    daysTag.innerHTML = liTag; //Masukkan semua <li> tanggal ke elemen kalender
    attachDateClickHandlers(); //Ini buat menambahkan event listener ke setiap elemen tanggal.
}; //Ketika tanggal diklik, maka tanggal terkait diambil (data-date)
//lalu menampilkan modal untuk menambah dan mengedit event.

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
}; //fungsi event listener adalah, untuk setiap tanggal yang aktif, saat diklik tanggal akan membuka modal

// Open modal saat klik tanggal
const openModal = (dateStr) => {
    modal.style.display = 'block'; //Ini untuk mengatur gaya modal agar terlihat
    document.getElementById('start-date').value = dateStr; //Tanggal ini akan diisi dengan tanggal yang diklik (dateStr)
    document.getElementById('end-date').value = dateStr; 
    //contoh Jika tanggal yang dipilih adalah 2024-12-15, maka input start-date dan end-date akan diisi 2024-12-15.
    // Tampilkan event terkait tanggal yang dipilih
    const selectedEvent = events.find(event => event.start_date.startsWith(dateStr)); //ini menggunakan fungsi find pada array events, untuk mencari event dengan start_date yang cocok
    if (selectedEvent) {
        document.getElementById('title').value = selectedEvent.title; //ini untuk isi form dengan data event
        document.getElementById('description').value = selectedEvent.description;
    } else {
        document.getElementById('title').value = '';
        document.getElementById('description').value = '';
    } //jika tidak ada event maka form direset kosong (user bisa memasukkan data baru.)
}; //ini untuk membuka modal dan memuat data event jika ada untuk tanggal tersebut

// Tutup modal
closeBtn.onclick = () => modal.style.display = 'none';

// Render kalender pada halaman load
renderCalendar();

// Navigation untuk bulan sebelumnya/berikutnya
prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        // jika icon.id adalah prev, maka bulan (currMonth) dikurangi 1.
        // Jika icon.id adalah next, maka bulan (currMonth) ditambah 1.
        if (currMonth < 0 || currMonth > 11) { // Jika bulan melebihi indeks (Bulan ke 12, currMonth), pindah ke tahun berikutnya.
            date = new Date(currYear, currMonth, new Date().getDate()); //Jika bulan kurang dari 0 (currMonth < 0), pindah ke tahun sebelumnya.
            currYear = date.getFullYear();
            currMonth = date.getMonth(); //Setelah memperbarui tahun, currYear dan currMonth disesuaikan dengan nilai yang benar.
        } else {
            date = new Date();
        }
        renderCalendar();
    }); //Setelah bulan atau tahun diperbarui, fungsi renderCalendar dipanggil untuk menampilkian kalender baru.
});

// Fetch and render events
fetchEvents().then(() => renderCalendar());
//fetchEvents()Fungsi fetchEvents adalah fungsi asinkron (dengan async) yang mengambil data dari server menggunakan fetch.
//Tujuannya adalah mendapatkan array data event dari endpoint server (../api/server_kalender.php) dan menyimpannya ke dalam variabel events.
//2. .then()
//Karena fetchEvents() adalah fungsi asinkron yang mengembalikan Promise, kita menggunakan .then() untuk menjalankan operasi berikutnya setelah data event berhasil diambil.
//Dalam konteks ini, .then() memastikan bahwa renderCalendar() hanya dipanggil setelah proses pengambilan data event selesai.