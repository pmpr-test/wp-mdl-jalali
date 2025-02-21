<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b82b6d2a9a1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Section; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const iccoismeakmsaqim = 'admin_font'; const gemimqyggmgkmiou = 'numbers_decimal_point'; const suaiyawsgsgawmeg = 'numbers_thousand_separator'; const mequmaoyiwsmgmsi = 'virastar_post_type_targets'; const ysocwwqksegocigy = 'front_convert'; const ocsesakqgmyyqwee = 'admin_convert'; const kwgeasqkeaegkwkc = '_dates'; const owkiokawuuoisycg = '_letters'; const mkeaeueeksumowmu = '_numbers'; const qguiuummyqgiskeu = self::ocsesakqgmyyqwee . self::kwgeasqkeaegkwkc; const scscsyscgqwkywqu = self::ocsesakqgmyyqwee . self::owkiokawuuoisycg; const mcqqouocaoykyuac = self::ocsesakqgmyyqwee . self::mkeaeueeksumowmu; const qqcaeookcsckyyoo = self::ysocwwqksegocigy . self::kwgeasqkeaegkwkc; const scigyoyiekusoame = self::ysocwwqksegocigy . self::owkiokawuuoisycg; const sogywwcgowgckqwe = self::ysocwwqksegocigy . self::mkeaeueeksumowmu; const ciewuaawaigiamqq = self::ysocwwqksegocigy . 'permalink_dates'; const kkwawiqomugaisao = 'convert_woocommerce_date'; const wumiekuwcmukyyik = 'convert_woocommerce_price'; const mkkgcuyqmyokoqcq = 'convert_woocommerce_number'; public function wyyuauosmqoeucmg() { $this->title = __('Jalali', PR__MDL__JALALI); $this->igiywquyccyiaucw(Constants::ysgwugcqguggmigq, __('Jalali Setting', PR__MDL__JALALI)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gucwmccyimoagwcm(__('General Configuration', PR__MDL__JALALI))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('numbers')->gswweykyogmsyawy(__('Numbers', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::gmwqguqsyyuasomc)->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::gemimqyggmgkmiou)->gswweykyogmsyawy(__('Decimal symbol', PR__MDL__JALALI))->mkmssscwmeekwgqo()->acauweqyyugwisqc(["." => sprintf("%s (.)", __('Point', PR__MDL__JALALI)), "/" => sprintf("%s (/)", __('Slash', PR__MDL__JALALI)), "'" => sprintf("%s (')", __('Single quote', PR__MDL__JALALI)), "," => sprintf("%s (,)", __('Comma', PR__MDL__JALALI))])->eumecwmqmukqgyea())->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::suaiyawsgsgawmeg)->gswweykyogmsyawy(__('Thousand separator symbol', PR__MDL__JALALI))->mkmssscwmeekwgqo()->acauweqyyugwisqc(["," => sprintf("%s (,)", __('Comma', PR__MDL__JALALI)), "." => sprintf("%s (.)", __('Point', PR__MDL__JALALI)), " " => sprintf("%s ( )", __('Space', PR__MDL__JALALI)), "'" => sprintf("%s (')", __('Single quote', PR__MDL__JALALI))])->eumecwmqmukqgyea())))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::eycwiessycciwsao)->gswweykyogmsyawy(__('Front Page', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::kukgkqakogugoyuw)->gucwmccyimoagwcm(__('Front Page Configuration', PR__MDL__JALALI))->kwkugmqouisgkqig($this->qiewqeycieiugymi(self::ysocwwqksegocigy)->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ciewuaawaigiamqq)->gswweykyogmsyawy(__('Permalink Dates', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Convert dates in permalink.', PR__MDL__JALALI)))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::zmmsyimwiiaweocw)->gswweykyogmsyawy(__('Administrator Panel', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::awsyqcqkaekeoyyu)->gucwmccyimoagwcm(__('Administrator Panel Configuration', PR__MDL__JALALI))->kwkugmqouisgkqig($this->qiewqeycieiugymi(self::ocsesakqgmyyqwee))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ycusscwsoggmuweq)->gswweykyogmsyawy(__('Advanced', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::mequmaoyiwsmgmsi)->oikgogcweiiaocka()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Virastar Target Post Types', PR__MDL__JALALI))->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->gucwmccyimoagwcm(__('Choice post types you want enable virastar.', PR__MDL__JALALI))))); $mgiqqesweuqmsymo = []; if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { $mgiqqesweuqmsymo[] = $this->ycgeeoiieoiakgam('woocommerce')->gswweykyogmsyawy(__('WooCommerce', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::wcwemqwsuckqusee)->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::wumiekuwcmukyyik)->gswweykyogmsyawy(__('Price', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Convert price of products in woocommerce.', PR__MDL__JALALI)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::mkkgcuyqmyokoqcq)->gswweykyogmsyawy(__('Number', PR__MDL__JALALI))); } $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('plugins_and_components')->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__('Plugins & Components', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Plugins & Components Configuration', PR__MDL__JALALI))->mgisqyswkkuceisu($mgiqqesweuqmsymo)); parent::ykwqaukkycogooii(); } public function qiewqeycieiugymi($oceoauekaygmuoko) : Section { return $this->ycgeeoiieoiakgam($oceoauekaygmuoko . Constants::iusoecsswgekecks)->gswweykyogmsyawy(__('General', PR__MDL__JALALI))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->wcwmusaouiqaqeww($oceoauekaygmuoko . self::kwgeasqkeaegkwkc)->gswweykyogmsyawy(__('Date & Time', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Convert dates in this segment', PR__MDL__JALALI)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww($oceoauekaygmuoko . self::owkiokawuuoisycg)->gswweykyogmsyawy(__('Letters', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Change arabic letters to farsi', PR__MDL__JALALI)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww($oceoauekaygmuoko . self::mkeaeueeksumowmu)->gswweykyogmsyawy(__('Numbers', PR__MDL__JALALI))->gucwmccyimoagwcm(__('Convert numbers in this segment', PR__MDL__JALALI))); } public function moeogyisgeuwoeea() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->giiuwsmyumqwwiyq(Setting::mequmaoyiwsmgmsi, [])); } }
