import onIdle from './onIdle.js';
import getFileNameWithoutExtension from './getFileNameWithoutExtenstion.js';

export default function pictureLazyLoader(
    imageFile,
    extensions,
    $pictureElement
) {
    'use strict';

    const $imgElement = $pictureElement.querySelector('IMG');
    const imageOnlyName = getFileNameWithoutExtension(imageFile);

    onIdle(() => {
        extensions.forEach((ext) => {
            const mimeType = ext === 'jpg' ? 'jpeg' : ext;
            const sourceElement = $pictureElement.querySelector(
                `source[type="image/${mimeType}"]`
            );
            if (sourceElement) {
                sourceElement.srcset = `${imageOnlyName}.${ext}`;
            }
        });

        $imgElement.src = `${imageFile}`;
    });
}
