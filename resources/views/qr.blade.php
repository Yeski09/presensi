<html>
    <title>Absensi</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Corben&family=Mulish&family=Outfit&family=Raleway:wght@300&display=swap");

    body {
        width: auto;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px;
        background: #d3dfed;
    }

    #qrCodeBox {
        height: 550px;
        width: 355px;
        background: #fffffd;
        border-radius: 20px 20px 20px 20px;
    }

    #qrCodeSquareFrame {
        width: 320px;
        height: 320px;
        background: #2b7dfa;
        border-radius: 10px;
        margin: 17px;
        border: solid 1px #4677c6;
        position: relative;
    }

    .centered {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #qrcode {
        mix-blend-mode: screen;
    }

    #bubble_01 {
        width: 210px;
        height: 180px;
        background: #3685fe;
        position: absolute;
        border-radius: 15px 0 15rem 0;
    }

    #bubble_02 {
        width: 155px;
        height: 110px;
        background: #3685fe;
        position: absolute;
        top: 210px;
        left: 165px;
        border-radius: 100% 0 10px 0;
    }

    .text {
        width: 90%;
        flex-direction: column;
        text-align: center;
        font-family: Outfit;
        font-size: 18px;
        color: #75767a;
        margin: 10px;
    }

    #one {
        font-weight: 700;
        font-size: 25px;
        color: #101b39;
    }

    #two {
        margin-top: -7px;
    }
</style>

<body>
    <div id="qrCodeBox">
        <div id="qrCodeSquareFrame">
            <div id="bubble_01"></div>
            <div id="bubble_02"></div>
            <div class="centered">
                <div id="qrcode"></div>
            </div>
            <div class="text">
                <p id="one">
                    Scan Untuk Absen
                </p>
                <p id="two">
                    Absensi Anda Akan Otomatis Ter Record Dalam Sistem Setelah Scan
                    {{-- <br>
                    #sonata22 --}}
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script>
        let qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "test",
            width: 220,
            height: 220,
            colorDark: "#FFFFFF",
            colorLight: "#000000",
            correctLevel: QRCode.CorrectLevel.H
        });
    </script>
</body>

</html>
