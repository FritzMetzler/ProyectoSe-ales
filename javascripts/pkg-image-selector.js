const BannerImg = document.querySelector('.banner-img');
const ThumnailImg = document.querySelectorAll('.thumnail-img');

ThumnailImg.forEach( thum => {
    thum.addEventListener('click',function(){
        const active = document.querySelector('.active');
        active.classList.remove('active')
        this.classList.add('active');
        BannerImg.src = this.src
    });
});