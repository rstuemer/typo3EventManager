<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'OliverThiele.' . $_EXTKEY,
    'Pi1',
    'Events'
);

$pluginSignature = str_replace('_', '', $_EXTKEY) . '_pi1';

/**
 * Add Flexform
 */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature,
    'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

if (TYPO3_MODE === 'BE') {

    /**
     * Registers a Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'OliverThiele.' . $_EXTKEY,
        'web',     // Make module a submodule of 'web'
        'mod1',    // Submodule key
        '',                        // Position z.b. after: {Extension}
        array(
            'Event' => 'list, show, new, create, edit, update, delete',
            'EventLocation' => 'list, show, new, create, edit, update, delete',
            'EventCategory' => 'list, show, new, create, edit, update, delete',
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.png',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod1.xlf',
        )
    );
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript',
    'typo3EventManager');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_otevents_domain_model_event',
    'EXT:ot_events/Resources/Private/Language/locallang_csh_tx_otevents_domain_model_event.xlf');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_otevents_domain_model_event');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_otevents_domain_model_eventlocation',
    'EXT:ot_events/Resources/Private/Language/locallang_csh_tx_otevents_domain_model_eventlocation.xlf');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_otevents_domain_model_eventlocation');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_otevents_domain_model_eventcategory',
    'EXT:ot_events/Resources/Private/Language/locallang_csh_tx_otevents_domain_model_eventcategory.xlf');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_otevents_domain_model_eventcategory');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_otevents_domain_model_event'
);
