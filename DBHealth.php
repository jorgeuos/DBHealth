<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace Piwik\Plugins\DBHealth;

class DBHealth extends \Piwik\Plugin {
    public function registerEvents() {
        return array(
            'Translate.getClientSideTranslationKeys' => 'getClientSideTranslationKeys'
        );
    }

    public function getClientSideTranslationKeys(&$translationKeys) {
        $translationKeys[] = 'DBHealth_Mysqlstatus';
        $translationKeys[] = 'DBHealth_PerformanceTuning';
    }
}
