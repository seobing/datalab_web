---
layout: default
title: Research
---

<script src="/assets/js/research.js"></script>
<div class="research-container container">
  <h1 class="page-title">Research</h1>

  <div class="research-grid">
    {% for research in site.researches %}
    <div class="research-item" data-category="{{ research.category }}">
      <a href="{{ research.url }}">
        <div class="item-image">
          {% if research.thumbnail %}
          <img src="{{ research.thumbnail }}" alt="{{ research.title }}">
          {% else %}
          <div class="alt-text">
            <span>{{ research.title }}</span>
          </div>
          {% endif %}
        </div>
        <div class="item-info">
          <h3>{{ research.title }}</h3>
          <p>{{ research.date | date: "%Y.%m.%d" }} 
            {% if research.description %}
            | {{ research.author }}
            {% endif %}
          </p>
          <!-- {% if research.description %}
          <p class="description">{{ research.description }}</p>
          {% endif %} -->
        </div>
      </a>
    </div>
    {% endfor %}
  </div>
</div>

<div class="research-modal">
  <button class="modal-close">×</button>
  <div class="modal-content">
    <img src="" alt="">
  </div>
  <button class="modal-prev"></button>
  <button class="modal-next"></button>
</div>
