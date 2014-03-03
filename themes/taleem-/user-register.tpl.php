
<?php
	if ( arg(2) ) {
		$r = arg(2);

		$roles = array(

			'academy-free' => '9',
			'academy-premium' => '10',
			'college-free' => '11',
			'college-premium' => '12',
			'school-free' => '7',
			'school-premium' => '8',
			'tutor-free' => '13',
			'tutor-premium' => '14',
		);

		print "<script type='text/javascript'>";
?>

$(document).ready(function(){

	$('#edit-rid').selectOptions('<?php print $roles[$r] ?>');
	$('#apply-for-role').hide();


});

<?php
	print "</script>";

	print drupal_render($form);

	}

	else {
?>

	<script type="text/javascript">

		$(document).ready(function(){

			$("#account-info").hide();
			$(".captcha").hide();
			$("#edit-submit").hide();
			$("#back").hide();


			$("#next").click(function(){

				$("#next").hide();
				$("#apply-for-role").hide();

				$("#account-info").show();
				$(".captcha").show();
				$("#edit-submit").show();
				$("#back").show();


			});

			$("#back").click(function(){

				$("#next").show();
				$("#apply-for-role").show();

				$("#account-info").hide();
				$(".captcha").hide();
				$("#edit-submit").hide();
				$("#back").hide();


			});


		});

	</script>
	

	<div id="ur">
	<?php print drupal_render($form); ?>
	


	<div id="next"><input type="button" name="Next" value="Next" /></div>

	<div  id="back" ><input type="button" name="Back" value="Back" /></div>

	</div>
	<script type="text/javascript">
  //Creating a Select Box    
    var selectBox = document.getElementById("edit-rid")  
    //Creating first Option   
    var i;
	for(i=selectBox.options.length-1;i>=0;i--)
	{
		selectBox.remove(i);
	}
		 
	 
	 
	 var option1 =document.createElement("OPTION");  
 	 option1.text="Academy" ; 
     option1.value=9;  
     selectBox.options.add(option1); 
	 
	 //Creating Second Option  
     var option2 =document.createElement("OPTION");  
     option2.text="Bookshop";  
     option2.value=28;  
     selectBox.options.add(option2);  
    var option3 =document.createElement("OPTION");  
 	 option3.text="College" ; 
     option3.value=11;  
     selectBox.options.add(option3); 
	 
	 //Creating Second Option  
     var option4 =document.createElement("OPTION");  
     option4.text="Day Care";  
     option4.value=24;  
     selectBox.options.add(option4);  
    var option5 =document.createElement("OPTION");  
 	 option5.text="Home Tutor" ; 
     option5.value=22;  
     selectBox.options.add(option5); 
	 
	 //Creating Second Option  
     var option6 =document.createElement("OPTION");  
     option6.text="Institute";  
     option6.value=30;  
     selectBox.options.add(option6);  
    var option7 =document.createElement("OPTION");  
 	 option7.text="Language Center" ; 
     option7.value=26;  
     selectBox.options.add(option7); 
	 
	 //Creating Second Option  
     var option8 =document.createElement("OPTION");  
     option8.text="Parent";  
     option8.value=3;  
     selectBox.options.add(option8);  
    var option9 =document.createElement("OPTION");  
 	 option9.text="School" ; 
     option9.value=7;  
     selectBox.options.add(option9); 
	 
	 //Creating Second Option  
     var option10 =document.createElement("OPTION");  
     option10.text="Student";  
     option10.value=32;  
     selectBox.options.add(option10);  
   	 
	 //Creating Second Option  
     var option12 =document.createElement("OPTION");  
     option12.text="University";  
     option12.value=20;  
     selectBox.options.add(option12);  
   
	 
	 
	 
</script>
<?php
}
?>

