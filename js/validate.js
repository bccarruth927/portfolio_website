//JavaScript file for the contact form validation

//The validation function
$('#contact-form').validate({
    errorClass: 'error fail-alert',
    validClass: 'valid success-alert',
    
    rules: {
        full_name: {
            required: true,
            minlength: 3
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            number: true,
            minlength: 10
        },
        subject: {
            required: true,
            minlength: 3
        },
        message: {
            required: true
        }
    },
    messages: {
        full_name: {
            required: 'Please enter a name.',
            minlength: 'Your name must be at least 3 characters in length.'
        },
        email: {
            required: 'Please provide me with an email address.',
            email: 'Please use a valid email address.'
        },
        phone: {
            required: 'Please provide me with a phone number.',
            number: 'Please only use numbers for this field.',
            minlength: 'Your phone number must be at least 10 characters in length.'
        },
        subject: {
            required: 'Please let me know the subject of your message.',
            minlength: 'Please make your subject at least 3 characters.'
        },
        message: {
            required: 'Please leave me a message!'
        }
    }
});