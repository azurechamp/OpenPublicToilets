<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>

<?php

	$subject = array(
		check_plain($node->field_subject1[0]['value']),
		check_plain($node->field_subject2[0]['value']),
		check_plain($node->field_subject3[0]['value']),
		check_plain($node->field_subject4[0]['value']),
		check_plain($node->field_subject5[0]['value']),
		check_plain($node->field_subject6[0]['value']),
		check_plain($node->field_subject7[0]['value']),
		check_plain($node->field_subject8[0]['value']),
		check_plain($node->field_subject9[0]['value']),
		check_plain($node->field_subject10[0]['value']),
		check_plain($node->field_subject11[0]['value']),
		check_plain($node->field_subject12[0]['value']),
		check_plain($node->field_subject13[0]['value']),
		check_plain($node->field_subject14[0]['value']),
		check_plain($node->field_subject15[0]['value'])
	);

	$total = array(
		check_plain($node->field_total1[0]['value']),
		check_plain($node->field_total2[0]['value']),
		check_plain($node->field_total3[0]['value']),
		check_plain($node->field_total4[0]['value']),
		check_plain($node->field_total5[0]['value']),
		check_plain($node->field_total6[0]['value']),
		check_plain($node->field_total7[0]['value']),
		check_plain($node->field_total8[0]['value']),
		check_plain($node->field_total9[0]['value']),
		check_plain($node->field_total10[0]['value']),
		check_plain($node->field_total11[0]['value']),
		check_plain($node->field_total12[0]['value']),
		check_plain($node->field_total13[0]['value']),
		check_plain($node->field_total14[0]['value']),
		check_plain($node->field_total15[0]['value'])
	);

	$obtained = array(
		check_plain($node->field_obt1[0]['value']),
		check_plain($node->field_obt2[0]['value']),
		check_plain($node->field_obt3[0]['value']),
		check_plain($node->field_obt4[0]['value']),
		check_plain($node->field_obt5[0]['value']),
		check_plain($node->field_obt6[0]['value']),
		check_plain($node->field_obt7[0]['value']),
		check_plain($node->field_obt8[0]['value']),
		check_plain($node->field_obt9[0]['value']),
		check_plain($node->field_obt10[0]['value']),
		check_plain($node->field_obt11[0]['value']),
		check_plain($node->field_obt12[0]['value']),
		check_plain($node->field_obt13[0]['value']),
		check_plain($node->field_obt14[0]['value']),
		check_plain($node->field_obt15[0]['value'])
	);

	$topic = array(
		check_plain($node->field_topic1[0]['value']),
		check_plain($node->field_topic2[0]['value']),
		check_plain($node->field_topic3[0]['value']),
		check_plain($node->field_topic4[0]['value']),
		check_plain($node->field_topic5[0]['value']),
		check_plain($node->field_topic6[0]['value']),
		check_plain($node->field_topic7[0]['value']),
		check_plain($node->field_topic8[0]['value']),
		check_plain($node->field_topic9[0]['value']),
		check_plain($node->field_topic10[0]['value']),
		check_plain($node->field_topic11[0]['value']),
		check_plain($node->field_topic12[0]['value']),
		check_plain($node->field_topic13[0]['value']),
		check_plain($node->field_topic14[0]['value']),
		check_plain($node->field_topic15[0]['value'])
	);

	function checkval($param){
		return (trim($param) != "" && isset($param));
	}
?>
  <div class="node-quiz<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>

    <div class="taxonomy"><?php print $terms?></div>
    <div class="content">

    	<?php
    		if ( arg(2) && arg(2) == 'edit' ) {print $content;}
			else {
		?>
				<div id="quiz-report">
					<table width="100%" cellborder="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><h2>QUIZ TYPE: <?php print check_plain($node->field_quiz_type[0]['value']) ?></h2></td>
						</tr>
						<tr>
							<td><h3>TEST DATE: <?php print $node->field_quiz_date[0]['view'] ?></h3></td>
						</tr>
						<tr>
							<td>
								<table width="100%" cellborder="0" cellspacing="0" cellpadding="6">
									<tr class="quiz-header">
										<td width="25%"><h3>SUBJECT</h3></td>
										<td width="25%"><h3>TOPIC</h3></td>
										<td width="25%"><h3>TOTAL MARKS</h3></td>
										<td width="25%"><h3>OBTAINED MARKS</h3></td>
									</tr>
									<?php
									$counter = 0;
									foreach ( $subject as $s ) {

										$class = 'quiz-odd';

										if ( $counter%2 == 0 ) {
											$class = 'quiz-even';
										}

									if ( checkval($s) || checkval($total[$counter]) || checkval($obtained[$counter]) || checkval($topic[$counter]) ) {
									print "<tr class='$class' >
											<td width='25%'>$s</td>
											<td width='25%'>$topic[$counter]</td>
											<td width='25%'>$total[$counter]</td>
											<td width='25%'>$obtained[$counter]</td>
										</tr>";
									}
									$counter++;

									}

									?>
								</table>
							</td>
						</tr>
						<tr>
							<td><h3>REMARKS: </h3><?php print check_plain($node->field_quiz_remarks[0]['value']) ?></td>
						</tr>
					</table>
				</div>
		<?php
			}
    	?>

    </div>

    <span class="submitted"><?php //print $submitted; ?>
    	<?php print t('!date | !username', array('!username' => theme('username', $node), '!date' => format_date($node->created))) ?>
    </span>

    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
