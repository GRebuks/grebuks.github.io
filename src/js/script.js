if (document.URL.includes('home')) {
    document.addEventListener('DOMContentLoaded', () => {
        CycleImage();
        function CycleImage() {
            let images = document.getElementsByClassName('welcome-message');
            let i = 0;
            ShowImage(i)
            setInterval(function() {
                i++;
                if(i === images.length) {
                    i = 0;
                }
                ShowImage(i)
            }, 8000);
        }

        function ShowImage(n) {
            let images = document.getElementsByClassName('welcome-message');
            for (let i = 0; i < images.length; i++) {
                images[i].style.display = 'none';
            }
            images[n].style.display = 'block';
        }
    });
};