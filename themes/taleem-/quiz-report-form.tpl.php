<?php

	$topic = array (
		drupal_render($form['field_topic1']),
		drupal_render($form['field_topic2']),
		drupal_render($form['field_topic3']),
		drupal_render($form['field_topic4']),
		drupal_render($form['field_topic5']),
		drupal_render($form['field_topic6']),
		drupal_render($form['field_topic7']),
		drupal_render($form['field_topic8']),
		drupal_render($form['field_topic9']),
		drupal_render($form['field_topic10']),
		drupal_render($form['field_topic11']),
		drupal_render($form['field_topic12']),
		drupal_render($form['field_topic13']),
		drupal_render($form['field_topic14']),
		drupal_render($form['field_topic15'])
	);

	$total = array (
		drupal_render($form['field_total1']),
		drupal_render($form['field_total2']),
		drupal_render($form['field_total3']),
		drupal_render($form['field_total4']),
		drupal_render($form['field_total5']),
		drupal_render($form['field_total6']),
		drupal_render($form['field_total7']),
		drupal_render($form['field_total8']),
		drupal_render($form['field_total9']),
		drupal_render($form['field_total10']),
		drupal_render($form['field_total11']),
		drupal_render($form['field_total12']),
		drupal_render($form['field_total13']),
		drupal_render($form['field_total14']),
		drupal_render($form['field_total15'])
	);

	$obtained = array (
		drupal_render($form['field_obt1']),
		drupal_render($form['field_obt2']),
		drupal_render($form['field_obt3']),
		drupal_render($form['field_obt4']),
		drupal_render($form['field_obt5']),
		drupal_render($form['field_obt6']),
		drupal_render($form['field_obt7']),
		drupal_render($form['field_obt8']),
		drupal_render($form['field_obt9']),
		drupal_render($form['field_obt10']),
		drupal_render($form['field_obt11']),
		drupal_render($form['field_obt12']),
		drupal_render($form['field_obt13']),
		drupal_render($form['field_obt14']),
		drupal_render($form['field_obt15'])
	);

	$subject = array (
		drupal_render($form['field_subject1']),
		drupal_render($form['field_subject2']),
		drupal_render($form['field_subject3']),
		drupal_render($form['field_subject4']),
		drupal_render($form['field_subject5']),
		drupal_render($form['field_subject6']),
		drupal_render($form['field_subject7']),
		drupal_render($form['field_subject8']),
		drupal_render($form['field_subject9']),
		drupal_render($form['field_subject10']),
		drupal_render($form['field_subject11']),
		drupal_render($form['field_subject12']),
		drupal_render($form['field_subject13']),
		drupal_render($form['field_subject14']),
		drupal_render($form['field_subject15'])
	);

?>
	<table id="quiz-report-form">
		<tr>
			<td><?php print drupal_render($form['title']) ?></td>
			<td><?php print drupal_render($form['field_quiz_type']) ?></td>
		</tr>
		<tr>
			<td colspan="2"><?php print drupal_render($form['field_quiz_date']) ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<table id="quiz-report-marksheet">
					<tr>
						<td class="tcell"><strong>SUBJECT</strong></td>
						<td class="tcell"><strong>TOPIC</strong></td>
						<td class="tcell"><strong>TOTAL</strong></td>
						<td class="tcell"><strong>OBTAINED</strong></td>
					</tr>
					<?php
						for ( $i=0 ; $i<15 ; $i++ ){

						print  "<tr>
								<td>$subject[$i]</td>
								<td>$topic[$i]</td>
								<td>$total[$i]</td>
								<td>$obtained[$i]</td></tr>";
						}
					?>
				</table>
			</td>
		</tr>
	</table>

	<?php

		print drupal_render($form['field_quiz_remarks']);
		$buttons = drupal_render($form['buttons']);

		print drupal_render($form).$buttons;
	?>