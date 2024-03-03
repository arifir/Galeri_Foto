
    function previewImage(input) {
        const file = input.files[0];
        const label = input.parentElement;
        const originalContainer = document.getElementById('preview-container');
        const originalContent = document.getElementById('original-content');
        label.style.height = 'auto';
        label.style.width = 'auto';

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                originalContainer.classList.remove('hidden');
                originalContent.classList.add('hidden');
                const previewImage = document.getElementById('preview-image');
                previewImage.src = e.target.result;

                const maxWidth = 300; // Set your desired max width
                const maxHeight = 400; // Set your desired max height

                const image = new Image();
                image.src = e.target.result;
                image.onload = function() {
                    const aspectRatio = image.width / image.height;
                    if (aspectRatio > 1) {
                        previewImage.width = maxWidth;
                        previewImage.height = maxWidth / aspectRatio;
                    } else {
                        previewImage.height = maxHeight;
                        previewImage.width = maxHeight * aspectRatio;
                    }
                };
            };
            reader.readAsDataURL(file);
        } else {
            label.style.height = 'auto'; // Set the desired height when no file is selected
            label.style.width = 'auto'; // Set the desired width when no file is selected
            originalContainer.classList.add('hidden');
            originalContent.classList.remove('hidden');
        }
    }
