#!/bin/bash

# 이전 빌드 결과 정리
echo "🧹 Cleaning previous build..."
rm -rf public_html/*

# Jekyll 빌드
echo "🏗️ Building site with Jekyll..."
JEKYLL_ENV=production bundle exec jekyll build --destination public_html

# 빌드 결과 확인
if [ $? -eq 0 ]; then
    echo "✅ Build successful! Site has been generated in public_html/"
    echo "📂 Generated files:"
    ls -lh public_html/
else
    echo "❌ Build failed! Please check the error messages above."
    exit 1
fi
