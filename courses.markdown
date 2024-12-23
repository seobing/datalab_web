---
layout: default
title: Courses
---

<script src="/assets/js/courses.js"></script>
<div class="courses-container container">
  <h1 class="page-title">Courses</h1>

{% for year in site.data.courses %}

  <div class="year-section">
    <button class="year-toggle active">
      <span class="year">{{ year[0] }}</span>
    </button>

    <div class="courses-grid">
      {% for semester in year[1] %}
      <div class="semester-card">
        <div class="semester">{{ semester.semester }}</div>
        <ul class="course-list">
          {% for course in semester.courses %}
          <li>{{ course.name }}</li>
          {% endfor %}
        </ul>
      </div>
      {% endfor %}
    </div>

  </div>
  {% endfor %}
</div>
