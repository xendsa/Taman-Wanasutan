document.querySelectorAll('.flora img').forEach(image => {
  console.log(image)
  image.onclick = () => {
<<<<<<< HEAD
    document.querySelector(".preview").style.display = "block";
    document.querySelector(".preview img").src = image.getAttribute("src");
  };
  document.querySelector(".item-preview .preview").style.display = "block";
  document.querySelector(".item-preview .preview img").src =
    image.getAttribute("src");
=======
    document.querySelector('.item-preview').style.display = 'block';
    document.querySelector('.item-preview .preview').style.display = 'block';
    document.querySelector('.item-preview .preview img').src = image.getAttribute('src');
  }
>>>>>>> 74542b1468f6baf3ba9ed3729536749977027b16
});
document.querySelectorAll('#close-btn').forEach(closeBtn => {
  closeBtn.onclick = () => {
    document.querySelector('.item-preview').style.display = 'none';
    document.querySelector('.item-preview .preview').style.display = 'none';
  }
});