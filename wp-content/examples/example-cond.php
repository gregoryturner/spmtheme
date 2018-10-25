<?php //example: conditional loading
// to improve performance, makde sure the file is only available to admins
if (is_admin()) {
  require_once(dirname(__FILE__) . '/admin/do-stuff.php');
}