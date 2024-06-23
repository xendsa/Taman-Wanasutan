document.querySelectorAll(".flora img").forEach((image) => {
  image.onclick = () => {
    document.querySelector(".preview").style.display = "block";
    document.querySelector(".preview img").src = image.getAttribute("src");
  };
  document.querySelector(".item-preview .preview").style.display = "block";
  document.querySelector(".item-preview .preview img").src =
    image.getAttribute("src");
});
document.querySelector(".preview span").onclick = () => {
  document.querySelector(".preview").style.display = "none";
};
