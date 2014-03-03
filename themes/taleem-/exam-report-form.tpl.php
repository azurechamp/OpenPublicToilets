<?php

	$subject = array (
		drupal_render($form['field_s1']),
		drupal_render($form['field_s2']),
		drupal_render($form['field_s3']),
		drupal_render($form['field_s4']),
		drupal_render($form['field_s5']),
		drupal_render($form['field_s6']),
		drupal_render($form['field_s7']),
		drupal_render($form['field_s8']),
		drupal_render($form['field_s9']),
		drupal_render($form['field_s10']),
		drupal_render($form['field_s11']),
		drupal_render($form['field_s12']),
		drupal_render($form['field_s13']),
		drupal_render($form['field_s14']),
		drupal_render($form['field_s15']),
	);

	$total = array(
		drupal_render($form['field_t1']),
		drupal_render($form['field_t2']),
		drupal_render($form['field_t3']),
		drupal_render($form['field_t4']),
		drupal_render($form['field_t5']),
		drupal_render($form['field_t6']),
		drupal_render($form['field_t7']),
		drupal_render($form['field_t8']),
		drupal_render($form['field_t9']),
		drupal_render($form['field_t10']),
		drupal_render($form['field_t11']),
		drupal_render($form['field_t12']),
		drupal_render($form['field_t13']),
		drupal_render($form['field_t14']),
		drupal_render($form['field_t15'])
	);

	$obtained = array(
		drupal_render($form['field_o1']),
		drupal_render($form['field_o2']),
		drupal_render($form['field_o3']),
		drupal_render($form['field_o4']),
		drupal_render($form['field_o5']),
		drupal_render($form['field_o6']),
		drupal_render($form['field_o7']),
		drupal_render($form['field_o8']),
		drupal_render($form['field_o9']),
		drupal_render($form['field_o10']),
		drupal_render($form['field_o11']),
		drupal_render($form['field_o12']),
		drupal_render($form['field_o13']),
		drupal_render($form['field_o14']),
		drupal_render($form['field_o15'])
	);

	$percent = array(
		drupal_render($form['field_p1']),
		drupal_render($form['field_p2']),
		drupal_render($form['field_p3']),
		drupal_render($form['field_p4']),
		drupal_render($form['field_p5']),
		drupal_render($form['field_p6']),
		drupal_render($form['field_p7']),
		drupal_render($form['field_p8']),
		drupal_render($form['field_p9']),
		drupal_render($form['field_p10']),
		drupal_render($form['field_p11']),
		drupal_render($form['field_p12']),
		drupal_render($form['field_p13']),
		drupal_render($form['field_p14']),
		drupal_render($form['field_p15'])
	);

?>

	<table>
		<tr>
			<td><?php print drupal_render($form['title']); ?></td>
			<td><?php print drupal_render($form['field_exam_type']); ?></td>
		</tr>
		<tr>
			<td colspan="2"><?php print drupal_render($form['field_start_date']); ?></td>
		</tr>
		<tr>
			<td colspan="2"><?php print drupal_render($form['field_end_date']); ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<table id="exam-report-marksheet">
					<tr>
						<td class="tcell"><strong>SUBJECT</strong></td>
						<td class="tcell"><strong>TOTAL MARKS</strong></td>
						<td class="tcell"><strong>OBTAINED MARKS</strong></td>
						<td class="tcell"><strong>PERCENTAGE(%)</strong></td>
					</tr>
					<?php

						for ( $i = 0 ; $i < 15 ; $i++ ){

							print "<tr>
								<td class='tcell'>$subject[$i]</td>
								<td class='tcell'>$total[$i]</td>
								<td class='tcell'>$obtained[$i]</td>
								<td class='tcell'>$percent[$i]</td>
							</tr>";

						}

					?>
				</table>
			</td>
		</tr>
	</table>

	<?php
		print drupal_render($form['field_grade']);
		print drupal_render($form['field_remarks']);

		$buttons = drupal_render($form['buttons']);

		print drupal_render($form).$buttons;

	?>