import requests
from bs4 import BeautifulSoup
import yaml
import re

# 크롤링할 URL
URL = "https://datalab.dongguk.edu/~gangman/publication.html#publication"

# HTTP GET 요청
response = requests.get(URL)
response.encoding = response.apparent_encoding  # 인코딩 자동 감지 및 설정

# BeautifulSoup으로 HTML 파싱
soup = BeautifulSoup(response.text, 'html.parser')

# 출판물 데이터를 저장할 리스트
publications = []

# 크롤링 대상 섹션과 ID
sections = [
    {"id": "journals", "category": "Journals"},
    {"id": "conferences", "category": "Conferences"},
    {"id": "edited volumes", "category": "Edited Volumes"},
    {"id": "patents", "category": "Patents"}
]

# 각 섹션에서 데이터 크롤링
for section in sections:
    section_id = section["id"]
    category = section["category"]

    # 섹션 찾기
    section_element = soup.find("h2", id=section_id)
    if section_element:
        # 섹션 내 리스트 항목 가져오기
        list_items = section_element.find_next("ul").find_all("li")
        for item in list_items:
            # 제목 추출
            title = item.get_text(strip=True)
            
            # 연도 추출 (4자리 숫자)
            year_match = re.search(r'\b(19|20)\d{2}\b', title)
            year = year_match.group(0) if year_match else "Unknown"
            
            # 링크 추출
            link_tag = item.find("a", href=True)
            link = link_tag["href"] if link_tag else "No Link"
            
            # 데이터 저장
            publications.append({
                "title": title.replace("[link]", ""),
                "category": category,
                "year": year,
                "link": link,
                # "description": "N/A"  # 설명 추가가 필요하면 처리 가능
            })

# YAML 파일로 저장
output_file = "publications.yaml"
with open(output_file, "w", encoding="utf-8") as file:
    yaml.dump(publications, file, allow_unicode=True)

print(f"크롤링한 데이터를 {output_file}에 저장했습니다!")
