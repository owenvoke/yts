# YTS

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A full wrapper for the YTS API.

## About YTS
YIFY Torrents or YTS is a peer-to-peer release group known for distributing large numbers of movies as free downloads through BitTorrent. YIFY releases were characterised through their HD video quality in a small file size, which attracted many downloaders.

## Install

Via Composer

```bash
$ composer require pxgamer/yts
```

## Usage

#### List Movies

Returns a Collection instance containing Movie instances.

```php
Movies::list([
    'quality'         => Movies::QUALITY_ALL, // A quality constant
    'query_term'      => 0,                   // A query string, or 0 to ignore
    'page'            => 1,                   // An integer page number
    'minimum_rating'  => 0,                   // The minimum movie rating
    'genre'           => '',                  // A string containing the genre
    'sort_by'         => 'date-added',        // The sort-by order
    'order_by'        => 'desc',              // The direction to order by
    'with_rt_ratings' => false,               // Returns the list with Rotten Tomatoes ratings
]);
```

#### Movie Details

Returns a Movie instance.

```php
Movies::details([
    'movie_id'    => null,  // The ID of the movie to retrieve
    'with_images' => false, // Return with image URLs
    'with_cast'   => false, // Return with information about the cast
]);
```

#### Movie Suggestions

Returns a Collection instance containing 0 to 4 Movie instances.

```php
Movies::suggestions([
    'movie_id' => null, // The ID of the movie to retrieve suggestions for
]);
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
