<?php

require_once 'memcache_constants.inc';

function cacherouter_stats_memcache_admin()
{
	global $conf;

	$output = '<br><br><br>' . l('Full page', 'admin/cacherouter_stats/memcache/full') . '<br><br><br>'; 
	$servers = array();
	$bins = $conf['cacherouter'];

	$i = 0;
	foreach ($bins as $bin_name => $bin_settings) {
		$output .= drupal_get_form('cacherouter_stats_memcache_clear_cache_' . $i++, array('name' => $bin_name, 'servers' => $bin_settings['servers']));
	}

	return $output;
}

function cacherouter_stats_forms($form_id) {
	$forms = array();
	if (strpos($form_id, 'cacherouter_stats_memcache_clear_cache_') === 0) {
		$forms[$form_id] = array(
				'callback' => 'cacherouter_stats_memcache_clear_cache',
				);
	}
	return $forms;
}

function cacherouter_stats_memcache_clear_cache($form_state, $bin)
{
    $form = array();
	$bin_name = $bin['name'];
	$servers = $bin['servers'];

	$form['clear_' . $bin_name] = array(
			'#type' => 'fieldset',
			'#title' => t('Clear the <b>' . $bin_name . '</b> cache'),
			);
	$form['clear_' . $bin_name]['servers'] = array(
			'#type' => 'checkboxes',
			'#title' => t('Servers'),
			//'#required' => TRUE,
			'#options' => drupal_map_assoc($servers),
			);
	$form['clear_' . $bin_name]['submit'] = array('#type' => 'submit', '#value' => 'Clear cache');
	$form['#submit'] = array('cacherouter_stats_memcache_clear_cache_submit');

    return $form;
}

function cacherouter_stats_memcache_clear_cache_submit(&$form, &$form_state)
{
    require_once 'memcache.inc';

    foreach($form_state['values']['servers'] as $server => $value) {
        if ($value !== 0)
        {
            $e = memcache_gui::flushServer($server);
            if ($e === 'OK')
                drupal_set_message('Cleared cache for server ' . $server);
            else
                drupal_set_message('Server ' . $server . ' responded with: ' . $e, 'error');
        }
    }
}

function cacherouter_stats_memcache_display($arg = NULL)
{
    require_once 'memcache.inc';

	global $conf;
	$servers = array();
	$bins = $conf['cacherouter'];

	foreach ($bins as $bin) {
		$servers = array_merge($servers, $bin['servers']);
	}

	$servers = array_unique($servers);

    // don't cache this page
    header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");                                    // HTTP/1.0

    if ($arg === 'full') {
        $gui = new memcache_gui($servers);
        $gui->full_display();
        exit;
    }
    switch ($arg) {
        case 'host':
            $gui = new memcache_gui($servers);
            return $gui->section_host_stats();
        case 'variables':
            $gui = new memcache_gui($servers);
            return $gui->section_variables();
    }
}

function cacherouter_stats_memcache_full()
{
    return cacherouter_stats_memcache_display('full');
}

function cacherouter_stats_memcache_host()
{
    return cacherouter_stats_memcache_display('host');
}


function cacherouter_stats_memcache_variables()
{
    return cacherouter_stats_memcache_display('variables');
}

function cacherouter_stats_memcache_servers()
{
    $head = array(
            array('data' => t('Bin'), 'sort' => 'asc'),
            array('data' => t('Server'), 'sort' => 'asc'),
            array('data' => t('Port')),
            array('data' => 'Operations'),
            );
    $rows = array();

    global $conf;
	$servers = array();
	$bins = $conf['cacherouter'];

	foreach ($bins as $bin_name => $bin_settings) {
		$servers = $bin_settings['servers'];

		foreach ($servers as $server) {
			list($ip, $port) = explode(":", $server);
			$rows[] = array(
				array('data' => $bin_name),
				array('data' => $ip, 'width' => 200),
				array('data' => $port),
				array('data' => '...'),
			);
		}
	}

    $output .= theme('table', $head, $rows);
    return $output;

}

