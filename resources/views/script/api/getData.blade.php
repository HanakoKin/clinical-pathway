<script>
    document.getElementById('noReg').addEventListener('change', function() {

        var noReg = this.value;

        console.log(noReg)

        fetch('http://10.1.10.7:6070/BipubApi/api/Token', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'ConsId': 'husadati@gmail.com',
                'SecretKey': 'husadaTI.123',
            }
        }).then(tokenResponse => {
            if (tokenResponse.status === 401) {
                throw new Error('Unauthorized: Failed to generate token');
            }

            return tokenResponse.text();

        }).then(tokenData => {

            fetch('/search-patient', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content'),
                        'Authorization': 'Bearer ' + tokenData,
                    },
                    body: JSON.stringify({
                        noReg: noReg,
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(informasiPasien => {

                    console.log(informasiPasien)

                    // Isi formulir dengan data yang diterima
                    document.getElementById('nama').value = informasiPasien.pasienName || '';
                    document.getElementById('jenis_kelamin').value = informasiPasien.gender || '';
                    document.getElementById('tanggal_lahir').value = informasiPasien.birthDate ||
                        '';

                    // Lanjutkan mengisi formulir tanggal & jam
                    document.getElementById('tanggal_masuk').value = informasiPasien.regDate || '';
                    document.getElementById('jam_masuk').value = informasiPasien.regTime || '';
                    document.getElementById('tanggal_keluar').value = informasiPasien.regOutDate ||
                        '';
                    document.getElementById('jam_keluar').value = informasiPasien.regOutTime || '';
                    document.getElementById('lama_rawat').value = informasiPasien.lamaRawat || '';
                })
                .catch(error => {
                    console.error('There was an error!', error);

                    document.getElementById('naLap').value = 'Data pasien tidak ditemukan';
                    document.getElementById('jenis_kelamin').value = '';
                    document.getElementById('tanggal_lahir').value = '';

                    // Lanjutkan mengisi formulir tanggal & jam
                    document.getElementById('tanggal_masuk').value = '';
                    document.getElementById('jam_masuk').value = '';
                    document.getElementById('tanggal_keluar').value = '';
                    document.getElementById('jam_keluar').value = '';
                    document.getElementById('lama_rawat').value = '';

                });

        })
    });
</script>
