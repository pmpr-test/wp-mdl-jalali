<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b82f31cebbd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = '') { return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '', $mcmaiqckgiuqayau = '') { if ('c' !== strtolower($saqmwwmqiwmkiwaa)) { if (is_int($cqgoimumaewouews)) { $yiuogaeewyockeak = $cqgoimumaewouews; } else { if (is_numeric($cqgoimumaewouews)) { $yiuogaeewyockeak = (int) $cqgoimumaewouews; } else { $yiuogaeewyockeak = strtotime($cqgoimumaewouews); } } if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->isiuiegyqiomccsw(); } if ($yiuogaeewyockeak) { $locale = $this->ewamemuocoskqiuu($locale); if ($this->ksskkagoieiyuuwe($locale)) { $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $mcmaiqckgiuqayau); } } } return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = '', $eqmcogmcemgigckm = '٫') { return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }
