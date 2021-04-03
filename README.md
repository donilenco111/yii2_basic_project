# Yii Basic Project

## Installing using Docker

Install dependencies

```bash
docker-compose run --rm yii2-php composer install
```

Set directories writable

```bash
chmod 0777 ./runtime
chmod 0777 ./web/assets
```

Run the migrations

```bash
docker-compose up -d
docker-compose run --rm yii2-php yii migrate
docker-compose down
```

Start application

```bash
docker-compose up
```