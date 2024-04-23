# Attendance(勤怠管理)

## 環境構築
**Dockerビルド**
1. `git clone git@.github.com:shoyama1010/attendance-form.git
2. DockerDesktopアプリを立ち上げる
3. `docker-compose up -d --build
4. 

**Laravel環境構築**
1. `docker-compose exec php bash`
2. `composer install`
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4. .envに以下の環境変数を追加
``` text
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
