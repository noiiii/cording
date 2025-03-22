サイトURL
https://noiiii.github.io/cording/

ーーーー
ローカルホストでフォームを確認する場合
ターミナルで
php -S localhost:8000

WEBブラウザで確認
http://localhost:8000/

ーーー
お申し込みフォームを
テストするためにPHPをインストールする

Homebrewインストール済み
https://brew.sh/ja/

PHPもインストール済み
brew install php

.zprofile は zsh（Macの標準シェル）の設定ファイルで、ログイン時に自動で読み込まれます。
上記を一度設定しておけば、次回からは何もしなくてもOK！

ーーーー
GitHub Pages は「静的サイトホスティングサービス」なので
GitHub PagesではPHPは使えない

Formspreeでフォームを作る方法
https://formspree.io/

ーーーー
GitHub にコミット＆デプロイ
cd /Users/oku_m1_air/Github/cording/
git status # ローカルリポジトリの状態を確認

git add . # 変更されたすべてのファイルをステージング
git commit -m "再デプロイ用の変更"
git push origin main # 変更をリモートリポジトリにプッシュ

ーーーー
反映されないとき（特別なケース）
git commit --allow-empty -m "Trigger rebuild after Pages source fix"
git push origin main

