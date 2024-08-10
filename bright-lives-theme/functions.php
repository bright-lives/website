<?php
$template_dir = get_template_directory();

require_once($template_dir . '/hooks/actions/wp_enqueue_script.php');

require_once($template_dir. '/hooks/filters/add_ul_classes.php');
require_once($template_dir. '/hooks/filters/add_li_classes.php');
