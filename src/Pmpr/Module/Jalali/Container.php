<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e79688f4e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ewamemuocoskqiuu($locale) : string { if (in_array($locale, ["\145\x6e", "\x66\x61"])) { goto quwcqmyokicssyew; } $locale = false; quwcqmyokicssyew: $goecwaaykqoaaagg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg(); if (!$locale && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto mosqsmqimqgqoase; } if (!$locale && $goecwaaykqoaaagg) { goto yqykqysmiquwoasu; } if (!$locale && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto gimmuoqwckiseaik; } if (!(!$locale && !$goecwaaykqoaaagg)) { goto iqcogmsguwoikame; } $locale = "\145\156"; iqcogmsguwoikame: goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $locale = "\x66\x61"; cmqucgoewuyieoyk: goto ayyweymyuuiauamo; yqykqysmiquwoasu: $locale = "\x65\x6e"; ayyweymyuuiauamo: goto omugkkesagcyagmk; mosqsmqimqgqoase: $locale = "\146\141"; omugkkesagcyagmk: return $locale; } public function moeogyisgeuwoeea() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->weysguygiseoukqw(Setting::mequmaoyiwsmgmsi, [])); } }
