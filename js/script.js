document.addEventListener("DOMContentLoaded", function() {
    const jumbotronImage = document.getElementById("jumbotronImage");
    const card1 = document.getElementById("card1");
    const card2 = document.getElementById("card2");
    const card3 = document.getElementById("card3");
    const card4 = document.getElementById("card4");
    const carouselContainer = document.getElementById("carousel");
    //const getStartedBtn = document.getElementById("getStartedBtn");
    
    const images = [
        "assets/12.jpg",
        "assets/9.png",
        "assets/3.png",
        "assets/2.png"
    ];

    let currentIndex = 0;

    function showImage(index) {
        jumbotronImage.src = images[index];
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }
    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    // Tampilkan gambar pertama saat halaman dimuat
    showImage(currentIndex);

    // Tambahkan event listener untuk tombol "Get Started"
    //getStartedBtn.addEventListener("click", nextImage);

    // Tambahkan event listener untuk arrow keys
    document.addEventListener("keydown", function(event) {
        if (event.key === "ArrowRight") {
            nextImage();
        } else if (event.key === "ArrowLeft") {
            prevImage();
        }
    });
});
