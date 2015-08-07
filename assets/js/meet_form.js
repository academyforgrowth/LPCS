//  THESE FUNCTIONS ARE TO CALL OPEN A CONTACT FORM BOX ON CLICK OF A CALL-TO-ACTION, 
// AND TO CLOSE WHEN THE X IS CLICKED */

$(document).ready(function(){
	/* meeting_prompt is the id of the call to action button used to access the contact form */
	// $("#meeting_prompt").click(function(){
	//  overlay is the overlay which blacks out the screen to draw the user attention to the form 
	//	$("#overlay").fadeIn("slow");
	//	/* the meeting form */
	//	$("#meeting_form").fadeIn("slow");
	// });
	/* FUNCTION PERFORMED WHEN THE CLOSE BUTTON IS CLICKED */
	$("#close_button").click(function(){
		/* OVERLAY FADED OUT */
		$("#overlay").fadeOut("fast");
		/* MEET FORM FADED OUT */
		$("#meeting_form").fadeOut("fast");
	});
	/* FUNCTION PERFORMED WHEN BUSINESS_BUILDER BUTTON IS CLICKED */
	$("#subscribe_prompt").click(function(){
	/* overlay is the overlay which blacks out the screen to draw the user attention to the form */
		$("#overlay").fadeIn("slow");
		/* the meeting form */
		$("#bb_form").fadeIn("slow");
	});
	/* FUNCTION PERFORMED WHEN THE CLOSE BUTTON IS CLICKED */
	$("#bb_close_button").click(function(){
	/* OVERLAY FADED OUT */
		$("#overlay").fadeOut("fast");
		/* MEET FORM FADED OUT */
		$("#bb_form").fadeOut("fast");
	});
		$(".meeting_prompt").click(function(){
		/* overlay is the overlay which blacks out the screen to draw the user attention to the form */
		$("#overlay").fadeIn("slow");
		/* the meeting form */
		$("#meeting_form").fadeIn("slow");
	});

    // $("a.btn-danger").on({
    //     mouseenter: function(){
    //         $(this).css("width", "50%");
    //     },  
    //     mouseleave: function(){
    //         $(this).css("width", "initial");
    //     }, 
    // });

});

 