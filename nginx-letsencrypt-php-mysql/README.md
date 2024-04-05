# nginx-letsencrypt-php-mysql

Recipes to run PHP + MySQL with Nginx and free SSL from Let's Encrypt

Creating new Let's Encrypt certificate:

```shell
docker compose run \
    --rm certbot certonly \
    --cert-name example.com \
    --webroot --webroot-path=/var/www/certbot \
    --email info@example.com --agree-tos --no-eff-email \
    -d example.com -d www.example.com
```


Renewing Let's Encrypt certificate:

```shell
docker compose run \
    --rm certbot certonly \
    --cert-name example.com \
    --reinstall \
    --webroot --webroot-path=/var/www/certbot \
    --email info@example.com --agree-tos --no-eff-email \
    -d example.com -d www.example.com
```