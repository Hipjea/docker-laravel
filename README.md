### Build :

```shell
docker-compose build
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
```

### Dev :

Tailwind CSS watch mode ; `docker-compose exec app npm run watch`