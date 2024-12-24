<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilmu Komputer - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Karang Taruna Rw 14</h1>
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#feedback">Feedback</a>
            <a href="{{ url('/gallery') }}">Gallery</a>
        </nav>
    </header>
    
    <section class="welcome" id="home">
        <div class="welcome-text">
            <h1>Welcome to Karang Taruna</h1>
            <h2>Rw 14 Bumi Pertiwi II</h2>
            <p>Kegiatan Pemberdayaan Remaja dan Lingkungan Bumi Pertiwi II</p>
            <button onclick="window.location.href='#activity'">Explore Activity</button>
        </div>
    </section>

    <section class="about" id="about">
        <h2>About Us</h2>
        <p>Karang taruna merupakan wadah pembinaan dan pengembangan kreativitas generasi muda...</p>
        <div class="values-goals">
            <div class="values">
                <h3>Our Values:</h3>
                <ul>
                    <li>Turut berpartisipasi dalam upaya peningkatan derajat kesehatan...</li>
                </ul>
            </div>
            <div class="goals">
                <h3>Our Goals:</h3>
                <ul>
                    <li>Terwujudnya kesadaran dan tanggung jawab sosial setiap generasi muda...</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="activity" id="activity">
        <h2>Our Activity</h2>
        <table>
            <tr>
                <th>Activity</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Sungai bersih</td>
                <td>Sungai Bersih adalah kegiatan bersih-bersih sungai ciliwung...</td>
                <td>Done</td>
            </tr>
        </table>
    </section>

    <section class="feedback" id="feedback">
        <h2>Feedback</h2>
        <form id="feedbackForm" onsubmit="sendFeedback(event)">
            <input type="text" id="name" placeholder="Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <textarea id="message" placeholder="Your feedback" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>Contact Us</p>
        <p>Email: info@karangtarunau14.com</p>
        <p>Phone: +62852-8126-2229</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>