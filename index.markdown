---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: default
---

<section class="home-intro-section">
  <div class="container">
    <img src="/assets/images/logos/intro.png" alt="DataLab Logo" width="100%" />
    <div class="intro-text">
      <h1>Department of Computer Science·AI</h1>
      <p>
        Looking for passionate Ph. D. and M.S. students who want to study the research area of data science and Bioinformatics. <br/>
        If interested, please contact to Dr. Gangman Yi.
      </p>
    </div>
  </div>
</section>

<section class="home-research-area-section">
  <div class="container">
    <h2>Research Area</h2>
    <img src="/assets/images/banners/home-intro.png" alt="Research Area" width="100%" />
    <!-- <div class="flex-container">
      <div class="flex1">
        <div class="flex-container">
          <div class="flex1">
            <div class="card-container ml">
              <h3>Machine<br/>Learning</h3>
            </div>
          </div>  
          <div class="flex1">
            <div class="card-container bio">
              <h3>Bio<br/>infomatics</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="flex1">
        <div class="card-container about">
          <h3>About...</h3>
          <p>
            Software development of integrated sequencing pipeline<br/>techniques for the anlysis of genomes<br/>etc.
          </p>
        </div>
      </div>
    </div> -->
  </div>
</section>

<section class="home-research-section">
  <div class="container">
    <h2>Research</h2>
    <div class="research-slider">
      {% assign sorted_researches = site.researches | sort: 'date' | reverse %}
      {% for research in sorted_researches limit:4 %}
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='{{ research.url }}'">
            {% if research.thumbnail %}
              <div class="image-container">
                <img src="{{ research.thumbnail }}" alt="{{ research.title }}" />
              </div>
            {% else %}
              <div class="research-thumbnail-placeholder">
                <h3>{{ research.title }}</h3>
              </div>
            {% endif %}
            <div class="research-info">
              <h3>{{ research.title }}</h3>
              <p class="date">{{ research.date | date: "%Y-%m-%d" }}</p>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
    <div class="button-wrapper">
      <a class="show-more-button" href="/research">SEE ALL</a>
    </div>
  </div>
</section>

<section class="home-recruit-section">
  <div class="container recruit-container">
    <div class="recruit-content">
      <h2>Researcher Recruitment</h2>
      <p>
        Looking for passionate Ph. D. and M.S. students<br />
        who want to study the research areaa of data science and Bioinformactics.
      </p>
    </div>
    <div class="recruit-content">
      <a class="contact-button" href="mailto:gangman@dongguk.edu">Contact</a>
    </div>
  </div>
</section>
