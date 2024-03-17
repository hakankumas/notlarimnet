document.addEventListener("DOMContentLoaded", function() {
    var cells = document.querySelectorAll('td');
    cells.forEach(function(cell) {
        var maxStringLength = 90;
        var content = cell.textContent;
        if (content.length > maxStringLength) {
            cell.textContent = content.slice(0, maxStringLength) + '...';
        }
    });

    var cells = document.querySelectorAll('#q_note_title');
    cells.forEach(function(cell) {
        var maxStringLength = 50;
        var content = cell.textContent;
        if (content.length > maxStringLength) {
            cell.textContent = content.slice(0, maxStringLength) + '...';
        }
    });

    var cells = document.querySelectorAll('#q_note_content');
    cells.forEach(function(cell) {
        var maxStringLength = 200;
        var content = cell.textContent;
        if (content.length > maxStringLength) {
            cell.textContent = content.slice(0, maxStringLength) + '...';
        }
    });



});