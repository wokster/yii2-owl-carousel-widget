<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 12.05.2017
 * Time: 18:39
 */

namespace wokster\owlcarousel;


use yii\base\Widget;
use yii\bootstrap\Html;
use yii\helpers\Json;

class OwlWidget extends Widget
{
  public $plaginOptions = [];
  public $theme = false;

  public function init()
  {
    parent::init();
    ob_start();
  }

  public function run()
  {
    $bundle = OwlWidgetAssets::register($this->view);
    if($this->theme)
      $bundle->css[] = 'assets/owl.theme.'.$this->theme.'.min.css';
    $this->view->registerJs("$('#".$this->id."').owlCarousel(".Json::encode($this->plaginOptions).");");
    return Html::tag('div',ob_get_clean(),['class'=>($this->theme)?'owl-theme owl-carousel':'owl-carousel','id'=>$this->id]);
  }
}
