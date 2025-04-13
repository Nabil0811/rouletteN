document.getElementById('selectionneur').onchange = function() {
    localStorage.setItem('selectedtem', document.getElementById('selectionneur').value);
};

if (localStorage.getItem('selectedtem')) {
    document.getElementById('selectionneur').options[localStorage.getItem('selectedtem')].selected = true;
}