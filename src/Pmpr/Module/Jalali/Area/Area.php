<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d85fda49ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; class Area extends Common { public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Front::symcgieuakksimmu(); } else { Admin::symcgieuakksimmu(); } } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\147\x65\x74\x5f\141\147\145", [$this, "\147\x63\x6d\145\x61\x6d\161\141\147\141\157\x75\x69\163\153\x63"], 10, 2)->aqaqisyssqeomwom("\141\144\x64\x5f\x79\145\141\x72", [$this, "\153\x69\163\145\x77\x71\x79\x79\165\x71\161\161\x77\x65\163\x69"], 10, 2)->aqaqisyssqeomwom("\141\144\x64\x5f\155\157\x6e\164\x68", [$this, "\147\x61\145\143\x65\x6b\171\145\157\x69\x67\x77\x77\x77\163\143"], 10, 2)->aqaqisyssqeomwom("\x63\x6f\x6e\x76\x65\x72\x74\x5f\144\x61\164\145", [$this, "\155\x69\153\141\x69\165\x73\147\151\155\x6f\x65\153\x71\x79\x65"], 10, 3)->aqaqisyssqeomwom("\x74\162\x61\156\163\x5f\x77\x6f\162\144", [$this, "\x75\171\x67\145\x69\153\x77\155\167\155\x69\x77\163\x71\x63\141"], 10, 2)->aqaqisyssqeomwom("\x74\x72\141\156\x73\137\x64\x61\164\145\164\x69\x6d\x65", [$this, "\155\151\x6b\141\x69\165\x73\147\x69\x6d\157\x65\153\161\171\x65"], 10, 3)->aqaqisyssqeomwom("\164\162\x61\156\163\x5f\156\165\155\x62\145\162", [$this, "\151\x65\141\143\157\x77\163\163\x65\x6d\x65\165\x65\x77\x61\x67"], 10, 3); } public function gcmeamqagaouiskc($usqcwoasmiiomgks, bool $ksskkagoieiyuuwe = true) { $asygkgscoucyqgus = 0; if ($usqcwoasmiiomgks) { $usqcwoasmiiomgks = $this->caokeucsksukesyo()->owgcciayoweymuws()->ucymkkoowkqeauga($usqcwoasmiiomgks, "\x2f"); $ggkaciewmeqmgckg = $this->caokeucsksukesyo()->owgcciayoweymuws()->ucymkkoowkqeauga($usqcwoasmiiomgks, "\55"); if ($ksskkagoieiyuuwe) { $ggkaciewmeqmgckg = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($usqcwoasmiiomgks); $ggkaciewmeqmgckg = $this->uacmswwoiqckokew()->iiemucyoiawywqmw($ggkaciewmeqmgckg, 1, 1)[0]; } $cugkqygegsymsyic = date("\131"); $asygkgscoucyqgus = $cugkqygegsymsyic - $ggkaciewmeqmgckg; if ($asygkgscoucyqgus < 1) { $asygkgscoucyqgus = 1; } } return $asygkgscoucyqgus; } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return parent::mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa, $locale); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie) { $ykiumkqgooueeewk = explode("\55", $this->uacmswwoiqckokew()->date("\131\55\155\55\x64", $yiuogaeewyockeak, "\x65\x6e")); $ykiumkqgooueeewk[0] += $eqgoocgaqwqcimie; return strtotime($this->uacmswwoiqckokew()->iiemucyoiawywqmw($ykiumkqgooueeewk[0], $ykiumkqgooueeewk[1], $ykiumkqgooueeewk[2], "\x2d")); } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie) { $ykiumkqgooueeewk = explode("\55", $this->uacmswwoiqckokew()->date("\x59\x2d\155\x2d\x64", $yiuogaeewyockeak, "\x65\x6e")); $ymccyoouuqkaacik = $ykiumkqgooueeewk[1] + $eqgoocgaqwqcimie; $ykiumkqgooueeewk[0] += (int) ($ymccyoouuqkaacik / 12); $ykiumkqgooueeewk[1] = $ymccyoouuqkaacik % 12; return strtotime($this->uacmswwoiqckokew()->iiemucyoiawywqmw($ykiumkqgooueeewk[0], $ykiumkqgooueeewk[1], $ykiumkqgooueeewk[2], "\55")); } }
