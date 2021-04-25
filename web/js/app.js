document.addEventListener("DOMContentLoaded", function(event) {
    window.addEventListener("resize", displayByWidth);
    let modalHead = document.getElementById('modalHead');
    function displayByWidth(){
        let width = document.documentElement.clientWidth;
        if(width>768){
            if(!modalHead.classList.contains('hidden')){
                modalHead.classList.add('hidden')
            }
        }
    }
    function openModal(event){
        event.preventDefault();
        if(modalHead.classList.contains('slideOutLeft')){
            modalHead.classList.remove('slideOutLeft');
        }
        modalHead.classList.add('slideInLeft');
        if(modalHead.classList.contains('hidden')){
            modalHead.classList.remove('hidden');
        }
    }
    function closeModal(event){
        event.preventDefault();
        if(modalHead.classList.contains('slideInLeft')) {
            modalHead.classList.remove('slideInLeft')
        }
        modalHead.classList.add('slideOutLeft');
    }
    const burgerTablet = document.getElementById('burger-tablet');
    const burger = document.getElementById('burger');
    const close = document.getElementById('close-modal');
    close.addEventListener('click', closeModal);
    burgerTablet.addEventListener('click', openModal);
    burger.addEventListener('click', openModal);
    const topLinks = document.querySelectorAll('.top-link');
    function scrollTo(blockID){
        if(blockID != null && blockID != 0){
            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        }
    }
    for(let link of topLinks ){
        link.addEventListener('click', function(e){
            e.preventDefault();
            for(let i of topLinks){
                if(i.classList.contains('active')){
                    i.classList.remove('active');
                }
            }
            link.classList.add('active');
            const blockID = link.getAttribute('href').substr(1);
            scrollTo(blockID)
        })
    }
    const modalLinks = document.querySelectorAll('.modal-link');
    for(let link of modalLinks){
        link.addEventListener('click', function(e){
            e.preventDefault();
            closeModal(e);
            const blockID = link.getAttribute('href').substr(1);
            scrollTo(blockID)
        })
    }
    let field = {
        init: function () {
            $('[data-phone]').mask("+7 (999) 999-99-99", {placeholder: "+7 (___) ___-__-__"});
        }
    };
    field.init();
});