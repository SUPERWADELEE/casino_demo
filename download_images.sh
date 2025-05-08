#!/bin/bash

# 建立目的資料夾（若不存在）
mkdir -p public/games_v2

dir="appModel"
# 圖片清單
for img in wg_l_kg; do
  echo "下載中：$img.png"
  wget -q https://www.kg3399.com/games_v2/${dir}/${img}.png -O ${img}.png

  # 移動到 public/games_v2 資料夾
  mv ${img}.png public/games_v2/${dir}
done

echo "✅ 所有圖片已移動至 public/games_v2 資料夾！"