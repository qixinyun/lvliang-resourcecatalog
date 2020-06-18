<?php
namespace ResourceCatalog\Model;

interface IUserGroup extends IUserGroupIdentify
{
    const ID = array(
        'NULL' => 0,
        'SFGW' => 1,
        'SJWJW' => 2,
        'SWZZB' => 3,
        'SWXCB' => 4,
        'SWZFW' => 5,
        'SWWXB' => 6,
        'SWBB' => 7,
        'SZJRMFY' => 8,
        'SJCY' => 9,
        'SJYJ' => 10,
        'SKJJ' => 11,
        'SGXJ' => 12,
        'SGAJ' => 13,
        'SMZJ' => 14,
        'SSFJ' => 15,
        'SCZJ' => 16,
        'SRSJ' => 17,
        'SGHHZRZRJ' => 18,
        'SHJSTJ' => 19,
        'SZJJ' => 20,
        'SCSGLJ' => 21,
        'SJTYSJ' => 22,
        'SSLJ' => 23,
        'RHLLZH' => 24,
        'SNYNCJ' => 25,
        'SSANGWJ' => 26,
        'SWLJ' => 27,
        'SWJW' => 28,
        'STYJRSWJ' => 29,
        'SSJJ' => 30,
        'SSCJDGLJ' => 31,
        'STYJ' => 32,
        'STJJ' => 33,
        'SYLBZJ' => 34,
        'SXZSPJ' => 35,
        'SJRB' => 36,
        'SYBJFJ' => 37,
        'SNYJ' => 38,
        'SRFB' => 39,
        'SDSJYYJ' => 40,
        'SSWJ' => 41,
        'SFPB' => 42,
        'SJJZD' => 43,
        'SYJJ' => 44,
        'SGGZYJYZX' => 45,
        'SFGJ' => 46,
        'SGJJZX' => 47,
        'SYZJ' => 48,
        'SYCZMJ' => 49,
        'SQXJ' => 50,
        'LLGLFJ' => 51,
        'SCL' => 52,
        'SZGH' => 53,
        'SFL' => 54,
        'SJMYJY' => 55,
        'SXFZD' => 56,
        
        'LLSJSWMJSZDWYHBGS' => 57,
        'LLSZFFZB' => 58,
        'LLSGSGLXZJ' => 59,
        'LLSHJBHJ' => 60,
        'LLSZLJSJDJ' => 61,
        'LLSSPYPJDGLJ' => 62,
        'LLSJJHXXHWYH' => 63,
        'LLSNCGZWYH' => 64,
        'LLSWHGLJ' => 65,
        'LLSWSHJHSYWYH' => 66,
        'LLSGTZYJ' => 67,
        'LLSMTGYJ' => 68,
        'LLSAQSCJDGLJ' => 69,
        'LLSMZZJSWGLJ' => 70,
        'LLSLSHWZCBJ' => 71,
        'LLSDAJ' => 72,
        'LLSDZJ' => 73,
        'LLSGLGLJ' => 74,
        'LLSYYGLJ' => 75,
        'LLSYHYJDGLWYHFJ' => 76,
        'LLSWXDGLJ' => 77,
        'LLSCXGHJ' => 78,
        'LLSLYFZWYH' => 79,
        'LLSZWDTGLZX' => 80,
        'LLSRMZFBGS' => 81,
        'LLSJRFWSWZX' => 82,
        'LLSWHLYJ' => 83,
        'GQTLLSW' => 84,
        'ZGLLSWWLAQHXXHWYHBGS' => 85,
        'LLSXFJYZD' => 86,
        'LSQFZHGGWYH' => 87,
        'FSXFZHGGJ' => 88,
        'JCXFZHGGJ' => 89,
        'JKXFZHGGJ' => 90,
        'LXFZHGGJ' => 91,
        'LLXFZHGGJ' => 92,
        'SLXFZHGGJ' => 93,
        'WSXFZHGGJ' => 94,
        'XYSFZHGGJ' => 95,
        'XXFZHGGJ' => 96,
        'ZYXFZHGGJ' => 97,
        'FYSFZHGGJ' => 98,
        'LXFZHGGJ' => 99,

        'ZGLLXWZZB' => 201,
        'ZGLLXWXCB' => 202,
        'LLXZFW' => 203,
        'ZGLLXWJGBZWYHBGS' => 204,
        'LLXTJJ' => 205,
        'LLXRMFY' => 206,
        'LLXRMJCY' => 207,
        'ZGGCZYQNTLLXWYH' => 208,
        'LLXXZSPFWGLJSNSWG' => 209,
        'ZGRMYHLLXZH' => 210,
        'LLXJYKJJ' => 211,
        'LLXGYHXXHJ' => 212,
        'LLXGAJ' => 213,
        'LLXMZJ' => 214,
        'LLXSFJ' => 215,
        'LLXCZJ' => 216,
        'LLXRLZYHSHBZJ' => 217,
        'LLXZRZYJ' => 218,
        'LLSSTHJJLLFJ' => 219,
        'LLXSCJDGLJ' => 220,
        'GJSWZJLLXSWJ' => 221,
        'LLXJTYSJ' => 222,
        'LLXZFHCXJSGLJ' => 223,
        'LLXNYNCJ' => 224,
        'LLXWHHLYJ' => 225,
        'LLXWSJKHTYJ' => 226,
        'LLXYJGLJ' => 227,
        'LLXYLBZJ' => 228,
        'LLXNYJ' => 229,
        'LLXFPKFBGS' => 230,
        'LLYBJFJLLJGZ' => 231,
        'LLXXZSPFWGLJ' => 232,
        'LLXXZSPFWGLJRSHCWG' => 233,
        'LLXXZSPFWGLJZWGGHZCFGG' => 234,
        'LLXXZSPFWGLJZWXXGLG' => 235,
        'LLXXZSPFWGLJSPYXJGG' => 236,
        'LLXXZSPFWGLJTZXMG' => 237,
        'LLXXZSPFWGLJGHJSG' => 238,
        'SSDJG' => 239,
        'LLXXZSPFWGLJCGJTG' => 240,
        'LLXXZSPFWGLJXCKYG' => 241,
        'LLXXZSPFWGLJSHSWG' => 242,

        'SXSLXQXJ' => 301,
        'LLSSTHJJLXFJ' => 302,
        'GJSWZJLXSWJ' => 303,
        'LXMZJ' => 304,
        'LXNCNYJ' => 305,
        'LXRLZYHSHBZJ' => 306,
        'LXSJJ' => 307,
        'LXCMSYGLFWZX' => 308,
        'LXXZSPFWGLJ' => 309,
        'LXSFJ' => 310,
        'LXZRZYJ' => 311,
        'LXGYHXXHJ' => 312,
        'LXSCJDGLJ' => 313,
        'LXZFHCXJSGLJ' => 314,
        'LXWHHLYJ' => 315,
        'LXYJGLJ' => 316,
        'LXWSJKHTYJ' => 317,
        'LXLYJ' => 318,
        'LXNJFWZX' => 319,
        'LXJJDD' => 320,
        'LXXFJYDD' => 321,
        'LXFZHFGJ' => 322,

        'ZGJKXWZZB' => 401,
        'ZGJKXWXZCB' => 402,
        'ZGGCDJKXWZFWYH' => 403,
        'JKXWJGBZWYHBGS' => 404,
        'JKXRMFY' => 405,
        'JKXRMJCY' => 406,
        'GQTJKXW' => 407,
        'ZGRMYHJKXZH' => 408,
        'JKXJYKJJ' => 409,
        'JKXGYHXXHJ' => 410,
        'JKXGAJ' => 411,
        'JKXMZJ' => 412,
        'JKXSFJ' => 413,
        'JKXCZJ' => 414,
        'JKXRLZYHSHBZJ' => 415,
        'JKXZRZYJ' => 416,
        'LLSSTHJJJKFJ' => 417,
        'JKXZFHCXJSGLJ' => 418,
        'JKXJTYSJ' => 419,
        'JKXNYNCJ' => 420,
        'JKXWHSCZHXZZFD' => 421,
        'JKXWSJKHTYJ' => 422,
        'YJGLJ' => 423,
        'JKXSCJDGLJ' => 424,
        'JKXTJJ' => 425,
        'JKXYLBZJ' => 426,
        'JKXXZSPFWGLJZWXXZX' => 427,
        'JKXXZSPFWGLJGCXMG' => 428,
        'JKXXZSPFWGLJSNHJTSWG' => 429,
        'JKXXZSPFWGLJGDZCTZG' => 430,
        'JKXXZSPFWGLJDJZCHSCGLG' => 431,
        'JKXXZSPFWGLJMSHSHSWG' => 432,
        'JKXJRB' => 433,
        'JKXFPKFBGS' => 434,
        'GJSWZJJKXSWJ' => 435,
        'LLYBJFJJKJGZ' => 436,
        'JKXDZJ' => 437,
        'JKXGAJJTJCDD' => 438,
        'JKXLYJ' => 439,
        'JKXQXJ' => 440,
        'JKXXFJYDD' => 441,
        'JKXSLJ' => 442,
        'JKXSJJ' => 443,
        'XWTZB' => 444,
        'JKXYCZMJ' => 445,
        'STZRMZF' => 446,
        'THPZRMZF' => 447,
        'SCZRMZF' => 448,
        'KCZRMZF' => 449,
        'HLXRMZF' => 450,
        'WQXRMZF' => 451,
        'SKXRMZF' => 452,

        'JCXWZZB' => 501,
        'JCXWMB' => 502,
        'JCXWXB' => 503,
        'ZGJCXWJGBZWYK,HBGS' => 504,
        'JCXRMFY' => 505,
        'JCXRMJCY' => 506,
        'ZGGCDJCXWYK,HZFWYK,H' => 507,
        'JCXJYKJJ' => 508,
        'JCXGYHXXHJ' => 509,
        'JCXGAJ' => 510,
        'JCXMZJ' => 511,
        'JCXSFJ' => 512,
        'JCXCZJ' => 513,
        'JCXRLZYHSK,HBZJ' => 514,
        'JCXZRZYJ' => 515,
        'LLSSTHJJJCFJ' => 516,
        'JCXZFHCXJSGLJ' => 517,
        'JCXJTYSJ' => 518,
        'JCXSLJ' => 519,
        'ZGRMYX,HJCXZX,H' => 520,
        'JCXNYNCJ' => 521,
        'JCXWHLYJ' => 522,
        'JCXWSJKHTYJ' => 523,
        'JCXTYJRSWS' => 524,
        'JCXSJJ' => 525,
        'JCXSCJDGLJ' => 526,
        'JCXYLBZJ' => 527,
        'JCXXZSPFWGLJZWXXGLGGZ' => 528,
        'JCXXZSPFWGLJSCZRGGZ' => 529,
        'JCXXZSPFWGLJCGSLGGZ' => 530,
        'JCXXZSPFWGLJSKSWGGZ' => 531,
        'JCXXZSPFWGLJTZXMGGZ' => 532,
        'JCXXZSPFWGLJCJJTGGZ' => 533,
        'JCXXZSPFWGLJSNSWGGZ' => 534,
        'JCXXZSPFWGLJGHJSGGZ' => 535,
        'JCXJRSWFWZX' => 536,
        'ZGYHBXJDGLWYHLLJGFJJCJGZ' => 537,
        'JCXNYJ' => 538,
        'SXSJCXRMWZB' => 539,
        'GJSWZJJCXSWJ' => 540,
        'JCXFPKFBGS' => 541,
        'JCXGAJJJDD' => 542,
        'JCXXFJYDD' => 543,
        'JCXFDCFWZX' => 544,
        'JCXYCZMJ' => 545,
        'SXSJCXQXJ' => 546,
        'JCXGLD' => 547,
        'JCXCJRLHH' => 548,
        'JCXZGH' => 549,
        'JCXLSHWZFWZX' => 550,
        'JCXTJJ' => 551,
        'JCXFZJZZX' => 552,
        'JCXMZZJSWS' => 553,
        'JCXNYJXFZZX' => 554,
        'JCXNCJJFWZX' => 555,
        'JCXYJGLJ' => 556,
        'FYSCZJ' => 601,
        'LLSSTHJJFYFJ' => 602,
        'FYSTJJ' => 603,
        'FYSSWJ' => 604,
        'FYSNYNCJ' => 605,
        'FYSLYJ' => 606,
        'FYSSCJDGLJ' => 607,
        'FYSMZJ' => 608,
        'FYSMZZJSWJ' => 609,
        'FYSJTYSJ' => 610,
        'FYSZRZYJ' => 611,
        'FYSWSJKHTYJ' => 612,
        'FYSGYHXXHJ' => 613,
        'FYSSJJ' => 614,
        'FYSYJGLJ' => 615,
        'FYSRLZYHSHBZJ' => 616,
        'FYSZFHCXJSGLJ' => 617,
        'FYSCSGLZHXZZFD' => 618,
        'FYSJYKJJ' => 619,
        'FYSSFJ' => 620,
        'FYSGAJ' => 621,
        'FYSNJFWZX' => 622,
        'FYSNJFWZX' => 623,
        'FYSGYSYJ' => 624,
        'FYSWHHLYJ' => 625,
        'FYSNYJ' => 626,
        'FYSDAG' => 627,
        'ZGFYSWJGBZWYHBGS' => 628,
        'FYSJJD' => 629,
        'FYSSWJ' => 630,
        'SXSFYGLGLD' => 631,
        'ZGRMYHFYSZH' => 632,
        'FYXHCJJJSKFQ' => 633,
        'FYSXZSPFWGLJGHJSGFZR' => 634,
        'FYSXZSPFWGLJTZXMGFZR' => 635,
        'FYSXZSPFWGLJSNSWGFZRZR' => 636,
        'FYSXZSPFWGLJDJZCGEGFZR' => 637,
        'FYSXZSPFWGLJSKSWGFZR' => 638,
        'FYSXZSPFWGLJJTSWGFZR' => 639,

        'ZGFSXWXCB' => 701,
        'FSXWZZB' => 702,
        'ZGGCDFSXWYHZFWYH' => 703,
        'FSXNYJ' => 704,
        'FSXSCJDGLJ' => 705,
        'ZGRMYHFSXZH' => 706,
        'ZGFSXWJGBZWYHBGS' => 707,
        'FSXGYHXXHJ' => 708,
        'FSXZRZYJ' => 709,
        'FSXMZJ' => 710,
        'FSXLYJ' => 711,
        'FSXTJJ' => 712,
        'GJSWZJFSXSWJ' => 713,
        'FSXYLBZJ' => 714,
        'FSXWSJKHTYJ' => 715,
        'FSXJYKJJ' => 716,
        'FSXXZSPFWGLJNLSWG' => 717,
        'FSXSFJ' => 718,
        'FSXZFHCXJSGLJ' => 719,
        'FSXSLJ' => 720,
        'FSXYJGLJ' => 721,
        'FSXJTYSJ' => 722,
        'FSXRLZYHSK,HBZJ' => 723,
        'FSXNYNCJ' => 724,
        'FSXCZJ' => 725,
        'FSXWHHLYJ' => 726,
        'FSXRMFY' => 727,
        'FSXGAJ' => 728,
        'LLSSTHJJFSFJ' => 729,
        'FSXXZSPFWGLJXZSPHZWXXGLG' => 730,
        'FSXXZSPFWGLJTZXMG' => 731,
        'FSXXZSPFWGLJGCGHG' => 732,
        'FSXXZSPFWGLJZCDJG' => 733,
        'FSXXZSPFWGLJSCZRG' => 734,
        'FSXXZSPFWGLJJTSWG' => 735,
        'FSXXZSPFWGLJSKSWG' => 736,
        'FSXXZSPFWGLJGCJSG' => 737,

        'LXCSGLZHZFJ' => 801,
        'LXXZSPFWGLJXZSPFWGLJ' => 802,
        'LXXZSPFWGLJZWGGHYXJGG' => 803,
        'LXXZSPFWGLJZHBGS' => 804,
        'LXXZSPFWGLJGHGLHTZXMG' => 805,
        'LXXZSPFWGLJSCGLHDJZCG' => 806,
        'LXXZSPFWGLJSTHJHJTYSG' => 807,
        'LXXZSPFWGLJSNSWHSKSWG' => 808,
        'LXXZSPFWGLJZZRDHLHKYG' => 809,
        'LXJJJSKFQGLWYH' => 810,
        'ZGGCDLXWYHZFWYH' => 811,
        'LXWSJKHTYJ' => 812,
        'LXNYNCJ' => 813,
        'LXSCJDGLJ' => 814,
        'LXWHHLYJ' => 815,
        'LXTJJ' => 816,
        'ZGRMYHLXZH' => 817,
        'GQTLXWYH' => 818,
        'LXXWJGBZWYHBGS' => 819,
        'LXMZJ' => 820,
        'LXLYJ' => 821,
        'LXYLBZJ' => 822,
        'LXYJGLJ' => 823,
        'LXJYKJJ' => 824,
        'LXJTYSJ' => 825,
        'LXXWXZ,CB' => 826,
        'LLSSTHJJLXFJ' => 827,
        'LXRLZYHSK,HBZJ' => 828,
        'LXXWZZB' => 829,
        'LXRMFY' => 830,
        'LXRMJCY' => 831,
        'LXGXJ' => 832,
        'LXRMGAJ' => 833,
        'LXSFJ' => 834,
        'LXMZJ' => 835,
        'LXZRZYJ' => 836,
        'LXZJJ' => 837,
        'LXNYJ' => 838,
        'LXFPB' => 839,
        'LXSWJ' => 840,
        'LXTYJRSWJ' => 841,
        'LXSLJ' => 842,

        'LSQWZZB' => 901,
        'LSQWXCB' => 902,
        'LSQWZFW' => 903,
        'LSQWJGBZWYHBGS' => 904,
        'LSQZFJRGZBGS' => 905,
        'GQTLSQ' => 906,
        'LSQQFPKFBGS' => 907,
        'LSQGAJJJZD' => 908,
        'LSQRMJCY' => 909,
        'LSQZJRMFY' => 910,
        'LSQJYJ' => 911,
        'LSQGYHXXHJ' => 912,
        'LSQMZJ' => 913,
        'LSQSFJ' => 914,
        'LSQCZJ' => 915,
        'LSQRSJ' => 916,
        'LSQGHHZRGLJ' => 917,
        'LSQSTHJJLSFJ' => 918,
        'LSQZFHCXJSJ' => 919,
        'LSQJTYSJ' => 920,
        'LSQNYNCTYJ' => 921,
        'LSQWLJ' => 922,
        'LSQWJJ' => 923,
        'LSQYJJ' => 924,
        'LSQSCJDGLJ' => 925,
        'LSQTJJ' => 926,
        'LSQYLBZJ' => 927,
        'LSQXZSPJBGS' => 928,
        'LSQXZSPJSCGLG' => 929,
        'LSQXZSPJTZXMG' => 930,
        'LSQXZSPJSHSWG' => 931,
        'LSQNYJ' => 932,
        'LSQSWJ' => 933,
        'LSQLYJ' => 934,

        'ZGXYSWJGBZWYHBGS' => 1001,
        'ZGXYSWTYZXGZB' => 1002,
        'XYSXZSPFWGLJSPYXJGGGZ' => 1003,
        'XYSXZSPFWGLJTZXMGGZ' => 1004,
        'XYSXZSPFWGLJGHJSGGZ' => 1005,
        'XYSXZSPFWGLJSNSWGGZ' => 1006,
        'XYSXZSPFWGLJCSGLGGZ' => 1007,
        'XYSXZSPFWGLJSKSWGGZ' => 1008,
        'XYSXZSPFWGLJQYDJGGZ' => 1009,
        'XYSRLZYHSHBZJ' => 1010,
        'XYSRMJCY' => 1011,
        'XYSRMFY' => 1012,
        'XYSGAJ' => 1013,
        'XYSGAJJTGLJCDD' => 1014,
        'XYSMZJ' => 1015,
        'XYSTYJRSWJ' => 1016,
        'XYSSFJ' => 1017,
        'XYSWHHLYJ' => 1018,
        'XYSJYKJJ' => 1019,
        'XYSWSJKHTYJ' => 1020,
        'XYSYLBZJ' => 1021,
        'XYSGYHXXHJ' => 1022,
        'XYSJTYSJ' => 1023,
        'XYSYJGLJ' => 1024,
        'XYSSCJDGLJ' => 1025,
        'XYSCZJ' => 1026,
        'XYSSJJ' => 1027,
        'GJSWZJXYSSWJ' => 1028,
        'XYSTJJ' => 1029,
        'XYSNYJ' => 1030,
        'LLSSTHJJXYFJ' => 1031,
        'XYSZFHCXJSJ' => 1032,
        'XYSCSGLJ' => 1033,
        'XYSNYNCJ' => 1034,
        'XYSZRZYJ' => 1035,
        'XYSLYJ' => 1036,
        'XYSSLJ' => 1037,
        'SXXYJJKFQGLWYH' => 1038,

        'XXCZJ' => 1101,
        'XXJTYSJ' => 1102,
        'XXMZJ' => 1103,
        'XXSFJ' => 1104,
        'XXGYHXXHJ' => 1105,
        'XXTJJ' => 1106,
        'XXZRZYJ' => 1107,
        'XXSLJ' => 1108,
        'XXZFHCXJSGLJ' => 1109,
        'LLSSTHJJXXFJ' => 1110,
        'XXRLZYHSHBZJ' => 1111,
        'XXJJJSKFQ' => 1112,
        'XXXZSPFWGLJ' => 1113,
        'XXJYKJJ' => 1114,
        'XXSJJ' => 1115,
        'XXLYJ' => 1116,
        'XXWSJKHTYJ' => 1117,
        'XXSCJDGLJ' => 1118,
        'XXNYNCJ' => 1119,
        'XXGAJ' => 1120,
        'XXDASZG' => 1121,
        'XXCJRLHH' => 1122,
        'XXWHHLYJ' => 1123,
        'XXSWJ' => 1124,
        'XXZWFWZXLLSGJJGLZXXXGLBCK' => 1125,
        'XXZWFWZXXXSWJCK' => 1126,
        'XXZWFWZXXXJJDDCGSCK' => 1127,
        'XXZWFWZXXXJJDDZXGCK' => 1128,
        'XXZWFWZXXXSHLDBXSYSCK' => 1129,
        'XXZWFWZXXXYBJCXJMCK' => 1130,
        'XXZWFWZXXXZGYBCK' => 1131,
        'XXZWFWZXRSJXXZXCK' => 1132,
        'XXZWFWZXRSJJBZXCK' => 1133,
        'XXZWFWZXBDCDJZXCK' => 1134,
        'XXZWFWZXGAJCK' => 1135,
        'XXZWFWZXZRZYJCK' => 1136,
        'XXZWFWZXCZJCK' => 1137,
        'XXZWFWZXXXGSBXFWZXCK' => 1138,
        'XXZWFWZXXXNBZXCK' => 1139,
        'XXZWFWZXLLSSTHJJXXFJCK' => 1140,
        'XXZWFWZXSYBXCK' => 1141,
        'XXZWFWZXXXYJGLJCK' => 1142,

        'ZYXRMZFBGS' => 1201,
        'ZYXSFJ' => 1202,
        'ZYXWTJ' => 1203,
        'ZYXSLJ' => 1204,
        'ZYXSJJ' => 1205,
        'ZYXRLZYHSK,HBZJ' => 1206,
        'ZYXCZJ' => 1207,
        'ZYXMZJ' => 1208,
        'ZYXTJJ' => 1209,
        'LLSSTHJJZYFJ' => 1210,
        'ZYXYJGLJ' => 1211,
        'ZGRMYX,HZYXZX,H' => 1212,
        'ZYXJYKJJ' => 1213,
        'ZYXWHHLYJ' => 1214,
        'ZYXLYJ' => 1215,
        'ZYXZRZYJ' => 1216,
        'ZYXGYHXXJ' => 1217,
        'ZYXYLJTRMYY' => 1218,
        'ZYXSCJDGLJ' => 1219,
        'ZYXJTYSJ' => 1220,
        'ZYXX,HZSPFWGLJ' => 1221,
        'ZYXZFHCXJSGLJ' => 1222,
        'ZYXNYNCJ' => 1223,
        'GJSWZJZYXSWJ' => 1224,

        'WSXRMFY' => 1301,
        'WSXRMJCY' => 1302,
        'WSXGAJ' => 1303,
        'WSXWJGBZWYHBGS' => 1304,
        'WSXJYKJJ' => 1305,
        'WSXWSJKHTYJ' => 1306,
        'WSXGYHXXJ' => 1307,
        'WSXJTHYSJ' => 1308,
        'WSXYLBZJ' => 1309,
        'WSXMZJ' => 1310,
        'WSXLYJ' => 1311,
        'WSXNYNCJ' => 1312,
        'WSXSWJ' => 1313,
        'WSXSCJDGLJ' => 1314,
        'GJSWZJWSFJ' => 1315,
        'WSXZFHCXJSGLJ' => 1316,
        'WSXYJGLJ' => 1317,
        'WSXNYJ' => 1318,
        'WSXTJJ' => 1319,
        'WSXRLZYHSHZYBZJ' => 1320,
        'WSXSLJ' => 1321,
        'WSXXZSPJZFFWZX' => 1322,
        'WSXXZSPJZFCGZX' => 1323,
        'WSXXZSPJFGKYG' => 1324,
        'WSXXZSPJZWXXG' => 1325,
        'WSXXZSPJNLSWG' => 1326,
        'WSXXZSPJTZXMG' => 1327,
        'WSXXZSPJGCGHJSG' => 1328,
        'WSXXZSPJDJZCG' => 1329,
        'WSXXZSPJSCGLG' => 1330,
        'WSXXZSPJSKSWG' => 1331,
        'WSXXZSPJJTSWG' => 1332,
        'SLXFZHGGJ' => 1401,
        'SLXSCJDGLJ' => 1402,
        'SLXJYHKJJ' => 1403,
        'SLXGYHXXHJ' => 1404,
        'SLXGAJ' => 1405,
        'SLXMZJ' => 1406,
        'SLXSFJ' => 1407,
        'SLXSJJ' => 1408,
        'SLXRLZYHSHBZJ' => 1409,
        'SLXZRZYJ' => 1410,
        'SLXLYJ' => 1411,
        'LLSSTHJJSLXFJ' => 1412,
        'SLXZFBZHCXJSGLJ' => 1413,
        'SLXJTYSJ' => 1414,
        'SLXNYNCJ' => 1415,
        'SLXXMSYFWZX' => 1416,
        'SLXNJFWZX' => 1417,
        'SLXSLJ' => 1418,
        'SLXWHHLYJ' => 1419,
        'SLXWSJKHTYJ' => 1420,
        'SLXTJJ' => 1421,
        'SLXXZSPFWGLJ' => 1422,
        'SLXYJGLJ' => 1423,
        'SLXYCZMJ' => 1424,
        'SLXQXJ' => 1425
    );
}
