<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b629fdb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Plugin; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Setting; class Woocommerce extends Container { public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::wumiekuwcmukyyik)) { $this->cecaguuoecmccuse('formatted_woocommerce_price', [$this, 'cowgasauaosgcgwu'], 999)->aqaqisyssqeomwom('price_discount', [$this, 'cowgasauaosgcgwu'], 999); } if ($this->weysguygiseoukqw(Setting::mkkgcuyqmyokoqcq)) { $this->cecaguuoecmccuse('woocommerce_cart_contents_count', [$this, 'msywmyaoqmaegsuy'], 999)->cecaguuoecmccuse('woocommerce_order_item_quantity_html', [$this, 'msywmyaoqmaegsuy'], 999); } if ($this->weysguygiseoukqw(Setting::kkwawiqomugaisao)) { } $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'cqsggwwisgwawcey']); } public function cqsggwwisgwawcey() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, 'fix-analytics-calendar')->awagieqcmmwkgwgs($this->iuygowkemiiwqmiw('style.css'))); } public function msywmyaoqmaegsuy($sociqikgoyemqaac) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($sociqikgoyemqaac); } public function cowgasauaosgcgwu($ksaameoqigiaoigg) { return $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(html_entity_decode($ksaameoqigiaoigg)); } }
