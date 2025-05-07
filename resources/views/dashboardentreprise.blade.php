<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <title>Dashboard Layout</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      gap: 2%;
      flex-wrap: wrap;
      align-content: flex-start;
      height: 100vh;
      padding: 1%;
      background-color: #f4f4f4;
    }

    .item {
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .item:nth-child(1), /* Header */
    .item:nth-child(4)  /* Footer */ {
      width: 100%;
      height: 5%;
    }

    .item:nth-child(2) { /* Sidebar */
        margin-top: 2%;
      width: 25%;
      height: 130%;
    }

    .item:nth-child(3) { /* Content */
        margin-top: 2%;
      flex-grow: 1;
      height: 130%;
    }

    /* Responsive option */
    @media (max-width: 768px) {
      .item:nth-child(2),
      .item:nth-child(3) {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>
<body>

  <div class="container">
      <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo LEGO" class="logo" />
        </a>
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
    <div class="item"><div class="sidebar">
    <h2>Navigation</h2>
    <a href="{{ route('admin.users') }}">Utilisateurs</a>
    <a href="{{ route('admin.trche') }}">Trach</a>
    <a href="{{ route('admin.entreprise.create') }}">Ajoute entreprise</a>
</div></div>
    <div class="item"> 
        <h1>Bienvenue sur le tableau de bord de l'entreprise</h1>
        <p>Voici quelques statistiques et informations importantes.</p>
        <div class="stats">
            <div class="stat-item">
            <h3>Statistique 1</h3>
            <p>Détails de la statistique 1...</p>
            </div>
            <div class="stat-item">
            <h3>Statistique 2</h3>
            <p>Détails de la statistique 2...</p>
            </div>
            <div class="stat-item">
            <h3>Statistique 3</h3>
            <p>Détails de la statistique 3...</p>
            </div>
        </div>
</div>
    
  </div>
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
