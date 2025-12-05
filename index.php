<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Taufiq Hidayat | Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid rgba(255,255,255,0.3);
            margin-bottom: 20px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .pronouns {
            font-size: 1.1em;
            opacity: 0.9;
            margin-bottom: 10px;
        }

        .role {
            font-size: 1.3em;
            opacity: 0.95;
            margin-bottom: 20px;
        }

        .stats {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2em;
            font-weight: bold;
            display: block;
        }

        .stat-label {
            opacity: 0.8;
            font-size: 0.9em;
        }

        .bio-section {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 40px;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .bio-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .bio-item:last-child {
            margin-bottom: 0;
        }

        .icon {
            font-size: 1.5em;
        }

        .cta-section {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .btn {
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary {
            background: #fff;
            color: #667eea;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.2);
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-3px);
        }

        .easter-egg-trigger {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .easter-egg-trigger:hover {
            transform: scale(1.1) rotate(20deg);
            background: rgba(255,255,255,0.3);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            max-width: 500px;
            animation: scaleIn 0.5s ease;
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 30px;
            cursor: pointer;
            color: #fff;
            opacity: 0.8;
        }

        .close-modal:hover {
            opacity: 1;
        }

        .konami-msg {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .secret-emoji {
            font-size: 80px;
            animation: bounce 1s infinite;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .spinning {
            animation: spin 1s ease-in-out;
        }

        footer {
            text-align: center;
            margin-top: 60px;
            opacity: 0.8;
            font-size: 0.9em;
        }

        @media (max-width: 768px) {
            h1 { font-size: 2em; }
            .stats { gap: 20px; }
            .cta-section { flex-direction: column; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="profile-img" id="profileImg">馃懆鈥嶐煉�</div>
            <h1>Muhammad Taufiq Hidayat</h1>
            <p class="pronouns">they/them</p>
            <p class="role">Founder | Investor | Content Creator</p>
            
            <div class="stats">
                <div class="stat-item">
                    <span class="stat-number">16</span>
                    <span class="stat-label">postingan</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">3.418</span>
                    <span class="stat-label">pengikut</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">19</span>
                    <span class="stat-label">mengikuti</span>
                </div>
            </div>
        </header>

        <div class="bio-section">
            <div class="bio-item">
                <span class="icon">馃摟</span>
                <span>Kemitraan: muhammadtaufiqhidayat398@gmail.com</span>
            </div>
            <div class="bio-item">
                <span class="icon">馃摉</span>
                <span>Baca cerita saya</span>
            </div>
            <div class="bio-item">
                <span class="icon">馃憞</span>
                <span>Unduh E-book gratis:</span>
            </div>
            <div class="bio-item">
                <span class="icon">馃敆</span>
                <a href="https://lynk.id/mhmmdtfqhdytstore" target="_blank" style="color: #fff; text-decoration: none;">lynk.id/mhmmdtfqhdytstore</a>
            </div>
        </div>

        <div class="cta-section">
            <a href="mailto:muhammadtaufiqhidayat398@gmail.com" class="btn btn-primary">馃摡 Hubungi Saya</a>
            <a href="https://lynk.id/mhmmdtfqhdytstore" target="_blank" class="btn btn-secondary">馃泹锔� Lihat E-book</a>
            <a href="https://www.instagram.com/mhmmdtfqhdyt" target="_blank" class="btn btn-secondary">馃摳 Instagram</a>
        </div>

        <footer>
            <p>鉁� Psst... ada sesuatu yang tersembunyi di sini. Coba klik emoji di pojok kanan bawah! 馃巵</p>
        </footer>
    </div>

    <div class="easter-egg-trigger" id="easterEgg">馃帀</div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="close-modal" id="closeModal">&times;</span>
            <div class="secret-emoji">馃帄</div>
            <p class="konami-msg">Selamat! Kamu menemukan Easter Egg!</p>
            <p>馃殌 Fun fact: Taufiq punya 27 ribu tayangan dalam 30 hari terakhir! Dia sedang on fire! 馃敟</p>
            <p style="margin-top: 20px; font-size: 0.9em; opacity: 0.9;">
                馃挕 Tips rahasia: Klik foto profil di atas 10 kali untuk hadiah spesial lainnya!
            </p>
        </div>
    </div>

    <script>
        let clickCount = 0;
        let konamiCode = [];
        const konamiPattern = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];

        // Easter Egg 1: Klik tombol emoji
        document.getElementById('easterEgg').addEventListener('click', function() {
            document.getElementById('modal').classList.add('active');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('active');
        });

        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        });

        // Easter Egg 2: Klik foto profil 10 kali
        document.getElementById('profileImg').addEventListener('click', function() {
            clickCount++;
            this.classList.add('spinning');
            
            setTimeout(() => {
                this.classList.remove('spinning');
            }, 1000);

            if (clickCount === 10) {
                this.textContent = '馃帀';
                document.body.style.background = 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)';
                alert('馃帄 SUPER SECRET UNLOCKED! 馃帄\n\nSelamat! Kamu menemukan level konspirasi tertinggi!\n\nTaufiq sebenarnya adalah... seorang content creator yang luar biasa! 馃殌\n\nKlik OK untuk reset.');
                clickCount = 0;
                setTimeout(() => {
                    this.textContent = '馃懆鈥嶐煉�';
                    document.body.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                }, 2000);
            }
        });

        // Easter Egg 3: Konami Code
        document.addEventListener('keydown', function(e) {
            konamiCode.push(e.key);
            konamiCode.splice(-konamiPattern.length - 1, konamiCode.length - konamiPattern.length);

            if (konamiCode.join('').includes(konamiPattern.join(''))) {
                document.body.style.animation = 'spin 2s ease-in-out';
                alert('馃幃 KONAMI CODE ACTIVATED! 馃幃\n\nLevel developer mode unlocked!\n\nTaufiq appreciation: +1000 points! 馃弳');
                setTimeout(() => {
                    document.body.style.animation = '';
                }, 2000);
                konamiCode = [];
            }
        });

        // Easter Egg 4: Double click pada judul
        document.querySelector('h1').addEventListener('dblclick', function() {
            const colors = ['#f093fb', '#f5576c', '#667eea', '#764ba2', '#48c6ef', '#6f86d6'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            this.style.color = randomColor;
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 300);
        });

        // Easter Egg 5: Ketik "taufiq" di keyboard
        let typedWord = '';
        document.addEventListener('keypress', function(e) {
            typedWord += e.key.toLowerCase();
            if (typedWord.includes('taufiq')) {
                const emojis = ['馃帀', '馃殌', '猸�', '馃挕', '馃敟', '鉁�'];
                for (let i = 0; i < 20; i++) {
                    setTimeout(() => {
                        const emoji = document.createElement('div');
                        emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                        emoji.style.position = 'fixed';
                        emoji.style.left = Math.random() * window.innerWidth + 'px';
                        emoji.style.top = '-50px';
                        emoji.style.fontSize = '40px';
                        emoji.style.zIndex = '9999';
                        emoji.style.transition = 'all 3s ease-in';
                        document.body.appendChild(emoji);
                        
                        setTimeout(() => {
                            emoji.style.top = window.innerHeight + 'px';
                            emoji.style.opacity = '0';
                        }, 100);
                        
                        setTimeout(() => {
                            emoji.remove();
                        }, 3100);
                    }, i * 100);
                }
                typedWord = '';
            }
            if (typedWord.length > 10) typedWord = '';
        });
    </script>
</body>
</html>