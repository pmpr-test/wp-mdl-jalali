<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6746eb8635eb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Woocommerce; class Jalali extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4a\141\x6c\141\154\151", PR__MDL__JALALI); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Area::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\137\x69\156\151\164", [$this, "\171\x65\171\x69\147\165\x79\145\147\x6d\155\171\x75\x73\x65\x61"], 21)->qcsmikeggeemccuu("\x70\154\x75\x67\x69\156\163\137\x6c\x6f\141\144\145\144", [$this, "\151\143\x77\143\147\155\143\x6f\x69\x6d\x71\x65\x69\x67\171\145"]); $this->waqewsckuayqguos("\142\145\x66\157\x72\x65\137\x65\156\161\165\x65\165\145\x5f\142\141\x63\x6b\145\x6e\x64\137\141\163\163\x65\x74\x73", [$this, "\x65\156\x71\165\x65\165\x65"])->waqewsckuayqguos("\145\x6e\x71\165\145\165\145\x5f\x64\141\164\x65\x70\x69\143\153\x65\162\x5f\x61\x73\163\x65\x74\x73", [$this, "\x6d\x75\161\165\x79\x61\x69\x6d\x63\171\x69\x77\x63\x65\x63\165"]); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this) . "\137\x61\143\x74\x69\x76\x61\164\145"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!$qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { $qkqgcaykemoiecma->update("\127\120\114\x41\x4e\x47", "\145\156\x5f\125\123"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\x77\x70\x5f\x64\x6f\x77\156\x6c\x6f\141\144\x5f\x6c\x61\156\x67\165\x61\x67\x65\x5f\160\141\143\x6b")) { require_once ABSPATH . "\x2f\167\x70\x2d\141\144\155\151\x6e\x2f\x69\x6e\143\154\165\x64\x65\x73\57\164\x72\x61\156\x73\154\x61\x74\151\157\156\x2d\x69\x6e\163\x74\x61\154\x6c\x2e\160\x68\x70"; if (wp_can_install_language_pack()) { @wp_download_language_pack("\146\141\x5f\x49\x52"); } } } catch (Exception $wgaoewqkwgomoaai) { } } } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($this->kmuweyayaqoeqiyw()->moeogyisgeuwoeea()) { $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\166\151\162\x61\x73\x74\x61\162", "\x76\151\x72\141\163\x74\x61\x72\56\x6a\163")->simswskycwagoeqy()); } $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x61\144\x6d\x69\x6e", "\x61\x64\155\151\156\56\152\163")->simswskycwagoeqy()); $meakksicouekcgoe->wwmusmkkcwsiciou($this, "\x6d\x6f\156\164\x68\163", [__("\106\x61\162\x76\x61\x72\x64\x69\x6e", PR__MDL__JALALI), __("\117\162\144\x69\142\x65\x68\x65\163\150\164", PR__MDL__JALALI), __("\113\150\157\x72\x64\x61\x64", PR__MDL__JALALI), __("\124\151\x72", PR__MDL__JALALI), __("\115\157\162\x64\x61\x64", PR__MDL__JALALI), __("\123\x68\141\150\162\151\166\141\x72", PR__MDL__JALALI), __("\x4d\x65\x68\x72", PR__MDL__JALALI), __("\101\142\141\156", PR__MDL__JALALI), __("\x41\x7a\141\162", PR__MDL__JALALI), __("\x44\145\171", PR__MDL__JALALI), __("\x42\141\x68\x6d\x61\x6e", PR__MDL__JALALI), __("\105\x73\146\141\156\144", PR__MDL__JALALI)]); $this->muquyaimcyiwcecu(); } public function muquyaimcyiwcecu(string $sqeykgyoooqysmca = Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $oqkcmcewgaqymmoe = $meakksicouekcgoe->owygwqwawqoiusis($this, "\144\x61\x74\x65\x70\151\x63\x6b\145\162", "\144\x61\x74\145\x70\151\143\x6b\x65\x72\56\152\x73")->simswskycwagoeqy()->okawmmwsiuauwsiu(); $iesegggmcccqyquo = $meakksicouekcgoe->awgyqswkqywwmkye($this, "\x64\x61\164\x65\x70\x69\x63\153\145\x72", "\144\x61\164\145\x70\x69\143\153\145\x72\56\143\x73\x73"); if ($sqeykgyoooqysmca === Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe->qeqgammgesiwiysc($oqkcmcewgaqymmoe)->qeqgammgesiwiysc($iesegggmcccqyquo); } else { $meakksicouekcgoe->yawoscugkyysowie($oqkcmcewgaqymmoe)->yawoscugkyysowie($iesegggmcccqyquo); } } }
