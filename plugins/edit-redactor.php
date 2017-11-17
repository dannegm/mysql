<?php

class AdminerRedactor {
	var $assets;
	var $path;

	function __construct ($assets) {
		$this->assets = $assets;
		$this->path = $assets . '/redactor';
	}

	function head () {
?>
<link rel="stylesheet" type="text/css" href="<?php echo h($this->path); ?>/redactor.css">

<script src="<?php echo h($this->assets); ?>/js/jquery.min.js"></script>
<script src="<?php echo h($this->path); ?>/redactor.js"></script>
<script>
	console.log('<?php echo $this->assets; ?>');
	// Redactor
	$(document).ready (function () {
		$('.redactor').redactor ({
			convertLinks: true,
			minHeight: 150,
		});
	});
</script>
<?php
	}

	function editInput($table, $field, $attrs, $value) {
		if (preg_match ("~text~", $field["type"])) {
			return "<textarea$attrs class=\"redactor\">" . h ($value) . "</textarea>";
		}
	}

}