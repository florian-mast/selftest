<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_selftest_domain_model_block'] = array(
	'ctrl' => $TCA['tx_selftest_domain_model_block']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, label, answers, options, show_labelrow',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, label, answers, options,show_labelrow,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_selftest_domain_model_selftest',
				'foreign_table_where' => 'AND tx_selftest_domain_model_selftest.pid=###CURRENT_PID### AND tx_selftest_domain_model_selftest.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_selftest.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        'label' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_selftest.label',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),		
		'answers' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_selftest.answers',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_selftest_domain_model_answer',
				'foreign_field' => 'block',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'options' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_selftest.options',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_selftest_domain_model_option',
				'foreign_field' => 'block',
                'foreign_sortby' => 'sorting',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
        'show_labelrow' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:selftest/Resources/Private/Language/locallang_db.xlf:tx_selftest_domain_model_selftest.label_row',
        'config' => array(
                'type' => 'check',
                'default' => 1
            )
        ),		
	),
);

?>