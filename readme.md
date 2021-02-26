# Moovingo template

Laravel Blade template using TailwindCSS, SASS and laravel-mix.

## Install

Download this repository and copy the following directories in your laravel application:

```bash
$ cp -r ../square1-laravel-template/resources/views resources
$ cp -r ../square1-laravel-template/resources/scss resources
$ cp ../square1-laravel-template/tailwind.config.js tailwind.config.js
$ cp ../square1-laravel-template/webpack.mix.js webpack.mix.js
$ cp ../square1-laravel-template/package.json package.json
```

Install all the dependencies using node

```bash
$ npm install
````

Compile the assets using laravel mix:

```bash
$ npm run prod
```

To preview the template locally, add the following routes to your project:

```php
// routes/web.php

Route::get('/', function () {
    return view('home.index');
});

Route::get('/property-search', function () {
    return view('property-search.index');
});
```