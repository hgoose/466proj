<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Project Website</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Project Karaoke</a>
        <nav>
            <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="user.php" class="active">User Queue</a>
            <a href="dj.php">DJ Interface</a>
            <a href="signup.php">Sign Up</a>
            <div class="slider-bar"></div>
            </div>
        </nav>
    </header>
    <section class="home">
        <div class="home-img">
            <img src="noFilter.png" alt="">
        </div>
        <div class="home-content">
            <h1>this is where users add songs to the queue</span></h1>
        </div>
    </section>

    <script>
        // Select all navigation links and the slider bar
        const navLinks = document.querySelectorAll('.nav-links a');
        const sliderBar = document.querySelector('.slider-bar');

        // Function to move the slider bar
        function moveSlider(link) {
            const linkRect = link.getBoundingClientRect();
            const navRect = link.parentElement.getBoundingClientRect();

            // Set the slider bar's position and size
            sliderBar.style.left = `${linkRect.left - navRect.left}px`;
            sliderBar.style.width = `${linkRect.width}px`;
        }

        // Initialize the slider on the active link (default: Home)
        const activeLink = document.querySelector('.nav-links .active');
        if (activeLink) moveSlider(activeLink);

        // Add event listeners to update the slider on click
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Remove active class from all links
                navLinks.forEach(nav => nav.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                // Move the slider bar
                moveSlider(this);
            });
        });
    </script>
</body>
</html>
