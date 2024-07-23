<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation - Dickson & Friska</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style_combined.css') }}">
    {{--
    <link href="https://fonts.googleapis.com/css2?family=Grapevine:400italic&display=swap" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
</head>

<body>
    <div class="frame">
        <div class="hero-section">
            <img src="{{ asset('storage/img/Bunga(top1).png') }}" alt="Flower Decoration" class="hero-image">
            <div class="text-overlay">
                <h1 style="left: 0%;">Dickson </h1>
                <span style="left: 15%">And</span>
                <h1 style="top: 30%; right: 5%">Friska</h1>
                <p>Invite you to our <br>Wedding Celebration</p>
            </div>
        </div>
        <div class="text-section">
            <h2 class="welcome-to-dickson">WELCOME TO <br> DICKSON & FRISKA'S <br> WEDDING WEBSITE</h2>
            <p class="together-with-joyful">Together with joyful hearts, we cordially request <br> the honor of your
                presence at our wedding</p>
        </div>
        <div class="frame-wrapper">
            <div class="div-wrapper images-section">
                <img class="rectangle-copy" src="{{ asset('storage/img/Gallery 3.png') }}" />
                <img class="img" src="{{ asset('storage/img/Gallery 4.png') }}" />
                <img class="rectangle-copy-2" src="{{ asset('storage/img/Gallery 5.png') }}" />
                <img class="rectangle-copy-3" src="{{ asset('storage/img/Gallery 6.png') }}" />
                <img class="rectangle-copy-4" src="{{ asset('storage/img/Gallery 2.png') }}" />
                <img class="rectangle" src="{{ asset('storage/img/Gallery 1.png') }}" />
            </div>
        </div>
        <div class="additional-image-section">
            <img src="{{ asset('storage/img/Frame 1.png') }}" alt="Additional Image" class="additional-image">
        </div>
        <div class="additional-image-section">
            <h1 class="as-they">as they unite in marriage</h1>
        </div>
        <div class="invitation-section">
            <img src="{{ asset('storage/img/Bunga2.png') }}" alt="Flower Decoration" class="hero-image">
            <div class="text-overlay-2">
                <h2 class="ceremony-title">WEDDING <br> BLESSING <br> CEREMONY</h2>
                <p class="ceremony-time">at 09:00 in the morning</p>
            </div>
            <div class="text-overlay-3">
                <h3 class="location">ST. LAURENSIUS CATHOLIC CHURCH</h3>
                <p class="address">Jl. Sutera Utama No. 2, <br> Pakulon, Kec. Serpong Utara</p>
                <p class="date">on Saturday, 31<sup>st</sup> August 2024</p>
                <button class="open-maps">OPEN MAPS</button>
            </div>
            <div class="text-overlay-4">
                <h2 class="reception-title">WEDDING RECEPTION</h2>
                <p class="reception-time">at 05:00 in the afternoon</p>
            </div>
            <div class="text-overlay-5">
                <h3 class="location">LA GLASSHOUSE FLAVOR BLISS ALAM SUTERA</h3>
                <p class="address">Kav. KF South Tangerang</p>
                <p class="date">on Saturday, 31<sup>st</sup> August 2024</p>
                <button class="open-maps1">OPEN MAPS</button>
            </div>
        </div>
        <div class="rsvp-section">
            <h2 class="rsvp-title">RSVP</h2>
            <p class="rsvp-instruction">Please confirm your attendance <br> by filling out the following form.</p>
            <form action="/submit-rsvp" method="POST" class="rsvp-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="attendees">Number of Attendees</label>
                <input type="number" id="attendees" name="attendees" required>

                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" required>

                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
        <div class="best-wishes-section">
            <h2 class="best-wishes-title">BEST WISHES</h2>
            <p class="best-wishes-subtitle">Kindly convey your prayers and best wishes.</p>
            <form action="/submit-wishes" method="POST" class="best-wishes-form">
                <!-- <label for="your-name">Your Name</label> -->
                <input style="background-color: #fff;" type="text" id="your-name" name="your_name"
                    placeholder="YOUR NAME" required>

                <!-- <label for="ucapan">Ucapan</label> -->
                <textarea style="background-color: #fff;" id="ucapan" name="ucapan" placeholder="UCAPAN"
                    required></textarea>

                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
        <div class="chat-section">
            <div class="border">
                <div class="chat-bubble chat-bubble-left">
                    <p>Welcome to our wedding celebration!</p>
                </div>
                <div class="chat-bubble chat-bubble-right">
                    <p>We are thrilled to have you join us.</p>
                </div>
            </div>
        </div>
        <div class="qr-code-section">
            <h2 class="qr-title">WEDDING GIFT</h2>
            <p class="qr-subtitle">Qris and Bank Transfer</p>
            <img src="{{ asset('storage/img/QR.png') }}" alt="QR Code" class="qr-image">
            <div class="bank-details">
                <p style="margin-bottom: 0px; margin-top: 0px; text-align:center; font-weight: 100;">Rekening BCA</p>
                <p style="margin-bottom: 0px;margin-top: 0px; text-align:center; font-weight: 100;">1920019289</p>
                <p style="margin-bottom: 0px; margin-top: 0px; text-align:center; font-weight: 100;">a.n Friska Wijaya
                </p>
            </div>
        </div>
        <div style="position: relative; width: 100%; margin-bottom: 0px; max-width:430px; height: auto;">
            <img src="{{ asset('storage/img/fotter-img1.jpg') }}" alt="Try Our Filter" class="try-filter-image">
            <span class="container">
                <span class="filter-text">TRY OUR FILTER</span>
                <a href="https://www.instagram.com" class="instagram-link">GO TO INSTAGRAM</a>
            </span>
        </div>
        <div class="fotter">
            <h1>Thank You</h1>
        </div>
    </div>
</body>

</html>