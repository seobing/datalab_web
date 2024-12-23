class Pagination {
  constructor(options = {}) {
    this.container = options.container;
    this.itemsPerPage = options.itemsPerPage || 9;
    this.currentPage = 1;
    this.items = [];
    this.filteredItems = [];
    this.onPageChange = options.onPageChange || (() => {});

    this.init();
  }

  init() {
    this.render();
    this.attachEvents();
  }

  setItems(items) {
    this.items = items;
    this.filteredItems = items;
    this.currentPage = 1;
    this.render();
  }

  filterItems(category) {
    this.filteredItems =
      category === "all"
        ? this.items
        : this.items.filter((item) => item.dataset.category === category);
    this.currentPage = 1;
    this.render();
  }

  attachEvents() {
    this.container.addEventListener("click", (e) => {
      if (e.target.classList.contains("pagination-btn")) {
        const action = e.target.dataset.action;
        if (action === "prev") this.prevPage();
        if (action === "next") this.nextPage();
      }
      if (e.target.classList.contains("page-number")) {
        this.goToPage(parseInt(e.target.dataset.page));
      }
    });
  }

  render() {
    const totalPages = Math.ceil(this.filteredItems.length / this.itemsPerPage);
    const start = (this.currentPage - 1) * this.itemsPerPage;
    const end = start + this.itemsPerPage;

    this.onPageChange(this.filteredItems.slice(start, end));
    this.renderPaginationControls(totalPages);
  }
}
