function updateDate() {
    var currentDate = new Date();

    // Wochentag
    var weekdays = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
    var weekdayText = weekdays[currentDate.getDay()];

    // Monat
    var months = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
    var monthText = months[currentDate.getMonth()];

    var date = currentDate.getDate();
    var dateDiv = document.querySelector('.fill_date');

    // Überprüfen, ob das Element existiert, bevor es aktualisiert wird
    if (dateDiv) {
        // Inhalt des HTML-Elements aktualisieren
        dateDiv.textContent = weekdayText + ', der ' + date + '. ' + monthText;
    }
}
document.addEventListener('DOMContentLoaded', updateDate);