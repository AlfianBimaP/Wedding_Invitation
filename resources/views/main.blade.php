
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation - Dickson & Friska</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header class="hero-section">
        <img src="{{ asset('storage/img/Bunga.png' ) }}" alt="Flower Decoration" class="hero-image">
        <h1>Dickson & Friska</h1>
        <p>Wedding Celebration</p>
    </header>

    <section class="welcome-section">
        <h2>Welcome to Dickson & Friska's Wedding Website</h2>
        <p>We are so glad you're here!</p>
    </section>

    <section class="gallery-section">
        <div class="gallery">
            <img src="path/to/photo1.jpg" alt="Photo 1">
            <img src="path/to/photo2.jpg" alt="Photo 2">
            <img src="path/to/photo3.jpg" alt="Photo 3">
            <img src="path/to/photo4.jpg" alt="Photo 4">
        </div>
    </section>

    <section class="event-section">
        <h2>Wedding Blessing Ceremony</h2>
        <p>Details about the wedding blessing ceremony...</p>
        <button>Open Map</button>

        <h2>Wedding Reception</h2>
        <p>Details about the wedding reception...</p>
        <button>Open Map</button>
    </section>

    <section class="rsvp-section">
        <h2>RSVP</h2>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">

            <label for="attendees">Number of Attendees</label>
            <input type="number" id="attendees" name="attendees">

            <label for="address">Address</label>
            <input type="text" id="address" name="address">

            <button type="submit">Submit</button>
        </form>
    </section>

    <section class="best-wishes-section">
        <h2>Best Wishes</h2>
        <form>
            <label for="wisher-name">Your Name</label>
            <input type="text" id="wisher-name" name="wisher-name">

            <label for="wish">Your Wish</label>
            <textarea id="wish" name="wish"></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <section class="gift-section">
        <h2>Wedding Gift</h2>
        <img src="path/to/qr-code.png" alt="QR Code for Gift">
        <p>Details about the wedding gift...</p>
    </section>

    <section class="filter-section">
        <h2>Try Our Filter</h2>
        <button>Open Filter</button>
    </section>

    <footer class="thank-you-section">
        <h2>Thank You</h2>
        <img src="path/to/couple-photo.jpg" alt="Couple Photo">
    </footer>
</body>
</html>

