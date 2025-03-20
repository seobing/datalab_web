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


<!-- 인원 스와이프해서 옆으로 넘기기
<style>
.students-slider {
  position: relative;
  overflow: hidden;
}

.students-track {
  display: flex;
  gap: 16px;
  transition: transform 0.5s cubic-bezier(0.22, 0.61, 0.36, 1); /* 관성 느낌 */
  will-change: transform;
}

.student-item {
  flex: 0 0 auto;
  width: 200px;
}

.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  color: white;
  border: none;
  cursor: pointer;
  z-index: 10;
  padding: 8px;
  font-size: 20px;
}

.arrow.left { left: 5px; }
.arrow.right { right: 5px; }
</style>

<div class="students-slider">
  <button class="arrow left">&#9664;</button>
  <div class="students-track">
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
  <button class="arrow right">&#9654;</button>
</div>

<script>
const track = document.querySelector('.students-track');
const leftBtn = document.querySelector('.arrow.left');
const rightBtn = document.querySelector('.arrow.right');
const slider = document.querySelector('.students-slider');

let scrollAmount = 0;

function updateMaxScroll() {
  const trackWidth = track.scrollWidth;
  const containerWidth = slider.offsetWidth;
  return trackWidth - containerWidth;
}

function setScroll(amount) {
  const maxScroll = updateMaxScroll();
  if (amount < 0) amount = 0;
  if (amount > maxScroll) amount = maxScroll;
  scrollAmount = amount;
  track.style.transform = `translateX(-${scrollAmount}px)`;
}

rightBtn.addEventListener('click', () => {
  setScroll(scrollAmount + 220);
});

leftBtn.addEventListener('click', () => {
  setScroll(scrollAmount - 220);
});

// 드래그로 이동
let isDown = false;
let startX, startScroll;

track.addEventListener('mousedown', e => {
  isDown = true;
  startX = e.pageX;
  startScroll = scrollAmount;
  track.style.transition = 'none'; // 드래그 중 transition 제거
});

track.addEventListener('mouseleave', () => isDown = false);
track.addEventListener('mouseup', () => {
  isDown = false;
  track.style.transition = 'transform 0.5s cubic-bezier(0.22, 0.61, 0.36, 1)';
});

track.addEventListener('mousemove', e => {
  if (!isDown) return;
  const dx = e.pageX - startX;
  setScroll(startScroll - dx);
});

// 반응형 대응
window.addEventListener('resize', () => setScroll(scrollAmount));
</script>-->

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
          <th>Current</th>
        </tr>
      </thead>
      <tbody>
        {% for alum in site.data.students.alumni %}
        <tr>
          <td><strong>{{ alum.name }}</strong></td>
          <td>{{ alum.thesis }}</td>
          <td>{{ alum.degree }}</td>
          <td>{{ alum.current }}</td>
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
