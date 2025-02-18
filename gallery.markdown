---
layout: default
title: Gallery
---

<script src="/~gangman/assets/js/gallery.js"></script>
<div class="gallery-container container">
  <h1 class="page-title">Gallery</h1>

  <div class="category-toggles">
    <button class="category-toggle active" data-category="all">All</button>
    {% for category in site.data.gallery.categories %}
    <button class="category-toggle" data-category="{{ category.id }}">{{ category.name }}</button>
    {% endfor %}
  </div>

  <div class="gallery-grid">
    {% assign sorted_items = site.data.gallery.items | sort: "sort_date" | reverse %}
    {% for item in sorted_items %}
    <div class="gallery-item" data-category="{{ item.category }}">
      <div class="item-image">
        <img src="{{ item.image }}" alt="{{ item.title }}" loading="lazy">
      </div>
      <div class="item-info">
        <h3>{{ item.title }}</h3>
        <p>{{ item.date }}</p>
      </div>
    </div>
    {% endfor %}
  </div>
</div>

<div class="gallery-modal">
  <button class="modal-close">×</button>
  <div class="modal-content">
    <img src="" alt="">
  </div>
  <button class="modal-prev"></button>
  <button class="modal-next"></button>
</div>
