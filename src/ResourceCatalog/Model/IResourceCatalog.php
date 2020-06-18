<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'QXTCHJBHJDXX' => 4,
        'SJJXMXX' => 5,
        'GGXYZHPJ' => 6,
        'HRBXX' => 7,
        'ZYZXX' => 8,
        'SYDWFRDJXX' => 9,
        'XSPJXX' => 10,
        'SXBZXJGXX' => 11,
        'SXBZXRMD' => 12,
        'JSZGXX' => 13,
        'SJYXXS' => 14,
        'JYJGXINXI' => 15,
        'GRRYXXJYJ' => 16,
        'JGRYXXSJYJ' => 17,
        'SXSZLJDW' => 18,
        'QYRYXX' => 19,
        'YSCRJZJJJZGRDXX' => 20,
        'JDCWFXX' => 21,
        'SHZZNJXX' => 22,
        'GRRYXXMZJ' => 23,
        'MBFQYML' => 24,
        'SHTTDJXX' => 25,
        'SFJDJGCYRYZGXX' => 26,
        'SFJDJGDJXX' => 27,
        'GZJGJBXX' => 28,
        'GZYXX' => 29,
        'JCFLFWSXX' => 30,
        'JCFLFWGZZJBXX' => 31,
        'LSSWSXX' => 32,
        'LSZYZGZXX' => 33,
        'JGRYXXSSFJ' => 34,
        'ZFCGDLJGXX' => 35,
        'ZYJNZSXX' => 36,
        'YLBXXX' => 37,
        'YZTQSBXXHMD' => 38,
        'SYBXXX' => 39,
        'SBQYXX' => 40,
        'GZRYXX' => 41,
        'YZTQNMGGZHMD' => 42,
        'PGJGXX' => 43,
        'CPTGLSZXCPRZMD' => 44,
        'ZLJCQYXX' => 45,
        'XZXKQYXX' => 46,
        'SLYSXKZXX' => 47,
        'GRRYXXJTJ' => 48,
        'SLGCZBXX' => 49,
        'JKQYPJAJYSMD' => 50,
        'GJJLTQYRZXX' => 51,
        'ESCJDPGJGHZZS' => 52,
        'HSZYZGZXX' => 53,
        'YSZYZCHBGZC' => 54,
        'YSZYZGZXX' => 55,
        'WSHJHSYWYHJCXX' => 56,
        'YLHJSFWJGXX' => 57,
        'JBYFKZJGXX' => 58,
        'FYCRYJLXX' => 59,
        'WSZYJSZGKSWJXX' => 60,
        'QSWCXXXJDWBZ' => 61,
        'QIYEJBXX' => 62,
        'GTGSHXX' => 63,
        'CMQYSBXX' => 64,
        'YPLSQYXX' => 65,
        'JGRYXX' => 66,
        'SXQYHMD' => 67,
        'SPYPTSJBJLGR' => 68,
        'SPYPTSJBJLDW' => 69,
        'SXMPCPXX' => 70,
        'QYYCMLXX' => 71,
        'QYZXXX' => 72,
        'QYDXXX' => 73,
        'CCJCJGXX' => 74,
        'LLSTYXHDJXX' => 75,
        'DTJXJGRXX' => 76,
        'TJDCDXML' => 77,
        'YHYJRJGCFXX' => 78,
        'QYGSZXXX' => 79,
        'AJNSRXX' => 80,
        'ZDSSWFAJXX' => 81,
        'QYDSXZCFXX' => 82,
        'SPFYSXK' => 83,
        'FDCKFQYZZXX' => 84,
        'JGRYXXSFGJ' => 85,
        'SYDWJBXX'=>86,
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['SFGW'] => array(
            self::TYPE['JGJCDXZJL'], self::TYPE['TEST'], self::TYPE['SJJXMXX'], self::TYPE['GGXYZHPJ'],self::TYPE['SYDWJBXX']
        ),
        IUserGroup::ID['SJWJW'] => array(),
        IUserGroup::ID['SWZZB'] => array(),
        IUserGroup::ID['SWXCB'] => array(
            self::TYPE['HRBXX'], self::TYPE['ZYZXX'],

        ),
        IUserGroup::ID['SWZFW'] => array(),
        IUserGroup::ID['SWWXB'] => array(),
        IUserGroup::ID['SWBB'] => array(
            self::TYPE['SYDWFRDJXX'],
        ),
        IUserGroup::ID['SZJRMFY'] => array(self::TYPE['XSPJXX'], self::TYPE['SXBZXJGXX'], self::TYPE['SXBZXRMD']),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
        ),
        IUserGroup::ID['SKJJ'] => array(
            self::TYPE['SXSZLJDW'],
        ),
        IUserGroup::ID['SGXJ'] => array(
            self::TYPE['QYRYXX'],
        ),
        IUserGroup::ID['SGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX'],
        ),
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
        ),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
        ),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['SGHHZRZRJ'] => array(self::TYPE['PGJGXX']),
        IUserGroup::ID['SHJSTJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD'],
        ),
        IUserGroup::ID['SZJJ'] => array(
            self::TYPE['ZLJCQYXX'],
        ),
        IUserGroup::ID['SCSGLJ'] => array(
            self::TYPE['XZXKQYXX'],
        ),
        IUserGroup::ID['SJTYSJ'] => array(
            self::TYPE['SLYSXKZXX'], self::TYPE['GRRYXXJTJ'],
        ),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['RHLLZH'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SNYNCJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
        ),
        IUserGroup::ID['SSANGWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['SWLJ'] => array(),
        IUserGroup::ID['SWJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
        ),
        IUserGroup::ID['STYJRSWJ'] => array(),
        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SSCJDGLJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['SXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
        ),
        IUserGroup::ID['STYJ'] => array(
            self::TYPE['LLSTYXHDJXX'],
        ),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'], self::TYPE['TJDCDXML'],
        ),
        IUserGroup::ID['SYLBZJ'] => array(),
        IUserGroup::ID['SXZSPJ'] => array(),
        IUserGroup::ID['SJRB'] => array(),
        IUserGroup::ID['SYBJFJ'] => array(self::TYPE['YHYJRJGCFXX']),
        IUserGroup::ID['SNYJ'] => array(),
        IUserGroup::ID['SRFB'] => array(),
        IUserGroup::ID['SDSJYYJ'] => array(),
        IUserGroup::ID['SSWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['QYDSXZCFXX'],
        ),
        IUserGroup::ID['SFPB'] => array(),
        IUserGroup::ID['SJJZD'] => array(),
        IUserGroup::ID['SYJJ'] => array(),
        IUserGroup::ID['SGGZYJYZX'] => array(),
        IUserGroup::ID['SFGJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ'],
        ),
        IUserGroup::ID['SGJJZX'] => array(),
        IUserGroup::ID['SYZJ'] => array(),
        IUserGroup::ID['SYCZMJ'] => array(),
        IUserGroup::ID['SQXJ'] => array(
            self::TYPE['QXTCHJBHJDXX'],
        ),
        IUserGroup::ID['LLGLFJ'] => array(
        ),
        IUserGroup::ID['SCL'] => array(),
        IUserGroup::ID['SZGH'] => array(),
        IUserGroup::ID['SFL'] => array(),
        IUserGroup::ID['SJMYJY'] => array(),
        IUserGroup::ID['SXFZD'] => array(),

        IUserGroup::ID['LLSJSWMJSZDWYHBGS'] => array(),
        IUserGroup::ID['LLSZFFZB'] => array(),
        IUserGroup::ID['LLSGSGLXZJ'] => array(),
        IUserGroup::ID['LLSHJBHJ'] => array(),
        IUserGroup::ID['LLSZLJSJDJ'] => array(),
        IUserGroup::ID['LLSSPYPJDGLJ'] => array(),
        IUserGroup::ID['LLSJJHXXHWYH'] => array(),
        IUserGroup::ID['LLSNCGZWYH'] => array(),
        IUserGroup::ID['LLSWHGLJ'] => array(),
        IUserGroup::ID['LLSWSHJHSYWYH'] => array(),
        IUserGroup::ID['LLSGTZYJ'] => array(),
        IUserGroup::ID['LLSMTGYJ'] => array(),
        IUserGroup::ID['LLSAQSCJDGLJ'] => array(),
        IUserGroup::ID['LLSMZZJSWGLJ'] => array(),
        IUserGroup::ID['LLSLSHWZCBJ'] => array(),
        IUserGroup::ID['LLSDAJ'] => array(),
        IUserGroup::ID['LLSDZJ'] => array(),
        IUserGroup::ID['LLSGLGLJ'] => array(),
        IUserGroup::ID['LLSYYGLJ'] => array(),
        IUserGroup::ID['LLSYHYJDGLWYHFJ'] => array(),
        IUserGroup::ID['LLSWXDGLJ'] => array(),
        IUserGroup::ID['LLSCXGHJ'] => array(),
        IUserGroup::ID['LLSLYFZWYH'] => array(),
        IUserGroup::ID['LLSZWDTGLZX'] => array(),
        IUserGroup::ID['LLSRMZFBGS'] => array(),
        IUserGroup::ID['LLSJRFWSWZX'] => array(),
        IUserGroup::ID['LLSWHLYJ'] => array(),
        IUserGroup::ID['GQTLLSW'] => array(),
        IUserGroup::ID['ZGLLSWWLAQHXXHWYHBGS'] => array(),
        IUserGroup::ID['LLSXFJYZD'] => array(),
        IUserGroup::ID['LSQFZHGGWYH'] => array(),
        IUserGroup::ID['FSXFZHGGJ'] => array(),
        IUserGroup::ID['JCXFZHGGJ'] => array(),
        IUserGroup::ID['JKXFZHGGJ'] => array(),
        IUserGroup::ID['LXFZHGGJ'] => array(),
        IUserGroup::ID['LLXFZHGGJ'] => array(),
        IUserGroup::ID['SLXFZHGGJ'] => array(),
        IUserGroup::ID['WSXFZHGGJ'] => array(),
        IUserGroup::ID['XYSFZHGGJ'] => array(),
        IUserGroup::ID['XXFZHGGJ'] => array(),
        IUserGroup::ID['ZYXFZHGGJ'] => array(),
        IUserGroup::ID['FYSFZHGGJ'] => array(),
        IUserGroup::ID['LXFZHGGJ'] => array(),

        IUserGroup::ID['ZGLLXWZZB'] => array(),
        IUserGroup::ID['ZGLLXWXCB'] => array(),
        IUserGroup::ID['LLXZFW'] => array(),
        IUserGroup::ID['ZGLLXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['LLXTJJ'] => array(),
        IUserGroup::ID['LLXRMFY'] => array(),
        IUserGroup::ID['LLXRMJCY'] => array(),
        IUserGroup::ID['ZGGCZYQNTLLXWYH'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJSNSWG'] => array(),
        IUserGroup::ID['ZGRMYHLLXZH'] => array(),
        IUserGroup::ID['LLXJYKJJ'] => array(),
        IUserGroup::ID['LLXGYHXXHJ'] => array(),
        IUserGroup::ID['LLXGAJ'] => array(),
        IUserGroup::ID['LLXMZJ'] => array(),
        IUserGroup::ID['LLXSFJ'] => array(),
        IUserGroup::ID['LLXCZJ'] => array(),
        IUserGroup::ID['LLXRLZYHSHBZJ'] => array(),
        IUserGroup::ID['LLXZRZYJ'] => array(),
        IUserGroup::ID['LLSSTHJJLLFJ'] => array(),
        IUserGroup::ID['LLXSCJDGLJ'] => array(),
        IUserGroup::ID['GJSWZJLLXSWJ'] => array(),
        IUserGroup::ID['LLXJTYSJ'] => array(),
        IUserGroup::ID['LLXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['LLXNYNCJ'] => array(),
        IUserGroup::ID['LLXWHHLYJ'] => array(),
        IUserGroup::ID['LLXWSJKHTYJ'] => array(),
        IUserGroup::ID['LLXYJGLJ'] => array(),
        IUserGroup::ID['LLXYLBZJ'] => array(),
        IUserGroup::ID['LLXNYJ'] => array(),
        IUserGroup::ID['LLXFPKFBGS'] => array(),
        IUserGroup::ID['LLYBJFJLLJGZ'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJ'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJRSHCWG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJZWGGHZCFGG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJZWXXGLG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJSPYXJGG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJTZXMG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJGHJSG'] => array(),
        IUserGroup::ID['SSDJG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJCGJTG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJXCKYG'] => array(),
        IUserGroup::ID['LLXXZSPFWGLJSHSWG'] => array(),

        IUserGroup::ID['SXSLXQXJ'] => array(),
        IUserGroup::ID['LLSSTHJJLXFJ'] => array(),
        IUserGroup::ID['GJSWZJLXSWJ'] => array(),
        IUserGroup::ID['LXMZJ'] => array(),
        IUserGroup::ID['LXNCNYJ'] => array(),
        IUserGroup::ID['LXRLZYHSHBZJ'] => array(),
        IUserGroup::ID['LXSJJ'] => array(),
        IUserGroup::ID['LXCMSYGLFWZX'] => array(),
        IUserGroup::ID['LXXZSPFWGLJ'] => array(),
        IUserGroup::ID['LXSFJ'] => array(),
        IUserGroup::ID['LXZRZYJ'] => array(),
        IUserGroup::ID['LXGYHXXHJ'] => array(),
        IUserGroup::ID['LXSCJDGLJ'] => array(),
        IUserGroup::ID['LXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['LXWHHLYJ'] => array(),
        IUserGroup::ID['LXYJGLJ'] => array(),
        IUserGroup::ID['LXWSJKHTYJ'] => array(),
        IUserGroup::ID['LXLYJ'] => array(),
        IUserGroup::ID['LXNJFWZX'] => array(),
        IUserGroup::ID['LXJJDD'] => array(),
        IUserGroup::ID['LXXFJYDD'] => array(),
        IUserGroup::ID['LXFZHFGJ'] => array(),

        IUserGroup::ID['ZGJKXWZZB'] => array(),
        IUserGroup::ID['ZGJKXWXZCB'] => array(),
        IUserGroup::ID['ZGGCDJKXWZFWYH'] => array(),
        IUserGroup::ID['JKXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['JKXRMFY'] => array(),
        IUserGroup::ID['JKXRMJCY'] => array(),
        IUserGroup::ID['GQTJKXW'] => array(),
        IUserGroup::ID['ZGRMYHJKXZH'] => array(),
        IUserGroup::ID['JKXJYKJJ'] => array(),
        IUserGroup::ID['JKXGYHXXHJ'] => array(),
        IUserGroup::ID['JKXGAJ'] => array(),
        IUserGroup::ID['JKXMZJ'] => array(),
        IUserGroup::ID['JKXSFJ'] => array(),
        IUserGroup::ID['JKXCZJ'] => array(),
        IUserGroup::ID['JKXRLZYHSHBZJ'] => array(),
        IUserGroup::ID['JKXZRZYJ'] => array(),
        IUserGroup::ID['LLSSTHJJJKFJ'] => array(),
        IUserGroup::ID['JKXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['JKXJTYSJ'] => array(),
        IUserGroup::ID['JKXNYNCJ'] => array(),
        IUserGroup::ID['JKXWHSCZHXZZFD'] => array(),
        IUserGroup::ID['JKXWSJKHTYJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(),
        IUserGroup::ID['JKXSCJDGLJ'] => array(),
        IUserGroup::ID['JKXTJJ'] => array(),
        IUserGroup::ID['JKXYLBZJ'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJZWXXZX'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJGCXMG'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJSNHJTSWG'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJGDZCTZG'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJDJZCHSCGLG'] => array(),
        IUserGroup::ID['JKXXZSPFWGLJMSHSHSWG'] => array(),
        IUserGroup::ID['JKXJRB'] => array(),
        IUserGroup::ID['JKXFPKFBGS'] => array(),
        IUserGroup::ID['GJSWZJJKXSWJ'] => array(),
        IUserGroup::ID['LLYBJFJJKJGZ'] => array(),
        IUserGroup::ID['JKXDZJ'] => array(),
        IUserGroup::ID['JKXGAJJTJCDD'] => array(),
        IUserGroup::ID['JKXLYJ'] => array(),
        IUserGroup::ID['JKXQXJ'] => array(),
        IUserGroup::ID['JKXXFJYDD'] => array(),
        IUserGroup::ID['JKXSLJ'] => array(),
        IUserGroup::ID['JKXSJJ'] => array(),
        IUserGroup::ID['XWTZB'] => array(),
        IUserGroup::ID['JKXYCZMJ'] => array(),
        IUserGroup::ID['STZRMZF'] => array(),
        IUserGroup::ID['THPZRMZF'] => array(),
        IUserGroup::ID['SCZRMZF'] => array(),
        IUserGroup::ID['KCZRMZF'] => array(),
        IUserGroup::ID['HLXRMZF'] => array(),
        IUserGroup::ID['WQXRMZF'] => array(),
        IUserGroup::ID['SKXRMZF'] => array(),

        IUserGroup::ID['JCXWZZB'] => array(),
        IUserGroup::ID['JCXWMB'] => array(),
        IUserGroup::ID['JCXWXB'] => array(),
        IUserGroup::ID['ZGJCXWJGBZWYK,HBGS'] => array(),
        IUserGroup::ID['JCXRMFY'] => array(),
        IUserGroup::ID['JCXRMJCY'] => array(),
        IUserGroup::ID['ZGGCDJCXWYK,HZFWYK,H'] => array(),
        IUserGroup::ID['JCXJYKJJ'] => array(),
        IUserGroup::ID['JCXGYHXXHJ'] => array(),
        IUserGroup::ID['JCXGAJ'] => array(),
        IUserGroup::ID['JCXMZJ'] => array(),
        IUserGroup::ID['JCXSFJ'] => array(),
        IUserGroup::ID['JCXCZJ'] => array(),
        IUserGroup::ID['JCXRLZYHSK,HBZJ'] => array(),
        IUserGroup::ID['JCXZRZYJ'] => array(),
        IUserGroup::ID['LLSSTHJJJCFJ'] => array(),
        IUserGroup::ID['JCXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['JCXJTYSJ'] => array(),
        IUserGroup::ID['JCXSLJ'] => array(),
        IUserGroup::ID['ZGRMYX,HJCXZX,H'] => array(),
        IUserGroup::ID['JCXNYNCJ'] => array(),
        IUserGroup::ID['JCXWHLYJ'] => array(),
        IUserGroup::ID['JCXWSJKHTYJ'] => array(),
        IUserGroup::ID['JCXTYJRSWS'] => array(),
        IUserGroup::ID['JCXSJJ'] => array(),
        IUserGroup::ID['JCXSCJDGLJ'] => array(),
        IUserGroup::ID['JCXYLBZJ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJZWXXGLGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJSCZRGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJCGSLGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJSKSWGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJTZXMGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJCJJTGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJSNSWGGZ'] => array(),
        IUserGroup::ID['JCXXZSPFWGLJGHJSGGZ'] => array(),
        IUserGroup::ID['JCXJRSWFWZX'] => array(),
        IUserGroup::ID['ZGYHBXJDGLWYHLLJGFJJCJGZ'] => array(),
        IUserGroup::ID['JCXNYJ'] => array(),
        IUserGroup::ID['SXSJCXRMWZB'] => array(),
        IUserGroup::ID['GJSWZJJCXSWJ'] => array(),
        IUserGroup::ID['JCXFPKFBGS'] => array(),
        IUserGroup::ID['JCXGAJJJDD'] => array(),
        IUserGroup::ID['JCXXFJYDD'] => array(),
        IUserGroup::ID['JCXFDCFWZX'] => array(),
        IUserGroup::ID['JCXYCZMJ'] => array(),
        IUserGroup::ID['SXSJCXQXJ'] => array(),
        IUserGroup::ID['JCXGLD'] => array(),
        IUserGroup::ID['JCXCJRLHH'] => array(),
        IUserGroup::ID['JCXZGH'] => array(),
        IUserGroup::ID['JCXLSHWZFWZX'] => array(),
        IUserGroup::ID['JCXTJJ'] => array(),
        IUserGroup::ID['JCXFZJZZX'] => array(),
        IUserGroup::ID['JCXMZZJSWS'] => array(),
        IUserGroup::ID['JCXNYJXFZZX'] => array(),
        IUserGroup::ID['JCXNCJJFWZX'] => array(),
        IUserGroup::ID['JCXYJGLJ'] => array(),

        IUserGroup::ID['FYSCZJ'] => array(),
        IUserGroup::ID['LLSSTHJJFYFJ'] => array(),
        IUserGroup::ID['FYSTJJ'] => array(),
        IUserGroup::ID['FYSSWJ'] => array(),
        IUserGroup::ID['FYSNYNCJ'] => array(),
        IUserGroup::ID['FYSLYJ'] => array(),
        IUserGroup::ID['FYSSCJDGLJ'] => array(),
        IUserGroup::ID['FYSMZJ'] => array(),
        IUserGroup::ID['FYSMZZJSWJ'] => array(),
        IUserGroup::ID['FYSJTYSJ'] => array(),
        IUserGroup::ID['FYSZRZYJ'] => array(),
        IUserGroup::ID['FYSWSJKHTYJ'] => array(),
        IUserGroup::ID['FYSGYHXXHJ'] => array(),
        IUserGroup::ID['FYSSJJ'] => array(),
        IUserGroup::ID['FYSYJGLJ'] => array(),
        IUserGroup::ID['FYSRLZYHSHBZJ'] => array(),
        IUserGroup::ID['FYSZFHCXJSGLJ'] => array(),
        IUserGroup::ID['FYSCSGLZHXZZFD'] => array(),
        IUserGroup::ID['FYSJYKJJ'] => array(),
        IUserGroup::ID['FYSSFJ'] => array(),
        IUserGroup::ID['FYSGAJ'] => array(),
        IUserGroup::ID['FYSNJFWZX'] => array(),
        IUserGroup::ID['FYSNJFWZX'] => array(),
        IUserGroup::ID['FYSGYSYJ'] => array(),
        IUserGroup::ID['FYSWHHLYJ'] => array(),
        IUserGroup::ID['FYSNYJ'] => array(),
        IUserGroup::ID['FYSDAG'] => array(),
        IUserGroup::ID['ZGFYSWJGBZWYHBGS'] => array(),
        IUserGroup::ID['FYSJJD'] => array(),
        IUserGroup::ID['FYSSWJ'] => array(),
        IUserGroup::ID['SXSFYGLGLD'] => array(),
        IUserGroup::ID['ZGRMYHFYSZH'] => array(),
        IUserGroup::ID['FYXHCJJJSKFQ'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJGHJSGFZR'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJTZXMGFZR'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJSNSWGFZRZR'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJDJZCGEGFZR'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJSKSWGFZR'] => array(),
        IUserGroup::ID['FYSXZSPFWGLJJTSWGFZR'] => array(),

        IUserGroup::ID['ZGFSXWXCB'] => array(),
        IUserGroup::ID['FSXWZZB'] => array(),
        IUserGroup::ID['ZGGCDFSXWYHZFWYH'] => array(),
        IUserGroup::ID['FSXNYJ'] => array(),
        IUserGroup::ID['FSXSCJDGLJ'] => array(),
        IUserGroup::ID['ZGRMYHFSXZH'] => array(),
        IUserGroup::ID['ZGFSXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['FSXGYHXXHJ'] => array(),
        IUserGroup::ID['FSXZRZYJ'] => array(),
        IUserGroup::ID['FSXMZJ'] => array(),
        IUserGroup::ID['FSXLYJ'] => array(),
        IUserGroup::ID['FSXTJJ'] => array(),
        IUserGroup::ID['GJSWZJFSXSWJ'] => array(),
        IUserGroup::ID['FSXYLBZJ'] => array(),
        IUserGroup::ID['FSXWSJKHTYJ'] => array(),
        IUserGroup::ID['FSXJYKJJ'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJNLSWG'] => array(),
        IUserGroup::ID['FSXSFJ'] => array(),
        IUserGroup::ID['FSXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['FSXSLJ'] => array(),
        IUserGroup::ID['FSXYJGLJ'] => array(),
        IUserGroup::ID['FSXJTYSJ'] => array(),
        IUserGroup::ID['FSXRLZYHSK,HBZJ'] => array(),
        IUserGroup::ID['FSXNYNCJ'] => array(),
        IUserGroup::ID['FSXCZJ'] => array(),
        IUserGroup::ID['FSXWHHLYJ'] => array(),
        IUserGroup::ID['FSXRMFY'] => array(),
        IUserGroup::ID['FSXGAJ'] => array(),
        IUserGroup::ID['LLSSTHJJFSFJ'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJXZSPHZWXXGLG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJTZXMG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJGCGHG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJZCDJG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJSCZRG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJJTSWG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJSKSWG'] => array(),
        IUserGroup::ID['FSXXZSPFWGLJGCJSG'] => array(),

        IUserGroup::ID['LXCSGLZHZFJ'] => array(),
        IUserGroup::ID['LXXZSPFWGLJXZSPFWGLJ'] => array(),
        IUserGroup::ID['LXXZSPFWGLJZWGGHYXJGG'] => array(),
        IUserGroup::ID['LXXZSPFWGLJZHBGS'] => array(),
        IUserGroup::ID['LXXZSPFWGLJGHGLHTZXMG'] => array(),
        IUserGroup::ID['LXXZSPFWGLJSCGLHDJZCG'] => array(),
        IUserGroup::ID['LXXZSPFWGLJSTHJHJTYSG'] => array(),
        IUserGroup::ID['LXXZSPFWGLJSNSWHSKSWG'] => array(),
        IUserGroup::ID['LXXZSPFWGLJZZRDHLHKYG'] => array(),
        IUserGroup::ID['LXJJJSKFQGLWYH'] => array(),
        IUserGroup::ID['ZGGCDLXWYHZFWYH'] => array(),
        IUserGroup::ID['LXWSJKHTYJ'] => array(),
        IUserGroup::ID['LXNYNCJ'] => array(),
        IUserGroup::ID['LXSCJDGLJ'] => array(),
        IUserGroup::ID['LXWHHLYJ'] => array(),
        IUserGroup::ID['LXTJJ'] => array(),
        IUserGroup::ID['ZGRMYHLXZH'] => array(),
        IUserGroup::ID['GQTLXWYH'] => array(),
        IUserGroup::ID['LXXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['LXMZJ'] => array(),
        IUserGroup::ID['LXLYJ'] => array(),
        IUserGroup::ID['LXYLBZJ'] => array(),
        IUserGroup::ID['LXYJGLJ'] => array(),
        IUserGroup::ID['LXJYKJJ'] => array(),
        IUserGroup::ID['LXJTYSJ'] => array(),
        IUserGroup::ID['LXXWXZ,CB'] => array(),
        IUserGroup::ID['LLSSTHJJLXFJ'] => array(),
        IUserGroup::ID['LXRLZYHSK,HBZJ'] => array(),
        IUserGroup::ID['LXXWZZB'] => array(),
        IUserGroup::ID['LXRMFY'] => array(),
        IUserGroup::ID['LXRMJCY'] => array(),
        IUserGroup::ID['LXGXJ'] => array(),
        IUserGroup::ID['LXRMGAJ'] => array(),
        IUserGroup::ID['LXSFJ'] => array(),
        IUserGroup::ID['LXZRZYJ'] => array(),
        IUserGroup::ID['LXZJJ'] => array(),
        IUserGroup::ID['LXNYJ'] => array(),
        IUserGroup::ID['LXFPB'] => array(),
        IUserGroup::ID['LXSWJ'] => array(),
        IUserGroup::ID['LXTYJRSWJ'] => array(),
        IUserGroup::ID['LXSLJ'] => array(),

        IUserGroup::ID['LSQWZZB'] => array(),
        IUserGroup::ID['LSQWXCB'] => array(),
        IUserGroup::ID['LSQWZFW'] => array(),
        IUserGroup::ID['LSQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['LSQZFJRGZBGS'] => array(),
        IUserGroup::ID['GQTLSQ'] => array(),
        IUserGroup::ID['LSQQFPKFBGS'] => array(),
        IUserGroup::ID['LSQGAJJJZD'] => array(),
        IUserGroup::ID['LSQRMJCY'] => array(),
        IUserGroup::ID['LSQZJRMFY'] => array(),
        IUserGroup::ID['LSQJYJ'] => array(),
        IUserGroup::ID['LSQGYHXXHJ'] => array(),
        IUserGroup::ID['LSQMZJ'] => array(),
        IUserGroup::ID['LSQSFJ'] => array(),
        IUserGroup::ID['LSQCZJ'] => array(),
        IUserGroup::ID['LSQRSJ'] => array(),
        IUserGroup::ID['LSQGHHZRGLJ'] => array(),
        IUserGroup::ID['LSQSTHJJLSFJ'] => array(),
        IUserGroup::ID['LSQZFHCXJSJ'] => array(),
        IUserGroup::ID['LSQJTYSJ'] => array(),
        IUserGroup::ID['LSQNYNCTYJ'] => array(),
        IUserGroup::ID['LSQWLJ'] => array(),
        IUserGroup::ID['LSQWJJ'] => array(),
        IUserGroup::ID['LSQYJJ'] => array(),
        IUserGroup::ID['LSQSCJDGLJ'] => array(),
        IUserGroup::ID['LSQTJJ'] => array(),
        IUserGroup::ID['LSQYLBZJ'] => array(),
        IUserGroup::ID['LSQXZSPJBGS'] => array(),
        IUserGroup::ID['LSQXZSPJSCGLG'] => array(),
        IUserGroup::ID['LSQXZSPJTZXMG'] => array(),
        IUserGroup::ID['LSQXZSPJSHSWG'] => array(),
        IUserGroup::ID['LSQNYJ'] => array(),
        IUserGroup::ID['LSQSWJ'] => array(),
        IUserGroup::ID['LSQLYJ'] => array(),

        IUserGroup::ID['ZGXYSWJGBZWYHBGS'] => array(),
        IUserGroup::ID['ZGXYSWTYZXGZB'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJSPYXJGGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJTZXMGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJGHJSGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJSNSWGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJCSGLGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJSKSWGGZ'] => array(),
        IUserGroup::ID['XYSXZSPFWGLJQYDJGGZ'] => array(),
        IUserGroup::ID['XYSRLZYHSHBZJ'] => array(),
        IUserGroup::ID['XYSRMJCY'] => array(),
        IUserGroup::ID['XYSRMFY'] => array(),
        IUserGroup::ID['XYSGAJ'] => array(),
        IUserGroup::ID['XYSGAJJTGLJCDD'] => array(),
        IUserGroup::ID['XYSMZJ'] => array(),
        IUserGroup::ID['XYSTYJRSWJ'] => array(),
        IUserGroup::ID['XYSSFJ'] => array(),
        IUserGroup::ID['XYSWHHLYJ'] => array(),
        IUserGroup::ID['XYSJYKJJ'] => array(),
        IUserGroup::ID['XYSWSJKHTYJ'] => array(),
        IUserGroup::ID['XYSYLBZJ'] => array(),
        IUserGroup::ID['XYSGYHXXHJ'] => array(),
        IUserGroup::ID['XYSJTYSJ'] => array(),
        IUserGroup::ID['XYSYJGLJ'] => array(),
        IUserGroup::ID['XYSSCJDGLJ'] => array(),
        IUserGroup::ID['XYSCZJ'] => array(),
        IUserGroup::ID['XYSSJJ'] => array(),
        IUserGroup::ID['GJSWZJXYSSWJ'] => array(),
        IUserGroup::ID['XYSTJJ'] => array(),
        IUserGroup::ID['XYSNYJ'] => array(),
        IUserGroup::ID['LLSSTHJJXYFJ'] => array(),
        IUserGroup::ID['XYSZFHCXJSJ'] => array(),
        IUserGroup::ID['XYSCSGLJ'] => array(),
        IUserGroup::ID['XYSNYNCJ'] => array(),
        IUserGroup::ID['XYSZRZYJ'] => array(),
        IUserGroup::ID['XYSLYJ'] => array(),
        IUserGroup::ID['XYSSLJ'] => array(),
        IUserGroup::ID['SXXYJJKFQGLWYH'] => array(),

        IUserGroup::ID['XXCZJ'] => array(),
        IUserGroup::ID['XXJTYSJ'] => array(),
        IUserGroup::ID['XXMZJ'] => array(),
        IUserGroup::ID['XXSFJ'] => array(),
        IUserGroup::ID['XXGYHXXHJ'] => array(),
        IUserGroup::ID['XXTJJ'] => array(),
        IUserGroup::ID['XXZRZYJ'] => array(),
        IUserGroup::ID['XXSLJ'] => array(),
        IUserGroup::ID['XXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['LLSSTHJJXXFJ'] => array(),
        IUserGroup::ID['XXRLZYHSHBZJ'] => array(),
        IUserGroup::ID['XXJJJSKFQ'] => array(),
        IUserGroup::ID['XXXZSPFWGLJ'] => array(),
        IUserGroup::ID['XXJYKJJ'] => array(),
        IUserGroup::ID['XXSJJ'] => array(),
        IUserGroup::ID['XXLYJ'] => array(),
        IUserGroup::ID['XXWSJKHTYJ'] => array(),
        IUserGroup::ID['XXSCJDGLJ'] => array(),
        IUserGroup::ID['XXNYNCJ'] => array(),
        IUserGroup::ID['XXGAJ'] => array(),
        IUserGroup::ID['XXDASZG'] => array(),
        IUserGroup::ID['XXCJRLHH'] => array(),
        IUserGroup::ID['XXWHHLYJ'] => array(),
        IUserGroup::ID['XXSWJ'] => array(),
        IUserGroup::ID['XXZWFWZXLLSGJJGLZXXXGLBCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXSWJCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXJJDDCGSCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXJJDDZXGCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXSHLDBXSYSCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXYBJCXJMCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXZGYBCK'] => array(),
        IUserGroup::ID['XXZWFWZXRSJXXZXCK'] => array(),
        IUserGroup::ID['XXZWFWZXRSJJBZXCK'] => array(),
        IUserGroup::ID['XXZWFWZXBDCDJZXCK'] => array(),
        IUserGroup::ID['XXZWFWZXGAJCK'] => array(),
        IUserGroup::ID['XXZWFWZXZRZYJCK'] => array(),
        IUserGroup::ID['XXZWFWZXCZJCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXGSBXFWZXCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXNBZXCK'] => array(),
        IUserGroup::ID['XXZWFWZXLLSSTHJJXXFJCK'] => array(),
        IUserGroup::ID['XXZWFWZXSYBXCK'] => array(),
        IUserGroup::ID['XXZWFWZXXXYJGLJCK'] => array(),
        IUserGroup::ID['ZYXRMZFBGS'] => array(),
        
        IUserGroup::ID['ZYXSFJ'] => array(),
        IUserGroup::ID['ZYXWTJ'] => array(),
        IUserGroup::ID['ZYXSLJ'] => array(),
        IUserGroup::ID['ZYXSJJ'] => array(),
        IUserGroup::ID['ZYXRLZYHSK,HBZJ'] => array(),
        IUserGroup::ID['ZYXCZJ'] => array(),
        IUserGroup::ID['ZYXMZJ'] => array(),
        IUserGroup::ID['ZYXTJJ'] => array(),
        IUserGroup::ID['LLSSTHJJZYFJ'] => array(),
        IUserGroup::ID['ZYXYJGLJ'] => array(),
        IUserGroup::ID['ZGRMYX,HZYXZX,H'] => array(),
        IUserGroup::ID['ZYXJYKJJ'] => array(),
        IUserGroup::ID['ZYXWHHLYJ'] => array(),
        IUserGroup::ID['ZYXLYJ'] => array(),
        IUserGroup::ID['ZYXZRZYJ'] => array(),
        IUserGroup::ID['ZYXGYHXXJ'] => array(),
        IUserGroup::ID['ZYXYLJTRMYY'] => array(),
        IUserGroup::ID['ZYXSCJDGLJ'] => array(),
        IUserGroup::ID['ZYXJTYSJ'] => array(),
        IUserGroup::ID['ZYXX,HZSPFWGLJ'] => array(),
        IUserGroup::ID['ZYXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['ZYXNYNCJ'] => array(),
        IUserGroup::ID['GJSWZJZYXSWJ'] => array(),

        IUserGroup::ID['WSXRMFY'] => array(),
        IUserGroup::ID['WSXRMJCY'] => array(),
        IUserGroup::ID['WSXGAJ'] => array(),
        IUserGroup::ID['WSXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['WSXJYKJJ'] => array(),
        IUserGroup::ID['WSXWSJKHTYJ'] => array(),
        IUserGroup::ID['WSXGYHXXJ'] => array(),
        IUserGroup::ID['WSXJTHYSJ'] => array(),
        IUserGroup::ID['WSXYLBZJ'] => array(),
        IUserGroup::ID['WSXMZJ'] => array(),
        IUserGroup::ID['WSXLYJ'] => array(),
        IUserGroup::ID['WSXNYNCJ'] => array(),
        IUserGroup::ID['WSXSWJ'] => array(),
        IUserGroup::ID['WSXSCJDGLJ'] => array(),
        IUserGroup::ID['GJSWZJWSFJ'] => array(),
        IUserGroup::ID['WSXZFHCXJSGLJ'] => array(),
        IUserGroup::ID['WSXYJGLJ'] => array(),
        IUserGroup::ID['WSXNYJ'] => array(),
        IUserGroup::ID['WSXTJJ'] => array(),
        IUserGroup::ID['WSXRLZYHSHZYBZJ'] => array(),
        IUserGroup::ID['WSXSLJ'] => array(),
        IUserGroup::ID['WSXXZSPJZFFWZX'] => array(),
        IUserGroup::ID['WSXXZSPJZFCGZX'] => array(),
        IUserGroup::ID['WSXXZSPJFGKYG'] => array(),
        IUserGroup::ID['WSXXZSPJZWXXG'] => array(),
        IUserGroup::ID['WSXXZSPJNLSWG'] => array(),
        IUserGroup::ID['WSXXZSPJTZXMG'] => array(),
        IUserGroup::ID['WSXXZSPJGCGHJSG'] => array(),
        IUserGroup::ID['WSXXZSPJDJZCG'] => array(),
        IUserGroup::ID['WSXXZSPJSCGLG'] => array(),
        IUserGroup::ID['WSXXZSPJSKSWG'] => array(),
        IUserGroup::ID['WSXXZSPJJTSWG'] => array(),
        IUserGroup::ID['SLXSCJDGLJ'] => array(),
        IUserGroup::ID['SLXJYHKJJ'] => array(),
        IUserGroup::ID['SLXGYHXXHJ'] => array(),
        IUserGroup::ID['SLXGAJ'] => array(),
        IUserGroup::ID['SLXMZJ'] => array(),
        IUserGroup::ID['SLXSFJ'] => array(),
        IUserGroup::ID['SLXSJJ'] => array(),
        IUserGroup::ID['SLXRLZYHSHBZJ'] => array(),
        IUserGroup::ID['SLXZRZYJ'] => array(),
        IUserGroup::ID['SLXLYJ'] => array(),
        IUserGroup::ID['LLSSTHJJSLXFJ'] => array(),
        IUserGroup::ID['SLXZFBZHCXJSGLJ'] => array(),
        IUserGroup::ID['SLXJTYSJ'] => array(),
        IUserGroup::ID['SLXNYNCJ'] => array(),
        IUserGroup::ID['SLXXMSYFWZX'] => array(),
        IUserGroup::ID['SLXNJFWZX'] => array(),
        IUserGroup::ID['SLXSLJ'] => array(),
        IUserGroup::ID['SLXWHHLYJ'] => array(),
        IUserGroup::ID['SLXWSJKHTYJ'] => array(),
        IUserGroup::ID['SLXTJJ'] => array(),
        IUserGroup::ID['SLXXZSPFWGLJ'] => array(),
        IUserGroup::ID['SLXYJGLJ'] => array(),
        IUserGroup::ID['SLXYCZMJ'] => array(),
        IUserGroup::ID['SLXQXJ'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
