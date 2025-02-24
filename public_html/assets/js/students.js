document.addEventListener("DOMContentLoaded", function () {
  const categoryToggles = document.querySelectorAll(".category-toggle");
  const studentItems = document.querySelectorAll(".student-item");
  const modal = document.querySelector(".student-modal");
  const modalClose = modal.querySelector(".modal-close");
  const modalTitle = modal.querySelector(".modal-title");
  const researchList = modal.querySelector(".research-list");
  const educationList = modal.querySelector(".education-list");

  function updateLayout() {
    const visibleItems = Array.from(studentItems).filter(
      (item) => !item.classList.contains("hidden")
    );
    visibleItems.forEach((item, index) => {
      item.style.order = index;
    });
    Array.from(studentItems)
      .filter((item) => item.classList.contains("hidden"))
      .forEach((item, index) => {
        item.style.order = visibleItems.length + index;
      });
  }

  function openModal(student) {
    const studentData = {
      name: student.querySelector("h3").textContent,
      position: student.querySelector(".position").textContent,
      research: JSON.parse(student.dataset.research || "[]"),
      education: JSON.parse(student.dataset.education || "[]"),
    };

    modalTitle.textContent = studentData.name;

    // Update research list
    researchList.innerHTML = studentData.research
      .map((item) => `<li>${item}</li>`)
      .join("");

    // Update education list
    educationList.innerHTML = studentData.education
      .map(
        (edu) =>
          `<li>${edu.period}<br>${edu.degree},<br>${edu.institution}</li>`
      )
      .join("");

    // Show modal
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  }

  categoryToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      categoryToggles.forEach((t) => t.classList.remove("active"));
      toggle.classList.add("active");

      const selectedCategory = toggle.dataset.category;

      studentItems.forEach((item) => {
        if (
          selectedCategory === "all" ||
          item.dataset.category === selectedCategory
        ) {
          item.classList.remove("hidden");
        } else {
          item.classList.add("hidden");
        }
      });

      updateLayout();
    });
  });

  studentItems.forEach((item) => {
    item.addEventListener("click", () => openModal(item));
  });

  modalClose.addEventListener("click", closeModal);
  modal.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModal();
  });

  updateLayout();
});
