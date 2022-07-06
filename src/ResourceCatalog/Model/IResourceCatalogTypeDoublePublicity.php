<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GGXYZHPJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZYZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SYDWFRDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXSZLJDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['PGJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ZLJCQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['XZXKQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SLGCZBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['HSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JBYFKZJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FYCRYJLXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXMPCPXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['LLSTYXHDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['SPFYSXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SYDWJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HTLY'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYHYSJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZDRQXYDA'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XYSFSQ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CCJCJG'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YZTQNMGGZHMDGR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXZCJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXZJDJC'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXZQR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['FRXZQZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZRRXZCJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZRRXZJDJC'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZRRXZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZRRXZQR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZRRXZQZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        //@position
    );
}
