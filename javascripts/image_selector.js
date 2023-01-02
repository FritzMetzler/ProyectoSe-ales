const bigImage = document.querySelector('.big-image');
const cards = document.querySelectorAll('.prom-card');

cards.forEach( card => {
    card.addEventListener('click',function(){
        const active = document.querySelector('.prom-card-active');
        const smallCardPath =card.querySelector('.prom-card-image')
        active.classList.remove('prom-card-active')
        this.classList.add('prom-card-active');
        bigImage.src = smallCardPath.src
    });
});


