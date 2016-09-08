<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'OliverThiele.' . $_EXTKEY,
	'Pi1',
	array(
		'Event' => 'list, show, new, create, edit, update, delete,listSearchResults',
		'EventLocation' => 'list, show, new, create, edit, update, delete',
		'EventCategory' => 'list, show, new, create, edit, update, delete',

	),
	// non-cacheable actions
	array(
		'Event' => 'create, update, delete,listSearchResults',
		'EventLocation' => 'create, update, delete',
		'EventCategory' => 'create, update, delete',

	)
);
