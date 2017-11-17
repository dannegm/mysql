<?php

error_reporting (0);
function adminer_object () {
	include_once './plugins/plugin.php';
	foreach (glob ('plugins/*.php') as $plugin) {
		include_once "./{$plugin}";
	}
	$plugins = [
		new AdminerDumpJson,
		new AdminerEnumOption,
		new AdminerEditTextarea,
		new AdminerJsonColumn,
		new AdminerLinksDirect,
		new AdminerRedactor ('./assets'),
	];
	return new AdminerPlugin ($plugins);
}
include './adminer.php';
?>