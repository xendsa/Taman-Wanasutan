document.getElementById('flora-btn').addEventListener('click', function() {
    document.getElementById('flora-container').style.display = 'grid';
    document.getElementById('fauna-container').style.display = 'none';
});

document.getElementById('fauna-btn').addEventListener('click', function() {
    document.getElementById('fauna-container').style.display = 'grid';
    document.getElementById('flora-container').style.display = 'none';
});