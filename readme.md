## Negarang FaceApp
A Web Application to Draw a Cartoon Face.

- Demo: http://negarang.milad-ab.ir/face-app
- Graphics Source: http://www.iconarchive.com/show/flat-animal-icons-by-martin-berube.html

## Installation

Via [Composer](https://getcomposer.org)
```
composer create-project negarang/face-app MyAppName
```

Run The Server:
```
cd ./MyAppname/public
```
```
php -S 127.0.0.1:1010
```

Open a web browser and go to `http://127.0.0.1:1010/frame.html` address.

## Start Your App

1 - Place your main graphics files in `./resource/graphics/facedesigner` directory and place your preview graphics files (images with low quality) in `./public/resource/graphics/facedesigner` directory. Also you need to change icon files in `./public/assets/images/facedesigner/icons` directory.

2 - Config items behaviour in `./helpers/functions.php` file.

3 - Set Width and Height of the output image in `./image.php` file.

4 - Build It:
```
php ./build.php
```

## License
The Negarang FaceApp is open-source project licensed under the [MIT license](https://opensource.org/licenses/MIT). For the full copyright and license information, please view the LICENSE file that was distributed with this source code.