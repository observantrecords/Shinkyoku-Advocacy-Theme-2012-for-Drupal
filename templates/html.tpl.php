<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html>
<html>
	<head lang="en-us">
		<?php print $head; ?>
		<title><?php
			print $head_title_array['name'];
			if (!empty($head_title_array['title'])):
				print ' &raquo; ' . strtolower($head_title_array['title']);
			endif;
		?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
		<!--[if lt IE 9]><script type="text/javascript" src="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/js/html5.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/css/facebox.css" type="text/css" media="screen, projection" />
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<script type="text/javascript" src="<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/js/facebox.js"></script>
		<script type="text/javascript">
		var facebox_options = {
			closeImage: '<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/images/closelabel.gif',
			loadingImage: '<?php echo OBSERVANTRECORDS_CDN_BASE_URI; ?>/web/images/loading.gif'
		};
		(function ($) {
			$(function () {
				$('a[rel*=facebox]').facebox(facebox_options);
			});
		})(jQuery);
		</script>
	</head>

	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-7828220-2");
		pageTracker._trackPageview();
		} catch(err) {}
		</script>
	</body>
</html>
