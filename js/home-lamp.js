const filterButtons = document.querySelectorAll('.filter-btn');
const lampCards = document.querySelectorAll('.lamp-card');
const noResults = document.getElementById('noResults');
const lampsGrid = document.getElementById('lampsGrid');

filterButtons.forEach(button => {
    button.addEventListener('click', function() {
        const selectedCategory = this.getAttribute('data-category');
    
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        
        let visibleCount = 0;
        lampCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            
            if (selectedCategory === '' || cardCategory === selectedCategory) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        if (visibleCount === 0) {
            lampsGrid.style.display = 'none';
        } else {
            lampsGrid.style.display = 'grid';
        }
    });
});