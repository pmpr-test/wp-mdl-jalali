<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e79688f4e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\x6e\x69\164"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\137\x74\145\162\155", [$this, "\153\x63\x6b\x6f\x67\x71\153\x69\171\x63\x71\x65\165\155\157\x61"])->cecaguuoecmccuse("\147\145\164\137\143\157\155\155\145\x6e\164", [$this, "\163\x65\155\155\x73\153\165\x6b\141\x65\171\145\157\165\x75\145"])->cecaguuoecmccuse("\154\157\x63\141\154\145", [$this, "\165\x71\153\151\x79\145\165\145\147\x69\x61\143\167\x75\161\161"], 10)->cecaguuoecmccuse("\x67\x65\164\137\164\150\x65\x5f\x64\141\x74\145", [$this, "\155\151\153\x61\151\165\x73\147\151\x6d\157\x65\153\161\171\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto qicwaskssogcokgm; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto kymkucucyeoeikim; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); kymkucucyeoeikim: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto usquiuuyiyqaeyiu; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); usquiuuyiyqaeyiu: qicwaskssogcokgm: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\x6d"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\171\145\141\162"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\155\157\x6e\x74\150\156\x75\x6d"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\144\141\x79"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\150\157\165\162"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\x6d\151\156\165\x74\x65"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\x65\x63\x6f\156\144"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto uguigkcmukuouway; } $gcisockiummsmcag = preg_replace("\x2f\x5b\x5e\60\55\x39\135\57", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); uguigkcmukuouway: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto uqqaiagaeqgqgaiy; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\131\x45\101\122\x5c\x28\x5b\134\x73\135\52{$aasascamegmwqmqk}\x2e\160\157\x73\x74\x5f\144\141\x74\x65\133\134\163\x5d\x2a\x5c\51\133\x5c\163\135\52\x3d\133\134\163\135\52" . $usqcwoasmiiomgks . "\x2f", "\x2f\104\101\131\x4f\106\x4d\x4f\x4e\124\110\x5c\50\x5b\x5c\163\x5d\52{$aasascamegmwqmqk}\x5c\x2e\x70\x6f\163\x74\137\144\x61\x74\x65\133\x5c\163\135\x2a\134\x29\133\x5c\163\x5d\x2a\75\x5b\134\163\x5d\52" . $oqkwcmcmimkmkwgk . "\x2f", "\x2f\115\x4f\116\x54\110\x5c\50\x5b\134\x73\135\52{$aasascamegmwqmqk}\x2e\160\157\x73\164\137\x64\141\x74\145\x5b\x5c\x73\x5d\52\x5c\x29\133\134\163\135\52\x3d\x5b\x5c\163\x5d\x2a" . $mwemskcucwsyycwm . "\x2f", "\57\x48\117\125\122\x5c\x28\133\134\163\x5d\x2a{$aasascamegmwqmqk}\x2e\160\157\x73\164\x5f\144\x61\164\145\x5b\x5c\x73\135\52\134\51\133\x5c\x73\x5d\52\75\133\x5c\163\x5d\x2a" . $ygykagaqyuawwiyo . "\x2f", "\57\115\x49\116\x55\124\105\x5c\50\x5b\134\163\135\x2a{$aasascamegmwqmqk}\x2e\160\x6f\163\164\x5f\144\141\x74\x65\x5b\134\x73\135\52\134\x29\133\134\x73\x5d\52\75\133\x5c\x73\x5d\52" . $sckumcuqemuukces . "\x2f", "\x2f\x53\x45\x43\117\x4e\104\x5c\x28\133\x5c\163\x5d\52{$aasascamegmwqmqk}\56\x70\x6f\x73\164\137\144\141\x74\145\133\134\x73\x5d\52\134\x29\133\x5c\163\135\52\75\x5b\x5c\x73\x5d\x2a" . $gcegymooyemmaysk . "\57"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\x3d\61", $icsywsyukqcciiky); uqqaiagaeqgqgaiy: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto aegysmeecgcgayyw; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto esuiysskoweawsue; } $wp_locale->number_format["\x74\x68\x6f\x75\x73\141\x6e\144\x73\137\163\x65\x70"] = $geqcesmqwkeayoiu; esuiysskoweawsue: if (!$qawscmyuiuymkscy) { goto gaomwagkcciesyqy; } $wp_locale->number_format["\144\145\143\151\155\141\154\x5f\x70\157\x69\156\164"] = $qawscmyuiuymkscy; gaomwagkcciesyqy: aegysmeecgcgayyw: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($comment) { if ($comment instanceof WP_Comment) { goto suqkuqygkkgwyaie; } $ewgwqamkygiqaawc = $comment; goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $ewgwqamkygiqaawc = $comment->comment_content; soaccwqimeksgwiw: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto cgiscsqwwgqqaeqi; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto wiysogeqqwgioyka; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); wiysogeqqwgioyka: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto skkamseieeusycye; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); skkamseieeusycye: cgiscsqwwgqqaeqi: if ($comment instanceof WP_Comment) { goto syiqkaasoueowwui; } $comment = $ewgwqamkygiqaawc; goto giaacoqqqsekcayy; syiqkaasoueowwui: $comment->comment_content = $ewgwqamkygiqaawc; giaacoqqqsekcayy: return $comment; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\146\x61\137\x49\x52")) { goto ewymsmkkiksgwysk; } $locale = "\146\x61\x5f\x49\122"; ewymsmkkiksgwysk: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto cmegwsegsosyqcai; } $ocogsiouoiuuguym = $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); cmegwsegsosyqcai: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
