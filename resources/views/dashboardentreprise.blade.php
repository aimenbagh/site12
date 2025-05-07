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
      height: 75%;
    }

    .item:nth-child(3) { /* Content */
        margin-top: 2%;
      flex-grow: 1;
      height: 120%;
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
    <div class="main-content">
        @if ($view === 'users')
            <h1>Liste des utilisateurs</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Ville</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->vile }}</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif ($view === 'create-entreprise')
            <h1>Ajouter une entreprise</h1>
            <form method="POST" action="{{ route('entreprise.store') }}" style="display: flex; flex-direction: column; gap: 5px; color: #333; font-weight: bold; background: transparent; border: none;margin-top: 5px;">
                {{-- Display errors if any --}}
                {{-- CSRF token for security --}}
                @csrf
                <div>
                    <label for="name">Nom de l'entreprise</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="code">Code</label>
                    <input type="text" id="code" name="code" required>
                </div>
                <div>
                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div>
                    <label for="city">Ville</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div>
                    <label for="postal_code">Code postal</label>
                    <input type="text" id="postal_code" name="postal_code" required>
                </div>
                <div>
                    <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit">Ajouter</button>
            </form>
        @elseif ($view === 'trche')
            <h1>Liste des trches</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Admin</th>
                        <th>ID Entreprise</th>
                        <th>Quantité CA</th>
                        <th>Quantité PA</th>
                        <th>Quantité PL</th>
                        <th>Quantité VE</th>
                        <th>Quantité ME</th>
                        <th>Quantité OR</th>
                        <th>Description</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trches as $trche)
                        <tr>
                            <td>{{ $trche->id }}</td>
                            <td>{{ $trche->id_admin }}</td>
                            <td>{{ $trche->id_entreprises }}</td>
                            <td>{{ $trche->qunt_ca }}</td>
                            <td>{{ $trche->qunt_pa }}</td>
                            <td>{{ $trche->qunt_pl }}</td>
                            <td>{{ $trche->qunt_ve }}</td>
                            <td>{{ $trche->qunt_me }}</td>
                            <td>{{ $trche->qunt_or }}</td>
                            <td>{{ $trche->description }}</td>
                            <td>{{ $trche->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>Bienvenue sur le tableau de bord Admin</h1>
            <div class="card">
                <h3>Statistiques générales</h3>
                <p>Voici un aperçu rapide des performances de votre application.</p>
            </div>
        @endif
    </div>
</div>
        <footer>&copy; 2025 Mon Site LEGO - Tous droits réservés</footer>
    
  </div>
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
