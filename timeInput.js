function updateDateTime() {
    const now = new Date();

    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let day = now.toLocaleDateString('id-ID', { weekday: 'long' });
    let date = now.toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
// ---------------------------------------------------------------------------------------------------//
    document.getElementById('clock').innerText = `${hours}:${minutes}:${seconds}`;
    document.getElementById('date').innerText = date;
    document.getElementById('day').innerText = day;
}

// Update setiap detik
setInterval(updateDateTime, 1000);

// Panggil fungsi untuk pertama kali
updateDateTime();