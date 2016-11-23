# Contributing

## Coding Style

This package follows the [PSR-2](http://www.php-fig.org/psr/2/) coding standard and the [PSR-4](http://www.php-fig.org/psr/4/) autoloading standard.

## PHPDoc

```php
/**
 * Some function.
 *
 * @param  string|array         $first_paramater
 * @param  \Closure|string|null $second_paramater
 * @param  bool                 $third_paramater
 *
 * @return void
 */
public function myFunction($first_paramater, $second_paramater = null, $third_paramater = false)
{
    //
}
```

## StyleCI

Don't worry if your code styling isn't perfect! [StyleCI](https://styleci.io) will automatically merge any style fixes into the Laravel repository after pull requests are merged. This allows us to focus on the content of the contribution and not the code style.

## Testing

* MUST run the test suite.
* MUST write (or update) unit tests.
* SHOULD write documentation.

## Commits

Please, write [commit messages that make sense](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html),
and [rebase your branch](http://git-scm.com/book/en/Git-Branching-Rebasing) before submitting your Pull Request.

You may be asked to [squash your commits](http://gitready.com/advanced/2009/02/10/squashing-commits-with-rebase.html)
too. This is used to "clean" your Pull Request before merging it (we don't want commits such as `fix tests`, `fix 2`,
`fix 3`, etc).
