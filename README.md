# TMDB service

[![tests](https://github.com/slvler/tmdb/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/tmdb/actions/workflows/tests.yml)
[![Latest Stable Version](https://poser.pugx.org/slvler/tmdb/v)](https://packagist.org/packages/slvler/tmdb)
[![Latest Unstable Version](https://poser.pugx.org/slvler/tmdb/v/unstable)](https://packagist.org/packages/slvler/tmdb)
[![License](https://poser.pugx.org/slvler/tmdb/license)](https://packagist.org/packages/slvler/tmdb)
[![Total Downloads](https://poser.pugx.org/slvler/tmdb/downloads)](https://packagist.org/packages/slvler/tmdb)

An api service for tmdb.com
## Installation
To install this package tou can use composer:
```bash
composer require slvler/tmdb
```
## Usage
- first step is to start client client with required url, version, api key
```php
use Slvler\Tmdb\Tmdb;
use Slvler\Tmdb\Factory;

$request = Tmdb::factory()
    ->withBaseUrl('https://api.themoviedb.org/3')
    ->withHttpHeader('Authorization', 'Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx')
    ->withPath('movie/11')
    ->make();
```
- response
```json
{
  "adult": false,
  "backdrop_path": "/zqkmTXzjkAgXmEWLRsY4UpTWCeo.jpg",
  "belongs_to_collection": {
    "id": 10,
    "name": "Star Wars Collection",
    "poster_path": "/r8Ph5MYXL04Qzu4QBbq2KjqwtkQ.jpg",
    "backdrop_path": "/zZDkgOmFMVYpGAkR9Tkxw0CRnxX.jpg"
  },
  "budget": 11000000,
  "genres": [
    {
      "id": 12,
      "name": "Adventure"
    },
    {
      "id": 28,
      "name": "Action"
    },
    {
      "id": 878,
      "name": "Science Fiction"
    }
  ],
  "homepage": "http://www.starwars.com/films/star-wars-episode-iv-a-new-hope",
  "id": 11,
  "imdb_id": "tt0076759",
  "origin_country": [
    "US"
  ],
  "original_language": "en",
  "original_title": "Star Wars",
  "overview": "Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.",
  "popularity": 91.205,
  "poster_path": "/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg",
  "production_companies": [
    {
      "id": 1,
      "logo_path": "/tlVSws0RvvtPBwViUyOFAO0vcQS.png",
      "name": "Lucasfilm Ltd.",
      "origin_country": "US"
    },
    {
      "id": 25,
      "logo_path": "/qZCc1lty5FzX30aOCVRBLzaVmcp.png",
      "name": "20th Century Fox",
      "origin_country": "US"
    }
  ],
  "production_countries": [
    {
      "iso_3166_1": "US",
      "name": "United States of America"
    }
  ],
  "release_date": "1977-05-25",
  "revenue": 775398007,
  "runtime": 121,
  "spoken_languages": [
    {
      "english_name": "English",
      "iso_639_1": "en",
      "name": "English"
    }
  ],
  "status": "Released",
  "tagline": "A long time ago in a galaxy far, far away...",
  "title": "Star Wars",
  "video": false,
  "vote_average": 8.2,
  "vote_count": 20635
}
```

### Testing
```bash
vendor\bin\phpunit
```
## Credits
- [slvler](https://github.com/slvler)
## License
The MIT License (MIT). Please see [License File](https://github.com/slvler/slvler/blob/main/LICENSE.md) for more information.
