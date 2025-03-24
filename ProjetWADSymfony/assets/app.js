// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';


// jquery
const $ = require ('jquery');
window.jQuery = $;
window.$ = $;

// // importer bootstrap
// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.css';


    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#FF6B6B',
                    secondary: '#4ECDC4'
                },
                borderRadius: {
                    'none': '0px',
                    'sm': '4px',
                    DEFAULT: '8px',
                    'md': '12px',
                    'lg': '16px',
                    'xl': '20px',
                    '2xl': '24px',
                    '3xl': '32px',
                    'full': '9999px',
                    'button': '8px'
                }
            }
        }
    };
	document.getElementById('searchToggle').addEventListener('click', function() {
	document.getElementById('searchBar').classList.toggle('hidden');
	});
    document.getElementById('userMenu').addEventListener('click', function() {
        document.getElementById('userDropdown').classList.toggle('hidden');
        });
        
        document.addEventListener('click', function(event) {
        const userMenu = document.getElementById('userMenu');
        const userDropdown = document.getElementById('userDropdown');
        if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
        userDropdown.classList.add('hidden');
        }
        });
        const favoriteButtons = document.querySelectorAll('.ri-heart-line');
        favoriteButtons.forEach(button => {
        button.addEventListener('click', function() {
        this.classList.toggle('ri-heart-line');
        this.classList.toggle('ri-heart-fill');
        this.classList.toggle('text-primary');
        });
        });

