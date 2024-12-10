document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
  
    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: async function (fetchInfo, successCallback, failureCallback) {
        const response = await fetch('../../API/server_kalender.php');
        const events = await response.json();
        successCallback(events.map(event => ({
          id: event.id,
          title: event.title,
          start: event.start_date,
          end: event.end_date,
          description: event.description,
        })));
      },
      dateClick: function (info) {
        openModal();
        document.getElementById('start-date').value = info.dateStr;
        document.getElementById('end-date').value = info.dateStr;
      },
    });
  
    calendar.render();
  
    const modal = document.getElementById('event-modal');
    const closeBtn = document.querySelector('.close');
  
    closeBtn.onclick = () => modal.style.display = 'none';
    window.onclick = (event) => {
      if (event.target == modal) modal.style.display = 'none';
    };
  
    document.getElementById('event-form').onsubmit = async function (e) {
      e.preventDefault();
      const title = document.getElementById('event-title').value;
      const startDate = document.getElementById('start-date').value;
      const endDate = document.getElementById('end-date').value;
      const description = document.getElementById('description').value;
  
      const response = await fetch('../../API/server_kalender.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ title, start_date: startDate, end_date: endDate, description }),
      });
  
      if (response.ok) {
        calendar.refetchEvents();
        modal.style.display = 'none';
      } else {
        alert('Gagal menyimpan event');
      }
    };
  
    function openModal() {
      modal.style.display = 'block';
    }
  });
  