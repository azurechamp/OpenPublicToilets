<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>

<?php

	$subjects = array(
		$node->field_s1[0]['value'],
		$node->field_s2[0]['value'],
		$node->field_s3[0]['value'],
		$node->field_s4[0]['value'],
		$node->field_s5[0]['value'],
		$node->field_s6[0]['value'],
		$node->field_s7[0]['value'],
		$node->field_s8[0]['value'],
		$node->field_s9[0]['value'],
		$node->field_s10[0]['value'],
		$node->field_s11[0]['value'],
		$node->field_s12[0]['value'],
		$node->field_s13[0]['value'],
		$node->field_s14[0]['value'],
		$node->field_s15[0]['value'],
	);

	$dates = array(
		$node->field_date1[0]['value'],
		$node->field_date2[0]['value'],
		$node->field_date3[0]['value'],
		$node->field_date4[0]['value'],
		$node->field_date5[0]['value'],
		$node->field_date6[0]['value'],
		$node->field_date7[0]['value'],
		$node->field_date8[0]['value'],
		$node->field_date9[0]['value'],
		$node->field_date10[0]['value'],
		$node->field_date11[0]['value'],
		$node->field_date12[0]['value'],
		$node->field_date13[0]['value'],
		$node->field_date14[0]['value'],
		$node->field_date15[0]['value'],
	);

	function check_string($param) {
		return (isset($param) && trim($param) != "");
	}

	function give_day_date($param) {
		$str1 = explode('T',$param);
		$str2 = explode('-',$str1[0]);

		$day = date('l',mktime(0,0,0,$str2[1],$str2[2],$str2[0]));

		$date = date('d-m-Y',mktime(0,0,0,$str2[1],$str2[2],$str2[0]));

		return array($day,$date);
	}

?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>

    <div class="taxonomy"><?php print $terms?></div>
    <div class="content">

    	<?php

    		if ( arg(2) && arg(2) == 'edit' ) {
    			print $content;
    		}
    		else {
    			$end_date = $node->field_datesheet_end_date[0]['value'];

    			$date1 = explode('T',$end_date);
    			$date2 = explode('-',$date1[0]);

				$enddate = mktime(0,0,0,$date2[1],$date2[2],$date2[0]);

    			$current =  mktime(0,0,0,date('m'),date('d'),date('Y'));

    			if ( $current <= $enddate ) {
    		?>

    	<div id="datesheet">
    		<table>
    			<tr>
    				<td>
    					<table border="0" cellpadding="0" cellspacing="0" width="500">
    						<tr>
    							<td width="50"><strong>S.No#</strong></td>
    							<td width="150"><strong>DAY</strong></td>
    							<td width="150"><strong>DATE</strong></td>
    							<td width="150"><strong>SUBJECT</strong></td>
    						</tr>
    						<?php

    							$counter = 0;

    							foreach( $dates as $date ) {

    								if ( check_string($date) || check_string($subjects[$counter]) ) {
    									$daten = '';
    									if ( check_string($date) ) {
    										$daten = give_day_date($date);
    									}
    						?>

    						<tr>
    							<td><?php print $counter+1 ?></td>
    							<td><?php print $daten[0] ?></td>
    							<td><?php print $daten[1] ?></td>
    							<td><?php print $subjects[$counter++] ?></td>
    						</tr>

    						<?php
    								}
    							}

    						?>
    					</table>
    				</td>
    			</tr>
				<tr>
					<td>
						<h3>REMARKS:</h3>
						<p><?php print $node->field_datesheet_remarks[0]['value']?></p>
					</td>
				</tr>
    		</table>

    	</div>

    	<?php
    			}
    			else {

    				print "The Current Datesheet End date has been passed. This datesheet is not valid now.";

    			}
    		}
    	?>
    </div>

    <span class="submitted"><?php //print $submitted; ?>
    	<?php print t('!date | !username', array('!username' => theme('username', $node), '!date' => format_date($node->created))) ?>
    </span>

    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
