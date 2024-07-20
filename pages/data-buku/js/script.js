document.addEventListener('DOMContentLoaded', (event) => {
    const myDiv = document.getElementById('book-item');
    
    myDiv.addEventListener('click', () => {
      window.location.href = '../detail/bookdetail.php'; // Ganti dengan URL tujuan
    });
  });
  