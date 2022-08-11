<?php

namespace PavloDotDev\HomoglyphAttackGenerator;

class Generator
{
    protected static array $homos = [
        ' ' => ' ᅟᅠ         　ㅤ',
        '!' => '!ǃ！',
        '"' => '"״″＂',
        '$' => '$＄',
        '%' => '%％',
        '&' => '&＆',
        "'" => "'＇",
        '(' => '(﹝（',
        ')' => ')﹞）',
        '*' => '*⁎＊',
        '+' => '+＋',
        ',' => ',‚，',
        '-' => '-‐𐆑－',
        '.' => '.٠۔܁܂․‧。．｡',
        '/' => '/̸⁄∕╱⫻⫽／ﾉ',
        '0' => "0OoΟοОоՕ𐒆Ｏｏ",
        '1' => '1Iا１',
        '2' => '2２',
        '3' => '3３',
        '4' => '4４',
        '5' => '5５',
        '6' => '6６',
        '7' => '7𐒇７',
        '8' => '8Ց８',
        '9' => '9９',
        ' =>' => ' =>։܃܄∶꞉：',
        ';' => ';;；',
        '<' => '<‹＜',
        '=' => '=𐆐＝',
        '>' => '>›＞',
        '?' => '?？',
        '@' => '@＠',
        '[' => '[［',
        '\\' => '\\＼',
        ']' => ']］',
        '^' => '^＾',
        '_' => '_＿',
        '`' => '`｀',
        'a' => 'AaÀÁÂÃÄÅàáâãäåɑΑαаᎪＡａ',
        'b' => 'BbßʙΒβВЬᏴᛒＢｂ',
        'c' => 'CcϲϹСсᏟⅭⅽ𐒨Ｃｃ',
        'd' => 'DdĎďĐđԁժᎠḍⅮⅾＤｄ',
        'e' => 'EeÈÉÊËéêëĒēĔĕĖėĘĚěΕЕеᎬＥｅ',
        'f' => 'FfϜＦｆ',
        'g' => 'GgɡɢԌնᏀＧｇ',
        'h' => 'HhʜΗНһᎻＨｈ',
        'i' => 'IilɩΙІіاᎥᛁⅠⅰ𐒃Ｉｉ',
        'j' => 'JjϳЈјյᎫＪｊ',
        'k' => 'KkΚκКᏦᛕKＫｋ',
        'l' => 'LlʟιاᏞⅬⅼＬｌ',
        'm' => 'MmΜϺМᎷᛖⅯⅿＭｍ',
        'n' => 'NnɴΝＮｎ',
        'o' => 'Oo0ΟοОоՕ𐒆Ｏｏ',
        'p' => 'PpΡρРрᏢＰｐ',
        'q' => 'QqႭႳＱｑ',
        'r' => 'RrʀԻᏒᚱＲｒ',
        's' => 'SsЅѕՏႽᏚ𐒖Ｓｓ',
        't' => 'TtΤτТᎢＴｔ',
        'u' => 'UuμυԱՍ⋃Ｕｕ',
        'v' => 'VvνѴѵᏙⅤⅴＶｖ',
        'w' => 'WwѡᎳＷｗ',
        'x' => 'XxΧχХхⅩⅹＸｘ',
        'y' => 'YyʏΥγуҮＹｙ',
        'z' => 'ZzΖᏃＺｚ',
        '{' => '{｛',
        '|' => '|ǀا｜',
        '}' => '}｝',
        '~' => '~⁓～',
        'ß' => 'ßӧ',
        'ä' => 'ÄӒ',
        'ö' => 'ÖӦ',
    ];
    protected static array $glyphs = [
        '0' => ['o'],
        '1' => ['l', 'i'],
        '2' => ['ƻ'],
        '3' => ['8'],
        '5' => ['ƽ'],
        '6' => ['9'],
        '8' => ['3'],
        '9' => ['6'],
        'a' => ['à', 'á', 'à', 'â', 'ã', 'ä', 'å', 'ɑ', 'ạ', 'ǎ', 'ă', 'ȧ', 'ą', 'ə'],
        'b' => ['d', 'lb', 'ʙ', 'ɓ', 'ḃ', 'ḅ', 'ḇ', 'ƅ'],
        'c' => ['e', 'ƈ', 'ċ', 'ć', 'ç', 'č', 'ĉ', 'ᴄ'],
        'd' => ['b', 'cl', 'dl', 'ɗ', 'đ', 'ď', 'ɖ', 'ḑ', 'ḋ', 'ḍ', 'ḏ', 'ḓ'],
        'e' => ['c', 'é', 'è', 'ê', 'ë', 'ē', 'ĕ', 'ě', 'ė', 'ẹ', 'ę', 'ȩ', 'ɇ', 'ḛ'],
        'f' => ['ƒ', 'ḟ'],
        'g' => ['q', 'ɢ', 'ɡ', 'ġ', 'ğ', 'ǵ', 'ģ', 'ĝ', 'ǧ', 'ǥ'],
        'h' => ['lh', 'ĥ', 'ȟ', 'ħ', 'ɦ', 'ḧ', 'ḩ', 'ⱨ', 'ḣ', 'ḥ', 'ḫ', 'ẖ'],
        'i' => ['1', 'l', 'í', 'ì', 'ï', 'ı', 'ɩ', 'ǐ', 'ĭ', 'ỉ', 'ị', 'ɨ', 'ȋ', 'ī', 'ɪ'],
        'j' => ['ʝ', 'ǰ', 'ɉ', 'ĵ'],
        'k' => ['lk', 'ik', 'lc', 'ḳ', 'ḵ', 'ⱪ', 'ķ', 'ᴋ'],
        'l' => ['1', 'i', 'ɫ', 'ł'],
        'm' => ['n', 'nn', 'rn', 'rr', 'ṁ', 'ṃ', 'ᴍ', 'ɱ', 'ḿ'],
        'n' => ['m', 'r', 'ń', 'ṅ', 'ṇ', 'ṉ', 'ñ', 'ņ', 'ǹ', 'ň', 'ꞑ'],
        'o' => ['0', 'ȯ', 'ọ', 'ỏ', 'ơ', 'ó', 'ö', 'ᴏ'],
        'p' => ['ƿ', 'ƥ', 'ṕ', 'ṗ'],
        'q' => ['g', 'ʠ'],
        'r' => ['ʀ', 'ɼ', 'ɽ', 'ŕ', 'ŗ', 'ř', 'ɍ', 'ɾ', 'ȓ', 'ȑ', 'ṙ', 'ṛ', 'ṟ'],
        's' => ['ʂ', 'ś', 'ṣ', 'ṡ', 'ș', 'ŝ', 'š', 'ꜱ'],
        't' => ['ţ', 'ŧ', 'ṫ', 'ṭ', 'ț', 'ƫ'],
        'u' => ['ᴜ', 'ǔ', 'ŭ', 'ü', 'ʉ', 'ù', 'ú', 'û', 'ũ', 'ū', 'ų', 'ư', 'ů', 'ű', 'ȕ', 'ȗ', 'ụ'],
        'v' => ['ṿ', 'ⱱ', 'ᶌ', 'ṽ', 'ⱴ', 'ᴠ'],
        'w' => ['vv', 'ŵ', 'ẁ', 'ẃ', 'ẅ', 'ⱳ', 'ẇ', 'ẉ', 'ẘ', 'ᴡ'],
        'x' => ['ẋ', 'ẍ'],
        'y' => ['ʏ', 'ý', 'ÿ', 'ŷ', 'ƴ', 'ȳ', 'ɏ', 'ỿ', 'ẏ', 'ỵ'],
        'z' => ['ʐ', 'ż', 'ź', 'ᴢ', 'ƶ', 'ẓ', 'ẕ', 'ⱬ']
    ];

    protected array $textHomosLettersStrings = [];
    protected array $items = [];

    /**
     * Get generated items, key - ASCII, value - UTF-8.
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param string $text
     * @return Letter[]
     */
    protected function initTextLetters(string $text): array
    {
        $text = mb_strtolower($text);

        $textLetters = [];
        foreach (mb_str_split($text) as $letter) {
            $textLetters[] = new Letter($letter);
        }

        return $textLetters;
    }

    /**
     * @param Letter[] $textLetters
     * @return array
     */
    protected function initHomosLetters(array $textLetters): array
    {
        $textHomosLetters = [];

        foreach ($textLetters as $textLetter) {
            $letter = $textLetter->getLetter();

            if ($this->hasHomos($letter)) {
                $textHomosLetters[$letter] = [mb_strtoupper($letter)];

                foreach ($this->getHomosArray($letter) as $homoLetter) {
                    $textHomosLetters[$letter][] = $homoLetter;
                }
            }
        }

        foreach ($textHomosLetters as $letter => $letters) {
            $textHomosLetters[$letter] = array_values(array_unique($letters));
            $textHomosLetters[$letter] = array_filter($textHomosLetters[$letter], function ($item) {
                return idn_to_ascii($item) !== false;
            });
            foreach ($textHomosLetters[$letter] as $key => $value) {
                $textHomosLetters[$letter][$key] = new Letter($value);
            }
        }

        return $textHomosLetters;
    }

    /**
     * Generate
     * @param string $text query
     * @param bool $many need many or litte recordss
     * @return void
     */
    public function generate(string $text, bool $many = false): void
    {
        $textLetters = $this->initTextLetters($text);
        $textHomosLetters = $this->initHomosLetters($textLetters);

        $textLettersStrings = array_map(function (Letter $item) {
            return $item->getLetter();
        }, $textLetters);

        $this->textHomosLettersStrings = [];
        foreach ($textHomosLetters as $key => $letters) {
            $this->textHomosLettersStrings[$key] = array_map(function (Letter $item) {
                return $item->getLetter();
            }, $letters);
        }

        if( $many ) {
            $this->items = $this->generateItemsMyLogic($textLettersStrings);
        }
        else {
            $this->items = $this->generateItemsDnstwistLogic($textLettersStrings);
        }
    }

    /**
     * @param string[] $textLetters оригинальный массив букв
     * @param int $index
     * @return array
     */
    protected function generateItemsMyLogic(array $textLetters, int $index = 0): array
    {
        $items = [];

        $textLetter = $textLetters[$index];

        foreach ($this->textHomosLettersStrings[$textLetter] as $letter) {
            if ($letter === $textLetter) {
                continue;
            }
            $textLetters[$index] = $letter;

            $word = implode('', $textLetters);
            $idnToAscii = idn_to_ascii($word);
            if ($idnToAscii === false) {
                continue;
            }

            $items[$idnToAscii] = $word;

            if (isset($textLetters[$index + 1])) {
                $items = array_merge($items, $this->generateItemsMyLogic($textLetters, $index + 1));
            }
        }

        return $items;
    }

    protected function generateItemsDnstwistLogic(array $textLetters): array
    {
        $items = [];

        $query = implode('', $textLetters);
        $queryLength = mb_strlen($query);

        for ($w = 1; $w < $queryLength; $w++) {
            for ($i = 0; $i < $queryLength - $w + 1; $i++) {
                $pre = mb_substr($query, 0, $i);
                $win = mb_substr($query, $i, $i + $w);
                $suf = mb_substr($query, $i + $w);

                foreach (mb_str_split($win) as $c) {
                    foreach (self::$glyphs[$c] ?? [] as $g) {
                        $utf8 = $pre . $this->mbStrReplace($c, $g, $win) . $suf;
                        $ascii = idn_to_ascii($utf8);
                        if ($ascii) {
                            $items[$ascii] = $utf8;
                        }
                    }
                }
            }
        }

        return $items;
    }

    protected function mbStrReplace($search, $replace, $string)
    {
        $charset = mb_detect_encoding($string);

        $unicodeString = iconv($charset, "UTF-8", $string);

        return str_replace($search, $replace, $unicodeString);
    }

    protected function hasHomos(string $letter): bool
    {
        return isset(self::$homos[$letter]);
    }

    protected function getHomosArray(string $letter): array
    {
        return isset(self::$homos[$letter]) ? mb_str_split(self::$homos[$letter]) : [];
    }
}
