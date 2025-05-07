<!-- filepath: c:\laragon\www\site12\resources\views\game.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Site LEGO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="wrapper">
        <header>
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo LEGO" class="logo" />
            </a>
            <nav>
                <a href="{{ url('/') }}" id="home-link">Accueil</a>
                <a href="{{ url('/game') }}" id="game-link" class="active">Game</a>
                <a href="{{ url('/action') }}" id="action-link">Action</a>
            </nav>
            <div id="lang-switcher" style="display: flex; align-items: center; gap: 10px;">
                <div style="position: relative;">
                    <button id="langBtn" style="width: 120px; background:#1bc300; border: none; color: #333; font-weight: bold; padding: 6px 18px; border-radius: 5px; cursor: pointer;">
                        <img src="{{ asset('img/long.png') }}" alt="Langue" style="width:32px;height:32px;margin-right:8px;">
                    </button>
                    <div id="langMenu" style="display: none; position: absolute; left: 0; top: 110%; background: #fff; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); min-width: 120px; z-index: 100;">
                        <button onclick="setLang('fr')" style="width:100%;background:none;border:none;padding:8px 0;cursor:pointer;">Français</button>
                        <button onclick="setLang('en')" style="width:100%;background:none;border:none;padding:8px 0;cursor:pointer;">English</button>
                        <button onclick="setLang('ar')" style="width:100%;background:none;border:none;padding:8px 0;cursor:pointer;">العربية</button>
                    </div>
                </div>
            </div>
            <div class="user-menu">
                <img src="{{ asset('img/user.png') }}" alt="Utilisateur" class="user-icon" id="userIcon" style="width:40px;height:40px;border-radius:50%;cursor:pointer;">
                <div id="userInfo" style="display:none;position:absolute;right:20px;top:70px;background:#fff;border:1px solid #ccc;padding:15px;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.15);z-index:2000;">
                    <p><strong>Nom d'utilisateur :</strong> lego_user</p>
                    <p><strong>Email :</strong> lego@example.com</p>
                    <a href="{{ url('/profile') }}" style="color:#333;font-weight:bold;display:block;margin-bottom:10px;">Voir le profil</a>
                    <a href="{{ url('/') }}" style="color:red;font-weight:bold;">Se déconnecter</a>
                </div>
            </div>
        </header>
        <main style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 2%;">
            <div class="game-card" style="background:#f9f9f9;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.10);padding:20px;min-width:250px;max-width:320px;display:flex;flex-direction:column;align-items:center;">
                <img src="{{ asset('img/Last_min.png') }}" alt="Last-min.exe" style="width:100px;height:100px;margin-bottom:15px;">
                <h2 style="margin:10px 0 5px 0;">TrashQuest</h2>
                <p style="text-align:center;margin-bottom:15px;">Scan The QR code, unlock levels, and win both in virtual Reality and Reality</p>
                <a href="{{ asset('files/Last_min.rar') }}" download style="background:#1bc300;color:#fff;padding:10px 20px;border-radius:5px;text-decoration:none;font-weight:bold;">Télécharger</a>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>