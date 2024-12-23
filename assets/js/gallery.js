document.addEventListener("DOMContentLoaded", function () {
  const galleryGrid = document.querySelector(".gallery-grid");
  const categoryToggles = document.querySelectorAll(".category-toggle");
  const modal = document.querySelector(".gallery-modal");
  const modalImg = modal.querySelector(".modal-content img");
  const closeBtn = modal.querySelector(".modal-close");
  const prevBtn = modal.querySelector(".modal-prev");
  const nextBtn = modal.querySelector(".modal-next");
  let currentIndex = 0;
  let galleryItems = [];

  // 카테고리 토글 기능
  categoryToggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      // 이전 활성 버튼 비활성화
      categoryToggles.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");

      const selectedCategory = this.dataset.category;
      const items = document.querySelectorAll(".gallery-item");

      // 모든 아이템 처리
      items.forEach((item) => {
        if (
          selectedCategory === "all" ||
          item.dataset.category === selectedCategory
        ) {
          item.style.display = "block";
          requestAnimationFrame(() => {
            item.classList.remove("hidden");
          });
        } else {
          item.classList.add("hidden");
          item.addEventListener("transitionend", function handler() {
            if (item.classList.contains("hidden")) {
              item.style.display = "none";
            }
            item.removeEventListener("transitionend", handler);
          });
        }
      });

      updateVisibleItems();
    });
  });

  // 이미지 클릭 이벤트를 각 이미지에 직접 추가
  function addImageClickEvents() {
    const items = document.querySelectorAll(".gallery-item");
    items.forEach((item, index) => {
      const img = item.querySelector("img");
      item.addEventListener("click", () => {
        openModal(img, index);
      });
    });
  }

  function updateVisibleItems() {
    galleryItems = Array.from(
      document.querySelectorAll(".gallery-item:not(.hidden)")
    );
  }

  function openModal(img, index) {
    modalImg.src = img.src;
    currentIndex = index;
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  }

  function showNext() {
    currentIndex = (currentIndex + 1) % galleryItems.length;
    const nextImg = galleryItems[currentIndex].querySelector("img");
    modalImg.src = nextImg.src;
  }

  function showPrev() {
    currentIndex =
      (currentIndex - 1 + galleryItems.length) % galleryItems.length;
    const prevImg = galleryItems[currentIndex].querySelector("img");
    modalImg.src = prevImg.src;
  }

  // 이벤트 리스너
  closeBtn.addEventListener("click", closeModal);
  prevBtn.addEventListener("click", showPrev);
  nextBtn.addEventListener("click", showNext);

  // 모달 외부 클릭시 닫기
  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      closeModal();
    }
  });

  // ESC 키로 모달 닫기
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeModal();
    if (e.key === "ArrowLeft") showPrev();
    if (e.key === "ArrowRight") showNext();
  });

  // 초기화
  updateVisibleItems();
  addImageClickEvents();
});
