function handleDialogOpen() {
    const openDialogElements = document.getElementsByClassName('open-dialog');

    if (openDialogElements.length > 0) {
        for (const element of openDialogElements) {
            const dialogId = element.dataset.dialog;
            const dialog = document.getElementById(dialogId);

            if (dialog) {
                const closeButton = dialog.querySelector('.close-dialog');

                element.addEventListener('click', () => {
                    dialog.showModal();
                });

                if (closeButton) {
                    closeButton.addEventListener('click', () => {
                        dialog.close();
                    });
                }
            }
        }
    }
}

// Počkáme na dokončení konstrukce DOMu.
document.addEventListener('DOMContentLoaded', () => {
    handleDialogOpen();
});
