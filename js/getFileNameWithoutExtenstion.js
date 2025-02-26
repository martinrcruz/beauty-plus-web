export default function getFileNameWithoutExtension(fileName) {
    'use strict';

    // Usa el método split para dividir el nombre del archivo por el punto
    const parts = fileName.split('.');

    // Si el nombre del archivo contiene al menos dos partes (nombre y extensión)
    if (parts.length > 1) {
        // Devuelve la primera parte, que es el nombre del archivo sin la extensión
        return parts.slice(0, -1).join('.');
    } else {
        // Si no hay un punto en el nombre del archivo, devuelve el nombre completo
        return fileName;
    }
}
