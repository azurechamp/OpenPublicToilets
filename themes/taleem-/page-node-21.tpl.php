<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?>
<?php

	function get_reports_list($type,$cid) {


		$query = "SELECT nid FROM {relativity} WHERE parent_nid = $cid";

		$result = db_query($query);

		$list = array();
		while( $row = db_fetch_array($result) ) {

			$rid = $row['nid'];
			$report = node_load($rid);

			$reporttype = $report->type;


			if ( doplain($type.'report') == doplain($reporttype) && doplain($type) != 'datesheet' ) {
				$list[] = $rid;

			}
			else if(doplain($type) == 'datesheet' && doplain($type) == doplain($reporttype)) {
				$list[] = $rid;
			}
		}

		return $list;

	}

	function doplain( $param ) {

		return strtolower(trim($param));

	}

	function make_reports_list($list,$id) {

		print "<div id='$id'><ul>";

		foreach ( $list as $l ) {

			$n = node_load($l);
			$title = $n->title;
			$path = $n->path;

			print "<li><a href='/node/$l'>$title</a></li>";

		}

		print "</ul></div>";

	}

	function explode_string( $str , $token , $index ){
		$explode = explode($token,$str);

		return $explode[$index];
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

	<div id="page-wrap">
	<div id="header">
		<?php print $header ?>
	</div>

	<div id="menu">
		<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'primary-links')) ?><?php } ?>
	</div>

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
				<h1 class="title"><?php

					if ( arg(2) && arg(2) == 'edit' ) {

						print $title;

					}
					else {

						$a = $_GET['a'];
						print ucfirst(explode_string($a,'/',0))." Reports";

					}
					?></h1>
				<div class="tabs"><?php print $tabs ?></div>
				<?php if ($show_messages) { print $messages; } ?>
				<?php print $help ?>
				<?php

					if ( arg(2) && arg(2) == 'edit' ) {

					print $content;

					}
					else {

						$a = $_GET['a'];
						$explode = explode("/",$a);


						$list = get_reports_list($explode[0],$explode[1]);
						if ( sizeof($list) ) {
						make_reports_list($list,'reports-list');
						}
						else {
							print "<div id='no-report'><p>There are no Reports.</p></div>";
						}
					}
				?>
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
