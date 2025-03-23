import './styles/detailsRecette.css';


document.getElementById('servingsButton').addEventListener('click', function() {
    document.getElementById('servingsDropdown').classList.toggle('hidden');
    });
    document.addEventListener('click', function(event) {
    const servingsButton = document.getElementById('servingsButton');
    const servingsDropdown = document.getElementById('servingsDropdown');
    if (!servingsButton.contains(event.target) && !servingsDropdown.classList.contains('hidden')) {
    servingsDropdown.classList.add('hidden');
    }
    });
    document.querySelectorAll('.ingredient-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
    const checkIcon = this.nextElementSibling.querySelector('.ri-check-line');
    if (this.checked) {
    checkIcon.classList.remove('hidden');
    this.nextElementSibling.classList.add('bg-primary/10', 'border-primary');
    } else {
    checkIcon.classList.add('hidden');
    this.nextElementSibling.classList.remove('bg-primary/10', 'border-primary');
    }
    });
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
    const ratingStars = document.querySelectorAll('[data-rating]');
    let currentRating = 0;
    ratingStars.forEach(star => {
      star.addEventListener('mouseover', function() {
        const rating = parseInt(this.dataset.rating);
        updateStars(rating, 'hover');
      });
      
      star.addEventListener('mouseout', function() {
        updateStars(currentRating, 'current');
      });
      
      star.addEventListener('click', function() {
        currentRating = parseInt(this.dataset.rating);
        updateStars(currentRating, 'current');
      });
    });
    function updateStars(rating, type) {
      ratingStars.forEach(star => {
        const starRating = parseInt(star.dataset.rating);
        if (type === 'hover') {
          if (starRating <= rating) {
            star.classList.remove('ri-star-line');
            star.classList.add('ri-star-fill');
          } else {
            star.classList.remove('ri-star-fill');
            star.classList.add('ri-star-line');
          }
        } else {
          if (starRating <= rating) {
            star.classList.remove('ri-star-line');
            star.classList.add('ri-star-fill');
          } else {
            star.classList.remove('ri-star-fill');
            star.classList.add('ri-star-line');
          }
        }
      });
    }
    document.getElementById('commentForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      if (currentRating === 0) {
        const ratingError = document.createElement('div');
        ratingError.className = 'text-red-500 text-sm mt-2';
        ratingError.textContent = 'Veuillez sélectionner une note';
        this.querySelector('.flex-1').appendChild(ratingError);
        setTimeout(() => ratingError.remove(), 3000);
        return;
      }
      
      const comment = this.querySelector('textarea').value.trim();
      if (!comment) {
        const commentError = document.createElement('div');
        commentError.className = 'text-red-500 text-sm mt-2';
        commentError.textContent = 'Veuillez écrire un commentaire';
        this.querySelector('.flex-1').appendChild(commentError);
        setTimeout(() => commentError.remove(), 3000);
        return;
      }
      
      const newComment = document.createElement('div');
      newComment.className = 'flex items-start gap-4';
      newComment.innerHTML = `
        <img src="https://public.readdy.ai/ai/img_res/eb28e1ada4a5df4b32971245ea3c79cf.jpg" alt="User" class="w-10 h-10 rounded-full">
        <div class="flex-1">
          <div class="flex items-center mb-2">
            <h3 class="font-medium mr-2">Vous</h3>
            <div class="flex text-yellow-400">
              ${Array(currentRating).fill('<i class="ri-star-fill"></i>').join('')}
              ${Array(5-currentRating).fill('<i class="ri-star-line"></i>').join('')}
            </div>
          </div>
          <p class="text-gray-600 mb-2">${comment}</p>
          <div class="flex items-center text-sm text-gray-500">
            <span>À l'instant</span>
            <button class="ml-4 hover:text-primary">Répondre</button>
          </div>
        </div>
      `;
      
      const commentsContainer = document.querySelector('.space-y-6');
      commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
      
      this.querySelector('textarea').value = '';
      currentRating = 0;
      updateStars(0, 'current');
      
      const successMessage = document.createElement('div');
      successMessage.className = 'text-green-500 text-sm mt-2';
      successMessage.textContent = 'Votre commentaire a été publié';
      this.querySelector('.flex-1').appendChild(successMessage);
      setTimeout(() => successMessage.remove(), 3000);
    });