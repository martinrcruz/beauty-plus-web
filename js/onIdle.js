export default function onIdle(callback) {
    'use strict';

    if ('requestIdleCallback' in window) {
        requestIdleCallback(callback);
    } else {
        setTimeout(callback, 500); // Ajusta el tiempo según sea necesario
    }
}
