<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            background-image:
            linear-gradient(to top right, #D3D3D3, #FFFFFF);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: monospace;
        }

        .slider {
            position: relative;
            width: 100%;
            height: 370px;
            overflow: hidden;
        }

        .item {
            position: absolute;
            width: 200px;
            height: 320px;
            text-align: justify;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            transition: 0.5s;
            left: calc(50% - 110px);
            top: 0;
        }

        #next,
        #prev {
            position: absolute;
            top: 40%;
            color: #fff;
            background-color: transparent;
            border: none;
            font-size: xxx-large;
            font-family: monospace;
            font-weight: bold;
            left: 400px;
        }

        #next {
            left: unset;
            right: 400px;
        }
    </style>
</head>

<body>
    <div class="slider">
        <div class="slider">
            <div class="item">
                <img src="{{ asset('assets/img/fotojihan.jpg') }}" width="100%" alt="Team Member 1">
                <h2>Jihan Khansa N</h2>
                <p>22104410055</p>
                <p>Dont worry just live, your life matters</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/fotodiki.jpg') }}" width="100%" alt="Team Member 1">
                <h2>Alfian Anwar S</h2>
                <p>22104410065</p>
                <p>Rental mobil sport nya bang</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/fotoku.jpg') }}" width="100%" alt="Team Member 3">
                <h2>Rafi Andrea L</h2>
                <p>22104410014</p>
                <p>Di cakrawala tempat kau dan aku bertemu, 'aku' menjadi 'kita'</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/logo.png') }}" style="padding: 40px 0 40px 0 " width="100%" alt="Team Member 2">
                <h2 style="text-align: center">Our Motto</h2>
                <p style="text-align: center">"Mengaspal dengan Gaya, Mengemudi dengan Kelas"</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/fotoaldy.png') }}" width="100%" alt="Team Member 1">
                <h2>Aldi Ibnu F</h2>
                <p>22104410012</p>
                <p>Bunga hanya mekar sempurna kalau ada di atas pondasi yang kokoh</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/fotorohid.jpg') }}" width="100%" alt="Team Member 4">
                <h2>M Rohid Al Faruq</h2></h2>
                <p>22104410015</p>
                <p>Paling tidak manusia takkan merasa kesepian selama mereka membaca sesuatu</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/fotonimas.jpg') }}" width="100%" alt="Team Member 5">
                <h2>Nimas Ayu Anggun K</h2>
                <p>221044100051</p>
                <p>Rentalnya jangan dibawa kabur bang</p>
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    <script>
        const items = document.querySelectorAll('.slider .item')
        const btnNext = document.getElementById('next')
        const btnPrev = document.getElementById('prev')

        let active = 3

        function loadShow() {
            let stt = 0
            items[active].style.transform = `none`
            items[active].style.zIndex = 1
            items[active].style.filter = `none`
            items[active].style.opacity = 1
            for (var i = active + 1; i < items.length; i++) {
                stt++
                items[i].style.transform =
                    `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`
                items[i].style.zIndex = -stt
                items[i].style.filter = 'blur(5px)'
                items[i].style.opacity = stt > 2 ? 0 : 0.6
            }
            stt = 0
            for (var i = active - 1; i >= 0; i--) {
                stt++
                items[i].style.transform =
                    `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`
                items[i].style.zIndex = -stt
                items[i].style.filter = 'blur(5px)'
                items[i].style.opacity = stt > 2 ? 0 : 0.6
            }
        }
        loadShow()
        btnNext.onclick = function() {
            active = active + 1 < items.length ? active + 1 : active
            loadShow()
        }
        btnPrev.onclick = function() {
            active = active - 1 >= 0 ? active - 1 : active
            loadShow()
        }
    </script>
</body>

</html>
