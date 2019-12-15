<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{
	// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('tools_txicsawstatsM1', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'mod1/');	
	// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('tools','txicsawstatsM1','',\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'mod1/');

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Netcoop.nl.' . $_EXTKEY,
        'tools',          // Main area
        'txicsawstatsM1', // Name of the module
        '',               // Position of the module
        array(            // Allowed controller action combinations
        ),
        array(          // Additional configuration
            'access'    => 'admin',
            'icon'      => 'EXT:' . $_EXTKEY . '/mod1/moduleicon.gif',
            'labels'    => 'LLL:EXT:' . $_EXTKEY . '/mod1/locallang_mod.xml',
			'routeTarget' => tx_icsawstats_module1::class . '::mainAction',
        )
    );
}
?>
