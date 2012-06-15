<?php

$widget = $vars['entity'];

// now we can get our content
$options = eligo_get_display_entities_options($widget);

$content = elgg_list_entities($options);

echo $content;

if ($content) {
	$url = "file/owner/" . elgg_get_page_owner_entity()->username;
	$more_link = elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('file:more'),
		'is_trusted' => true,
	));
	echo "<span class=\"elgg-widget-more\">$more_link</span>";
} else {
	echo elgg_echo('file:none');
}
