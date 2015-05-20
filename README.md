# laravel-baidu-bos
A Flysystem Baidu Bos Wrapper for Laravel

[![Author](http://img.shields.io/badge/author-@zhuxiaoqiao-blue.svg?style=flat-square)](https://github.com/zhuxiaoqiao)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/zhuxiaoqiao/laravel-baidu-bos.svg?style=flat-square)](https://packagist.org/packages/zhuxiaoqiao/laravel-baidu-bos)
[![Total Downloads](https://img.shields.io/packagist/dt/zhuxiaoqiao/laravel-baidu-bos.svg?style=flat-square)](https://packagist.org/packages/zhuxiaoqiao/laravel-baidu-bos)


## Installation

```bash
composer require "laravel-baidu-bos": "~1.0"

```
or add the following line to your project's `composer.json`:

```json
"require": {
    "zhuxiaoqiao/laravel-baidu-bos": "~1.0"
}
```
then

```shell
composer update
```
After completion of the above, add the following line to the section `providers` of `config/app.php`:

```php
'Zhuxiaoqiao\LaravelBaiduBos\BaiduBosFilesystemServiceProvider',
```

## Configuration

Edit `config\filesystems.php`:
Add bos disk

```php
	'disks' => [

		'local' => [
			'driver' => 'local',
			'root'   => storage_path().'/app',
		],

		's3' => [
			'driver' => 's3',
			'key'    => 'your-key',
			'secret' => 'your-secret',
			'region' => 'your-region',
			'bucket' => 'your-bucket',
		],

		'rackspace' => [
			'driver'    => 'rackspace',
			'username'  => 'your-username',
			'key'       => 'your-key',
			'container' => 'your-container',
			'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
			'region'    => 'IAD',
			'url_type'  => 'publicURL'
		],

		'bos' => [
      'driver' => 'bos',
      'bucket' => 'your-bucket-name',
      'options' => [
        'credentials' => [
          'ak' => 'your-ak',
          'sk' => 'your-sk',
        ],
        'endpoint' => 'http://bj.bcebos.com',
      ]
    ],
	],
```

## Usage

```php
$exists = Storage::disk('bos')->exists('path/to/file');
$content = Storage::disk('bos')->get('path/to/file');
```

## Official Documentation

Documentation for laravel framework 'Filesystem/Cloud Storage' can be found on the [Laravel website](http://laravel.com/docs/5.0/filesystem).
