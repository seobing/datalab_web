document.addEventListener("DOMContentLoaded", () => {
  const hamburgers = document.querySelectorAll(".hamburger-menu");
  const navLinks = document.querySelector(".nav-links");

  // 각 햄버거 버튼에 이벤트 리스너 추가
  hamburgers.forEach((hamburger) => {
    hamburger.addEventListener("click", (e) => {
      e.stopPropagation();
      navLinks.classList.toggle("active");
      // 모든 햄버거 버튼의 상태를 동기화
      hamburgers.forEach((h) => h.classList.toggle("active"));
    });
  });

  // 현재 페이지 메뉴 활성화
  const currentPath = window.location.pathname;
  const menuItems = document.querySelectorAll(".nav-links .item a");

  menuItems.forEach((item) => {
    if (item.getAttribute("href") === currentPath) {
      item.classList.add("active");
    }
  });

  // 문서 전체 클릭 시 메뉴 닫기
  document.addEventListener("click", (e) => {
    if (navLinks.classList.contains("active") && !navLinks.contains(e.target)) {
      navLinks.classList.remove("active");
      hamburgers.forEach((h) => h.classList.remove("active"));
    }
  });

  // 메뉴 내부 클릭 시 이벤트 전파 방지
  navLinks.addEventListener("click", (e) => {
    e.stopPropagation();
  });
});
