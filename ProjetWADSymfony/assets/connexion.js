import './styles/connexion.css';

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
}

function switchForm(type) {
    const forms = document.getElementById('forms');
    const loginTab = document.getElementById('loginTab');
    const registerTab = document.getElementById('registerTab');
    if (type === 'register') {
        forms.classList.add('register');
        registerTab.classList.add('bg-primary', 'text-white');
        registerTab.classList.remove('text-gray-600');
        loginTab.classList.remove('bg-primary', 'text-white');
        loginTab.classList.add('text-gray-600');
    } else {
        forms.classList.remove('register');
        loginTab.classList.add('bg-primary', 'text-white');
        loginTab.classList.remove('text-gray-600');
        registerTab.classList.remove('bg-primary', 'text-white');
        registerTab.classList.add('text-gray-600');
    }
}

function togglePassword(button) {
    const input = button.parentElement.querySelector('input');
    const icon = button.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('ri-eye-line');
        icon.classList.add('ri-eye-off-line');
    } else {
        input.type = 'password';
        icon.classList.remove('ri-eye-off-line');
        icon.classList.add('ri-eye-line');
    }
}

document.getElementById('profilePicture').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const container = document.querySelector('.border-dashed');
            container.innerHTML = `
                <img src="${e.target.result}" class="w-32 h-32 rounded-full mx-auto mb-2 object-cover">
                <p class="text-sm text-gray-600">Cliquez pour changer la photo</p>
            `;
        }
        reader.readAsDataURL(file);
    }
});

document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        console.log('Form submitted:', data);
    });
});