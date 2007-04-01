<?php
/**
 * Default configuration for the DoKubrick Template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$conf['pagename']                   = 'sidebar';                                    // the pagename for sidebars inside namespaces
$conf['user_sidebar_namespace']     = 'user';                                       // namespace to look for namespace of logged in users
$conf['group_sidebar_namespace']    = 'group';                                      // namespace to look for groups-namespaces
$conf['sidebar_content']            = 'toc,index,main,user,group,namespace';        // defines the content of the left sidebar
$conf['sidebar_order']              = 'toc,toolbox,index,main,namespace,user,group';// defines the order of the right sidebar content

//Setup vim: ts=2 sw=2:
?>
