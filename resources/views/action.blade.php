<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game - Mon Site LEGO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body id="body_action">
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
                    <button id="langBtn" style="width: 120px; background: #1bc300; border: none; color: #333; font-weight: bold; padding: 6px 18px; border-radius: 5px; cursor: pointer;">
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
                <img
                    src="{{ asset('img/user.png') }}"
                    alt="Utilisateur"
                    class="user-icon"
                    id="userIcon"
                    style="width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"
                />
                <div
                    id="userInfo"
                    style="display: none; position: absolute; right: 20px; top: 70px; background: #fff; border: 1px solid #ccc; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); z-index: 2000;"
                >
                    <p><strong>Nom d'utilisateur :</strong> lego_user</p>
                    <p><strong>Email :</strong> lego@example.com</p>
                    <a href="{{ url('/profile') }}" style="color:#333;font-weight:bold;display:block;margin-bottom:10px;">Voir le profil</a>
                    <a href="{{ url('/logout') }}" style="color:red;font-weight:bold;">Se déconnecter</a>
                </div>
            </div>
        </header>
        <div style="max-width: 800px; margin: 30px auto; background: #ffffff00; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); display: flex; gap: 20px; justify-content: center;">
            <div style="flex: 1; text-align: center">
                <h2 id="score-title">Score</h2>
                <p><strong>Score :</strong> <span id="score">1200</span></p>
            </div>
            <div style="flex: 1; text-align: center">
                <h2 id="level-title">Niveau</h2>
                <p><strong>Niveau :</strong> <span id="level">5</span></p>
            </div>
        </div>
        <main style="background: rgba(255, 255, 255, 0);">
            <h1 id="welcome-msg">Bienvenue sur notre site LEGO !</h1>
            <div style="max-width: 600px; margin: 30px auto; background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <h2 id="product-list-title">Liste de produits LEGO</h2>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 15px">
                    <thead>
                        <tr style="background: #f5f5f5">
                            <th id="product-th">Produit</th>
                            <th style="padding: 8px; border: 1px solid #ddd; text-align: right">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd">LEGO City - Camion de Pompiers</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right">25</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd">LEGO Star Wars - X-Wing Fighter</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right">45</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd">LEGO Technic - Voiture de Course</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right">39</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd">LEGO Friends - Maison de Mia</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right">29</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; border: 1px solid #ddd">LEGO Creator - Maison Moderne</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right">35</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr style="background: #f5f5f5">
                            <td id="total-th">Total</td>
                            <td style="padding: 8px; border: 1px solid #ddd; text-align: right; font-weight: bold;">173</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <footer>&copy; 2025 Mon Site LEGO - Tous droits réservés</footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>