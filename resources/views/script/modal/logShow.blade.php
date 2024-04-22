<script>
    function showLogModal(data) {
        // Membersihkan karakter newline (\n) dan carriage return (\r) dari string JSON
        const cleanedJsonString = data.replace(/[\n\r]/g, '');

        // Parse string JSON yang sudah dibersihkan menjadi objek JavaScript
        var dataArray = JSON.parse(cleanedJsonString);
        console.log(dataArray);

        var tableHTML = '<table class="table">';

        // Loop melalui setiap key dalam dataArray
        for (var key in dataArray) {
            if (dataArray.hasOwnProperty(key) && key !== '_token' && key !== 'table') {

                var formattedKey = key.charAt(0).toUpperCase() + key.slice(1).replace(/_/g, ' ');

                tableHTML += '<tr><td>' + formattedKey + '</td><td>' + dataArray[key] + '</td></tr>';
            }
        }
        tableHTML += '</table>';

        // Mengganti konten modal dengan data yang dipilih
        document.getElementById('modalContent').innerHTML = tableHTML;
    }
</script>
