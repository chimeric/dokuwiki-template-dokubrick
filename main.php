<?php
/**
 * DokuWiki DoKubrick Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Michael Klier <chi@chimeric.de>
 * @link   http://dokuwiki.org/template:dokubrick
 * @link   http://chimeric.de/projects/dokuwiki/template/arctic/
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

// include custom arctic template functions
require_once(dirname(__FILE__).'/tpl_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>

</head>
<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">

  <?php html_msgarea()?>

  <div class="stylehead">
    <div class="header">
      <div class="logo">
        <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" accesskey="h" title="[ALT+H]"')?>
      </div>
    </div>
  </div>

  <div id="wrapper">
    <div class="breadcrumbs">
      <?php ($conf['youarehere'] != 1) ? tpl_breadcrumbs() : tpl_youarehere();?>
    </div>

    <?php flush()?>

    <?php if($ACT != 'diff' && $ACT != 'edit' && $ACT != 'preview' 
          && $ACT != 'admin' && $ACT != 'login' && $ACT != 'profile' && $ACT != 'conflict') 
    { ?>
    <div class="left_page">
      <?php tpl_content(false)?>
    </div>
    <div class="sidebar">
      <?php tpl_searchform() ?>
      <?php tpl_sidebar() ?>
    </div>
    <?php } else { ?>
    <div class="page">
      <?php tpl_content()?> 
    </div> 
    <?php } ?>

    <div class="stylefoot">
      <div class="meta">
        <div class="user">
        <?php tpl_userinfo()?>
        </div>
        <div class="doc">
        <?php tpl_pageinfo()?>
        </div>
      </div>
    </div>
  </div>

  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
