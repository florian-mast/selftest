<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_selftest_domain_model_result'] = array(
	'ctrl' => $TCA['tx_selftest_domain_model_result']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, explanation, image, lower_limit, upper_limit',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, explanation, image, lower_limit, upper_limit,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_selftest_domain_model_result',
				'foreign_table_where' => 'AND tx_selftest_domain_model_result.pid=###CURRENT_PID### AND tx_selftest_domain_model_result.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_result.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'explanation' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_result.explanation',
			'config' => array(
                'type' => 'text',
                'cols' => '40',
                'rows' => '15'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_result.image',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file_reference',
                'uploadfolder' => 'uploads/tx_selftest',
                'allowed' => 'jpg, jepg, png',
                'disallowed' => 'php',
                'size' => 1,
            ),
		),
		'lower_limit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_result.lower_limit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'num,required',
				'default' => 0
			),
		),
		'upper_limit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_result.upper_limit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'selftest' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>