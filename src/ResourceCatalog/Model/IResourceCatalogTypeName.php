<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    public const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
        IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
        IResourceCatalog::TYPE['GGXYZHPJ'] => '公共信用综合评价',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['ZYZXX'] => '志愿者信息',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => '事业单位法人登记信息',
        IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
        IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXSZLJDW'] => '山西省专利奖（单位）',
        IResourceCatalog::TYPE['QYRYXX'] => '企业荣誉信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
        IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '拖欠农民工工资失信联合惩戒对象名单',
        IResourceCatalog::TYPE['PGJGXX'] => '评估机构信息',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => '产品通过“绿色之星”产品认证名单',
        IResourceCatalog::TYPE['ZLJCQYXX'] => '质量检测企业信息',
        IResourceCatalog::TYPE['XZXKQYXX'] => '行政许可企业信息',
        IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['SLGCZBXX'] => '水利工程中标信息',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => '借款企业信用评级A级以上名单',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => '国家级龙头企业认证信息',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => '医师执业注册和变更注册',
        IResourceCatalog::TYPE['YSZYZGZXX'] => '医师执业资格证信息',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => '卫生和计划生育委员会基础信息',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => '医疗和计生服务机构信息',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => '疾病预防控制机构信息',
        IResourceCatalog::TYPE['FYCRYJLXX'] => '妇幼处荣誉奖励信息',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => '卫生专业技术资格考试违纪信息',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => '对全市无偿献血先进单位的表彰奖励',
        IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['SXMPCPXX'] => '山西名牌产品信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
        IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
        IResourceCatalog::TYPE['LLSTYXHDJXX'] => '吕梁市体育协会登记信息',
        IResourceCatalog::TYPE['DTJXJGRXX'] => '对统计先进个人信息',
        IResourceCatalog::TYPE['TJDCDXML'] => '统计调查对象目录',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => '银行业金融机构处罚信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => '重大税收违法案件信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业税务行政处罚信息',
        IResourceCatalog::TYPE['SPFYSXK'] => '商品房预售许可',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => '房地产开发企业资质信息',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => '气象探测环境保护监督信息',
        IResourceCatalog::TYPE['SYDWJBXX'] => '事业单位基本信息',
        IResourceCatalog::TYPE['HTLY'] => '合同履约',
        IResourceCatalog::TYPE['QYHYSJ'] => '企业行业数据',
        IResourceCatalog::TYPE['ZDRQXYDA'] => '重点人群信用档案',
        IResourceCatalog::TYPE['XYSFSQ'] => '信用示范（商圈、街区）',
        IResourceCatalog::TYPE['CCJCJG'] => '抽查检查结果',
        IResourceCatalog::TYPE['YZTQNMGGZHMDGR'] => '严重拖欠农民工工资名单个人',
        IResourceCatalog::TYPE['FRXZCJ'] => '法人行政裁决',
        IResourceCatalog::TYPE['FRXZJDJC'] => '法人行政监督检查',
        IResourceCatalog::TYPE['FRXZJL'] => '法人行政奖励',
        IResourceCatalog::TYPE['FRXZQR'] => '法人行政确认',
        IResourceCatalog::TYPE['FRXZQZ'] => '法人行政强制',
        IResourceCatalog::TYPE['ZRRXZCJ'] => '自然人行政裁决',
        IResourceCatalog::TYPE['ZRRXZJDJC'] => '自然人行政监督检查',
        IResourceCatalog::TYPE['ZRRXZJL'] => '自然人行政奖励',
        IResourceCatalog::TYPE['ZRRXZQR'] => '自然人行政确认',
        IResourceCatalog::TYPE['ZRRXZQZ'] => '自然人行政强制',
        IResourceCatalog::TYPE['DFJFXX'] => '电费缴费信息',
        IResourceCatalog::TYPE['FZCNSHXX'] => '非正常纳税户',
        IResourceCatalog::TYPE['HBXYPJQK'] => '环保信用评价情况',
        IResourceCatalog::TYPE['KJYFXX'] => '科技研发信息',
        IResourceCatalog::TYPE['NSXX'] => '纳税信息',
        IResourceCatalog::TYPE['QSXX'] => '欠税信息',
        IResourceCatalog::TYPE['QYMXBDCDJQK'] => '企业名下不动产登记情况',
        IResourceCatalog::TYPE['QYMXFCDYXX'] => '企业名下房产抵押信息',
        IResourceCatalog::TYPE['RQFJFXX'] => '燃气费缴费信息',
        IResourceCatalog::TYPE['SFJFXX'] => '水费缴费信息',
        IResourceCatalog::TYPE['XXNYJYZTXX'] => '新型农业经营主体信息',
        IResourceCatalog::TYPE['BDCDYYWXX'] => '不动产抵押业务信息',
        IResourceCatalog::TYPE['BDCFWXQ'] => '不动产房屋详情',
        IResourceCatalog::TYPE['BDCQLR'] => '不动产权利人',
        IResourceCatalog::TYPE['NSXYDJ'] => '纳税信用等级',
        //@position
        IResourceCatalog::TYPE['TEST'] => '演示资源目录',
    );
}
