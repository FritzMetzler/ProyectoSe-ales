const Container_Bigimg  = document.querySelector('.prom-visual-container');
const Container_card = document.querySelectorAll('.prom-card');

Container_card.forEach( card => {
    card.addEventListener('click',function(){
        //* Variables que acceden a las clases y etiquetas de las cartas
        const active = document.querySelector('.prom-card-active');
        const CardTitlePath = card.querySelector('.prom-card-text').querySelector('h3')
        const CardTextPath = card.querySelector('.prom-card-text').querySelector('p')
        const CardImgPath = card.querySelector('.prom-card-image')
        //* Accediendo a las clases y etiquetas del contenedor 
        const BigTitlePath = Container_Bigimg.querySelector('.prom-visual-text-container').querySelector('h3');
        const BigTextPath = Container_Bigimg.querySelector('.prom-visual-text-container').querySelector('p');
        const BigImgPath = Container_Bigimg.querySelector('img');

        active.classList.remove('prom-card-active')
        this.classList.add('prom-card-active');
        
        BigImgPath.src=CardImgPath.src
        BigTitlePath.innerHTML = CardTitlePath.textContent
        BigTextPath.innerHTML = CardTextPath.textContent


    });
});