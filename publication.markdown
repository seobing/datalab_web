---
layout: default
title: Publications
---

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".category-btn");
    const sections = document.querySelectorAll(".category-section");

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const category = button.getAttribute("data-category");

        // 모든 섹션 숨기기
        sections.forEach((section) => {
          section.classList.remove("active");
        });

        // 선택한 카테고리만 표시
        document.getElementById(category).classList.add("active");

        // 버튼 활성화 스타일
        buttons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
      });
    });
  });
</script>

<!-- Publication Section -->
<section id="publication" class="publication-section">
  <div class="container">
    <div class="title-container">
      <h1>Publications</h1>
    </div>

    <!-- Toggle Buttons -->
    <div class="text-center mb-4">
      <button class="btn btn-outline-primary category-btn active" data-category="journals">Journals</button>
      <button class="btn btn-outline-primary category-btn" data-category="conferences">Conferences</button>
      <button class="btn btn-outline-primary category-btn" data-category="edited-volumes">Edited Volumes</button>
      <button class="btn btn-outline-primary category-btn" data-category="patents">Patents</button>
    </div>

    <!-- Category Sections -->
    <div id="journals" class="category-section active">
      <ul class="list-unstyled">
        {% for pub in site.data.publications %}
          {% if pub.category == "Journals" %}
            <li>
              <div class="list-info">
                {% if pub.year != "Unknown" %}
                  <div class="year">{{ pub.year }}</div>
                {% else %}
                    <div></div>
                {% endif %}
                {% if pub.link != "No Link" %}
                  <a href="{{ pub.link }}" target="_blank">view</a>
                {% else %}
                  <div></div>
                {% endif %}
              </div>
              <h3>{{ pub.title }}</h3>
            </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>

    <div id="conferences" class="category-section">
      <ul class="list-unstyled">
        {% for pub in site.data.publications %}
          {% if pub.category == "Conferences" %}
            <li>
              <div class="list-info">
                {% if pub.year != "Unknown" %}
                  <div class="year">{{ pub.year }}</div>
                {% else %}
                    <div></div>
                {% endif %}
                {% if pub.link != "No Link" %}
                  <a href="{{ pub.link }}" target="_blank">view</a>
                {% else %}
                  <div></div>
                {% endif %}
              </div>
              <h3>{{ pub.title }}</h3>
            </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>

    <div id="edited-volumes" class="category-section">
      <ul class="list-unstyled">
        {% for pub in site.data.publications %}
          {% if pub.category == "Edited Volumes" %}
            <li>
              <div class="list-info">
                {% if pub.year != "Unknown" %}
                  <div class="year">{{ pub.year }}</div>
                {% else %}
                    <div></div>
                {% endif %}
                {% if pub.link != "No Link" %}
                  <a href="{{ pub.link }}" target="_blank">view</a>
                {% else %}
                  <div></div>
                {% endif %}
              </div>
              <h3>{{ pub.title }}</h3>
            </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>

    <div id="patents" class="category-section">
      <ul class="list-unstyled">
        {% for pub in site.data.publications %}
          {% if pub.category == "Patents" %}
            <li>
              <div class="list-info">
                {% if pub.year != "Unknown" %}
                  <div class="year">{{ pub.year }}</div>
                {% else %}
                    <div></div>
                {% endif %}
                {% if pub.link != "No Link" %}
                  <a href="{{ pub.link }}" target="_blank">view</a>
                {% else %}
                  <div></div>
                {% endif %}
              </div>
              <h3>{{ pub.title }}</h3>
            </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>

  </div>
</section>
