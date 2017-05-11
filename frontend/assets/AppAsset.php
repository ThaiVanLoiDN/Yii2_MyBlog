<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/styles.css?ver=4.7',
        'css/bootstrap.min.css?ver=3.3.5',
        'css/font-awesome.min.css?ver=4.4.0',
        'css/swiper.min.css?ver=3.2.5',
        '//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C500%2C700%2C900&#038;ver=4.7.3',
        'css/style.css?ver=4.7.3',
        'css/easymag.css',
    ];
    
    public $js = [
        'js/easymag.js',
        'js/jquery/jquery.js?ver=1.12.4',
        'js/jquery/jquery-migrate.min.js?ver=1.4.1',
        'js/swiper.jquery.min.js?ver=3.2.5',
        'js/form.js?ver=3.3',
        'js/jquery.form.min.js?ver=3.51.0-2014.06.20',
        'js/scripts.js?ver=4.7',
        'js/jquery.newsticker.min.js?ver=4.7.3',
        'js/custom.js?ver=4.7.3',
        'js/comment-reply.min.js?ver=4.7.3',
        'js/wp-embed.min.js?ver=4.7.3',
    ];
    public $depends = [
        
    ];
}
