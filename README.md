# yts

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A full wrapper for the YTS API.

## Install

Via Composer

```bash
$ composer require pxgamer/yts
```

## Usage

#### Setup

```php
use pxgamer\YTS\Adapter\HttpAdapter;
use pxgamer\YTS\YTS;

// Create an adapter
$adapter = new HttpAdapter('');

// Create a YTS object with the previous adapter
$yts = new YTS($adapter);
```

#### Movies

```php
use pxgamer\YTS\Api\Movie;

// Return the Movie api
$movie = $yts->movie();

// Return an array of Movie entities
$movies = $movies->getAll([
    'quality'         => Movie::QUALITY_ALL,  // A quality constant
    'query_term'      => 0,                   // A query string, or 0 to ignore
    'page'            => 1,                   // An integer page number
    'minimum_rating'  => 0,                   // The minimum movie rating
    'genre'           => '',                  // A string containing the genre
    'sort_by'         => 'date-added',        // The sort-by order
    'order_by'        => 'desc',              // The direction to order by
    'with_rt_ratings' => true,                // Returns the list with Rotten Tomatoes ratings
]);

// Return a Movie entity by its id
$movieInformation = $movie->getMovieInformation(123, [
    'with_images' => true,  // Return with image URLs
    'with_cast'   => truee, // Return with information about the cast
]);

// Return an array of Movie suggestions by its id
$movieSuggestions = $movie->getMovieSuggestions(123);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](.github/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@pxgamer.xyz instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/yts.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/yts/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/110670135/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/yts.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/yts.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/yts
[link-travis]: https://travis-ci.org/pxgamer/yts
[link-styleci]: https://styleci.io/repos/110670135
[link-code-quality]: https://codecov.io/gh/pxgamer/yts
[link-downloads]: https://packagist.org/packages/pxgamer/yts
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
