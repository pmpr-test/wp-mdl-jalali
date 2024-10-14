<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8372db555             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Woocommerce; class Jalali extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4a\141\x6c\x61\x6c\151", PR__MDL__JALALI); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Area::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\151\156\151\164", [$this, "\x79\145\171\151\147\x75\171\x65\147\x6d\155\171\x75\163\145\x61"], 21)->qcsmikeggeemccuu("\x70\x6c\x75\x67\151\156\163\x5f\154\x6f\141\144\145\144", [$this, "\x69\143\167\x63\x67\155\x63\x6f\x69\x6d\x71\145\151\147\171\x65"]); $this->waqewsckuayqguos("\x62\145\x66\x6f\x72\145\137\145\156\x71\165\x65\165\x65\x5f\x62\x61\143\x6b\x65\156\x64\x5f\141\x73\163\x65\x74\163", [$this, "\x65\156\161\x75\x65\165\145"])->waqewsckuayqguos("\x65\156\x71\165\145\x75\x65\x5f\144\x61\164\x65\160\x69\x63\153\145\x72\137\141\x73\163\x65\x74\x73", [$this, "\155\165\161\165\x79\141\151\x6d\x63\171\151\x77\143\x65\x63\x75"]); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this) . "\x5f\x61\143\x74\x69\166\x61\x74\x65"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!$qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { $qkqgcaykemoiecma->update("\127\x50\x4c\x41\x4e\107", "\145\156\137\125\123"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\167\160\x5f\144\x6f\167\x6e\154\157\141\x64\137\x6c\141\156\x67\165\141\147\x65\137\x70\141\x63\x6b")) { require_once ABSPATH . "\x2f\x77\x70\55\x61\x64\x6d\151\x6e\57\151\156\x63\x6c\x75\x64\x65\x73\x2f\x74\162\x61\x6e\163\154\141\x74\151\x6f\x6e\55\151\x6e\163\x74\x61\x6c\x6c\x2e\x70\150\x70"; if (wp_can_install_language_pack()) { @wp_download_language_pack("\146\x61\137\111\x52"); } } } catch (Exception $wgaoewqkwgomoaai) { } } } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if ($this->kmuweyayaqoeqiyw()->moeogyisgeuwoeea()) { $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x76\151\x72\141\x73\164\141\162", $eygsasmqycagyayw->get("\x76\151\162\x61\163\x74\141\x72\56\x6a\163"))->simswskycwagoeqy()); } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\x64\x6d\151\x6e", $eygsasmqycagyayw->get("\141\x64\155\151\156\x2e\x6a\x73"))->simswskycwagoeqy()); $eygsasmqycagyayw->ikqyiskqaaymscgw("\155\157\x6e\x74\x68\163", [__("\x46\141\x72\166\x61\162\144\151\156", PR__MDL__JALALI), __("\x4f\162\x64\151\142\x65\x68\145\163\150\164", PR__MDL__JALALI), __("\x4b\x68\157\162\144\141\144", PR__MDL__JALALI), __("\124\x69\x72", PR__MDL__JALALI), __("\x4d\157\162\144\x61\x64", PR__MDL__JALALI), __("\x53\x68\x61\150\162\151\166\x61\162", PR__MDL__JALALI), __("\x4d\145\x68\x72", PR__MDL__JALALI), __("\101\x62\141\156", PR__MDL__JALALI), __("\x41\x7a\x61\x72", PR__MDL__JALALI), __("\104\x65\171", PR__MDL__JALALI), __("\x42\141\150\155\x61\x6e", PR__MDL__JALALI), __("\x45\x73\x66\141\156\x64", PR__MDL__JALALI)]); $this->muquyaimcyiwcecu(); } public function muquyaimcyiwcecu(string $mcaisukqqyosuasi = Constants::zmmsyimwiiaweocw) { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $oqkcmcewgaqymmoe = $eygsasmqycagyayw->owygwqwawqoiusis("\x64\141\x74\x65\160\x69\143\153\x65\162", $eygsasmqycagyayw->get("\144\141\164\145\160\151\143\153\x65\x72\x2e\x6a\163"))->simswskycwagoeqy()->okawmmwsiuauwsiu(); $iesegggmcccqyquo = $eygsasmqycagyayw->awgyqswkqywwmkye("\144\x61\x74\145\x70\x69\143\153\x65\162", $eygsasmqycagyayw->get("\x64\141\x74\145\x70\x69\143\153\x65\162\x2e\x63\163\163")); if ($mcaisukqqyosuasi === Constants::zmmsyimwiiaweocw) { $eygsasmqycagyayw->ayeieigcckcmsikq($oqkcmcewgaqymmoe)->ayeieigcckcmsikq($iesegggmcccqyquo); } else { $eygsasmqycagyayw->oeoquuwkoywiuesy($oqkcmcewgaqymmoe)->oeoquuwkoywiuesy($iesegggmcccqyquo); } } }
