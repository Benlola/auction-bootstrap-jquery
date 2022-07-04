# Benlola Auction Bid Project

### Requirements

- Linux/Unix, WAMP/XAMP or MacOS environment
- PHP >= 7.3
- MySQL >= 5.7.8, MariaDB >= 10.2.2
- Web server (Apache, Nginx or integrated PHP web server for testing)

## Installation and Configuration

To install the Auction Bid application, you need [composer 2.1+](https://getcomposer.org).
On the CLI, execute this command for a complete installation including a working setup:

```
wget https://getcomposer.org/download/latest-stable/composer.phar -O composer
git clone https://github.com/Benlola/auction-bootstrap-jquery.git
php composer install
php composer dump-autoload
php artisan migrate --seed
php artisan optimize

npm install
npm run dev
```


**Note:** In an hosting environment, the document root of your virtual host must point to
the **/.../public/** directory and you have to change the `APP_URL` setting in your `.env`
file to your domain without port, e.g.:

```
APP_URL=https://myhostingdomain.com
```

### For Testing use next credentials
**Admin:**

```
dashboard: https://myhostingdomain.com/admin
user: admin
password: Pa$$w0rd!
```
**Seller:**

```
dashboard: https://myhostingdomain.com/merchant
user: seller@site.com
password: Pa$$w0rd!
```
**Bidder:**

```
dashboard: https://myhostingdomain.com/login
user: bidder@site.com
password: Pa$$w0rd!
```
