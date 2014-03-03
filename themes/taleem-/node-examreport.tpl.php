<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>

<?php

	$subject = array(
		check_plain($node->field_s1[0]['value']),
		check_plain($node->field_s2[0]['value']),
		check_plain($node->field_s3[0]['value']),
		check_plain($node->field_s4[0]['value']),
		check_plain($node->field_s5[0]['value']),
		check_plain($node->field_s6[0]['value']),
		check_plain($node->field_s7[0]['value']),
		check_plain($node->field_s8[0]['value']),
		check_plain($node->field_s9[0]['value']),
		check_plain($node->field_s10[0]['value']),
		check_plain($node->field_s11[0]['value']),
		check_plain($node->field_s12[0]['value']),
		check_plain($node->field_s13[0]['value']),
		check_plain($node->field_s14[0]['value']),
		check_plain($node->field_s15[0]['value'])
	);

	$total = array(
		check_plain($node->field_t1[0]['value']),
		check_plain($node->field_t2[0]['value']),
		check_plain($node->field_t3[0]['value']),
		check_plain($node->field_t4[0]['value']),
		check_plain($node->field_t5[0]['value']),
		check_plain($node->field_t6[0]['value']),
		check_plain($node->field_t7[0]['value']),
		check_plain($node->field_t8[0]['value']),
		check_plain($node->field_t9[0]['value']),
		check_plain($node->field_t10[0]['value']),
		check_plain($node->field_t11[0]['value']),
		check_plain($node->field_t12[0]['value']),
		check_plain($node->field_t13[0]['value']),
		check_plain($node->field_t14[0]['value']),
		check_plain($node->field_t15[0]['value'])
	);

	$obtained = array(
		check_plain($node->field_o1[0]['value']),
		check_plain($node->field_o2[0]['value']),
		check_plain($node->field_o3[0]['value']),
		check_plain($node->field_o4[0]['value']),
		check_plain($node->field_o5[0]['value']),
		check_plain($node->field_o6[0]['value']),
		check_plain($node->field_o7[0]['value']),
		check_plain($node->field_o8[0]['value']),
		check_plain($node->field_o9[0]['value']),
		check_plain($node->field_o10[0]['value']),
		check_plain($node->field_o11[0]['value']),
		check_plain($node->field_o12[0]['value']),
		check_plain($node->field_o13[0]['value']),
		check_plain($node->field_o14[0]['value']),
		check_plain($node->field_o15[0]['value'])
	);

	$percentage = array(
		check_plain($node->field_p1[0]['value']),
		check_plain($node->field_p2[0]['value']),
		check_plain($node->field_p3[0]['value']),
		check_plain($node->field_p4[0]['value']),
		check_plain($node->field_p5[0]['value']),
		check_plain($node->field_p6[0]['value']),
		check_plain($node->field_p7[0]['value']),
		check_plain($node->field_p8[0]['value']),
		check_plain($node->field_p9[0]['value']),
		check_plain($node->field_p10[0]['value']),
		check_plain($node->field_p11[0]['value']),
		check_plain($node->field_p12[0]['value']),
		check_plain($node->field_p13[0]['value']),
		check_plain($node->field_p14[0]['value']),
		check_plain($node->field_p15[0]['value'])
	);

	function checkval($param){
		return (trim($param) != "" && isset($param));
	}
?>
  <div class="node-exam<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
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
				<div id="exam-report">
					<table width="100%" cellborder="0" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan="2"><h2>EXAM TYPE: <?php print check_plain($node->field_exam_type[0]['value']) ?></h2></td>
						</tr>
						<tr>
							<td><h3>START DATE: <?php print $node->field_start_date[0]['view'] ?></h3></td>
							<td><h3>END DATE: <?php print $node->field_end_date[0]['view'] ?></h3></td>
						</tr>
						<tr>
							<td colspan="2">
								<table width="100%" cellborder="0" cellspacing="0" cellpadding="6">
									<tr class="quiz-header">
										<td width="25%"><h3>SUBJECT</h3></td>
										<td width="25%"><h3>TOTAL MARKS</h3></td>
										<td width="25%"><h3>OBTAINED MARKS</h3></td>
										<td width="25%"><h3>PERCENTAGE(%)</h3></td>
									</tr>
									<?php
									$counter = 0;
									foreach ( $subject as $s ) {

										$class = 'quiz-odd';

										if ( $counter%2 == 0 ) {
											$class = 'quiz-even';
										}

									if ( checkval($s) || checkval($total[$counter]) || checkval($obtained[$counter]) || checkval($percentage[$counter]) ) {
									print "<tr class='$class' >
											<td width='25%'>$s</td>
											<td width='25%'>$total[$counter]</td>
											<td width='25%'>$obtained[$counter]</td>
											<td width='25%'>$percentage[$counter]</td>
										</tr>";
									}
									$counter++;

									}

									?>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2"><h3>GRADE: </h3><?php print check_plain($node->field_grade[0]['value']) ?></td>
						</tr>
						<tr>
							<td colspan="2"><h3>REMARKS: </h3><?php print check_plain($node->field_remarks[0]['value']) ?></td>
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
