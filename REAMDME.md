# lemp-laravel-rest-api #

- Dev: http://localhost:8000

### Environment
- docker-compose
- PHP
- Laravel
- composer
- Nginx
- MySql 5.7.31

### 環境変数
なし

### ローカル開発開始
```bash
$ docker compose up -d --build
```

### データベースにサンプルデータ挿入
/database/migration にテーブル定義ファイルを置き、
/database/seeds にデモデータ定義ファイルを置いて以下を実行。

```bash
$ docker compose exec app bash
$ cd cd my-laravel-app
$ php artisan migrate
$ php artisan db:seed
```

定義ファイルがない場合は以下を参考に作成
- https://qiita.com/shosho/items/a5a5839735dfef9214b1
- https://laraweb.net/knowledge/2302/
