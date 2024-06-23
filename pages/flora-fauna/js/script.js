document.querySelectorAll('.flora img, .fauna img').forEach(image => {
  console.log(image)
  image.onclick = () => {
    document.querySelector('.item-preview').style.display = 'block';
    document.querySelector('.item-preview .preview').style.display = 'block';
    document.querySelector('.item-preview .preview img').src = image.getAttribute('src');
  }
});
document.querySelector('.item-preview .preview span').onclick = () => {
  document.querySelector('.item-preview').style.display = 'none';
  document.querySelector('.item-preview .preview').style.display = 'none';
}