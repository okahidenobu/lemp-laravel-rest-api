# lemp-laravel-rest-api #

- Dev: http://localhost:8000

## 使用技術とバージョン
- docker-compose
- PHP
- Laravel
- composer
- Nginx
- MySql 5.7.31￥

## 開発環境構築手順

### 1. 環境変数ファイルを作成
.env.exampleをコピーし.envファイルを作成し値を指定

### 2. ローカル開発開始
```bash
$ docker compose up -d --build
```

### 3. データベースにサンプルデータ挿入
/database/migration にテーブル定義ファイルを置き、
/database/seeds にデモデータ定義ファイルを置いて以下を実行。

```bash
$ docker compose exec app bash
$ cd my-laravel-app
$ php artisan migrate
$ php artisan db:seed
```
既存のデータがすでにDBに存在する時にエラーが出た場合
```bash
$ php artisan migrate:refresh
```
コマンドでデータを入れ直せる可能性あり

### 4. パッケージインストール

```bash
$ docker compose exec app bash
$ cd my-laravel-app
$ composer install
```

定義ファイルがない場合は以下を参考に作成
- https://qiita.com/shosho/items/a5a5839735dfef9214b1
- https://laraweb.net/knowledge/2302/
