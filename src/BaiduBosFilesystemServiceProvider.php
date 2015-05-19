<?php namespace Zhuxiaoqiao\LaravelBaiduBos;

use Storage;
use BaiduBce\Services\Bos\BosClient;
use Zhuxiaoqiao\Flysystem\BaiduBos\BaiduBosAdapter;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class BaiduBosFilesystemServiceProvider extends ServiceProvider {

    public function boot()
    {
        Storage::extend('bos', function($app, $config)
        {
            $client = new BosClient($config['options']);

            return new Filesystem(new BaiduBosAdapter($client));
        });
    }

    public function register()
    {
        //
    }

}