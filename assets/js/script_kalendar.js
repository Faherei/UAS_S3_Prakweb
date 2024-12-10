const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons i"); // Perbarui selektor untuk elemen <i>

// Mendapatkan tanggal, tahun, dan bulan saat ini
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

// Nama-nama bulan disimpan dalam array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // Hari pertama bulan
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // Tanggal terakhir bulan
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // Hari terakhir bulan
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // Tanggal terakhir bulan sebelumnya
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // Menambahkan hari-hari terakhir bulan sebelumnya
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // Menambahkan semua hari dalam bulan saat ini
        // Menambahkan kelas "active" jika hari ini cocok dengan tanggal, bulan, dan tahun saat ini
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // Menambahkan hari-hari pertama bulan berikutnya
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // Menampilkan bulan dan tahun saat ini
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcon.forEach(icon => { // Mengambil ikon navigasi sebelumnya dan berikutnya
    icon.addEventListener("click", () => { // Menambahkan event listener untuk klik
        // Jika ikon yang diklik adalah "prev", kurangi bulan saat ini; jika "next", tambahkan bulan saat ini
        currMonth = icon.classList.contains("fa-chevron-left") ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) { // Jika bulan keluar dari rentang 0-11
            // Buat tanggal baru berdasarkan tahun dan bulan yang diperbarui
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear(); // Perbarui tahun saat ini
            currMonth = date.getMonth(); // Perbarui bulan saat ini
        } else {
            date = new Date(); // Gunakan tanggal saat ini
        }
        renderCalendar(); // Panggil fungsi renderCalendar untuk memperbarui tampilan kalender
    });
});
