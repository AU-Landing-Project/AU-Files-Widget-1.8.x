<?php

function au_files_widget_init(){
	elgg_unregister_widget_type("filerepo");
	elgg_register_widget_type('filerepo', elgg_echo("file"), elgg_echo("file:widget:description"), 'all,groups', TRUE);
}

elgg_register_event_handler("init", "system", "au_files_widget_init");