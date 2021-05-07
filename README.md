# YTS

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]
[![Buy us a tree][ico-treeware-gifting]][link-treeware-gifting]

A full wrapper for the YTS API.

## About YTS

YIFY Torrents or YTS is a peer-to-peer release group known for distributing large numbers of movies as free downloads through BitTorrent. YIFY releases were characterised through their HD video quality in a small file size, which attracted many downloaders.

## Install

Via Composer

```shell
$ composer require owenvoke/yts
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

```shell
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@voke.dev instead of using the issue tracker.

## Credits

- [Owen Voke][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to plant trees. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees [here][link-treeware-gifting].

Read more about Treeware at [treeware.earth][link-treeware].

[ico-version]: https://img.shields.io/packagist/v/owenvoke/yts.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/owenvoke/yts/Tests.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/110670135/shield
[ico-downloads]: https://img.shields.io/packagist/dt/owenvoke/yts.svg?style=flat-square
[ico-treeware-gifting]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=flat-square

[link-packagist]: https://packagist.org/packages/owenvoke/yts
[link-github-actions]: https://github.com/owenvoke/yts/actions
[link-styleci]: https://styleci.io/repos/110670135
[link-downloads]: https://packagist.org/packages/owenvoke/yts
[link-treeware]: https://treeware.earth
[link-treeware-gifting]: https://ecologi.com/owenvoke?gift-trees
[link-author]: https://github.com/owenvoke
[link-contributors]: ../../contributors
