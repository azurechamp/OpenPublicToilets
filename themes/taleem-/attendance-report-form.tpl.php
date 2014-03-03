<script type="text/javascript">

	$(document).ready( function(){

		$('#edit-field-month-value').change( function() {

				var month = $('#edit-field-month-value').val();
				var year = $('#edit-field-year-value').val();
				window.open("/node/add/attendancereport/parent/<?php print arg(4) ?>/"+month+"/"+year,'_self');
		});

		$('#edit-field-year-value').change( function() {

				var month = $('#edit-field-month-value').val();
				var year = $('#edit-field-year-value').val();
				window.open("/node/add/attendancereport/parent/<?php print arg(4) ?>/"+month+"/"+year,'_self');
		});
	});

</script>
<?php

    $m = (!$m) ? date("m",mktime()) : "$m";
    $y = (!$y) ? date("Y",mktime()) : "$y";

	$fields = array(
		drupal_render($form["field_d1_select"]),
		drupal_render($form["field_d2_select"]),
		drupal_render($form["field_d3_select"]),
		drupal_render($form["field_d4_select"]),
		drupal_render($form["field_d5_select"]),
		drupal_render($form["field_d6_select"]),
		drupal_render($form["field_d7_select"]),
		drupal_render($form["field_d8_select"]),
		drupal_render($form["field_d9_select"]),
		drupal_render($form["field_d10_select"]),
		drupal_render($form["field_d11_select"]),
		drupal_render($form["field_d12_select"]),
		drupal_render($form["field_d13_select"]),
		drupal_render($form["field_d14_select"]),
		drupal_render($form["field_d15_select"]),
		drupal_render($form["field_d16_select"]),
		drupal_render($form["field_d17_select"]),
		drupal_render($form["field_d18_select"]),
		drupal_render($form["field_d19_select"]),
		drupal_render($form["field_d20_select"]),
		drupal_render($form["field_d21_select"]),
		drupal_render($form["field_d22_select"]),
		drupal_render($form["field_d23_select"]),
		drupal_render($form["field_d24_select"]),
		drupal_render($form["field_d25_select"]),
		drupal_render($form["field_d26_select"]),
		drupal_render($form["field_d27_select"]),
		drupal_render($form["field_d28_select"]),
		drupal_render($form["field_d29_select"]),
		drupal_render($form["field_d30_select"]),
		drupal_render($form["field_d31_select"])
	);

print drupal_render($form['title']);
?>
<div id="att-month"><?php print drupal_render($form['field_month']) ?></div>
<div id="att-year"><?php print drupal_render($form['field_year']) ?></div>
<br/>
<?php

if ( arg(3) == 'parent' ) {
mk_drawCalendar(arg(5),arg(6),$fields);
}
else {
mk_drawCalendar(arg(3),arg(4),$fields);
}
print drupal_render($form['body_field']);

function mk_drawCalendar($m,$y,$f)
{
    if ((!$m) || (!$y))
    {
        $m = date("n",mktime());
        $y = date("Y",mktime());
    }
	$tmpd = getdate(mktime(0,0,0,$m,1,$y));
    $month = $tmpd["month"];
    $firstwday= $tmpd["wday"];
    $lastday = mk_getLastDayofMonth($m,$y);
?>

<table width="400" cellpadding="4" cellspacing="0" border="0">
		<tr>
			<th width=22 class="tcell">Sunday</th>
			<th width=22 class="tcell">Monday</th>
			<th width=22 class="tcell">Tuesday </th>
			<th width=22 class="tcell">Wednesday</th>
			<th width=22 class="tcell">Thursday</th>
			<th width=22 class="tcell">Friday</th>
			<th width=22 class="tcell">Saturday</th>
		</tr>
<?php
	$d = 1;
    $wday = $firstwday;
    $firstweek = true;
    /*== loop through all the days of the month ==*/
    while ( $d <= $lastday)
    {
        if ($firstweek) {
            echo "<tr>";
            for ($i=1; $i<=$firstwday; $i++)
            { echo "<td><font size=2>&nbsp;</font></td>"; }
            $firstweek = false;
        }
        if ($wday==0) { echo "<tr>"; }
        print "<td class='tcell'>";
        print $d;
        print $f[$d-1];
        print "</td>\n";
        if ($wday==6) { echo "</tr>\n"; }
        $wday++;
        $wday = $wday % 7;
        $d++;
    }
?>
	</tr>
</table>

<?php
}
function mk_getLastDayofMonth($mon,$year)
{
    for ($tday=28; $tday <= 31; $tday++)
    {
        $tdate = getdate(mktime(0,0,0,$mon,$tday,$year));
        if ($tdate["mon"] != $mon)
        { break; }

    }
    $tday--;
    return $tday;
}
?>

<?php
	$buttons = drupal_render($form['buttons']);

	print drupal_render($form).$buttons;

?>