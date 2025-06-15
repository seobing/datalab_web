---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: default
---

<section class="home-intro-section">
    <!-- <img src="/~gangman/assets/images/backgrounds/home.png" alt="DataLab Logo" width="100%" /> -->
  <div class="overlay"></div>
  <div class="container intro-text">
    <h1>Welcome to DataLab!</h1>
    <p>
      Looking for passionate Ph. D. and M.S. students who want to study the research area of data science, computational biology and bioinformatics. <br/>
      If interested, please contact to Dr. Gangman Yi.
    </p>
  </div>
</section>

<section class="home-research-area-section">
  <div class="container">
    <h2>Research Area</h2>
    <img src="/~gangman/assets/images/banners/home-intro.png" alt="Research Area" width="100%" />
    <!--<div class="flex-container">
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
    </div>-->
  </div>
    <!--<a href="lab-tour.html">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="assets/images/research/t-mdml/t-mdml.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/images/research/deeppi/deeppi.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/images/research/gene-annotation/image.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </a>
    <br><br><br>-->
</section>

<section class="home-research-area-section">
  <div class="container intro-text">
    <h2>News!</h2>
    <p>
      <b>[2025.06]</b> 이승민 졸업생이 (석사과정) '<b>삼성전자</b>'에 최종 합격하였습니다.<br /><br />
      <b>[2025.05]</b> 김민섭 석사과정이 '<b>서울장학재단</b>: AI 서울테크 대학원 장학금' 지원사업의 장학생으로 선정되었습니다.<br /><br />
      <!--<b>[2025.05]</b> Paper accepted to <b>KCC 2025</b>: 김민섭, 정지윤, 이여원, 장현진, 박세진 &amp; 이강만, "시계열 안구 움직임 데이터를 활용한 딥러닝 기반 관찰자 상태 분석 시스템 구현"<br /><br />
      <b>[2025.05]</b> Paper accepted to <b>KCC 2025</b>: 양진경 &amp; 이강만, "PLM 기반 서열 임베딩을 활용한 약물-표적 상호작용 예측"<br /><br />-->
      <b>[2025.05]</b> Jaewon joined the lab as a undergraduate student<br /><br />
      <b>[2025.05]</b> Paper accepted to <b>Human-centric Computing and Information Sciences</b>: I. Sadriddinov, S. Peng, S. Siet, D. Kim, K. Park, D. Park and G. Yi, “Optimizations in Enumerating Maximal Balanced Bicliques: Pruning and Vertex Sorting”
      <br /><br />
      <b>[2025.03]</b> 양진경 석사과정이 '<b>2025년도 여대학원생 공학연구팀제 심화과정</b>: 약물-표적 상호작용 예측을 위한 그래프 신경망 모델 개발 연구' 지원사업에 선정되었습니다. <br /><br />
      <b>[2025.03]</b> Sejin joined the lab as a undergraduate student<br /><br />
      <b>[2025.03]</b> Minseop joined the lab as a master's student<br /><br />
      <b>[2025.03]</b> Ilkhomjon joined the lab as a Ph.D. student<br /><br />
      <b>[2025.02]</b> Seungmin graduated with a master's degree<br /><br />
      <b>[2025.02]</b> Poster accepted to <b>RECOMB 2025</b>: Jinkyung Yang, Yejin Kan and Gangman Yi, “CNGNN-DTI: Integration of Context and Neighbor Information based on Graph Neural Network for Drug-target Interaction Prediction”<br /><br />
      <b>[2024.12]</b> Paper accepted to <b>AAAI 2025</b>: Dongyeon Kim, Yejin Kan and Gangman Yi, “T-MDML: Triplet-based Multiple Distance Metric Learning for Multi-Instance Multi-Label Classification with Label Correlation”<br /><br />
      <b>[2024.08]</b> Yerin graduated with a master's degree<br /><br />
      <!--<b>[2024.05]</b> Poster accepted to <b>ECCB 2024</b>: Yejin Kan, Jinkyung Yang and Gangman Yi, “Integration of Multi-view Features of Protein Sequences for Improved Protein Function Prediction”<br><br>-->
    </p>
  </div>
</section>

<section class="home-research-section">
  <div class="container">
    <h2>Research</h2>
    <div class="research-slider">
      {% assign selected_slugs = "deeppi,t-mdml,gene-annotation,geneco" | split: "," %}
      {% assign featured_researches = site.researches | where_exp: "research", "selected_slugs contains research.slug" | sort: 'date' | reverse %}
      {% for research in featured_researches %}
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='/~gangman{{ research.url }}'">
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
              <p class="content">{{ research.content | strip_html | truncatewords: 30 }}</p>
              <p class="date">{{ research.date | date: "%Y-%m-%d" }}</p>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
    <div class="button-wrapper">
      <a class="show-more-button" href="/~gangman/research">SEE ALL</a>
    </div>
  </div>
</section>

<section class="home-recruit-section">
  <div class="container recruit-container">
    <div class="recruit-content">
      <h2>Recruiting researchers</h2>
      <p>
        Looking for passionate Ph. D. and M.S. students who want to study the research areaa of data science, computational biology and bioinformatics.<br>
        데이터 사이언스 및 바이오인포매틱스 연구 분야를 공부하고자 하는 박사/석사 과정 학생을 찾습니다.
      </p>
    </div>
    <!-- <div class="recruit-content">
      <a class="contact-button" href="mailto:gangman@dongguk.edu">Contact</a>
    </div> -->
  </div>
</section>
