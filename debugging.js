$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // prevent form from submitting normally
      $.ajax({
        url: 'submit.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(data) {
          // handle success response here
        },
        error: function(xhr, status, error) {
          // handle error response here
        }
      });
    });
  });