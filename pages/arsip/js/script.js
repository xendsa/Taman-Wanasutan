let next = document.querySelector(".next");
let prev = document.querySelector(".prev");

next.addEventListener("click", function () {
  let items = document.querySelectorAll(".item");
  document.querySelector(".slide").appendChild(items[0]);
});

prev.addEventListener("click", function () {
  let items = document.querySelectorAll(".item");
  document.querySelector(".slide").prepend(items[items.length - 1]);
});

// Navbar Collapsing Functionality
document.addEventListener("DOMContentLoaded", function () {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  navbarToggler.addEventListener("click", function () {
    if (!navbarCollapse.classList.contains("show")) {
      setTimeout(() => {
        window.scrollTo({
          top: navbarCollapse.offsetTop,
          behavior: "smooth",
        });
      }, 300); // Sesuaikan dengan waktu transisi
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const loadMoreBtn = document.getElementById("loadMoreBtn");
  const colsDiv = document.getElementById("colsDiv");
  const displayLimit = 9;
  let currentItem = displayLimit;

  loadMoreBtn.addEventListener("click", function() {
      const items = colsDiv.querySelectorAll(".col");
      for (let i = currentItem; i < currentItem + displayLimit && i < items.length; i++) {
          items[i].style.display = "block";
      }
      currentItem += displayLimit;
      if (currentItem >= items.length) {
          loadMoreBtn.style.display = "none";
      }
  });

  const items = colsDiv.querySelectorAll(".col");
  for (let i = displayLimit; i < items.length; i++) {
      items[i].style.display = "none";
  }
});