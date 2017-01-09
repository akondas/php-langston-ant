# PHP-Langstons-Ant

Langton's ant implementation written in PHP and running in CLI:

```
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀         ⢀⢴⠙⣄⡓⢦⠝⠁
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⠤⡀⢀⢐⡦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠋⣓⢚⡉⣾⠐⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣛⣆⢗⣽⢺⣐⡦⠀⢐⣦⡤⢐⡦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⢳⣇⡲⢁⡔⡊⡵⣪⣕⣀⣀⢀⠇⠐⡍⢢⠀⠀⠀⠀⠀⠀⠀⠀⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡘⠱⣌⣧⣼⣠⣏⠊⢌⡸⣥⣝⡐⢆⢡⣓⡡⠏⡒⠿⢢⠀⠀⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡜⣀⣵⠊⣨⢵⠸⡦⠑⣐⡅⣅⡼⣳⢻⡝⠵⣿⢾⠠⣀⠜⢀⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡜⠁⡈⠢⢀⢹⢤⠗⢾⡭⠋⠛⢛⡲⡟⡒⣏⡽⡊⢤⢆⢴⠙⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢒⠌⢃⣙⡝⣢⠿⡫⠌⢍⠹⣄⡿⠦⣫⢸⡈⠅⣗⠐⣄⡓⢦⠝⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠺⢅⡌⣑⡹⣧⣄⡡⠲⡀⣫⢀⡳⣼⢫⢌⢅⡁⡅⣆⡙⡁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠣⣦⠃⣻⢧⠁⡋⡹⠻⣪⢵⣙⡴⣻⠛⣬⡰⢬⢡⠙⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠋⡅⣈⠡⠛⠆⠀⠈⠀⣀⠎⢢⣺⠀⠓⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠓⠈⠒⠒⠒⠒⠒⠛⠉⠒⠁⠀⠀⠀⠀⠀⠀

⠀
```

## Requirements

* PHP >= 7.0.0
* Composer

## Install

Clone from GitHub:

```
git clone git@github.com:itcraftsmanpl/php-langston-ant.git
cd php-langstons-ant
composer install --no-dev
```

## Launch

Run simple command in CLI:

```
php bin/console
```

## References

These publications have helped me in creating PHP-Langstons-Ant:

* [Langton's ant](https://en.wikipedia.org/wiki/Langton's_ant)

## License

PHP-Langstons-Ant is released under the MIT Licence. See the bundled LICENSE file for details.

## Author

Arkadiusz Kondas (@ArkadiuszKondas)
