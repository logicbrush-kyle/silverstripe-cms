<?php
namespace SilverStripe\CMS\Controllers;

use SilverStripe\CMS\Model\RedirectorPage;
use SilverStripe\Control\Controller;
use SilverStripe\Core\ClassInfo;
use SilverStripe\ORM\Versioning\Versioned;
use SiteTreeFutureState;

class SilverStripeNavigatorItem_StageLink extends SilverStripeNavigatorItem
{
	/** @config */
	private static $priority = 20;

	public function getHTML()
	{
		$draftPage = $this->getDraftPage();
		if ($draftPage) {
			$this->recordLink = Controller::join_links($draftPage->AbsoluteLink(), "?stage=Stage");
			return "<a " . ($this->isActive() ? 'class="current" ' : '') . "href=\"$this->recordLink\">" . _t('ContentController.DRAFTSITE',
				'Draft Site') . "</a>";
		}
	}

	public function getTitle()
	{
		return _t('ContentController.DRAFT', 'Draft',
			'Used for the Switch between draft and published view mode. Needs to be a short label');
	}

	public function getMessage()
	{
		return "<div id=\"SilverStripeNavigatorMessage\" title=\"" . _t('ContentControl.NOTEWONTBESHOWN',
			'Note: this message will not be shown to your visitors') . "\">" . _t('ContentController.DRAFTSITE',
			'Draft Site') . "</div>";
	}

	public function getLink()
	{
		$date = Versioned::current_archived_date();
		return Controller::join_links(
			$this->record->PreviewLink(),
			'?stage=Stage',
			$date ? '?archiveDate=' . $date : null
		);
	}

	public function canView($member = null)
	{
		return (
			$this->record->hasExtension('SilverStripe\ORM\Versioning\Versioned')
			&& $this->getDraftPage()
			// Don't follow redirects in preview, they break the CMS editing form
			&& !($this->record instanceof RedirectorPage)
		);
	}

	public function isActive()
	{
		return (
			Versioned::get_stage() == 'Stage'
			&& !(ClassInfo::exists('SiteTreeFutureState') && SiteTreeFutureState::get_future_datetime())
			&& !$this->isArchived()
		);
	}

	protected function getDraftPage()
	{
		$baseClass = $this->record->baseClass();
		return Versioned::get_by_stage($baseClass, Versioned::DRAFT)->byID($this->record->ID);
	}
}
