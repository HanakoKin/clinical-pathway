<script>
    // Script JavaScript
    function showUserModal(user) {
        var title = "Data : " + user.name;

        console.log(user);

        $('#showTitle').text(title);
        $('#namaTitle').text(user.name);
        $('#name').text(user.name);
        $('#email').text(user.email);
        $('#role').text(user.role);

        $('#showUser').modal('show');
    }
</script>
