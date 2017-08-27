<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 12.05.2017
 * Time: 18:39
 */

namespace wokster\owlcarousel;

use \yii\web\AssetBundle;

class OwlWidgetAssets extends AssetBundle {
  public $sourcePath = '@bower/owl.carousel/dist';
  public $css = [
      'assets/owl.carousel.min.css',
  ];
  public $js = [
      'owl.carousel.min.js',
  ];

  public $depends = [
      'yii\web\JqueryAsset',
  ];
}