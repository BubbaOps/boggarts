<?php

return [
    /**
     * Set/Get character encoding for our multibyte regex.
     */
    'encoding' => 'utf8',
    'bogies' => [
        'non_breaking_spaces' => [
            [
                'codepoint' => 0x82,
                'description' => 'High code comma',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x84,
                'description' => 'High code double comma',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x85,
                'description' => 'Triple dot',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x88,
                'description' => 'High carat',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x91,
                'description' => 'Forward single quote',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x92,
                'description' => 'Reverse single quote',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x93,
                'description' => 'Forward double quote',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x94,
                'description' => 'Reverse double quote',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x95,
                'description' => '<control> Message Waiting',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x96,
                'description' => 'High hyphen',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x97,
                'description' => 'Double hyphen',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x99,
                'description' => '<control>',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0xA0,
                'description' => 'No_break space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0xA6,
                'description' => 'Split vertical bar',
                'test_string' => '[¦] contains the test data.',
            ], [
                'codepoint' => 0xAB,
                'description' => 'Double less than',
                'test_string' => '[«] contains the test data.',
            ], [
                'codepoint' => 0xBB,
                'description' => 'Double greater than',
                'test_string' => '[»] contains the test data.',
            ], [
                'codepoint' => 0xBC,
                'description' => 'one quarter',
                'test_string' => '[¼] contains the test data.',
            ], [
                'codepoint' => 0xBD,
                'description' => 'one half',
                'test_string' => '[½] contains the test data.',
            ], [
                'codepoint' => 0xBE,
                'description' => 'three quarters',
                'test_string' => '[¾] contains the test data.',
            ], [
                'codepoint' => 0xBF,
                'description' => 'c_single quote',
                'test_string' => '[¿] contains the test data.',
            ], [
                'codepoint' => 0xA8,
                'description' => 'modifier _ under curve',
                'test_string' => '[¨] contains the test data.',
            ], [
                'codepoint' => 0xB1,
                'description' => 'modifier _ under line',
                'test_string' => '[±] contains the test data.',
            ],
        ],
        'breaking_spaces' => [
            [
                'codepoint' => 0x1680,
                'description' => 'ogham space mark',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x180E,
                'description' => 'mongolian vowel separator',
                'test_string' => '[᠎] contains the test data.',
            ], [
                'codepoint' => 0x2000,
                'description' => 'en quad',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2001,
                'description' => 'em quad',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2002,
                'description' => 'en space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2003,
                'description' => 'em space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2004,
                'description' => 'three_per_em space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2005,
                'description' => 'four_per_em space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2006,
                'description' => 'six_per_em space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2007,
                'description' => 'figure space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2008,
                'description' => 'punctuation space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x2009,
                'description' => 'thin space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x200A,
                'description' => 'hair space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x200B,
                'description' => 'zero width space',
                'test_string' => '[​] contains the test data.',
            ], [
                'codepoint' => 0x200D,
                'description' => 'zero width joiner',
                'test_string' => '[‍] contains the test data.',
            ], [
                'codepoint' => 0x2013,
                'description' => 'en dash',
                'test_string' => '[–] contains the test data.',
            ], [
                'codepoint' => 0x2014,
                'description' => 'em dash',
                'test_string' => '[—] contains the test data.',
            ], [
                'codepoint' => 0x2028,
                'description' => 'line separator space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x202F,
                'description' => 'narrow no_break space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x205F,
                'description' => 'medium mathematical space',
                'test_string' => '[ ] contains the test data.',
            ], [
                'codepoint' => 0x3000,
                'description' => 'ideographic space',
                'test_string' => '[　] contains the test data.',
            ], [
                'codepoint' => 0xFEFF,
                'description' => 'zero width no_break space',
                'test_string' => '[﻿] contains the test data.',
            ], [
                'codepoint' => 0xFFFC,
                'description' => 'object replacement character',
                'test_string' => '[￼] contains the test data.',
            ],
        ],
        'control_characters' => [
            [
                'codepoint' => 0x0,
                'description' => 'NUL',
                'test_string' => '['.mb_chr(0x0).'] contains the test data.',
            ], [
                'codepoint' => 0x1,
                'description' => 'SOH',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x2,
                'description' => 'STX',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x3,
                'description' => 'ETX',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x4,
                'description' => 'EOT',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x5,
                'description' => 'ENQ',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x6,
                'description' => 'ACK',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x7,
                'description' => 'BEL',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x8,
                'description' => 'BS',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0xB,
                'description' => 'VT',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0xC,
                'description' => 'FF',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0xE,
                'description' => 'SO',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0xF,
                'description' => 'SI',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x10,
                'description' => 'DLE',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x11,
                'description' => 'DC1',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x12,
                'description' => 'DC2',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x13,
                'description' => 'DC3',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x14,
                'description' => 'DC4',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x15,
                'description' => 'NAK',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x16,
                'description' => 'SYN',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x17,
                'description' => 'ETB',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x18,
                'description' => 'CAN',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x19,
                'description' => 'EM',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1A,
                'description' => 'SUB',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1B,
                'description' => 'ESC',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1C,
                'description' => 'FS',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1D,
                'description' => 'GS',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1E,
                'description' => 'RS',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x1F,
                'description' => 'US',
                'test_string' => '[] contains the test data.',
            ], [
                'codepoint' => 0x7F,
                'description' => 'DEL',
                'test_string' => '[] contains the test data.',
            ],
        ],
        /** Dangerous characters per Trojan Sources
         *
         *   https://access.redhat.com/security/vulnerabilities/RHSB_2021_007
         *   https://trojansource.codes/
         *   https://www.lightbluetouchpaper.org/2021/11/01/trojan_source_invisible_vulnerabilities/
         *   https://www.unicode.org/reports/tr36/#Canonical_Represenation
         *   https://www.unicode.org/reports/tr36/#Bidirectional_Text_Spoofing
         *   https://www.unicode.org/reports/tr39/
         **/
        'dangerous' => [
            [
                'codepoint' => 0x61C,
                'description' => 'Arabic Letter Mark',
                'test_string' => '[؜] contains the test data.',
            ], [
                'codepoint' => 0x200E,
                'description' => 'Left_to_Right Mark',
                'test_string' => '[‎] contains the test data.',
            ], [
                'codepoint' => 0x200F,
                'description' => 'Right_to_Left Mark',
                'test_string' => '[‏] contains the test data.',
            ], [
                'codepoint' => 0x202A,
                'description' => 'Left_to_Right Embedding',
                'test_string' => '[‪] contains the test data.',
            ], [
                'codepoint' => 0x202B,
                'description' => 'Right_to_Left Embedding',
                'test_string' => '[‫] contains the test data.',
            ], [
                'codepoint' => 0x202C,
                'description' => 'Pop Directional Formatting',
                'test_string' => '[‬] contains the test data.',
            ], [
                'codepoint' => 0x202D,
                'description' => 'Left_to_Right Override',
                'test_string' => '[‭] contains the test data.',
            ], [
                'codepoint' => 0x202E,
                'description' => 'Right_to_Left Override',
                'test_string' => '[‮] contains the test data.',
            ], [
                'codepoint' => 0x2066,
                'description' => 'Left_to_Right Isolate',
                'test_string' => '[⁦] contains the test data.',
            ], [
                'codepoint' => 0x2067,
                'description' => 'Right_to_Left Isolate',
                'test_string' => '[⁧] contains the test data.',
            ], [
                'codepoint' => 0x2068,
                'description' => 'First Strong Isolate',
                'test_string' => '[⁨] contains the test data.',
            ], [
                'codepoint' => 0x2069,
                'description' => 'Pop Directional Isolate',
                'test_string' => '[⁩] contains the test data.',
            ], [
                'codepoint' => 0x200B,
                'description' => 'Zero Width Space',
                'test_string' => '[​] contains the test data.',
            ],
        ],
        'others' => [
            [
                'codepoint' => 0x37E,
                'description' => 'Greek Question Mark',
                'test_string' => '[;] contains the test data.',
            ], [
                'codepoint' => 0xB8,
                'description' => 'Cedilla',
                'test_string' => '[¸] contains the test data.',
            ], [
                'codepoint' => 0x1C0,
                'description' => 'Latin Letter Dental Click',
                'test_string' => '[ǀ] contains the test data.',
            ], [
                'codepoint' => 0x2223,
                'description' => 'Divides',
                'test_string' => '[∣] contains the test data.',
            ], [
                'codepoint' => 0xAD,
                'description' => 'Soft Hyphen',
                'test_string' => '[­] contains the test data.',
            ],
        ],
    ],
];
