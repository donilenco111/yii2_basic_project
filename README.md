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

Start application

```bash
docker-compose up
```