

<?php
// $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'].= ',tx_realurl_pathsegment'; // Nicht mehr nötig
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
    'encodeSpURL_postProc' => array('user_encodeSpURL_postProc'),
    'decodeSpURL_preProc' => array('user_decodeSpURL_preProc'),
    '_DEFAULT' => array(
        'init' => array(
            'enableCHashCache' => 1,
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => 1,
            'enableUrlEncodeCache' => 1,
            'postVarSet_failureMode' => '',
        ),
        'redirects' => array(),
        'preVars' => array(
            array(
                'GETvar' => 'no_cache',
                'valueMap' => array(
                    'nc' => 1,
                ),
                'noMatch' => 'bypass',
            ),
            array(
                'GETvar' => 'L',
                'valueMap' => array(
                    # 'de' => '0',
                    'en' => '1',
                ),
                'valueDefault' => 'de',
                'noMatch' => 'bypass',
            ),
        ),
        'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => 7,
            'rootpage_id' => 1,
            'firstHitPathCache' => 1,
        ),
        'fixedPostVars' => array(),
        'postVarSets' => array(
            '_DEFAULT' => array(
//                'event' => array(
//                    array(
//                        'GETvar' => 'tx_otevents_pi1[controller]',
//                    ),
//                    array(
//                        'GETvar' => 'tx_otevents_pi1[action]',
//                    ),
//                    array(
//                        'GETvar' => 'tx_otevents_pi1[event]',
//                        'lookUpTable' => array(
//                            'table' => 'tx_otevents_domain_model_event',
//                            'id_field' => 'uid',
//                            'alias_field' => 'title',
//                            'addWhereClause' => ' AND NOT deleted',
//                            'useUniqueCache' => 1,
//                            'useUniqueCache_conf' => array(
//                                'strtolower' => 1,
//                                'spaceCharacter' => '-',
//                            ),
//                        ),
//                    ),
//                ),
//                'events' => array(
//                    array(
//                        'GETvar' => 'tx_otevents_pi1[controller]',
//                    ),
//                    array(
//                        'GETvar' => 'tx_otevents_pi1[action]',
//                    ),
//                ),
                // news archive parameters
                'archive' => array(
                    array(
                        'GETvar' => 'tx_ttnews[year]' ,
                    ),
                    array(
                        'GETvar' => 'tx_ttnews[month]' ,
                        'valueMap' => array(
                            'january' => '01',
                            'february' => '02',
                            'march' => '03',
                            'april' => '04',
                            'may' => '05',
                            'june' => '06',
                            'july' => '07',
                            'august' => '08',
                            'september' => '09',
                            'october' => '10',
                            'november' => '11',
                            'december' => '12',
                        )
                    ),
                ),
                // news pagebrowser
                'browse' => array(
                    array(
                        'GETvar' => 'tx_ttnews[pointer]',
                    ),
                ),
                // news categories
                'select_category' => array (
                    array(
                        'GETvar' => 'tx_ttnews[cat]',
                    ),
                ),
                // news articles and searchwords
                'article' => array(
                    array(
                        'GETvar' => 'tx_ttnews[tt_news]',
                        'lookUpTable' => array(
                            'table' => 'tt_news',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => array(
                                'strtolower' => 1,
                                'spaceCharacter' => '-',
                            ),
                        ),
                    ),
                    array(
                        'GETvar' => 'tx_ttnews[backPid]',
                    ),
                    array(
                        'GETvar' => 'tx_ttnews[swords]',
                    ),
                ),

            ),
        ),
        // configure filenames for different pagetypes
        'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => 0,
            'index' => array(
                'print.html' => array(
                    'keyValues' => array(
                        'type' => 98,
                    ),
                ),
                'rss.xml' => array(
                    'keyValues' => array(
                        'type' => 100,
                    ),
                ),
                'rss091.xml' => array(
                    'keyValues' => array(
                        'type' => 101,
                    ),
                ),
                'rdf.xml' => array(
                    'keyValues' => array(
                        'type' => 102,
                    ),
                ),
                'atom.xml' => array(
                    'keyValues' => array(
                        'type' => 103,
                    ),
                ),
            ),
        ),
    ),

);
function user_encodeSpURL_postProc(&$params, &$ref) {
    $params['URL'] = str_replace('event/Event/show/', 'event/', $params['URL']);
}
function user_decodeSpURL_preProc(&$params, &$ref)
{
    $params['URL'] = str_replace('event/', 'event/Event/show/', $params['URL']);
}
