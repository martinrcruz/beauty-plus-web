import onIdle from './onIdle.js';
export default function showRandomServicesImages() {
    'use strict';
    const image =
        './img/servicios/servicios_' + (Math.floor(Math.random() * 7) + 1);
    const imageExtensions = ['avif', 'webp', 'jpg'];

    const pictureElement = document.getElementById('servicios__image-picture');
    const imgElement = document.getElementById('servicios__image-img');

    onIdle(() => {
        imageExtensions.forEach((ext) => {
            const mimeType = ext === 'jpg' ? 'jpeg' : ext;
            const sourceElement = pictureElement.querySelector(
                `source[type="image/${mimeType}"]`
            );
            if (sourceElement) {
                sourceElement.srcset = `${image}.${ext}`;
            }
        });

        imgElement.src = `${image}.jpg`;
    });
}
