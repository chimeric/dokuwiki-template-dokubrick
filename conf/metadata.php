<?php
/**
 * Configuration manager metadata for the DoKubrick Template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$meta['pagename']                 = array('string', '_pattern' => '#[a-z0-9]*');
$meta['user_sidebar_namespace']   = array('string', '_pattern' => '#^[a-z:]*#');
$meta['group_sidebar_namespace']  = array('string', '_pattern' => '#^[a-z:]*#');
$meta['sidebar_order']            = array('string', '_pattern' => '#[a-z0-9,]*#');
$meta['sidebar_content']          = array('multicheckbox', '_choices' => array('main','user','group','namespace','index','trace','extra'));
//Setup vim:ts=2:sw=2:
?>
