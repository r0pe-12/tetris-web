<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tetris Game</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #1e1e2e, #161623);
            color: #eaeaea;
            font-family: 'Arial', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #f1f1f1;
            transition: transform 0.3s ease;
        }

        .glass-card:hover {
            transform: scale(1.05);
        }

        .header {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px 0;
            border-radius: 0 0 15px 15px;
            text-shadow: 0px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .download-btn {
            background-color: rgba(255, 71, 87, 0.8);
            border: none;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .download-btn:hover {
            background-color: rgba(255, 71, 87, 1);
            transform: scale(1.1);
        }

        .leaderboard {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 20px;
        }

        .leaderboard-table {
            width: 100%;
            border-collapse: collapse;
        }

        .leaderboard-table th,
        .leaderboard-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .leaderboard-table th {
            color: #888;
            text-transform: uppercase;
            font-size: 0.8em;
        }

        .leaderboard-table tr:last-child td {
            border-bottom: none;
        }

        .leaderboard-table .rank {
            width: 20%;
            color: #666;
        }

        .leaderboard-table .player {
            width: 60%;
        }

        .leaderboard-table .score {
            width: 20%;
            text-align: right;
            color: #ff477a;
            font-weight: bold;
        }

        footer {
            background: rgba(30, 30, 50, 0.8);
            color: #a4b0be;
            padding: 40px 0;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }

        footer a {
            color: #f1f1f1;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header class="header text-center">
    <h1 class="display-4">Welcome to Tetris!</h1>
    <p class="lead">A classic block-stacking game reimagined in Python.</p>
</header>

<div class="container mt-5">
    <!-- Description Section -->
    <div class="row mb-4">
        <div class="col-md-6 mx-auto text-center">
            <div class="glass-card p-4">
                <h2>About the Game</h2>
                <p>
                    Tetris is a tile-matching puzzle game where you fit falling blocks into rows.
                    Challenge yourself, beat your high score, and experience the nostalgia of this timeless game!
                </p>
                <a href="/download">
                    <button class="btn download-btn btn-lg">Download Game</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="glass-card p-4 text-center">
                <h2>Features of the Game</h2>
                <ul class="list-unstyled mt-3">
                    <li>🎮 Easy-to-learn gameplay</li>
                    <li>🌟 Stunning retro visuals</li>
                    <li>📈 Leaderboard tracking</li>
                    <li>🎵 Classic Tetris-inspired music</li>
                    <li>💻 Built with Python – lightweight and fast!</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Leaderboard Section -->
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="leaderboard">
                <div class="leaderboard-header text-center mb-3">Leaderboard</div>
                <table class="leaderboard-table">
                    <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Player</th>
                        <th>Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $s)
                        <tr>
                            <td class="rank">{{ $loop->iteration }}</td>
                            <td class="player">{{ $s->username }}</td>
                            <td class="score">{{ $s->score }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center">What Players Say</h2>
            <div id="testimonialsCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card glass-card text-center p-3">
                            <div class="card-body">
                                <p class="card-text">"This Tetris game is absolutely amazing! The classic feel is spot
                                    on." – Alex</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card glass-card text-center p-3">
                            <div class="card-body">
                                <p class="card-text">"Perfect for quick breaks. Simple, fun, and addictive!" – Jamie</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card glass-card text-center p-3">
                            <div class="card-body">
                                <p class="card-text">"Loved the retro graphics and smooth controls!" – Taylor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Tetris Game. All Rights Reserved.</p>
    <p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Contact Us</a>
    </p>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
