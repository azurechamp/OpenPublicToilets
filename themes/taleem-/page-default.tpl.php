<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript" src="/files/jquery.selectboxes.js"></script>

  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  <?php
  
  if($node->type=='academy'){
	if(arg(1)=='add' || arg(2)=='edit') {
	  	$bodyclass="node-profile-edit";
	}
  }
  ?>

</head>

<body class="<?php print $bodyclass ?>">

	<div id="page-wrap">
	<div id="menu">
		<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'primary-links')) ?><?php } ?>
		<div id="search-bar">
			<?php print $search; ?>
			<?php print $loginbar; ?>
			<br clear="all" />
		</div>
	</div>
	<div id="header">
		<?php print $header ?>
	</div>
<?php /*?>
	<div id="menu">
		<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'primary-links')) ?><?php } ?>
	</div><?php */?>

	<div id="sub-links">
			<div id="sub-links1"><?php print $sublinks1 ?></div>
			<div id="sub-links2"><?php print $sublinks2 ?></div>
			<div id="sub-links3"><?php print $sublinks3 ?></div>
			<div id="sub-links4"><?php print $sublinks4 ?></div>
			<div id="sub-links5"><?php print $sublinks5 ?></div>
			<div id="sub-links6"><?php print $sublinks6 ?></div>
	</div>

	<div id="content-main">
		<table border="0" cellpadding="0" cellspacing="0" id="content">
		  <tr>
			<?php if ($left) { ?><td id="sidebar-left" class="sidebar">
			  <?php print $left ?>
			</td><?php } ?>
			<td valign="top">
			  <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
			  <div id="main">
				<?php //print $breadcrumb ?>
				<h1 class="title"><?php print $title ?></h1>
				<div class="tabs"><?php print $tabs ?></div>
				<?php if ($show_messages) { print $messages; } ?>
				<?php print $help ?>
				<?php print $content; ?>
			  </div>
			</td>
			<?php if ($right) { ?><td id="sidebar-right" class="sidebar">
			  <?php print $right ?>
			</td><?php } ?>
		  </tr>
		</table>
	</div>

	<div id="footer">

	  <?php print $footer_message ?>
	  <?php print $footer ?>

	</div>

	<?php print $closure ?>

</div>

</body>

</html>
