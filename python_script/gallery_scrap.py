import os
import yaml
import requests
from bs4 import BeautifulSoup
from urllib.parse import urljoin

def create_directory(path):
    if not os.path.exists(path):
        os.makedirs(path)
        print(f"Created directory: {path}")

def download_image(url, save_path):
    try:
        response = requests.get(url)
        if response.status_code == 200:
            with open(save_path, 'wb') as f:
                f.write(response.content)
            print(f"Downloaded: {save_path}")
            return True
        else:
            print(f"Failed to download: {url}")
            return False
    except Exception as e:
        print(f"Error downloading {url}: {str(e)}")
        return False

def scrape_gallery_data(url):
    base_url = "https://datalab.dongguk.edu/~gangman/"
    response = requests.get(url)
    soup = BeautifulSoup(response.text, 'html.parser')
    
    gallery_data = {
        "categories": [
            {"name": "Conference", "id": "conference"},
            {"name": "Graduation", "id": "graduation"},
            {"name": "Workshop", "id": "workshop"},
            {"name": "Server", "id": "server"},
            {"name": "Other", "id": "other"}
        ],
        "items": []
    }
    
    # 각 카테고리 섹션 찾기
    sections = soup.find_all('div', {'id': lambda x: x and x.startswith('item-')})
    
    for section in sections:
        category_elem = section.find('h4')
        if not category_elem:
            continue
            
        category = category_elem.text.strip().lower()
        cards = section.find_all('div', class_='card')
        
        for card in cards:
            img = card.find('img')
            if not img:
                continue
                
            title_elem = card.find('h6')
            date_elem = card.find('h7')
            
            if not title_elem or not date_elem:
                continue
                
            title = title_elem.text.strip()
            date = date_elem.text.strip()
            
            # 이미지 URL 처리
            img_src = img.get('src', '')
            if img_src.startswith('assets/'):
                img_src = urljoin(base_url, img_src)
            
            # 파일명 추출
            filename = os.path.basename(img_src)
            
            # 위치 정보 추출 (있는 경우)
            location = ""
            if ',' in date:
                date_parts = date.split(',')
                if len(date_parts) > 1:
                    location = date_parts[-1].strip()
                    date = ','.join(date_parts[:-1]).strip()
            
            item = {
                "title": title,
                "date": date,
                "image": f"/~gangman/assets/images/gallery/{filename}",
                "category": category.lower().replace(' ', '_')
            }
            
            if location:
                item["location"] = location
                
            gallery_data["items"].append(item)
            print(f"Found item: {title} with image: {img_src}")
    
    return gallery_data, base_url

def main():
    url = "https://datalab.dongguk.edu/~gangman/lab-tour.html"
    image_dir = "/Users/gimminseob/dev/WEB/BigDataLab/~gangman/assets/images/gallery"
    yaml_path = "/Users/gimminseob/dev/WEB/BigDataLab/_data/gallery.yml"
    
    # 디렉토리 생성
    create_directory(image_dir)
    create_directory(os.path.dirname(yaml_path))
    
    # 갤러리 데이터 스크래핑
    gallery_data, base_url = scrape_gallery_data(url)
    
    # 이미지 다운로드
    for item in gallery_data["items"]:
        # 원본 이미지 URL 구성
        img_src = item['image'].replace('/~gangman/assets/images/gallery/', 'assets/img/lab-tour/')
        img_url = urljoin(base_url, img_src)
        
        # 저장할 경로 구성
        save_path = os.path.join(image_dir, os.path.basename(item['image']))
        
        if not os.path.exists(save_path):
            print(f"Downloading {img_url} to {save_path}")
            download_image(img_url, save_path)
    
    # YAML 파일 생성
    with open(yaml_path, 'w', encoding='utf-8') as f:
        yaml.dump(gallery_data, f, allow_unicode=True, sort_keys=False)
        print(f"Created YAML file: {yaml_path}")

if __name__ == "__main__":
    main()