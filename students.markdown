---
layout: default
title: Students
---

<script src="/~gangman/assets/js/students.js"></script>
<div class="students-container container">
  <h1 class="page-title">Students</h1>

  <div class="category-toggles">
    {% for category in site.data.students.categories %}
    <button class="category-toggle {% if category.id == 'all' %}active{% endif %}" data-category="{{ category.id }}">{{ category.name }}</button>
    {% endfor %}
  </div>

  <!-- Current Students Grid -->
  <div class="students-grid">
    {% for student in site.data.students.current_students %}
    <div class="student-item" data-category="{{ student.category }}"
         data-research='{{ student.research | jsonify }}'
         data-education='{{ student.education | jsonify }}'>
      <div class="student-image">
        <img src="{{ student.image }}" alt="{{ student.name }}" loading="lazy"/>
      </div>
      <div class="student-info">
        <h3>{{ student.name }}</h3>
        <p class="position">{{ student.position }}</p>
      </div>
    </div>
    {% endfor %}
  </div>

  <hr />

  <!-- Part Time Students -->
  <section class="part-time-section">
    <h2>Part Time</h2>
    <table class="students-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Affiliation</th>
          <th>Course</th>
        </tr>
      </thead>
      <tbody>
        {% for student in site.data.students.part_time_students %}
        <tr>
          <td><strong>{{ student.name }}</strong></td>
          <td>{{ student.affiliation }}</td>
          <td>{{ student.course }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </section>

  <!-- Alumni -->
  <section class="alumni-section">
    <h2>Alumni</h2>
    <table class="students-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Thesis</th>
          <th>Degree</th>
        </tr>
      </thead>
      <tbody>
        {% for alum in site.data.students.alumni %}
        <tr>
          <td><strong>{{ alum.name }}</strong></td>
          <td>{{ alum.thesis }}</td>
          <td>{{ alum.degree }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </section>

  <!-- Student Modal -->
  <div class="student-modal">
    <div class="modal-container">
      <div class="modal-header">
        <h2 class="modal-title"></h2>
        <button class="modal-close">×</button>
      </div>
      <div class="modal-content">
        <div class="modal-section">
          <div class="section-header">Research</div>
          <ul class="research-list"></ul>
        </div>
        <div class="modal-section">
          <div class="section-header">Education</div>
          <ul class="education-list"></ul>
        </div>
      </div>
    </div>
  </div>
</div>
