<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script>
    function initializeSignaturePad(canvasId, textareaId, clearId, undoId, saveId, modalId) {
        var canvas = document.getElementById(canvasId);

        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
        function resizeCanvas() {
            // When zoomed out to less than 100%, for some very strange reason,
            // some browsers report devicePixelRatio as less than 1
            // and only part of the canvas is cleared then.
            var ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

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
                    '"><textarea id="' + textareaId + '" name="' + textareaId + '" style="display:none">' +
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
                data.pop(); // remove the last dot or line
                signaturePad.fromData(data);
            }
        });
    }

    // Initialize signature pads for each canvas
    initializeSignaturePad('signature-pad-dokter', 'ttd_dokter', 'clear-dokter', 'undo-dokter', 'save-dokter',
        'modal-dokter');
    initializeSignaturePad('signature-pad-perawat', 'ttd_perawat', 'clear-perawat', 'undo-perawat', 'save-perawat',
        'modal-perawat');
    initializeSignaturePad('signature-pad-pelaksana', 'ttd_pelaksana', 'clear-pelaksana', 'undo-pelaksana',
        'save-pelaksana', 'modal-pelaksana');
</script>
