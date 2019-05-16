<?php
/**
 * @package     redCORE
 * @subpackage  Cept
 * @copyright   Copyright (C) 2008 - 2019 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
use Step\Acceptance\AbstractStep;
use Page\UrlPage as url ;

// Load the Step Object Page
class CheckForWarningsAndNoticesCest
{
	/**
	 * @param AbstractStep $I
	 * @throws Exception
	 */
	public function CheckForWarningsAndNotices(AbstractStep $I)
	{
		$I->doAdministratorLogin();
		$I->Enabletranslations();
		$I->checkForPhpNoticesOrWarnings(url::$url1);
		$I->checkForPhpNoticesOrWarnings(url::$urlTranslationTables);
		$I->checkForPhpNoticesOrWarnings(url::$urlBannerClients);
		$I->checkForPhpNoticesOrWarnings(url::$urlBannersReturn);
		$I->checkForPhpNoticesOrWarnings(url::$urlCategories);
		$I->checkForPhpNoticesOrWarnings(url::$urlContactDetails);
		$I->checkForPhpNoticesOrWarnings(url::$urlContent);
		$I->checkForPhpNoticesOrWarnings(url::$urlLanguages);
		$I->checkForPhpNoticesOrWarnings(url::$urlMenu);
		$I->checkForPhpNoticesOrWarnings(url::$urlModules);
		$I->checkForPhpNoticesOrWarnings(url::$urlExtensions);
		$I->checkForPhpNoticesOrWarnings(url::$urlRedcoreCountry);
		$I->checkForPhpNoticesOrWarnings(url::$urlRedcore_Currency);
		$I->checkForPhpNoticesOrWarnings(url::$urlUser);
		$I->checkForPhpNoticesOrWarnings(url::$urlWebServices);
		$I->checkForPhpNoticesOrWarnings(url::$urlOauthClients);
		$I->checkForPhpNoticesOrWarnings(url::$urlPaymentDashboard);
		$I->checkForPhpNoticesOrWarnings(url::$urlPaymentConfigurations);
		$I->checkForPhpNoticesOrWarnings(url::$urlPayments);
	}
}