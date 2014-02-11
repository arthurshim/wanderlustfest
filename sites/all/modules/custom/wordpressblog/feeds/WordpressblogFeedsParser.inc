<?php
class WordpressblogFeedsParser extends FeedsSimplePieParser {

	public function getMappingSources() {
		$sources = array(
			'sites' => array(
				'name' => 'Sites',
				'description' => 'Sites feed source',
			),
		);

		return parent::getMappingSources() + $sources;
	}

	protected function parseExtensions(&$items, $simplepie_item) {
		$value = $simplepie_item->get_item_tags(SIMPLEPIE_NAMESPACE_RSS_20, 'sites');

		$items['sites'] = $value[0]['data'];		
	}

}