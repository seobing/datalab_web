<?php
  
date_default_timezone_set("Asia/Seoul");

$log_dir = "/var/www/html/datalab.log";

$remote_addr = $_SERVER['REMOTE_ADDR'];
//$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $remote_addr));
//$ip_info = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=". $remote_addr));
//if ( $remote_addr != gethostbyaddr($remote_addr)){
//        $remote_addr = $remote_addr ."\t" . gethostbyaddr($remote_addr);
//}

//$remote_addr = $ip_info->geoplugin_countryName ."\t". $ip_info->geoplugin_city ."\t".  $remote_addr ;
$submit_date = date("Y-m-d H:i:s");

$log_flag = false;

if( file_exists( $log_dir ) )
        $log_file = fopen( $log_dir , "a") or die("Unable to open file!");
else{
        $log_file = fopen( $log_dir, "w") or die("Unable to open file!");
        $log_flag = true;

        fwrite($log_file, "—————————————————————————————————————————————————————————————————————————\n");
        fwrite($log_file, "DATE\t\t\tIP\n");
        fwrite($log_file, "—————————————————————————————————————————————————————————————————————————\n");
}

fwrite($log_file, $submit_date . "\t" . $remote_addr . "\n");
fclose($log_file);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description."
    />
    <meta name="author" content="2020112553 김민섭(biyotteu)" />
    <meta name="designer" content="유정은" />

    <title></title>
    <!-- Pretendard CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css"
    />
    <!-- Main CSS -->
    <link
      rel="stylesheet"
      href="/~gangman/assets/css/main.css"
    /><!--로컬에서 테스트 시에는 /~gangman빼기-->
  </head>
  <body>
    <header
  class="home-header header"
>
  <nav class="navbar container">
    <a href="/~gangman/" class="logo-link">
      <img
        src="/~gangman/assets/images/logos/logo-white.png"
        class="logo"
        alt="logo"
      />
    </a>
    <button class="hamburger-menu" aria-label="메뉴 열기">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul class="nav-links">
      <div class="menu-logo-container">
        <a href="/~gangman/" class="logo-link">
          <img
            src="/~gangman/assets/images/logos/logo-black.png"
            class="logo"
            alt="logo"
          />
        </a>
        <button class="hamburger-menu" aria-label="메뉴 열기">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <li class="item"><a href="/~gangman/research">Research</a></li>
      <li class="item"><a href="/~gangman/professor">Professor</a></li>
      <li class="item"><a href="/~gangman/students">Students</a></li>
      <li class="item"><a href="/~gangman/publication">Publication</a></li>
      <li class="item"><a href="/~gangman/courses">Courses</a></li>
      <li class="item"><a href="/~gangman/gallery">Gallery</a></li>
      <!-- <li class="item contact-item">
        <a href="mailto:gangman@dongguk.edu" class="contact-link">
          <img
            src="/~gangman/assets/images/icons/mail-black.png"
            class="contact"
            alt="contact"
          />
        </a>
      </li> -->
    </ul>
    <!-- <a href="mailto:gangman@dongguk.edu" class="contact-link">
      <img
        src="/~gangman/assets/images/icons/mail-white.png"
        class="contact"
        alt="contact"
      />
    </a> -->
  </nav>
</header>

    <!-- 헤더 포함 -->
    <main>
      <section class="home-intro-section">
    <!-- <img src="/~gangman/assets/images/backgrounds/home.png" alt="DataLab Logo" width="100%" /> -->
  <div class="overlay"></div>
  <div class="container intro-text">
    <h1>Welcome to DataLab!</h1>
    <p>
      Looking for passionate Ph. D. and M.S. students who want to study the research area of data science, computational biology and bioinformatics. <br />
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
      
      
      
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='/~gangman/research/t-mdml/'">
            
              <div class="image-container">
                <img src="/~gangman/assets/images/research/t-mdml/t-mdml.png" alt="T-MDML" />
              </div>
            
            <div class="research-info">
              <h3>T-MDML</h3>
              <p class="content">T-MDML: Triplet-based Multiple Distance Metric Learning for Multi-Instance Multi-Label Classification with Label Correlation The multi-instance multi-label (MIML) problem is a new supervised learning paradigm that has emerged to efficiently represent...</p>
              <p class="date">2024-12-10</p>
            </div>
          </div>
        </div>
      
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='/~gangman/research/deeppi/'">
            
              <div class="image-container">
                <img src="/~gangman/assets/images/research/deeppi/deeppi.png" alt="DeepPI" />
              </div>
            
            <div class="research-info">
              <h3>DeepPI</h3>
              <p class="content">DeepPI: Alignment‑Free Analysis of Flexible Length Proteins Based on Deep Learning and Image Generator With the rapid development of NGS technology, the number of protein sequences has increased exponentially. Computational...</p>
              <p class="date">2024-02-03</p>
            </div>
          </div>
        </div>
      
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='/~gangman/research/gene-annotation/'">
            
              <div class="image-container">
                <img src="/~gangman/assets/images/research/gene-annotation/image.png" alt="Gene Annotation" />
              </div>
            
            <div class="research-info">
              <h3>Gene Annotation</h3>
              <p class="content">Next-generation sequencing (NGS) technologies have led to the accumulation of high-throughput sequence data from various organisms in biology. To apply gene annotation of organellar genomes for various organisms, more optimized...</p>
              <p class="date">2019-12-15</p>
            </div>
          </div>
        </div>
      
        <div class="research-slide">
          <div class="research-card" onclick="window.location.href='/~gangman/research/geneco/'">
            
              <div class="image-container">
                <img src="/~gangman/assets/images/research/geneco/image.png" alt="geneCo" />
              </div>
            
            <div class="research-info">
              <h3>geneCo</h3>
              <p class="content">geneCo: A visualized comparative genomic method to analyze multiple genome structures method to analyze multiple genome structures In comparative and evolutionary genomics, a detailed comparison of common features between organisms...</p>
              <p class="date">2019-01-27</p>
            </div>
          </div>
        </div>
      
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
        Looking for passionate Ph. D. and M.S. students who want to study the research areaa of data science, computational biology and bioinformatics.<br />
        데이터 사이언스 및 바이오인포매틱스 연구 분야를 공부하고자 하는 박사/석사 과정 학생을 찾습니다.
      </p>
    </div>
    <!-- <div class="recruit-content">
      <a class="contact-button" href="mailto:gangman@dongguk.edu">Contact</a>
    </div> -->
  </div>
</section>

      <!-- 페이지별 내용 -->
    </main>
    <footer>
  <div class="container footer-container">
    <div class="footer-wrap">
      <img
        src="/~gangman/assets/images/logos/gray_dgu_logo.png"
        alt="동국대학교 로고"
      />
      <p>
        신공학관 연구실 #9114, 동국대학교 [04620] 서울특별시 중구 필동로 1길 30
      </p>
    </div>
    <div class="footer-wrap">
      <p>Copyright <strong>&copy;2024 DataLab.</strong> All Rights Reserved</p>
    </div>
  </div>
</footer>

    <!-- 푸터 포함 -->
    <!-- <script src="/~gangman/assets/js/main.js"></script> -->
    <script src="/~gangman/assets/js/navigation.js"></script>
    <script src="/~gangman/assets/js/pagination.js"></script>
    <!--로컬에서 테스트 시에는 /~gangman빼기-->
    <!--bundle exec jekyll serve-->
    <!--sh build.sh-->

  </body>
</html>
