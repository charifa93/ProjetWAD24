import './styles/profil.css';

    function openImageUpload(type) {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';
    input.onchange = function(e) {
    const file = e.target.files[0];
    if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
    if (type === 'profile') {
    document.querySelector('.profile-image').src = e.target.result;
    } else if (type === 'banner') {
    document.querySelector('.profile-banner').style.backgroundImage = `url(${e.target.result})`;
    }
    };
    reader.readAsDataURL(file);
    }
    };
    input.click();
    }
    function openEditProfileModal() {
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
    modal.innerHTML = `
    <div class="bg-white rounded-lg p-6 w-full max-w-lg">
    <div class="flex justify-between items-center mb-6">
    <h3 class="text-lg font-semibold">Modifier le profil</h3>
    <button onclick="this.closest('.fixed').remove()" class="text-gray-400 hover:text-gray-600">
    <i class="ri-close-line text-xl"></i>
    </button>
    </div>
    <form id="editProfileForm" class="space-y-4">
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Nom d'utilisateur</label>
    <input type="text" value="Sophie Martin" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" rows="4">Passionnée de cuisine française et méditerranéenne. J'aime partager mes recettes et découvrir de nouvelles saveurs.</textarea>
    </div>
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
    <input type="email" value="sophie.martin@email.com" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>
    <div class="flex justify-end space-x-3">
    <button type="button" onclick="this.closest('.fixed').remove()" class="px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button">Annuler</button>
    <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button">Enregistrer</button>
    </div>
    </form>
    </div>
    `;
    document.body.appendChild(modal);
    document.getElementById('editProfileForm').addEventListener('submit', function(e) {
    e.preventDefault();
    modal.remove();
    showSuccessMessage('Profil mis à jour avec succès');
    });
    }
    function showSuccessMessage(message) {
    const successMessage = document.createElement('div');
    successMessage.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform transition-transform duration-300';
    successMessage.textContent = message;
    document.body.appendChild(successMessage);
    setTimeout(() => {
    successMessage.remove();
    }, 3000);
    }
    function addShoppingItem() {
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
    modal.innerHTML = `
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
    <div class="flex justify-between items-center mb-6">
    <h3 class="text-lg font-semibold">Ajouter un article</h3>
    <button onclick="this.closest('.fixed').remove()" class="text-gray-400 hover:text-gray-600">
    <i class="ri-close-line text-xl"></i>
    </button>
    </div>
    <form id="addItemForm" class="space-y-4">
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Article</label>
    <input type="text" placeholder="Nom de l'article" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Quantité</label>
    <input type="text" placeholder="Ex: 500g, 2L, 3 pièces" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>
    <div class="flex justify-end space-x-3">
    <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button">Ajouter</button>
    <button type="button" onclick="this.closest('.fixed').remove()" class="px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button">Annuler</button>
    </div>
    </form>
    </div>
    `;
    document.body.appendChild(modal);
    document.getElementById('addItemForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const shoppingList = document.getElementById('shoppingList');
    const newItem = document.createElement('div');
    newItem.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg';
    newItem.innerHTML = `
    <div class="flex items-center space-x-3">
    <input type="checkbox" class="rounded text-primary focus:ring-primary">
    <span>${e.target.elements[0].value} (${e.target.elements[1].value})</span>
    </div>
    <button class="text-gray-400 hover:text-gray-600" onclick="removeShoppingItem(this)">
    <i class="ri-delete-bin-line"></i>
    </button>
    `;
    shoppingList.prepend(newItem);
    modal.remove();
    showSuccessMessage('Article ajouté à la liste');
    });
    }
    function removeShoppingItem(button) {
    button.closest('.flex').remove();
    showSuccessMessage('Article supprimé de la liste');
    }