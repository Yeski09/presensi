@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="container">
            <h1>Absensi </h1>
            <div class="section">
                <div id="my-qr-reader">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('dashboard')
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        function domReady(fn) {
            if (
                document.readyState === "complete" ||
                document.readyState === "interactive"
            ) {
                setTimeout(fn, 1000);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        async function send(id) {
            let token = '@csrf';
            token = token.substr(42, 40);
            // var detail = @json($detail);

            $.ajax({
                type: "post",
                url: `{{ url('absen') }}`,
                data: {
                    id: id,
                    _token: token
                },
                error: function(err) {
                    alert("Absensi Gagal");

                    console.log($($(err.responseText)[1]).text())
                    debugger;
                }
            });
                alert("Absensi Berhasil");
                location.reload();

        }

        domReady(function() {

            // If found you qr code
            function onScanSuccess(decodeText, decodeResult) {
                send(decodeText)
                // alert("You Qr is : " + decodeText, decodeResult);


            }

            let htmlscanner = new Html5QrcodeScanner(
                "my-qr-reader", {
                    fps: 10,
                    qrbos: 220
                }
            );
            htmlscanner.render(onScanSuccess);
        });
    </script>
@endpush
