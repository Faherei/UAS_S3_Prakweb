// Fungsi untuk membuka sidebar
function openSidebar() {
    document.getElementById("sidebar_settings").style.width = "270px";
}

// Fungsi untuk menutup sidebar
function closeSidebar() {
    document.getElementById("sidebar_settings").style.width = "0";
}


// Pastikan document siap sebelum mengeksekusi script
document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen notifikasi
    const pesan = document.querySelector('.pesan');
    
    // Jika elemen notifikasi ada
    if (pesan) {
        // Atur timer untuk menghilangkan notifikasi setelah 5 detik (5000ms)
        setTimeout(function() {
            pesan.style.display = 'none'; // Menghilangkan notifikasi
        }, 5000); // 5000ms = 5 detik
    }
});