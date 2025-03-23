import './styles/newRecette.css';
function toggleUserMenu() {
    const menu = document.getElementById('userMenu');
    menu.classList.toggle('hidden');
    }
    
    document.addEventListener('click', function(event) {
    const menu = document.getElementById('userMenu');
    const button = event.target.closest('button');
    if (!button && !menu.contains(event.target)) {
    menu.classList.add('hidden');
    }
    });
    const dropZone = document.getElementById('dropZone');
    const photoInput = document.getElementById('photoInput');
    const previewContainer = document.getElementById('previewContainer');
    dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.classList.add('border-primary');
    });
    
    dropZone.addEventListener('dragleave', () => {
    dropZone.classList.remove('border-primary');
    });
    
    dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropZone.classList.remove('border-primary');
    handleFiles(e.dataTransfer.files);
    });
    
    photoInput.addEventListener('change', (e) => {
    handleFiles(e.target.files);
    });
    
    function handleFiles(files) {
    Array.from(files).forEach(file => {
    if (file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = (e) => {
    const preview = document.createElement('div');
    preview.className = 'relative';
    preview.innerHTML = `
    <img src="${e.target.result}" class="w-full h-24 object-cover rounded-lg">
    <button type="button" class="absolute top-2 right-2 w-6 h-6 bg-white rounded-full flex items-center justify-center shadow-sm hover:bg-gray-100" onclick="this.parentElement.remove()">
    <i class="ri-close-line text-gray-500"></i>
    </button>
    `;
    previewContainer.appendChild(preview);
    };
    reader.readAsDataURL(file);
    }
    });
    }
    
    function addIngredient() {
    const container = document.getElementById('ingredientsContainer');
    const div = document.createElement('div');
    div.className = 'flex items-center space-x-4';
    div.innerHTML = `
    <input type="text" class="flex-grow px-4 py-2 border border-gray-200 rounded-lg" placeholder="Ingrédient">
    <input type="number" class="w-24 px-4 py-2 border border-gray-200 rounded-lg" placeholder="Quantité">
    <select class="w-32 px-4 py-2 border border-gray-200 rounded-lg">
    <option>g</option>
    <option>ml</option>
    <option>pcs</option>
    </select>
    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="removeIngredient(this)">
    <i class="ri-delete-bin-line"></i>
    </button>
    `;
    container.appendChild(div);
    }
    
    function removeIngredient(button) {
    button.closest('div').remove();
    }
    
    function addStep() {
    const container = document.getElementById('stepsContainer');
    const stepNumber = container.children.length + 1;
    const div = document.createElement('div');
    div.className = 'flex items-start space-x-4';
    div.innerHTML = `
    <span class="flex-shrink-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center">${stepNumber}</span>
    <div class="flex-grow">
    <textarea class="w-full px-4 py-2 border border-gray-200 rounded-lg" rows="3" placeholder="Décrivez cette étape"></textarea>
    <button type="button" class="mt-2 text-gray-500 hover:text-primary flex items-center space-x-2">
    <i class="ri-image-add-line"></i>
    <span>Ajouter une photo</span>
    </button>
    </div>
    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="removeStep(this)">
    <i class="ri-delete-bin-line"></i>
    </button>
    `;
    container.appendChild(div);
    }
    
    function removeStep(button) {
    button.closest('.flex').remove();
    const steps = document.getElementById('stepsContainer').children;
    Array.from(steps).forEach((step, index) => {
    step.querySelector('span').textContent = index + 1;
    });
    }
    
    function toggleTag(button) {
    button.classList.toggle('bg-primary');
    button.classList.toggle('text-white');
    button.classList.toggle('bg-gray-100');
    button.classList.toggle('text-gray-700');
    }
    
    document.getElementById('recipeForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const successModal = document.createElement('div');
    successModal.className = 'fixed inset-0 flex items-center justify-center z-50';
    successModal.innerHTML = `
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative bg-white rounded-lg p-8 max-w-sm w-full mx-4">
    <h3 class="text-xl font-bold text-gray-900 mb-4">Recette publiée !</h3>
    <p class="text-gray-600 mb-6">Votre recette a été publiée avec succès. Elle est maintenant visible par la communauté.</p>
    <div class="flex justify-end">
    <button type="button" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors !rounded-button" onclick="window.location.href='https://readdy.ai/home/861e6608-6dbf-4efa-ad41-504cac963fd4/2b68e2d4-0381-4dd5-85bd-db834fb8b747'">Retour à l'accueil</button>
    </div>
    </div>
    `;
    document.body.appendChild(successModal);
    });
    
    function saveDraft() {
    const draftModal = document.createElement('div');
    draftModal.className = 'fixed inset-0 flex items-center justify-center z-50';
    draftModal.innerHTML = `
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative bg-white rounded-lg p-8 max-w-sm w-full mx-4">
    <h3 class="text-xl font-bold text-gray-900 mb-4">Brouillon enregistré</h3>
    <p class="text-gray-600 mb-6">Votre recette a été sauvegardée comme brouillon. Vous pourrez la retrouver dans vos brouillons.</p>
    <div class="flex justify-end">
    <button type="button" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors !rounded-button" onclick="this.closest('.fixed').remove()">Fermer</button>
    </div>
    </div>
    `;
    document.body.appendChild(draftModal);
    }
    
    function preview() {
    const previewModal = document.createElement('div');
    previewModal.className = 'fixed inset-0 flex items-center justify-center z-50';
    previewModal.innerHTML = `
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative bg-white rounded-lg p-8 max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
    <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600" onclick="this.closest('.fixed').remove()">
    <i class="ri-close-line text-xl"></i>
    </button>
    <div class="prose max-w-none">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Aperçu de votre recette</h2>
    <div class="grid grid-cols-2 gap-8">
    <img src="${previewContainer.querySelector('img')?.src || ''}" class="w-full h-64 object-cover rounded-lg">
    <div>
    <h3 class="text-xl font-bold mb-4">${document.querySelector('input[placeholder="Donnez un nom à votre création"]').value || 'Sans titre'}</h3>
    <div class="flex items-center space-x-4 text-gray-500 mb-4">
    <span>${document.querySelector('input[placeholder="30"]').value || '0'} min de préparation</span>
    <span>${document.querySelector('input[placeholder="45"]').value || '0'} min de cuisson</span>
    <span>${document.querySelector('input[placeholder="4"]').value || '0'} portions</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    `;
    document.body.appendChild(previewModal);
    }