<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Site LEGO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body id="body_indexe">
    <div class="wrapper">
        <header>
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo LEGO" class="logo" />
            </a>
            <nav>
                <a href="{{ url('/') }}" id="home-link">Accueil</a>
                <a href="{{ url('/game') }}" id="game-link">Game</a>
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
                    <p><strong id="user-label">Nom d'utilisateur :</strong> lego_user</p>
                    <p><strong id="email-label">Email :</strong> lego@example.com</p>
                    <a href="{{ url('/profile') }}" id="profile-link" style="color: #333; font-weight: bold; display: block; margin-bottom: 10px;">Voir le profil</a>
                    <a href="{{ url('/logout') }}" id="logout-link" style="color: red; font-weight: bold">Se déconnecter</a>
                </div>
            </div>
        </header>

        <main style="display: flex; gap: 20px; flex-wrap: wrap">
            <section id="about-site" style="flex: 1; min-width: 250px">
                <h2 id="about-title">À propos du site</h2>
                <h1 id="welcome-msg">Bienvenue sur notre site LEGO !</h1>
                <span id="about-desc2">
                    👉 En plaçant correctement vos déchets dans les bacs appropriés dans la vie réelle, vous gagnez des points grâce à notre système connecté.<br>
                    🎮 De plus, nous proposons des jeux amusants et éducatifs pour apprendre à mieux trier et comprendre l'impact du recyclage.<br>
                    Rejoignez-nous pour adopter les bons gestes et faire du tri un réflexe utile et gratifiant !
                </span>
            </section>
        </main>
        <main style="display: flex; gap: 20px; flex-wrap: wrap">
            <section id="guide-usage" style="flex: 1; min-width: 250px">
                <h2 id="guide-title">Guide d'utilisation</h2>
                <div class="accordion">
                    <details>
                        <summary id="usage1">📷 Scannez le QR code</summary>
                        <div class="desc" id="usage1-desc">
                            Utilisez votre téléphone pour scanner le QR code affiché sur le bac LEGO afin d’accéder à plus d’informations.
                        </div>
                    </details>
                    <details>
                        <summary id="usage2">📍 Consultez l’emplacement des bacs</summary>
                        <div class="desc" id="usage2-desc">
                            Consultez la carte pour localiser rapidement les différents bacs LEGO disponibles dans votre zone.
                        </div>
                    </details>
                    <details>
                        <summary id="usage3">🗑️ Jetez vos déchets dans les bacs correspondants</summary>
                        <div class="desc" id="usage3-desc">
                            Triez vos déchets et placez-les dans le bac LEGO approprié pour faciliter le recyclage.
                        </div>
                    </details>
                    <details>
                        <summary id="usage4">✅ Appuyez sur "Terminer"</summary>
                        <div class="desc" id="usage4-desc">
                            Une fois terminé, cliquez sur le bouton "Terminer" pour valider votre action et recevoir une confirmation.
                        </div>
                    </details>
                </div>
            </section>
        </main>
        <main style="display: flex; gap: 20px; flex-wrap: wrap" id="map-container">
            <section id="map" style="flex: 1; min-width: 250px">
                <h2 id="map-title">Notre localisation</h2>
                <div class="map-container" style="width:100%; max-width:600px; margin:0 auto;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7650.314386278515!2d3.226579854137296!3d36.754987681619816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sdz!4v1745954857499!5m2!1sen!2sdz"
                        width="100%" height="300" style="border:0; border-radius:10px; display:block;"
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </section>
        </main>
    </div>
    <footer>&copy; 2025 Mon Site LEGO - Tous droits réservés</footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
