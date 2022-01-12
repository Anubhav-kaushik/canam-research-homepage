<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>

<script>
		$(document).ready(function()
{
		$("#canam_apply_fom").validate({
    rules: {
        name: {
                required: true
            },
	 mobile: {
                required: true
            },
	email:{
			required: true,
			email: true
			},

    },
    messages: {
        name: {
                required: "Please Enter Your Full Name"
            },
		mobile: {
                required: "Please Enter Your Mobile no."
            },

		email:{
			required: "The Email is required!",
			email: "Please enter a valid email address!",
			remote: "The email is already in use by another user!"
			},

    },

 
	submitHandler: function(form) {
        $.ajax({
            url:"send_apply_email.php",
            type:"post",
            data: $(form).serialize(),
            success: function(response) {
                $('#answers').html(response);
            }
        });
    }
});

});

</script> 
    
    
</body>

</html>