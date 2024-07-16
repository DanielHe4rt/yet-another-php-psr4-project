# PHP PSR4 Project

![Project Thumbnail](/.github/logo.png)

This is a simple PHP project that uses the PSR4 autoloading standard building a Routing System.

Please take a look at the [PSR4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/). and
the [PSR12 Coding Standard](https://www.php-fig.org/psr/psr-12/).

## Dependencies

- PHP 8.2^
- Composer

## Database

```sql 
CREATE DATABASE dev_aulinhas;

use dev_aulinhas;

CREATE TABLE posts
(
    id           INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title        varchar(255) NOT NULL,
    slug         varchar(255) NOT NULL,
    content      LONGTEXT     NOT NULL,
    published_at timestamp
);
```

## Installation

```bash
git clone https://github.com/DanielHe4rt/yet-another-php-psr4-project.git yet-another-psr4
cd yet-another-psr4
composer install
```

## Run

```bash
php -S localhost:8000
```

* Access `http://localhost:8000` in your browser.
* Routes:
  * `/` - Home
  * `/postagens` - List all posts