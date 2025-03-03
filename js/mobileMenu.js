export default function mobileMenu() {
    const $openButton = document.querySelector('#mobile-menu-open-button');
    const $closeButton = document.querySelector(
        '.mobile-menu__close-button'
    );
    const $mobileMenu = document.querySelector('.mobile-menu');

    const $mainItems = document.querySelectorAll('.mobile-menu__main-item');

    if (!$openButton) {
        throw Error('Falta #mobile-menu-open-button');
    }
    if (!$closeButton) {
        throw Error('Falta mobile-menu__close-button');
    }
    if (!$mobileMenu) {
        throw Error('Falta .mobile-menu');
    }
    if (!$mainItems) {
        throw Error('Falta .mobile-menu__main-item');
    }

    $mainItems.forEach($mainItem=>{
        $mainItem.addEventListener('click', function(event){
            event.preventDefault();

            const $subMenu = this.nextElementSibling;

                $subMenu.classList.toggle('mobile-menu__submenu-hidden');
        });
    });

    setTimeout(()=>{
        $mobileMenu.classList.remove('mobile-menu__open');
    }, 200);

    
    $openButton.addEventListener('click', () => {
        $mobileMenu.classList.add('mobile-menu__open');
    });

    $closeButton.addEventListener('click', () => {
        $mobileMenu.classList.remove('mobile-menu__open');
    });
}
