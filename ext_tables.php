<?php
defined('TYPO3_MODE') or die();

// Apps need to be loaded in ext_tables.php, not in ext_localconf.php
// since some initialization in the bootstrap clears $GLOBALS['TBE_MODULES']
// prior to execute the definitions of each ext_tables.php
\TYPO3Incubator\EventManager\Bootstrap::initializeApps();