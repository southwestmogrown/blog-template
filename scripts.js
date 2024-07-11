document.addEventListener("DOMContentLoaded", function () {
  var footer = document.getElementById("footer");
  var threshold = 100; // Adjust this threshold as needed

  window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Check if user has scrolled down past the threshold
    if (scrollTop > threshold) {
      footer.classList.add("show"); // Show the footer
    }
  });

  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");

  hamburger.addEventListener("click", function () {
    navLinks.classList.toggle("active");
  });
});
