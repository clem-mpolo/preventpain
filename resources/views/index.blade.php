<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JTJ5Y47Z83"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-JTJ5Y47Z83');
        </script>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Titre de la page -->
        <title>Mon Site à Crédit - Solutions Web Accessibles</title>
        
        <!-- Meta Description pour le SEO -->
        <meta name="description" content="Découvrez Mon Site à Crédit, votre solution pour obtenir un crédit rapidement et en toute sécurité. Profitez de solutions web accessibles et adaptées à vos besoins.">
    
        <!-- Meta Keywords (optionnel) -->
        <meta name="keywords" content="crédit, crédit en ligne, prêt, financement, solutions web, crédit sécurisé">
    
        <!-- Meta Robots pour l'indexation -->
        <meta name="robots" content="index, follow">
    
        <!-- Balise Canonical -->
        <link rel="canonical" href="https://siteacredit.netlify.app/">
    
        <!-- Open Graph pour le partage sur les réseaux sociaux -->
        <meta property="og:title" content="Mon Site à Crédit - Solutions Web Accessibles">
        <meta property="og:description" content="Découvrez Mon Site à Crédit, votre solution pour obtenir un crédit rapidement et en toute sécurité.">
        <meta property="og:url" content="https://siteacredit.netlify.app/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://siteacredit.netlify.app/monsite.jpg">
    
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Mon Site à Crédit - Solutions Web Accessibles">
        <meta name="twitter:description" content="Découvrez Mon Site à Crédit, votre solution pour obtenir un crédit rapidement et en toute sécurité.">
        <meta name="twitter:image" content="https://siteacredit.netlify.app/monsite.jpg">
    
        <!-- Inclusion de Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
    
        <!-- EmailJS SDK via CDN -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script type="text/javascript">
            (function() {
                emailjs.init("IzHR-2Y94KusMvNb0");
            })();
        </script>
    
        <!--  script principal -->
        <script src="script.js" defer></script>
    
        <!-- Styles additionnels -->
        <style>
            @media (max-width: 768px) {
                body {
                    padding-bottom: 60px;
                }
                #forfaits .grid {
                    scroll-snap-type: x mandatory;
                    scroll-padding: 1rem;
                }
                #forfaits .grid > div {
                    scroll-snap-align: start;
                    min-width: 280px;
                }
                .project-card {
                    margin-bottom: 1rem;
                }
                .contact form {
                    padding: 1rem;
                }
            }
        </style>
    </head>
    
<body class="bg-sky-50">
    <header class="bg-gradient-to-r from-sky-600 to-blue-600 text-white fixed w-full z-10">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-xl font-bold">MonSiteàCrédit</div>
                <!-- Menu Mobile Burger -->
                <button class="md:hidden text-white focus:outline-none" id="menuButton">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="hover:text-sky-200 transition">Accueil</a>
                    <a href="#portfolio" class="hover:text-sky-200 transition">Réalisations</a>
                    <a href="#forfaits" class="hover:text-sky-200 transition">Forfaits</a>
                    <a href="#contact" class="hover:text-sky-200 transition">Contact</a>
                </div>
            </div>
            <!-- Menu Mobile Panel -->
            <div class="md:hidden" id="mobileMenu" style="display: none;">
                <div class="flex flex-col space-y-4 pt-4 pb-3">
                    <a href="#accueil" class="hover:text-sky-200 transition">Accueil</a>
                    <a href="#portfolio" class="hover:text-sky-200 transition">Réalisations</a>
                    <a href="#forfaits" class="hover:text-sky-200 transition">Forfaits</a>
                    <a href="#contact" class="hover:text-sky-200 transition">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="accueil" class="pt-24 pb-12 bg-gradient-to-r from-sky-400 to-blue-500 text-white">
            <div class="container mx-auto px-6 py-20">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-left">
                        <div class="inline-block bg-red-500 text-white px-4 py-2 rounded-full mb-6 animate-pulse">
                            🔥 Nouveau : Payez votre site web en plusieurs fois !
                        </div>
                        <h1 class="text-5xl font-bold mb-6">Votre Site Web Professionnel à Crédit</h1>
                        <p class="text-xl mb-8">Obtenez votre site web maintenant, payez en petites mensualités</p>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p>Paiement étalé sur 12 mois sans frais</p>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p>Aucun acompte nécessaire</p>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <p>preventpain meilleur solution</p>
                            </div>
                        </div>
                        <a href="#forfaits" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-sky-100 transition duration-300">
                            Voir nos forfaits crédit
                        </a>
                    </div>
                    <div class="relative">
                        <img src="{{asset('assets/img/modele-page-destination-restaurant_23-2148466849.jpg')}}" alt="Exemple de site web" class="rounded-lg shadow-2xl">
                        <div class="absolute -bottom-4 -right-4 bg-white text-sky-800 px-6 py-2 rounded-full font-bold shadow-lg">
                            À partir de 50$/mois
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nouvelle section de recommandations -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Recommandé par les Leaders du Digital</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                    <!-- WordPress.org -->
                    <div class="text-center">
                        <img src="https://s.w.org/style/images/about/WordPress-logotype-standard.png" alt="WordPress.org" class="h-12 mx-auto mb-4 object-contain">
                        <div class="flex justify-center text-yellow-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-gray-600">5.0/5</p>
                    </div>

                    <!-- Google -->
                    <div class="text-center">
                        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google" class="h-12 mx-auto mb-4 object-contain">
                        <div class="flex justify-center text-yellow-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-gray-600">5.0/5</p>
                    </div>

                    <!-- Hostinger -->
                    <div class="text-center">
                        <img src="https://assets.hostinger.com/images/logo-dark.svg" alt="Hostinger" class="h-12 mx-auto mb-4 object-contain">
                        <div class="flex justify-center text-yellow-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-gray-600">5.0/5</p>
                    </div>

                    <!-- Orange Digital Center -->
                    <div class="text-center">
                        <img src="https://orangedigitalcenters.com/templates/yootheme/cache/odc-logo-0c9c9cf1.png" alt="Orange Digital Center" class="h-12 mx-auto mb-4 object-contain">
                        <div class="flex justify-center text-yellow-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-gray-600">5.0/5</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="forfaits" class="py-20 bg-white">
            <div class="container mx-auto px-4 md:px-6">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12 text-gray-800">Nos Forfaits à Crédit</h2>
                <div class="flex overflow-x-auto md:grid md:grid-cols-3 gap-4 md:gap-8 pb-4 md:pb-0">
                    <!-- Forfait Vitrine -->
                    <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-sky-200 hover:border-sky-400 transition duration-300 min-w-[300px] md:min-w-0">
                        <h3 class="text-2xl font-bold text-sky-800 mb-4">Site Vitrine</h3>
                        <div class="mb-4">
                            <p class="text-gray-600 line-through">Prix total: 150$</p>
                            <p class="text-3xl font-bold text-sky-600">15$/mois</p>
                            <p class="text-sm text-gray-600">pendant 10 mois</p>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>5 pages incluses</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Hébergement inclus</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>SSL gratuit</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>SEO de base inclus</li>
                        </ul>
                        <a href="https://wa.me/243819301875?text=Bonjour%20PreventPain%2C%0A%0AJe%20suis%20intéressé%20par%20votre%20forfait%20Site%20Vitrine%20%3A%0A-%20Prix%20%3A%2015%24%2Fmois%20pendant%2010%20mois%0A-%205%20pages%20incluses%0A-%20Hébergement%20inclus%0A-%20SSL%20gratuit%0A-%20SEO%20de%20base%0A%0APouvez-vous%20me%20donner%20plus%20d'informations%20%3F" target="_blank" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 inline-block text-center">
                            Commander maintenant
                        </a>
                    </div>

                    <!-- Forfait Blog -->
                    <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-sky-200 hover:border-sky-400 transition duration-300 min-w-[300px] md:min-w-0">
                        <h3 class="text-2xl font-bold text-sky-800 mb-4">Site Blog</h3>
                        <div class="mb-4">
                            <p class="text-gray-600 line-through">Prix total: 200$</p>
                            <p class="text-3xl font-bold text-sky-600">20$/mois</p>
                            <p class="text-sm text-gray-600">pendant 10 mois</p>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Blog illimité</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Gestion de contenu</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>SSL & Hébergement</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>SEO avancé</li>
                        </ul>
                        <a href="https://wa.me/243819301875?text=Bonjour%20PreventPain%2C%0A%0AJe%20suis%20intéressé%20par%20votre%20forfait%20Site%20Blog%20%3A%0A-%20Prix%20%3A%2020%24%2Fmois%20pendant%2010%20mois%0A-%20Blog%20illimité%0A-%20Gestion%20de%20contenu%0A-%20SSL%20%26%20Hébergement%0A-%20SEO%20avancé%0A%0APouvez-vous%20me%20donner%20plus%20d'informations%20%3F" target="_blank" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 inline-block text-center">
                            Commander maintenant
                        </a>
                    </div>

                    <!-- Forfait E-commerce -->
                    <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-sky-200 hover:border-sky-400 transition duration-300 min-w-[300px] md:min-w-0">
                        <h3 class="text-2xl font-bold text-sky-800 mb-4">Site E-commerce</h3>
                        <div class="mb-4">
                            <p class="text-gray-600 line-through">Prix total: 340$</p>
                            <p class="text-3xl font-bold text-sky-600">34$/mois</p>
                            <p class="text-sm text-gray-600">pendant 10 mois</p>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Boutique complète</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Paiement en ligne</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>Gestion des stocks</li>
                            <li class="flex items-center"><svg class="w-5 h-5 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path></svg>SEO & Marketing</li>
                        </ul>
                        <a href="https://wa.me/243819301875?text=Bonjour%20PreventPain%2C%0A%0AJe%20suis%20intéressé%20par%20votre%20forfait%20Site%20E-commerce%20%3A%0A-%20Prix%20%3A%2034%24%2Fmois%20pendant%2010%20mois%0A-%20Boutique%20complète%0A-%20Paiement%20en%20ligne%0A-%20Gestion%20des%20stocks%0A-%20SEO%20%26%20Marketing%0A%0APouvez-vous%20me%20donner%20plus%20d'informations%20%3F" target="_blank" class="w-full bg-sky-600 hover:bg-sky-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 inline-block text-center">
                            Commander maintenant
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="py-20 bg-sky-50">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nos Réalisations</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Projet 1 -->
                    <a href="https://www.ajcascongoasbl.org/" target="_blank" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-white">
                            <img src="{{asset('assets/img/ajcas.png')}}" alt="Site AJCAS" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 text-sky-800">AJCAS</h3>
                                <p class="text-gray-600 mb-4">Site d'une ONG de soutiens des orphelins</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-sky-100 text-sky-600 rounded-full text-sm">Site dynamique</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Association</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Projet 2 -->
                    <a href="https://poetic-lamington-711d8d.netlify.app/" target="_blank" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-white">
                            <img src="{{asset('assets/img/probat-elarning.png')}}" alt="Plateforme E-learning" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 text-sky-800">Probat E-learning</h3>
                                <p class="text-gray-600 mb-4">Plateforme de formation en ligne pour professionnels</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-sky-100 text-sky-600 rounded-full text-sm">E-learning</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Formation</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Projet 3 -->
                    <a href="https://worldleadgroup.netlify.app/" target="_blank" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-white">
                            <img src="{{asset('assets/img/prestation service.png')}}" alt="Site Services" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 text-sky-800">Services Pro</h3>
                                <p class="text-gray-600 mb-4">Plateforme de prestation de services professionnels</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-sky-100 text-sky-600 rounded-full text-sm">Services</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Professionnel</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Projet 4 -->
                    <a href="https://gmskstore.netlify.app/" target="_blank" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-white">
                            <img src="{{asset('assets/img/commerce.png')}}" alt="Site E-commerce" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 text-sky-800">Shop gmstore</h3>
                                <p class="text-gray-600 mb-4">Boutique en ligne avec système de paiement intégré</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-sky-100 text-sky-600 rounded-full text-sm">E-commerce</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Paiement</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Projet 5 -->
                    <a href="https://storied-cheesecake-6727bf.netlify.app/" target="_blank" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-white">
                            <img src="{{asset('assets/img/reto.png')}}" alt="Site Reto" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 text-sky-800">Resto</h3>
                                <p class="text-gray-600 mb-4">Site dynamique un restaurant avec système de réservation</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-sky-100 text-sky-600 rounded-full text-sm">site web</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Interactif</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="contact" class="py-20 bg-gradient-to-r from-sky-600 to-blue-600 text-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Demande de Création de Site Web</h2>
                <div class="text-center mb-12">
                    <p class="text-xl mb-4">Vous pouvez nous contacter :</p>
                    <div class="flex justify-center space-x-6 mb-8">
                  
                        <a href="https://wa.me/243819301875" target="_blank" class="flex items-center text-white hover:text-sky-200 transition">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                        <a href="https://web.facebook.com/profile.php?id=100075849205779" target="_blank" class="flex items-center text-white hover:text-sky-200 transition">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                            </svg>
                            PreventPain
                        </a>
                    </div>
                </div>
                <form id="contactForm" class="max-w-lg mx-auto space-y-6" onsubmit="sendEmail(event)">
                    <!-- Informations personnelles -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="name" placeholder="Votre nom" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70" required>
                        </div>
                        <div>
                            <input type="text" name="company" placeholder="Nom de l'entreprise" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="email" name="email" placeholder="Votre email" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70" required>
                        </div>
                        <div>
                            <input type="tel" name="phone" placeholder="Téléphone" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70" required>
                        </div>
                    </div>

                    <!-- Type de projet -->
                    <div>
                        <select name="siteType" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white" required>
                            <option value="" class="text-gray-800">Type de site souhaité</option>
                            <option value="vitrine" class="text-gray-800">Site Vitrine</option>
                            <option value="ecommerce" class="text-gray-800">Site E-commerce</option>
                            <option value="portfolio" class="text-gray-800">Portfolio</option>
                            <option value="blog" class="text-gray-800">Blog</option>
                            <option value="autre" class="text-gray-800">Autre</option>
                        </select>
                    </div>

                    <!-- Budget -->
                    <div>
                        <select name="package" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white" required>
                            <option value="" class="text-gray-800">Choisissez votre forfait</option>
                            <option value="essentiel" class="text-gray-800">Forfait Essentiel (50$/mois)</option>
                            <option value="pro" class="text-gray-800">Forfait Professionnel (100$/mois)</option>
                            <option value="enterprise" class="text-gray-800">Forfait Enterprise (200$/mois)</option>
                        </select>
                    </div>

                    <!-- Fonctionnalités souhaitées -->
                    <div class="space-y-2">
                        <p class="text-sm text-white/70">Fonctionnalités souhaitées :</p>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="features" value="contact" class="form-checkbox rounded text-sky-400">
                                <span>Formulaire de contact</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="features" value="gallery" class="form-checkbox rounded text-sky-400">
                                <span>Galerie photos</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="features" value="blog" class="form-checkbox rounded text-sky-400">
                                <span>Blog/Actualités</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="features" value="social" class="form-checkbox rounded text-sky-400">
                                <span>Réseaux sociaux</span>
                            </label>
                        </div>
                    </div>

                    <!-- Description du projet -->
                    <div>
                        <textarea name="description" placeholder="Décrivez votre projet en détail (objectifs, références, contenus souhaités...)" rows="5" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70" required></textarea>
                    </div>

                    <!-- Délai souhaité -->
                    <div>
                        <input type="date" name="deadline" placeholder="Délai souhaité" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 focus:border-white focus:outline-none text-white placeholder-white/70">
                    </div>

                    <button type="submit" class="w-full bg-white text-blue-600 font-bold py-3 px-4 rounded-lg hover:bg-sky-100 transition duration-300">
                        Envoyer ma demande
                    </button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-gray-400 py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-2">&copy; 2024 MonSiteàCrédit. Tous droits réservés.</p>
            <p class="text-sm">Designed by <a href="https://preventpain-cd.tech/" class="text-sky-400 hover:text-sky-300 transition">PreventPain</a></p>
        </div>
    </footer>

    <!-- Ajouter un menu de navigation fixe en bas pour mobile -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 md:hidden z-50">
        <div class="grid grid-cols-4 gap-1">
            <a href="#accueil" class="flex flex-col items-center py-2 text-sky-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="text-xs mt-1">Accueil</span>
            </a>
            <a href="#portfolio" class="flex flex-col items-center py-2 text-sky-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="text-xs mt-1">Projets</span>
            </a>
            <a href="#forfaits" class="flex flex-col items-center py-2 text-sky-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="text-xs mt-1">Forfaits</span>
            </a>
            <a href="#contact" class="flex flex-col items-center py-2 text-sky-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="text-xs mt-1">Contact</span>
            </a>
        </div>
    </div>

    <!-- Ajouter le script pour le menu mobile -->
    <script>
        // Gestion du menu mobile
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuButton.addEventListener('click', () => {
            const isMenuHidden = mobileMenu.style.display === 'none';
            mobileMenu.style.display = isMenuHidden ? 'block' : 'none';
        });

        // Fermer le menu mobile lors du clic sur un lien
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.style.display = 'none';
            });
        });

        // Smooth scrolling avec ajustement pour le header fixe
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Remplacer la section chat existante par celle-ci -->
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="toggleChat()" class="bg-sky-600 hover:bg-sky-700 text-white rounded-full p-4 shadow-lg flex items-center space-x-2 group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span class="hidden group-hover:inline">Chat avec nous</span>
        </button>

        <!-- Chat Popup -->
        <div id="chatWindow" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white w-full max-w-md rounded-lg shadow-xl mx-4">
                <!-- En-tête -->
                <div class="bg-sky-600 text-white p-4 rounded-t-lg flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        <h3 class="font-bold">Chat PreventPain</h3>
                    </div>
                    <button onclick="toggleChat()" class="text-white hover:text-sky-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Zone de messages -->
                <div class="p-4 h-96 overflow-y-auto bg-gray-50" id="chatMessages">
                    <div class="mb-4">
                        <div class="flex items-start space-x-2">
                            <div class="w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center text-white font-bold">
                                P
                            </div>
                            <div class="bg-white p-3 rounded-lg shadow-sm max-w-xs">
                                👋 Bonjour! Je suis l'assistant PreventPain. Comment puis-je vous aider aujourd'hui?
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Zone de saisie -->
                <div class="p-4 border-t bg-white rounded-b-lg">
                    <form onsubmit="sendChatMessage(event)" class="flex space-x-2">
                        <input type="text" id="chatInput" placeholder="Écrivez votre message..." 
                               class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:border-sky-600">
                        <button type="submit" class="bg-sky-600 text-white px-4 py-2 rounded-lg hover:bg-sky-700 flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    // Smooth scrolling pour les liens de navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Supprimer ce gestionnaire qui entre en conflit
// document.getElementById('contact-form').addEventListener('submit', function(e) {
//     e.preventDefault();
//     alert('Message envoyé ! (Simulation)');
//     this.reset();
// });

function sendEmail(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const templateParams = {
        to_name: "PreventPain",
        from_name: formData.get('name'),
        name: formData.get('name'),
        company: formData.get('company'),
        email: formData.get('email'),
        phone: formData.get('phone'),
        siteType: formData.get('siteType'),
        package: formData.get('package'),
        features: Array.from(formData.getAll('features')).join(', '),
        description: formData.get('description'),
        deadline: formData.get('deadline')
    };

    console.log('Envoi des données:', templateParams);

    emailjs.send('service_ijxa1z3', 'template_m5nkr64', templateParams, 'IzHR-2Y94KusMvNb0')
        .then(function(response) {
            console.log('SUCCESS!', response.status, response.text);
            alert('Votre demande a été envoyée avec succès ! Nous vous contacterons bientôt.');
            document.getElementById('contactForm').reset();
        }, function(error) {
            console.log('FAILED...', error);
            alert('Une erreur est survenue. Veuillez nous contacter par téléphone.');
        });
}

function toggleChat() {
    const chatWindow = document.getElementById('chatWindow');
    chatWindow.classList.toggle('hidden');
}

// Modifier la constante pour utiliser la clé Claude
const CLAUDE_API_KEY = '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';

// Modifier la fonction sendChatMessage
async function sendChatMessage(e) {
    e.preventDefault();
    const input = document.getElementById('chatInput');
    const message = input.value.trim();
    if (!message) return;

    const chatMessages = document.getElementById('chatMessages');
    
    // Afficher le message de l'utilisateur
    chatMessages.innerHTML += `
        <div class="mb-4">
            <div class="flex items-start space-x-2 justify-end">
                <div class="bg-sky-600 text-white p-3 rounded-lg shadow-sm max-w-xs">
                    ${message}
                </div>
                <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    `;

    // Simuler un délai de réponse
    await new Promise(resolve => setTimeout(resolve, 1000));

    // Logique de réponse basée sur les mots-clés
    const messageLower = message.toLowerCase();
    console.log('Message reçu:', messageLower); // Debug log

    let response = '';

    // Mots-clés pour chaque catégorie
    const keywords = {
        prix: ['prix', 'tarif', 'coût', 'combien', 'montant', 'payer', 'dollar', '$'],
        delai: ['délai', 'temps', 'durée', 'quand', 'livraison', 'jour'],
        avantages: ['inclus', 'avantage', 'service', 'compris', 'bénéfice', 'offre'],
        paiement: ['paiement', 'crédit', 'mensualité', 'mois', 'payer', 'acompte'],
        contact: ['contact', 'whatsapp', 'téléphone', 'appeler', 'joindre', 'numéro'],
        bonjour: ['bonjour', 'salut', 'hello', 'hi', 'bonsoir', 'hey']
    };

    // Vérifier chaque catégorie de mots-clés
    let matched = false;

    if (keywords.prix.some(word => messageLower.includes(word))) {
        response = `Voici nos tarifs mensuels sur 10 mois :
        - Site vitrine (5 pages) : 15$ par mois
        - Site blog : 20$ par mois
        - Site e-commerce : 34$ par mois
        Pour un site sur mesure, contactez-nous sur WhatsApp au +243 819 301 875.`;
        matched = true;
    }
    
    if (keywords.delai.some(word => messageLower.includes(word))) {
        response = "Nous livrons votre site web dans un délai de 3 à 6 jours ouvrables.";
        matched = true;
    }
    
    if (keywords.avantages.some(word => messageLower.includes(word))) {
        response = `Tous nos forfaits incluent :
        - Certificat SSL
        - Optimisation SEO
        - Hébergement
        - Nom de domaine
        - Support technique`;
        matched = true;
    }
    
    if (keywords.paiement.some(word => messageLower.includes(word))) {
        response = "Nous proposons un paiement échelonné sur 10 mois, sans frais supplémentaires. Vous commencez à payer dès la livraison de votre site.";
        matched = true;
    }
    
    if (keywords.contact.some(word => messageLower.includes(word))) {
        response = "Vous pouvez nous contacter directement sur WhatsApp au +243 819 301 875 pour discuter de votre projet.";
        matched = true;
    }

    if (keywords.bonjour.some(word => messageLower.includes(word))) {
        response = "Bonjour! Je suis l'assistant PreventPain. Je peux vous renseigner sur nos forfaits de création de sites web à crédit, nos tarifs et nos services. Comment puis-je vous aider?";
        matched = true;
    }
    
    // Si aucun mot-clé n'est trouvé
    if (!matched) {
        response = "Je peux vous renseigner sur nos tarifs, nos délais de livraison, les avantages inclus et nos modalités de paiement. N'hésitez pas à me poser des questions précises!";
    }

    console.log('Réponse:', response); // Debug log

    // Afficher la réponse
    chatMessages.innerHTML += `
        <div class="mb-4">
            <div class="flex items-start space-x-2">
                <div class="w-8 h-8 rounded-full bg-sky-600 flex items-center justify-center text-white font-bold">
                    P
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm max-w-xs">
                    ${response}
                </div>
            </div>
        </div>
    `;

    input.value = '';
    chatMessages.scrollTop = chatMessages.scrollHeight;
} 
</script>
</html> 