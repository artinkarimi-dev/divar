

    const upload = document.getElementById("upload");
    const preview = document.getElementById("preview");

    upload.addEventListener("change", function () {
      const file = upload.files[0];
      if (file) {
        const imageUrl = URL.createObjectURL(file);
        preview.src = imageUrl;
        preview.style.display = "block";
      }
    });



    const menuBtn = document.getElementById("menuBtn");
    const menuModal = document.getElementById("menuModal");
    const backdrop = document.getElementById("backdrop");
    const closeBtn = document.getElementById("closeBtn");

    function toggleMenu() {
      const isActive = menuModal.classList.contains("active");
      menuModal.classList.toggle("active", !isActive);
      backdrop.classList.toggle("active", !isActive);
      menuBtn.classList.toggle("active", !isActive);
    }

    menuBtn.addEventListener("click", toggleMenu);
    backdrop.addEventListener("click", toggleMenu);
    closeBtn.addEventListener("click", toggleMenu);

    menuBtn.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        toggleMenu();
      }
    });

    closeBtn.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        toggleMenu();
      }
    });
 