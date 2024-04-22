<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script>
    function initializeSignaturePad(canvasId, signatureId, textareaId, clearId, undoId, saveId, modalId, newSignatureId,
        oldSignatureId, hiddenId) {

        function showSignature() {
            document.querySelector('.' + signatureId).classList.remove('d-none');
            removeHiddenInput();
        }

        function hideSignature() {
            signaturePad.clear();
            document.querySelector('.' + signatureId).classList.add('d-none');
            addHiddenInput();
            document.getElementById(textareaId).value = '';
        }

        function addHiddenInput() {
            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.id = hiddenId;

            // Set nama dan nilai input berdasarkan tipe tanda tangan

            if (oldSignatureId === 'old-signature-dokter') {
                hiddenInput.name = 'ttd_dokter';
                hiddenInput.value = '{{ $data->ttd_dokter }}';
            } else if (oldSignatureId === 'old-signature-perawat') {
                hiddenInput.name = 'ttd_perawat';
                hiddenInput.value = '{{ $data->ttd_perawat }}';
            } else if (oldSignatureId === 'old-signature-pelaksana') {
                hiddenInput.name = 'ttd_pelaksana';
                hiddenInput.value = '{{ $data->ttd_pelaksana }}';
            }

            console.log(hiddenInput.name);
            console.log(hiddenInput.value);

            // Tambahkan input ke dalam form
            document.getElementById('patient-data').appendChild(hiddenInput);
        }


        function removeHiddenInput() {
            var hiddenInput = document.getElementById(hiddenId);
            if (hiddenInput) {
                hiddenInput.parentNode.removeChild(hiddenInput);
            }
        }

        document.getElementById(newSignatureId).addEventListener('click', showSignature);

        document.getElementById(oldSignatureId).addEventListener('click', hideSignature);

        var canvas = document.getElementById(canvasId);
        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)'
        });

        @php
            $isAdmin = Auth::user()->role == 'admin';
        @endphp

        var ratio = Math.max(window.devicePixelRatio || 2, 1);


        @if ($isAdmin)
            function resizeCanvas() {
                canvas.width = 500;
                canvas.height = 200;
                canvas.getContext("2d").scale(ratio, ratio);
            }
        @else
            function resizeCanvas() {
                canvas.width = 797;
                canvas.height = 266;
                canvas.getContext("2d").scale(ratio, ratio);
            }
        @endif


        window.onresize = resizeCanvas;
        resizeCanvas();

        document.getElementById(saveId).addEventListener('click', function() {
            if (signaturePad.isEmpty()) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Tanda Tangan Kosong!',
                    text: 'Silahkan tanda tangan terlebih dahulu.',
                });
            } else {
                var data = signaturePad.toDataURL('image/png');
                $('#' + modalId).modal('show').find('.modal-body').html('<img src="' + data +
                    '"><textarea id="' + textareaId + '" name=" ' + textareaId +
                    '"  style="display:none">' +
                    data +
                    '</textarea>');
            }
        });

        document.getElementById(clearId).addEventListener('click', function() {
            signaturePad.clear();
        });

        document.getElementById(undoId).addEventListener('click', function() {
            var data = signaturePad.toData();
            if (data) {
                data.pop();
                signaturePad.fromData(data);
            }
        });

    }

    @php
        $role = Auth::user()->role;
        $signaturePads = [
            'admin' => ['dokter', 'perawat', 'pelaksana'],
            'dokter' => ['dokter'],
            'perawat' => ['perawat'],
            'pelaksana' => ['pelaksana'],
        ];
    @endphp

    @foreach ($signaturePads[$role] as $signaturePad)
        @if ($role == 'admin' || $role == $signaturePad)
            initializeSignaturePad('signature-pad-{{ $signaturePad }}', 'signature-{{ $signaturePad }}',
                'ttd_{{ $signaturePad }}',
                'clear-{{ $signaturePad }}', 'undo-{{ $signaturePad }}', 'save-{{ $signaturePad }}',
                'modal-{{ $signaturePad }}',
                'new-signature-{{ $signaturePad }}', 'old-signature-{{ $signaturePad }}',
                'hidden-{{ $signaturePad }}');
        @endif
    @endforeach
</script>
