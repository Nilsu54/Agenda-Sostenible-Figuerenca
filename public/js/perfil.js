// Wait for the DOM to be fully loaded before executing the code
$(document).ready(function() {
    // Handle profile image preview
    $("#newProfileImage").change(function() {
        const file = this.files[0]; // Get the selected file
        if (file) {
            const reader = new FileReader(); // Create a new file reader
            
            // When the file is successfully loaded
            reader.onload = function(e) {
                // Update the preview image with the new file
                $("#currentProfileImage").attr('src', e.target.result);
            }
            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });

    // Handle profile form submission
    $("#profileForm").submit(function(e) {
        e.preventDefault(); // Prevent traditional form submission
        
        // Create a FormData object with the form data
        const formData = new FormData(this);
        
        // Perform an AJAX request to update the profile
        $.ajax({
            url: '/api/update-profile.php',
            type: 'POST',
            data: formData,
            processData: false, // Do not process the data
            contentType: false, // Do not set content type
            success: function(response) {
                // Handle a successful response
                if (response.success) {
                    alert('Profile updated successfully');
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
                // Handle errors in the request
                alert('Error updating profile');
            }
        });
    });
});
