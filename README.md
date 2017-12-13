# piyopoke-collector
[![CircleCI](https://circleci.com/gh/HibikineKage/piyopoke-collector/tree/develop.svg?style=svg)](https://circleci.com/gh/HibikineKage/piyopoke-collector/tree/develop)

collect twitter images tagged #ぴよポケワンドロ.

# Require
* PHP >7.1
* Composer
* Yarn

# Run

```
git clone https://github.com/HibikineKage/piyopoke-collector.git
cd piyopoke-collector
yarn install
composer install
docker-compose up -d
```

# Test
```
composer unittest
```

# Link
[Circle CI](https://circleci.com/gh/HibikineKage/piyopoke-collector)

# Environment
* JavaScript
  - npm
  - yarn
* PHP 7.1/7.2
  - composer
  - CodeIgniter3
  - PHPUnit
* Docker
  - Docker Compose
* CircleCI