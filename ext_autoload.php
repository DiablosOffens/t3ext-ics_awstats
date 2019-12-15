<?php 
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('ics_awstats');
return array(
	'tx_icsawstats_updatetask' => $extensionPath . 'tasks/class.tx_icsawstats_updatetask.php',
	'tx_icsawstats_awstats' => $extensionPath . 'classes/class.tx_icsawstats_awstats.php',
	'tx_icsawstats_module1' => $extensionPath . 'mod1/index.php',
);
?>