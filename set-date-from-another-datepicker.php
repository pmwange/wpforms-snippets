<?php
// Setting the date value based on another date picker value
// Such as arrival and departure comparison
//
function wpf_set_date_picker_from_another() {
    ?>
    <script>
        jQuery(function($){
			// Use selector #wpforms-(form ID)-field_(field ID) to target dropdown input
			// Create an event listener on the dropdown field by using the jQuery change() function
			// https://api.jquery.com/change/
			$("#wpforms-26300-field_16").change(function() {			
			var date1 = $(this).val();
			let oldDate = date1;
			var dateFormat =  $(this).data('date-format');
			if(dateFormat=="d/m/Y"){
			//consider dates with the EU format
			  let dateParts = date1.split("/");
              date1 = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
			}
			console.log(dateFormat);
			//get the date of the second field
			var date2 = $('#wpforms-26300-field_17').val();
			if(date2 && dateFormat=="d/m/Y"){
			//consider dates with the EU format
			  let dateParts = date2.split("/");
              date2 = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
			}
			//check if the second date if defined > if not set it to the value of date 1
			if(!date2 || new Date(date2)<new Date(date1))
			 $('#wpforms-26300-field_17').val(oldDate);
			})
			
        });
    </script>
    <?php
}
add_action( 'wpforms_wp_footer_end', 'wpf_set_date_picker_from_another', 10 );
