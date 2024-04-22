<script>
    // Script JavaScript
    function editUserModal(user) {
        var title = "Data : " + user.name;

        console.log(user.name);

        $('#editShowTitle').text(title);
        $('#editNamaTitle').text(user.name);
        $('#id').val(user.id);
        $('#editName').val(user.name);
        $('#editEmail').val(user.email);
        $('#editRole').val(user.role);

        var formAction = "{{ route('user.update', ['id' => '__ID__']) }}";
        formAction = formAction.replace('__ID__', user.id);
        $('#user-update-form').attr('action', formAction);

        $('#editUser').modal('show');
    }
</script>
