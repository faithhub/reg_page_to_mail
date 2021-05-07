// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: {
                required: true,
                minlength: 3
            },
            terms: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            confirmpassword: {
                required: true,
                equalTo: "#password"
            }
        },
        // Specify validation error messages
        messages: {
            name: {
                required: "Please provide your Full Name",
                minlength: "Your Full Name must be at least 3 characters long"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
            confirmpassword: {
                required: "Please confirm your password",
                equalTo: "Password and Confirm Password did not match"
            },
            terms: "Please accept Terms of Use & Privacy Policy",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form, event) {
            event.preventDefault();
            $.ajax({
                type: "Post",
                url: "./php/form.php",
                data: $('form').serialize(),
                success: function(response) {
                    console.log(response)
                }
            });
            return false;
        }
    });
})