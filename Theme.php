<?php

namespace Shopware\Themes\Tobi;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
tobi
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
tobi
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

   protected $css = [
        'src/css/custom.css',
      // 'src/css/paymentfont.min.css'

];
protected $less = [
        'src/less/_components/buttons.less'

];

   protected $javascript = [
      'src/js/custom.js'
   ];

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}
dedgfeghthththththff
