Owl carousel for yii2
=====================
Owl carousel for yii2

Based on https://owlcarousel2.github.io

DEMOS: https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html

DOCS: https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist wokster/yii2-owl-carousel-widget "*"
```

or add

```
"wokster/yii2-owl-carousel-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
        <?php \wokster\owlcarousel\OwlWidget::begin([
            'theme'=>'green', //can be "green","default", false (false by default)
            'plaginOptions'=>[
                'loop' => true,
                'margin' => 10,
                'responsiveClass' => true,
                'responsive' => [
                  0 => ['items'=>1,'nav'=>true],
                  600 => ['items'=>3,'nav'=>true],
                  1000 => ['items'=>5,'nav'=>true],
                ],
            ]
        ]);?>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
        <?php \wokster\owlcarousel\OwlWidget::end()?>
```