<script>
    document.querySelectorAll('.deleteBtn').forEach(function(deleteBtn) {
        deleteBtn.addEventListener('click', function(event) {

            event.preventDefault();

            var userId = event.currentTarget.getAttribute('data-user-id');
            var data_target = event.currentTarget.closest('form').getAttribute('data-target') || '';

            console.log(userId);

            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this ' + data_target + '!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel please!',
            }).then((result) => {
                // If the user clicks "Yes, delete it!"
                if (result.isConfirmed) {
                    // Proceed with the form submission
                    document.getElementById('deleteDataForm_' + userId).submit();
                } else {
                    // If the user clicks "No, cancel plx!" or closes the dialog
                    Swal.fire('Cancelled', 'The ' + data_target + ' is safe :)', 'error');
                }
            });

        });
    });
</script>
