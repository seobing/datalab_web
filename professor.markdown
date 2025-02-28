---
layout: default
title: Professor
---

<div class="professor-container container">
  <h1 class="page-title">Professor</h1>
  
  <div class="professor-content">
    <div class="professor-info">
      <div class="professor-image">
        <img src="{{ site.data.professor.image }}" alt="{{ site.data.professor.name }}">
      </div>
      <div class="professor-details">
        <div class="name-division">
          <h1 class="page-title-same-professor">{{ site.data.professor.name }}</h1>
          <p class="division">{{ site.data.professor.division }}</p>
        </div>
        
        <div class="contact-info">
          <div class="contact-info-wrap">
            <strong>Office</strong>
            <p>{{ site.data.professor.contact.office }}</p>
          </div>
          <div class="contact-info-wrap">
            <strong>E-mail</strong>
            <p>{{ site.data.professor.contact.email }}</p>
          </div>
          <div class="contact-info-wrap">
            <strong>Phone</strong>
            <p>{{ site.data.professor.contact.phone }}</p>
          </div>
        </div>
        <div class="justify">{{ site.data.professor.justify }}</div>
      </div>
    </div>

    <section class="content-section">
      <h3>Research</h3>
      <p>{{ site.data.professor.research }}</p>
    </section>

    <section class="content-section">
      <h3>Careers</h3>
      <ul>
        {% for career in site.data.professor.careers %}
        <li>
          {{ career.period }} : {{ career.position }}
        </li>
        {% endfor %}
      </ul>
    </section>

    <section class="content-section">
      <h3>Experiences</h3>
      <ul class="experience-list">
        {% for experience in site.data.professor.experiences %}
        <li>{{ experience }}</li>
        {% endfor %}
      </ul>
    </section>


    <section class="content-section">
      <h3>Service</h3>

      <ul>
        {% for item in site.data.professor.service %}
        <li>
          <h4><strong>{{ item.title }}</strong></h4>
          <ul>
            {% for item in item.list %}
            <li>{{ item }}</li>
            {% endfor %}
          </ul>
        </li>
      {% endfor %}
      </ul>
    </section>

  </div>
</div>
