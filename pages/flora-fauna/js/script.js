document.querySelectorAll('.flora img').forEach(image => {
  console.log(image)
  image.onclick = () => {
    document.querySelector('.item-preview').style.display = 'block';
    document.querySelector('.item-preview .preview').style.display = 'block';
    document.querySelector('.item-preview .preview img').src = image.getAttribute('src');
  }
});
document.querySelectorAll('#close-btn').forEach(closeBtn => {
  closeBtn.onclick = () => {
    document.querySelector('.item-preview').style.display = 'none';
    document.querySelector('.item-preview .preview').style.display = 'none';
  }
});