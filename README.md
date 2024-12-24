# BigDataLab 웹사이트 관리 가이드

## 1. 홈페이지 업데이트 방법

### 1.1 콘텐츠 업데이트 순서

1. 이미지 파일 업로드 ([이미지 가이드](#21-이미지-업로드-가이드))

   - 필요한 이미지를 `assets/images/` 하위의 적절한 폴더에 업로드
   - 이미지 파일명과 크기가 가이드라인에 맞는지 확인

2. 데이터 파일 수정 (\_data 폴더)

   - [`gallery.yml`](#22-갤러리-업데이트-_datagalleryyml): 갤러리 이미지 및 정보 업데이트
   - [`courses.yml`](#23-강의-정보-업데이트-_datacoursesyml): 강의 정보 업데이트
   - [`students.yml`](#24-학생-정보-업데이트-_datastudentsyml): 학생 정보 업데이트
   - [`professor.yml`](#25-교수-정보-업데이트-_dataprofessoryml): 교수님 정보 업데이트
   - [`publications.yml`](#26-논문-정보-업데이트-_datapublicationsyml): 논문 발표 정보 업데이트

3. 연구 내용 업데이트 ([리서치 가이드](#27-연구-내용-업데이트-_researches))

   - \_researches 폴더의 마크다운 파일 수정
   - 연구 관련 이미지 업로드

4. 변경사항 확인

   - 모든 YAML 파일의 문법이 올바른지 확인
   - 참조된 이미지 파일이 올바른 위치에 있는지 확인
   - 들여쓰기가 올바르게 되어있는지 확인

5. 웹사이트 리빌드
   ```bash
   # 터미널에서 프로젝트 루트 디렉토리로 이동 후
   ./build.sh
   ```

### 1.2 주의사항

1. 이미지 업로드는 반드시 콘텐츠 업데이트 전에 완료해야 합니다.
2. YAML 파일 수정 시 백업을 만들어두는 것이 안전합니다.
3. build.sh 실행 전 모든 파일이 저장되었는지 확인합니다.
4. 빌드 후 변경사항이 제대로 반영되었는지 확인합니다.

### 1.3 문제 해결

빌드 실패 시 확인사항:

1. YAML 파일 문법 오류
2. 잘못된 이미지 경로
3. 파일 권한 문제
4. Ruby 및 Jekyll 설치 상태

## 2. 콘텐츠 업데이트 가이드

### 2.1 이미지 업로드 가이드

이미지는 용도에 따라 다음 디렉토리에 저장해야 합니다:

```
assets/images/
|-- backgrounds/     # 배경 이미지
|-- banners/        # 배너 이미지
|-- gallery/        # 갤러리 사진
|-- icons/          # 아이콘 이미지
|-- logos/          # 로고 이미지
|-- professor/      # 교수 사진
|-- research/       # 연구 관련 이미지
    |-- cplot/
    |-- gene-annotation/
    |-- geneco/
    |-- genome-search-plotter/
|-- students/       # 학생 사진
|-- uploads/        # 기타 업로드 이미지
```

이미지 업로드 시 주의사항:

1. 파일명은 영문으로 작성하고 공백 대신 하이픈(-) 사용
2. 이미지 크기는 용도에 맞게 최적화
3. 파일 형식
   - 사진: JPG 형식 권장
   - 로고/아이콘: PNG 형식(투명배경) 권장

예시:

```yaml
# 갤러리 이미지 추가 시
image: "/assets/images/gallery/2024-workshop.jpg"

# 학생 프로필 추가 시
image: "/assets/images/students/kim-minsu.jpg"

# 연구 이미지 추가 시
image: "/assets/images/research/gene-annotation/result-2024.png"
```

### 2.2 갤러리 업데이트 (\_data/gallery.yml)

1. 이미지 파일을 먼저 `assets/images/gallery/` 폴더에 업로드
   - 권장 크기: 1200px x 800px
   - 파일 형식: JPG
2. gallery.yml 파일에 새로운 항목 추가:

```yaml
items:
  - title: "행사 제목" # 예: "2024 워크샵"
    date: "날짜" # 예: "Mar 15, 2024"
    image: "/assets/images/gallery/이미지파일명.jpg"
    category: "카테고리" # conference, graduation, workshop, server, etc 중 선택
    location: "장소" # 예: "Korea" 또는 구체적인 도시명
```

### 2.3 강의 정보 업데이트 (\_data/courses.yml)

새로운 학기 강의 추가:

```yaml
2024:
  - semester: "2024.01" # 학기 정보
    courses:
      - name: "강의명" # 예: "CSE4020 Database Design"
```

### 2.4 학생 정보 업데이트 (\_data/students.yml)

1. 학생 프로필 사진을 먼저 `assets/images/students/` 폴더에 업로드

   - 권장 크기: 400px x 400px
   - 파일 형식: JPG
   - 파일명 예시: `kim-minsu.jpg`

2. 새로운 학생 추가:

```yaml
current_students:
  - name: "학생 이름"
    position: "직위" # "Ph.D. Student", "M.S. Student", "Undergraduate Student"
    category: "카테고리" # phd, ms, undergraduate
    image: "/assets/images/students/학생사진.jpg" # 예: "/assets/images/students/kim-minsu.jpg"
    research:
      - "연구 분야 1"
      - "연구 분야 2"
    education:
      - degree: "학위명"
        institution: "학교명"
        period: "재학기간"
```

3. 파트타임 학생 추가:

```yaml
part_time_students:
  - name: "학생 이름"
    affiliation: "소속 (회사명, 지역)" # 예: "Kaonmedia, Seongnam-si, Gyeonggi-do, Korea"
    course: "과정" # 예: "Ph.D. Student"
```

4. 졸업생 추가:

```yaml
alumni:
  - name: "학생 이름"
    thesis: "논문 제목"
    degree: "학위 (재학기간)"
```

### 2.5 교수님 정보 업데이트 (\_data/professor.yml)

1. 교수 프로필 사진을 `assets/images/professor/` 폴더에 업로드

   - 권장 크기: 400px x 400px
   - 파일 형식: JPG
   - 파일명: `professor.jpg`

2. professor.yml 파일 수정:

```yaml
name: "교수님 이름"
image: "/assets/images/professor/professor.jpg"
division: "소속 학과"
contact:
  office: "연구실 위치"
  email: "이메일 주소"
  phone: "전화번호"

careers:
  - period: "기간" # 예: "2023.9 - current"
    position: "직위" # 예: "Professor at Division of AI Software Convergence"

experiences:
  - "경력 사항" # 예: "Visiting associate professor at UBC"

service:
  - title: "Editorial Board" # 서비스 카테고리
    list:
      - "서비스 내용" # 예: "Associate Editor, Journal Name"

  - title: "General Chairs" # 다른 카테고리
    list:
      - "활동 내용"
```

### 2.6 논문 정보 업데이트 (\_data/publications.yml)

```yaml
publications:
  - title: "논문 제목"
    authors: ["저자1", "저자2"]
    conference: "학술대회 제목"
    year: 2024
    link: "https://example.com/paper"
```

### 2.7 연구 내용 업데이트 (\_researches)

1. 연구 관련 이미지를 먼저 `assets/images/research/` 하위 폴더에 업로드

   ```
   assets/images/research/
   |-- cplot/              # cPlot 관련 이미지
   |-- gene-annotation/    # 유전자 주석 관련 이미지
   |-- geneco/            # GeneCo 관련 이미지
   |-- genome-search-plotter/  # Genome Search Plotter 관련 이미지
   ```

2. 새로운 연구 내용 추가:

   - `_researches` 폴더에 새 마크다운 파일 생성 (예: `new-research.md`)

   ```markdown
   ---
   layout: research
   title: 연구 제목
   category: 카테고리명
   date: YYYY-MM-DD
   thumbnail: /assets/images/research/카테고리명/썸네일이미지.png
   description: 연구 설명
   author: 저자명
   ---

   ![대표이미지](/assets/images/research/카테고리명/이미지.png)

   ### 연구 제목

   연구 내용 설명...

   [연구 관련 링크](https://example.com){:target="\_blank"}
   ```

3. 기존 연구 내용 수정:

   - `_researches` 폴더의 해당 마크다운 파일 수정
   - 이미지 경로가 올바른지 확인
   - 날짜 형식이 'YYYY-MM-DD'인지 확인

4. 주의사항:
   - 마크다운 파일의 front matter(--- 사이의 내용)는 정확한 형식을 지켜야 함
   - 이미지는 해당 연구의 카테고리 폴더에 저장
   - 외부 링크는 반드시 `{:target="_blank"}` 속성 추가

## 3. 프로젝트 구조

```
BigDataLab/
|-- _data/               # 웹사이트의 주요 콘텐츠를 관리하는 데이터 파일들
|   |-- gallery.yml      # 갤러리 이미지 및 정보
|   |-- courses.yml      # 강의 정보
|   |-- students.yml     # 학생 정보
|   |-- professor.yml    # 교수님 정보
|   |-- publications.yml # 논문 발표 정보
|-- _includes/           # 재사용 가능한 HTML 코드
|-- _layouts/            # 레이아웃 파일
|-- _researches/         # 연구 관련 콘텐츠
|-- _sass/               # SCSS 스타일 파일
|-- _site/              # 생성된 정적 사이트 파일
|-- assets/             # 정적 파일 (이미지, CSS, JS 등)
|   |-- images/         # 이미지 파일들
|-- python_script/      # 파이썬 스크립트 파일
|-- courses.markdown    # 강의 페이지
|-- gallery.markdown    # 갤러리 페이지
|-- index.markdown      # 메인 페이지
|-- professor.markdown  # 교수 소개 페이지
|-- publication.markdown # 논문 발표 페이지
|-- research.markdown   # 연구 소개 페이지
|-- students.markdown   # 학생 소개 페이지
|-- _config.yml         # Jekyll 설정 파일
|-- Gemfile            # Ruby 의존성 관리 파일
|-- Gemfile.lock       # Ruby 의존성 버전 잠금 파일
|-- build.sh           # 빌드 스크립트
|-- .gitignore         # Git 무시 파일 목록
|-- 404.html           # 404 에러 페이지
```

## 4. 주의사항

1. YAML 파일 수정 시 들여쓰기는 반드시 스페이스 2칸을 사용해야 합니다.
2. 콜론(:) 뒤에는 반드시 공백이 하나 있어야 합니다.
3. 긴 문자열에는 따옴표("")를 사용하는 것이 안전합니다.
4. 이미지 파일은 업로드 전 적절한 크기로 최적화하는 것이 좋습니다.

## 5. 자주 하는 실수들

1. 잘못된 들여쓰기

```yaml
# 잘못된 예:
items:
- title: "제목"    # 들여쓰기 없음

# 올바른 예:
items:
  - title: "제목"  # 2칸 들여쓰기
```

2. 특수문자 처리

```yaml
# 잘못된 예:
title: 2024 Spring & Fall

# 올바른 예:
title: "2024 Spring & Fall"  # 특수문자가 있는 경우 따옴표 사용
```

## 6. 문제가 발생하면 다음을 확인해보세요

1. 파일이 올바른 YAML 형식을 따르는지 확인
2. 들여쓰기가 정확한지 확인
3. 모든 필수 필드가 입력되었는지 확인
4. 참조된 이미지 파일이 올바른 위치에 있는지 확인

5. 모든 필수 필드가 입력되었는지 확인
6. 참조된 이미지 파일이 올바른 위치에 있는지 확인

7. 모든 필수 필드가 입력되었는지 확인
8. 참조된 이미지 파일이 올바른 위치에 있는지 확인

9. 모든 필수 필드가 입력되었는지 확인
10. 참조된 이미지 파일이 올바른 위치에 있는지 확인

11. 모든 필수 필드가 입력되었는지 확인
12. 참조된 이미지 파일이 올바른 위치에 있는지 확인
