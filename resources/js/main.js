function userMenuToggle() {
    const icon = document.getElementById('userIcon');
    const info = document.getElementById('userInfo');
    if (icon && info) {
      icon.addEventListener('click', function (e) {
        e.stopPropagation();
        info.style.display = info.style.display === 'none' ? 'block' : 'none';
      });
      document.addEventListener('click', function () {
        info.style.display = 'none';
      });
      info.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    }
  }
  document.addEventListener('DOMContentLoaded', userMenuToggle);
  
  // Menu déroulant pour le sélecteur de langue
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('langBtn');
    const menu = document.getElementById('langMenu');
    if(btn && menu) {
      btn.addEventListener('click', function(e) {
        e.stopPropagation();
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
      });
      document.addEventListener('click', function() {
        menu.style.display = 'none';
      });
      menu.addEventListener('click', function(e) {
        e.stopPropagation();
      });
    }
  });
  
  // Traductions globales pour toutes les pages
  const translations = {
    fr: {
      'register-link': "S'inscrire",
      'signin-link': "Connexion",
      'about-title': "À propos du site",
      'welcome-msg': "Bienvenue sur notre site LEGO !",
      'about-desc': "Ici, vous trouverez des informations sur les produits LEGO, des actualités et bien plus encore.",
      'guide-title': "Guide d'utilisation",
      'usage1': "📷 Scannez le QR code",
      'usage1-desc': "Utilisez votre téléphone pour scanner le QR code affiché sur le bac LEGO afin d’accéder à plus d’informations.",
      'usage2': "📍 Consultez l’emplacement des bacs",
      'usage2-desc': "Consultez la carte pour localiser rapidement les différents bacs LEGO disponibles dans votre zone.",
      'usage3': "🗑️ Jetez vos déchets dans les bacs correspondants",
      'usage3-desc': "Triez vos déchets et placez-les dans le bac LEGO approprié pour faciliter le recyclage.",
      'usage4': "✅ Appuyez sur \"Terminer\"",
      'usage4-desc': "Une fois terminé, cliquez sur le bouton \"Terminer\" pour valider votre action et recevoir une confirmation.",
      'map-title': "Notre localisation",
      'home-link': "Accueil",
      'game-link': "Jeu",
      'action-link': "Action",
      'score-title': "Score",
      'level-title': "Niveau",
      'welcome-msg': "Bienvenue sur notre site LEGO !",
      'product-list-title': "Liste de produits LEGO",
      'product-th': "Produit",
      'total-th': "Total",
      'about-title': "À propos du site",
      'about-desc': "Ici, vous trouverez des informations sur les produits LEGO, des actualités et bien plus encore.",
      'guide-title': "Guide d'utilisation",
      'usage1': "Inscrivez-vous ou connectez-vous pour accéder à toutes les fonctionnalités.",
      'usage2': "Parcourez les différentes pages pour découvrir nos produits et services.",
      'usage3': "Utilisez le menu utilisateur pour gérer votre compte.",
      'map-title': "Notre localisation",
      'register-link': "S'inscrire",
      'signin-link': "Connexion",
      'register-page-title': "Inscription",
      'register-title': "Créer un compte",
      'register-username': "Nom d'utilisateur",
      'register-email': "Adresse e-mail",
      'register-password': "Mot de passe",
      'register-btn': "S'inscrire",
      'login-page-title': "Connexion",
      'login-title': "Connexion",
      'login-username': "Nom d'utilisateur",
      'login-password': "Mot de passe",
      'login-btn': "Se connecter",
      'label-nom': "Nom :",
      'label-prenom': "Prénom :",
      'label-email': "Email :",
      'label-password': "Mot de passe :",
      'save-btn': "Enregistrer",
      'about-desc2': "👉 En plaçant correctement vos déchets dans les bacs appropriés dans la vie réelle, vous gagnez des points grâce à notre système connecté.<br>🎮 De plus, nous proposons des jeux amusants et éducatifs pour apprendre à mieux trier et comprendre l'impact du recyclage.<br>Rejoignez-nous pour adopter les bons gestes et faire du tri un réflexe utile et gratifiant !"
    },
    en: {
      'register-link': "Register",
      'signin-link': "Sign In",
      'about-title': "About the site",
      'welcome-msg': "Welcome to our LEGO site!",
      'about-desc': "Here you will find information about LEGO products, news, and much more.",
      'guide-title': "User Guide",
      'usage1': "📷 Scan the QR code",
      'usage1-desc': "Use your phone to scan the QR code displayed on the LEGO bin to access more information.",
      'usage2': "📍 Check the location of the bins",
      'usage2-desc': "Check the map to quickly locate the different LEGO bins available in your area.",
      'usage3': "🗑️ Throw your waste in the appropriate bins",
      'usage3-desc': "Sort your waste and place it in the appropriate LEGO bin to facilitate recycling.",
      'usage4': "✅ Press \"Finish\"",
      'usage4-desc': "Once finished, click the \"Finish\" button to validate your action and receive confirmation.",
      'map-title': "Our location",
      'home-link': "Home",
      'game-link': "Game",
      'action-link': "Action",
      'score-title': "Score",
      'level-title': "Level",
      'welcome-msg': "Welcome to our LEGO site!",
      'product-list-title': "LEGO Product List",
      'product-th': "Product",
      'total-th': "Total",
      'about-title': "About the site",
      'about-desc': "Here you will find information about LEGO products, news and much more.",
      'guide-title': "User Guide",
      'usage1': "Register or sign in to access all features.",
      'usage2': "Browse the different pages to discover our products and services.",
      'usage3': "Use the user menu to manage your account.",
      'map-title': "Our location",
      'register-link': "Register",
      'signin-link': "Sign In",
      'register-page-title': "Sign Up",
      'register-title': "Create an account",
      'register-username': "Username",
      'register-email': "Email address",
      'register-password': "Password",
      'register-btn': "Sign up",
      'login-page-title': "Sign In",
      'login-title': "Sign In",
      'login-username': "Username",
      'login-password': "Password",
      'login-btn': "Sign In",
      'label-nom': "Last name:",
      'label-prenom': "First name:",
      'label-email': "Email:",
      'label-password': "Password:",
      'save-btn': "Save",
      'about-desc2': "👉 By properly placing your waste in the appropriate bins in real life, you earn points thanks to our connected system.<br>🎮 We also offer fun and educational games to help you learn how to sort better and understand the impact of recycling.<br>Join us to adopt good habits and make sorting a useful and rewarding reflex!"
    },
    ar: {
      'register-link': "تسجيل",
      'signin-link': "تسجيل الدخول",
      'about-title': "حول الموقع",
      'welcome-msg': "مرحبًا بكم في موقع LEGO الخاص بنا!",
      'about-desc': "هنا ستجد معلومات عن منتجات LEGO والأخبار والمزيد.",
      'guide-title': "دليل الاستخدام",
      'usage1': "📷 امسح رمز QR",
      'usage1-desc': "استخدم هاتفك لمسح رمز QR المعروض على صندوق LEGO للوصول إلى مزيد من المعلومات.",
      'usage2': "📍 تحقق من مواقع الصناديق",
      'usage2-desc': "تحقق من الخريطة لتحديد مواقع صناديق LEGO المختلفة في منطقتك بسرعة.",
      'usage3': "🗑️ ضع النفايات في الصندوق المناسب",
      'usage3-desc': "فرز نفاياتك وضعها في صندوق LEGO المناسب لتسهيل إعادة التدوير.",
      'usage4': "✅ اضغط على \"إنهاء\"",
      'usage4-desc': "عند الانتهاء، اضغط على زر \"إنهاء\" لتأكيد الإجراء واستلام التأكيد.",
      'map-title': "موقعنا",
      'home-link': "الرئيسية",
      'game-link': "اللعبة",
      'action-link': "الإجراء",
      'score-title': "النقاط",
      'level-title': "المستوى",
      'welcome-msg': "مرحبًا بكم في موقع LEGO الخاص بنا!",
      'product-list-title': "قائمة منتجات LEGO",
      'product-th': "المنتج",
      'total-th': "المجموع",
      'about-title': "حول الموقع",
      'about-desc': "هنا ستجد معلومات عن منتجات LEGO والأخبار والمزيد.",
      'guide-title': "دليل الاستخدام",
      'usage1': "سجل أو قم بتسجيل الدخول للوصول إلى جميع الميزات.",
      'usage2': "تصفح الصفحات المختلفة لاكتشاف منتجاتنا وخدماتنا.",
      'usage3': "استخدم قائمة المستخدم لإدارة حسابك.",
      'map-title': "موقعنا",
      'register-link': "تسجيل",
      'signin-link': "دخول",
      'register-page-title': "تسجيل",
      'register-title': "إنشاء حساب",
      'register-username': "اسم المستخدم",
      'register-email': "البريد الإلكتروني",
      'register-password': "كلمة المرور",
      'register-btn': "تسجيل",
      'login-page-title': "دخول",
      'login-title': "دخول",
      'login-username': "اسم المستخدم",
      'login-password': "كلمة المرور",
      'login-btn': "دخول",
      'label-nom': "اللقب:",
      'label-prenom': "الاسم:",
      'label-email': "البريد الإلكتروني:",
      'label-password': "كلمة المرور:",
      'save-btn': "حفظ",
      'about-desc2': "👉 من خلال وضع نفاياتك بشكل صحيح في الصناديق المناسبة في الحياة الواقعية، تكسب نقاطًا بفضل نظامنا المتصل.<br>🎮 نقدم أيضًا ألعابًا ممتعة وتعليمية لتتعلم كيفية الفرز بشكل أفضل وفهم تأثير إعادة التدوير.<br>انضم إلينا لتبني العادات الجيدة وجعل الفرز عادة مفيدة ومجزية!"
    }
  };
  
  function setLang(lang) {
    const ids = [
      ['about-title', 'about-title'],
      ['welcome-msg', 'welcome-msg'],
      ['about-desc', 'about-desc'],
      ['guide-title', 'guide-title'],
      ['usage1', 'usage1'],
      ['usage2', 'usage2'],
      ['usage3', 'usage3'],
      ['map-title', 'map-title'],
      ['register-link', 'register-link'],
      ['signin-link', 'signin-link'],
      ['register-page-title', 'register-page-title'],
      ['register-title', 'register-title'],
      ['register-btn', 'register-btn'],
      ['home-link', 'home-link'], // <-- Ajout pour Accueil
      ['login-page-title', 'login-page-title'],
      ['login-title', 'login-title'],
      ['login-btn', 'login-btn'],
      ['home-link', 'home-link'],
      ['game-link', 'game-link'],
      ['action-link', 'action-link'],
      ['home-link', 'home-link'],
      ['game-link', 'game-link'],
      ['action-link', 'action-link'],
      ['score-title', 'score-title'],
      ['level-title', 'level-title'],
      ['welcome-msg', 'welcome-msg'],
      ['product-list-title', 'product-list-title'],
      ['product-th', 'product-th'],
      ['total-th', 'total-th'],
      ['label-nom', 'label-nom'],
      ['label-prenom', 'label-prenom'],
      ['label-email', 'label-email'],
      ['label-password', 'label-password'],
      ['save-btn', 'save-btn'],
      ['register-link', 'register-link'],
      ['signin-link', 'signin-link'],
      ['about-title', 'about-title'],
      ['welcome-msg', 'welcome-msg'],
      ['about-desc', 'about-desc'],
      ['guide-title', 'guide-title'],
      ['usage1', 'usage1'],
      ['usage1-desc', 'usage1-desc'],
      ['usage2', 'usage2'],
      ['usage2-desc', 'usage2-desc'],
      ['usage3', 'usage3'],
      ['usage3-desc', 'usage3-desc'],
      ['usage4', 'usage4'],
      ['usage4-desc', 'usage4-desc'],
      ['map-title', 'map-title'],
      ['about-desc2', 'about-desc2'],
    ];
    const inputIds = [
      ['register-username', 'register-username'],
      ['register-email', 'register-email'],
      ['register-password', 'register-password'],
      ['login-username', 'login-username'],
      ['login-password', 'login-password']
    ];
    ids.forEach(([id, key]) => {
      const el = document.getElementById(id);
      if (el && translations[lang][key]) {
        if (id === 'about-desc2') {
          el.innerHTML = translations[lang][key]; // pour garder les <br>
        } else {
          el.textContent = translations[lang][key];
        }
      }
      
    });
    // Pour les placeholders des inputs
    inputIds.forEach(([id, key]) => {
      const el = document.getElementById(id);
      if (el && translations[lang][key]) {
        el.placeholder = translations[lang][key];
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    const logoutLink = document.getElementById('logout-link');
    if (logoutLink) {
      logoutLink.addEventListener('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
          window.location.href = '/logout'; // Redirige vers la route de déconnexion
        }
      });
    }
  });