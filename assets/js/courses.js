document.addEventListener("DOMContentLoaded", function () {
  const yearToggles = document.querySelectorAll(".year-toggle");

  yearToggles.forEach((toggle) => {
    const coursesGrid = toggle.nextElementSibling;

    // 초기 상태 설정
    toggle.classList.remove("collapsed");
    coursesGrid.classList.remove("collapsed");

    toggle.addEventListener("click", function (e) {
      e.preventDefault();

      // 토글 버튼과 그리드 상태 변경
      this.classList.toggle("collapsed");
      coursesGrid.classList.toggle("collapsed");
    });
  });
});
