<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3ed9ee5b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('get_term', [$this, 'kckogqkiycqeumoa'])->cecaguuoecmccuse('get_comment', [$this, 'semmskukaeyeouue'])->cecaguuoecmccuse('get_the_date', [$this, 'mikaiusgimoekqye'], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if ($iwewcwusemqaiggk) { if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); } } return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get('m'); $usqcwoasmiiomgks = $mkskkagguomgukkm->get('year'); $mwemskcucwsyycwm = $mkskkagguomgukkm->get('monthnum'); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get('day'); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get('hour'); $sckumcuqemuukces = $mkskkagguomgukkm->get('minute'); $gcegymooyemmaysk = $mkskkagguomgukkm->get('second'); if ($gcisockiummsmcag != '' && $gcisockiummsmcag != '0') { $gcisockiummsmcag = preg_replace('/[^0-9]/', '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); } if ($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300) { $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["/YEAR\\([\\s]*{$aasascamegmwqmqk}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $usqcwoasmiiomgks . "/", "/DAYOFMONTH\\([\\s]*{$aasascamegmwqmqk}\\.post_date[\\s]*\\)[\\s]*=[\\s]*" . $oqkwcmcmimkmkwgk . "/", "/MONTH\\([\\s]*{$aasascamegmwqmqk}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $mwemskcucwsyycwm . "/", "/HOUR\\([\\s]*{$aasascamegmwqmqk}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $ygykagaqyuawwiyo . "/", "/MINUTE\\([\\s]*{$aasascamegmwqmqk}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $sckumcuqemuukces . "/", "/SECOND\\([\\s]*{$aasascamegmwqmqk}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $gcegymooyemmaysk . "/"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "1=1", $icsywsyukqcciiky); } return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if ($wp_locale instanceof WP_Locale) { $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if ($geqcesmqwkeayoiu) { $wp_locale->number_format['thousands_sep'] = $geqcesmqwkeayoiu; } if ($qawscmyuiuymkscy) { $wp_locale->number_format['decimal_point'] = $qawscmyuiuymkscy; } } } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($comment) { if ($comment instanceof WP_Comment) { $ewgwqamkygiqaawc = $comment->comment_content; } else { $ewgwqamkygiqaawc = $comment; } if ($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc)) { if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); } } if ($comment instanceof WP_Comment) { $comment->comment_content = $ewgwqamkygiqaawc; } else { $comment = $ewgwqamkygiqaawc; } return $comment; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if ($locale !== 'fa_IR') { $locale = 'fa_IR'; } return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if ($ocogsiouoiuuguym) { $ocogsiouoiuuguym = $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
