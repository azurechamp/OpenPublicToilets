<?php

	$dates = array(
		drupal_render($form['field_date1']),
		drupal_render($form['field_date2']),
		drupal_render($form['field_date3']),
		drupal_render($form['field_date4']),
		drupal_render($form['field_date5']),
		drupal_render($form['field_date6']),
		drupal_render($form['field_date7']),
		drupal_render($form['field_date8']),
		drupal_render($form['field_date9']),
		drupal_render($form['field_date10']),
		drupal_render($form['field_date11']),
		drupal_render($form['field_date12']),
		drupal_render($form['field_date13']),
		drupal_render($form['field_date14']),
		drupal_render($form['field_date15']),
	);

	$subjects = array(
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

?>
	<div>
		<?php print drupal_render($form['title']) ?>

	</div>
	<div id="datesheet-form">
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>
					<table border="0" cellspacing="0" cellpadding="0" width="350">

						<tr>
							<td><strong>S.No#</strong></td>
							<td><strong>DATE</strong></td>
							<td><strong>SUBJECT</strong></td>

						</tr>
						<?php $counter=0; foreach ($dates as $date) { ?>

						<tr>
							<td width="50" valign="top"><?php print $counter+1 ?></td>
							<td width="150" valign="top"><?php print $date ?></td>
							<td width="150" valign="top"><?php print $subjects[$counter++] ?></td>
						</tr>

						<?php } ?>
					</table>
				</td>
			</tr>
		</table>
	</div>
		<?php

			print drupal_render($form['field_datesheet_end_date']);

			print drupal_render($form['field_datesheet_remarks']);

			$buttons = drupal_render($form['buttons']);

			print drupal_render($form).$buttons;

		?>
