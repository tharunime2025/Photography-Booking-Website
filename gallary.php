<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Martel:wght@300&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo"> -->

    


    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    max-width: auto;
    margin: 0;
    padding: 0;
   
}


        .container {
            max-width: 98%;
    margin: 0 auto;
    background-color: #ecece6;
    padding: 20px;
    text-align: center;
    height: 1200px;
        }

        .category-buttons img {
            width: 350px;
            cursor: pointer;
            position: relative;
        }
        
        .category-buttons .button-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            background-image: linear-gradient(to left, #ecece6, #ffffff);
            position: relative; /* Added to position the "+" mark */
        }
        .category-buttons img::before {
            content: '+';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 36px;
            color: #f7f4f4;
            opacity: 0;
            transition: opacity 0.2s; /* Add a smooth transition effect */
        }

        .category-buttons .button-container::before {
            content: 'Click & Scroll'; /* Added "+" mark */
            position: absolute;
            top: 50%;
            left: 13%;
            transform: translate(-50%, -50%);
            font-size: 36px;
            color: #858282; /* Color of the "+" mark */
            opacity: 0; /* Initially hidden */
        }

        .category-buttons .button-container:hover::before {
            opacity: 1; /* Show the "+" mark on hover */
        }

        .category-buttons .category-name {
            margin-left: 10px;
            
        }

        .latest-photos img {
            width: 25%; /* Adjust the width as needed */
            background-color: #ecece6;
            padding: 15px;
            cursor: pointer;
        }

        .category-photos {
            display: none;
        }

        .category-photos img {
            width: 25%; /* Adjust the width as needed */
            background-color: #e3e2da;
            padding: 15px;
        }

        .category-links {
            text-align: center;
            margin-top: 20px;
        }

        .category-name {
            text-indent: 150px;
            color: #a78849;
            font-size: 30px;
            /* text-shadow: 2px 2px 4px #ffffff; */
            text-align: center;
            font-family: 'Martel', sans-serif
        }

        .latest-photos img:hover,
        .category-photos img:hover {
            filter: opacity(1.3); /* Adjust brightness for hover effect */
            transition: filter 0.2s; /* Add a smooth transition effect */
            cursor: pointer;
        }

        .button-container:hover .image {
            opacity: 0.3;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .p3 {
            text-indent: 150px;
            color: #737373;
            font-size: 20px;
           
            text-align: center;
            font-family: 'Archivo', sans-serif;
        }

        /* unvisited link */


        .p1 {
            text-align: right; /* Align the text to the right end */
            font-family: 'Archivo', sans-serif;
            padding-right: 40px;
        }

        a {
            font-size: 20px;
            display: inline-block; /* Make the link an inline-block element */
            font-family: 'Archivo', sans-serif;
        }

        .p2 {
            color: #737373;
            font-size: 20px;
            /* text-shadow: 2px 2px 4px #d1d0d0; */
            text-align: center;
            font-family: 'Archivo', sans-serif;
        }
        h1 {
            font-family: 'Martel', sans-serif;
            color:  #a78849;
        }
        .page-title {
            text-align: center;
             margin: 20px auto;
            background-color: #f9f9f9; /* Add your desired background color here */
            padding: 20px; /* Add padding for spacing */
            height: 120px;
            justify-content:center;
            font-size: 30px;
        }
       
    </style>
</head>
<body>
<?php include 'defheader.php'; ?>
	<div class="page-title">
        <h1>Click & Cherish</h1>
    </div>
    <div class="container">
        <!-- <h1>Image Gallery</h1> -->
        
        <p class="p2">"Explore Oculaa Photography's Gallery, where moments become art. Our curated collection captures the essence of weddings, birthdays, and graduations, immortalizing joy and emotions. Each frame tells a unique story, a testament to our passion for preserving life's precious moments. Experience the magic of memories in every click."</p>
        
        <div class="latest-photos" id="latestPhotos">
            <!-- Latest images will be displayed here -->
        </div>

        <div class="category-buttons">
            <div class="button-container">
                <img src="W1.jpg" alt="Wedding" onclick="toggleCategory('wedding')" class="image">
               
                <span class="category-name">Eternal Moments<br><p class="p3">Capturing love in every frame, one moment at a time. </p></span>
           
            </div>
            
            <div class="button-container">
                <img src="E1.jpg" alt="Event" onclick="toggleCategory('event')" class="image">
                
                <span class="category-name">Event Portfolios<br><p class="p3">Turning ordinary gatherings into extraordinary stories.</p></span>
            
            </div>
            
            <div class="button-container">
                <img src="G7.jpg" alt="Graduation" onclick="toggleCategory('graduation')" class="image">
                <span class="category-name">The Graduation Story<br><p class="p3">Diploma in hand, dreams in heart, and memories forever.</p></span>
            </div>
            
            <div class="button-container">
                <img src="B4.jpg" alt="Birthday" onclick="toggleCategory('birthday')" class="image">
                <span class="category-name">Joyful Birthdays Gallery<br><p class="p3">Every candle on the cake represents a wish, and a story. </p></span>
            </div>

            <p class="p1">
                <b><a href="gallery_login_form.php" target="_blank" style="color: blue;" onmouseover="this.style.color='red'" onmouseout="this.style.color='blue'">Admin</a></b>
            </p>
        </div>

        <div class="category-photos" id="categoryPhotos"></div>

        <div class="category-links">
            <!-- Removed the image links -->
        </div>
    </div>

    <script>
        var latestPhotosVisible = true;
        var visibleCategory = '';

        function toggleCategory(category) {
            var categoryPhotos = document.getElementById('categoryPhotos');

            // Check if the selected category is already visible, then hide it
            if (category === visibleCategory) {
                categoryPhotos.style.display = 'none';
                visibleCategory = ''; // Reset the visibleCategory
            } else {
                fetch('display_images.php?category=' + category)
                    .then(response => response.json())
                    .then(data => {
                        categoryPhotos.innerHTML = '';

                        data.forEach(image => {
                            var img = document.createElement('img');
                            img.src = 'uploads/' + image;
                            img.onclick = function() {
                                openSlideshow(data, data.indexOf(image));
                            };
                            categoryPhotos.appendChild(img);
                        });

                        categoryPhotos.style.display = 'block';
                        visibleCategory = category;
                    });
            }
        }

        function openSlideshow(images, startIndex) {
            var slideshowContainer = document.getElementById('slideshowContainer');
            slideshowContainer.innerHTML = '';

            for (var i = 0; i < images.length; i++) {
                var slide = document.createElement('div');
                slide.className = 'mySlides';

                var img = document.createElement('img');
                img.src = 'uploads/' + images[i];

                slide.appendChild(img);
                slideshowContainer.appendChild(slide);
            }

            var slideIndex = startIndex;

            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var slides = document.getElementsByClassName('mySlides');
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                }
                slides[slideIndex - 1].style.display = 'block';
            }
        }

        // Load the latest photos on page load
        if (latestPhotosVisible) {
            fetch('display_images.php?category=latest')
                .then(response => response.json())
                .then(data => {
                    var latestPhotos = document.getElementById('latestPhotos');
                    latestPhotos.innerHTML = '';

                    data.forEach(image => {
                        var img = document.createElement('img');
                        img.src = 'uploads/' + image;
                        img.onclick = function() {
                            openSlideshow(data, data.indexOf(image));
                        };
                        latestPhotos.appendChild(img);
                    });
                });
        }
    </script>

<?php include 'footer.php'; ?>

</body>
</html>
