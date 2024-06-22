// document.getElementById('text-fauna-name').addEventListener('pointer', function() {
//     document.getElementById('text-fauna-name').style.display = 'inline';
//     document.getElementById('text-fauna-name').style.display = 'inline';
// });

// document.getElementById('fauna-btn').addEventListener('click', function() {
//     document.getElementById('fauna-container').style.display = 'grid';
//     document.getElementById('flora-container').style.display = 'none';
// });

let previewContainer = document.querySelector('.item-preview');
let previewBoxes = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.flora-container .flora').forEach(flora => {
  flora.onclick = () => {
    previewContainer.style.display = 'flex';
    let name = flora.getAttribute('data-name');
    previewBoxes.forEach(preview => {
      let target = preview.getAttribute('data-target');
      if (name === target) {
        preview.classList.add('active');
      }
    });
  };
});

previewBoxes.forEach(preview => {
  let closeBtn = preview.querySelector('.fa-times');
  if (closeBtn) {
    closeBtn.onclick = () => {
      preview.classList.remove('active');
      previewContainer.style.display = 'none';
    };
  }
});
