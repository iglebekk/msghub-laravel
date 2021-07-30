# Laravel Package for MSGHUB API
This is a package for the Intelio service MSGHUB.
Access token are provied to you from an ADMIN.

## Installation

- Run `Composer require iglebekk/msghub-laravel`.
- Run `php artisan vendor:publish` and select MSGHUB to publish config file.
- Edit `.env` file and add `MSGHUB_TOKEN`and `MSGHUB_URI`.

## Usage
- use `Msghub::send('name of sender', phone-number)` to send a SMS with a unique code
- to check the code use `Msghub::verify('name of sender', phone-number, code)`

## Response
In response you'll get an Http/Guzzle response. Convert that to JSON with `->json()`. In the JSON object you'll have a `status` that will give you `success`or `error`
