document.querySelectorAll(".dropdown-content a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("data-target");
    document.getElementById(targetId).scrollIntoView({ behavior: "smooth" });
  });
});
