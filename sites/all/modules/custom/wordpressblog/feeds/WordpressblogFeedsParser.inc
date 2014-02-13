<?php
class WordpressblogFeedsParser extends FeedsSimplePieParser {

	public function getMappingSources() {
		$sources = array(
			'sites' => array(
				'name' => 'Sites',
				'description' => 'Sites feed source',
			),
			'image' => array(
				'name' => 'Image source',
				'description' => "Image feed source",
			),
		);

		return parent::getMappingSources() + $sources;
	}

	protected function parseExtensions(&$items, $simplepie_item) {

		if($value = $simplepie_item->get_item_tags(SIMPLEPIE_NAMESPACE_RSS_20, 'sites')) {
			$items['sites'] = $value[0]['data'];		
		}

		if($value = $simplepie_item->get_item_tags(SIMPLEPIE_NAMESPACE_RSS_20, 'image') ) {
			$items['image'] = $value[0]['data'];
		}

	}

}