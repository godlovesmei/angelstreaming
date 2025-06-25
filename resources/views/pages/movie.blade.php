<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Avatar: The Way of Water - Movie Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0a4d68 0%, #1e3a5f 30%, #2c1810 70%, #1a2332 100%);
            color: white;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .movie-header {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
            align-items: flex-start;
        }

        .movie-poster {
            flex-shrink: 0;
            width: 300px;
            height: 450px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            transition: transform 0.3s ease;
        }

        .movie-poster:hover {
            transform: scale(1.05);
        }

        .movie-poster img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .movie-info {
            flex: 1;
            padding-top: 20px;
        }

        .movie-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 25px;
            background: linear-gradient(45deg, #00d4ff, #0099cc, #4dd0e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(0, 212, 255, 0.3);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #00d4ff, #0099cc);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 212, 255, 0.4);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.1);
            color: #ccc;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.2);
            color: white;
        }

        .movie-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 30px;
        }

        .storyline, .cast-section {
            background: rgba(0, 212, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 212, 255, 0.1);
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #00d4ff;
        }

        .storyline-text {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #e0e0e0;
            margin-bottom: 20px;
        }

        .movie-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0, 212, 255, 0.1);
        }

        .stat-label {
            color: #aaa;
            font-weight: 500;
        }

        .stat-value {
            color: white;
            font-weight: 600;
        }

        .cast-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .cast-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            background: rgba(0, 212, 255, 0.05);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .cast-item:hover {
            background: rgba(0, 212, 255, 0.1);
            transform: translateX(5px);
        }

        .cast-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, #00d4ff, #4dd0e1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            color: #003d52;
        }

        .cast-info {
            flex: 1;
        }

        .cast-name {
            font-weight: 600;
            margin-bottom: 3px;
        }

        .cast-character {
            color: #aaa;
            font-size: 0.9rem;
        }

        .trailer-section {
            margin-top: 30px;
            text-align: center;
        }

        .trailer-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #9ABAFF, #4dd0e1);
            color: black;
            padding: 14px 32px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 9999px;
            box-shadow: 0 8px 20px rgba(154, 186, 255, 0.3);
            transition: all 0.3s ease;
        }

        .trailer-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(154, 186, 255, 0.5);
            background: linear-gradient(135deg, #4dd0e1, #9ABAFF);
        }

        .bottom-actions {
            display: flex;
            gap: 15px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .action-item {
            padding: 12px 30px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #ccc;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .action-item:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 212, 255, 0.2);
        }

        .action-icon {
           background: none;
           color: #00d4ff;
           font-size: 1.3rem;
        }

       .action-item:hover {
           transform: translateY(-5px);
           background: rgba(0, 212, 255, 0.1);
           box-shadow: 0 10px 20px rgba(0, 212, 255, 0.1);
        }

       .action-icon {
           width: 48px;
           height: 48px;
           background: rgba(0, 212, 255, 0.15);
           border-radius: 50%;
           display: flex;
           align-items: center;
           justify-content: center;
           font-size: 1.4rem;
           color: #9ABAFF;
           transition: background 0.3s ease;
        }

        .action-item:hover .action-icon {
           background: rgba(0, 212, 255, 0.3);
        }

        .action-icon {
            width: 40px;
            height: 40px;
            background: rgba(0, 212, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .rating-stars {
            color: #00d4ff;
        }

        .imax-badge {
            background: linear-gradient(45deg, #ff6b35, #ff8a50);
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-left: 10px;
        }

        @media (max-width: 768px) {
            .movie-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .movie-poster {
                width: 250px;
                height: 375px;
            }

            .movie-title {
                font-size: 2.5rem;
            }

            .movie-details {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                justify-content: center;
            }
        }

        .water-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(77, 208, 225, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="water-effect"></div>
    <div class="container">
        <div class="movie-header">
            <div class="movie-poster">
                <img src="https://wallpapercave.com/wp/wp11685712.jpg" alt="Avatar: The Way of Water Movie Poster">
            </div>

            <div class="movie-info">
                <h1 class="movie-title">Avatar: The Way of Water</h1>

                <div class="action-buttons">
                    <button class="btn btn-primary" onclick="playMovie()">
                        ▶ Watch
                    </button>
                    <button class="btn btn-secondary" onclick="downloadMovie()">
                        ⬇ Download
                    </button>
                    <button class="btn trailer-btn" onclick="playTrailer()">
                        <i class="fa-solid fa-play"></i> Trailer
                    </button>
                </div>

                <div class="movie-stats">
                    <div class="stat-item">
                        <span class="stat-label">Rating</span>
                        <span class="stat-value rating">
                            <span class="rating-stars">★★★★☆</span> 7.6
                            <span class="imax-badge">IMAX</span>
                        </span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Release year</span>
                        <span class="stat-value">2022</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Genres</span>
                        <span class="stat-value">Sci-Fi, Action, Adventure</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Duration</span>
                        <span class="stat-value">3h 12min</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Countries</span>
                        <span class="stat-value">United States</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Studio</span>
                        <span class="stat-value">20th Century Studios</span>
                    </div>
                </div>
                <div class="bottom-actions">
                    <div class="action-item" onclick="toggleFavorite()">
                        <div class="action-icon"><i class="fa-solid fa-star"></i></div>
                        <span>Favorite</span>
                </div>
                <div class="action-item" onclick="watchLater()">
                    <div class="action-icon"><i class="fa-solid fa-clock"></i></div>
                        <span>Watch Later</span>
                </div>
                    <div class="action-item" onclick="markWatched()">
                        <div class="action-icon"><i class="fa-solid fa-eye"></i></div>
                        <span>Watched</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="movie-details">
            <div class="storyline">
                <h2 class="section-title">STORYLINE</h2>
                <p class="storyline-text">
                    Set more than a decade after the events of the first film, Avatar: The Way of Water begins to tell the story of the Sully family, the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.
                </p>
                <p class="storyline-text">
                    Jake and Neytiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora when an ancient threat resurfaces, with Jake having to fight a difficult war against humans.
                </p>
            </div>

            <div class="cast-section">
                <h2 class="section-title">CAST</h2>
                <div class="cast-list">
                    <div class="cast-item">
                        <div class="cast-avatar">SW</div>
                        <div class="cast-info">
                            <div class="cast-name">Sam Worthington</div>
                            <div class="cast-character">Jake Sully</div>
                        </div>
                    </div>
                    <div class="cast-item">
                        <div class="cast-avatar">ZS</div>
                        <div class="cast-info">
                            <div class="cast-name">Zoe Saldaña</div>
                            <div class="cast-character">Neytiri</div>
                        </div>
                    </div>
                    <div class="cast-item">
                        <div class="cast-avatar">SL</div>
                        <div class="cast-info">
                            <div class="cast-name">Sigourney Weaver</div>
                            <div class="cast-character">Kiri</div>
                        </div>
                    </div>
                    <div class="cast-item">
                        <div class="cast-avatar">KW</div>
                        <div class="cast-info">
                            <div class="cast-name">Kate Winslet</div>
                            <div class="cast-character">Ronal</div>
                        </div>
                    </div>
                    <div class="cast-item">
                        <div class="cast-avatar">CC</div>
                        <div class="cast-info">
                            <div class="cast-name">Cliff Curtis</div>
                            <div class="cast-character">Tonowari</div>
                        </div>
                    </div>
                    <div class="cast-item">
                        <div class="cast-avatar">SL</div>
                        <div class="cast-info">
                            <div class="cast-name">Stephen Lang</div>
                            <div class="cast-character">Colonel Miles Quaritch</div>
                        </div>
                    </div>
                    <button class="btn btn-secondary" style="margin-top: 10px;" onclick="showAllCast()">See all</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function playMovie() {
            alert('Playing Avatar: The Way of Water...');
            // Implementasi untuk memutar film
        }

        function downloadMovie() {
            alert('Starting download...');
            // Implementasi untuk download film
        }

        function playTrailer() {
            alert('Playing trailer...');
            // Implementasi untuk memutar trailer
        }

        function showAllCast() {
            alert('Showing all cast members...');
            // Implementasi untuk menampilkan semua cast
        }

        function toggleFavorite() {
            const icon = event.currentTarget.querySelector('.action-icon');
            if (icon.textContent === '⭐') {
                icon.textContent = '⭐';
                icon.style.color = '#00d4ff';
                alert('Added to favorites!');
            } else {
                icon.textContent = '⭐';
                icon.style.color = '';
                alert('Removed from favorites!');
            }
        }

        function watchLater() {
            alert('Added to Watch Later list!');
            // Implementasi untuk menambah ke daftar tonton nanti
        }

        function markWatched() {
            alert('Marked as watched!');
            // Implementasi untuk menandai sudah ditonton
        }

        // Animasi masuk
        window.addEventListener('load', function() {
            const elements = document.querySelectorAll('.movie-poster, .movie-info, .storyline, .cast-section');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    el.style.transition = 'all 0.6s ease';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });

        // Water bubble effect
        function createBubbles() {
            const bubbleContainer = document.createElement('div');
            bubbleContainer.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: -1;
            `;
            document.body.appendChild(bubbleContainer);

            setInterval(() => {
                const bubble = document.createElement('div');
                bubble.style.cssText = `
                    position: absolute;
                    bottom: -50px;
                    left: ${Math.random() * 100}%;
                    width: ${Math.random() * 20 + 5}px;
                    height: ${Math.random() * 20 + 5}px;
                    background: rgba(0, 212, 255, 0.2);
                    border-radius: 50%;
                    animation: bubble-float ${Math.random() * 3 + 2}s linear infinite;
                `;
                bubbleContainer.appendChild(bubble);

                setTimeout(() => {
                    bubble.remove();
                }, 5000);
            }, 1000);
        }

        // Add CSS for bubble animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes bubble-float {
                0% {
                    transform: translateY(0) rotate(0deg);
                    opacity: 1;
                }
                100% {
                    transform: translateY(-100vh) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Start bubble effect
        setTimeout(createBubbles, 1000);
    </script>
</body>
</html>
