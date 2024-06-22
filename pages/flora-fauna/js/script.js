document.querySelectorAll(".flora img").forEach((image) => {
  image.onclick = () => {
<<<<<<< HEAD
    document.querySelector(".preview").style.display = "block";
    document.querySelector(".preview img").src = image.getAttribute("src");
  };
=======
    document.querySelector('.item-preview .preview').style.display = 'block';
    document.querySelector('.item-preview .preview img').src = image.getAttribute('src');
  }
>>>>>>> 826e77c89ea07559fa189bcd9086bf797db71f0a
});
document.querySelector(".preview span").onclick = () => {
  document.querySelector(".preview").style.display = "none";
};
