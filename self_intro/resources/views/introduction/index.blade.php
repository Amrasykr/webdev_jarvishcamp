<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ammar's Portofolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="icon" href="/assets/icon.png">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body>
    
    <!-- Introduction -->
    <div class="container-introduction bg-first">
        <div class="wrapper wrapper-introduction">
            <div class="profile" data-aos="fade-up">
                <img src="/assets/profile.png" alt="ammar's-profile-img" class="profile-img">
            </div>
            <div class="profile" data-aos="fade-in">
                <h1>Ammar Asysyakur</h1>
                <p>i'm <span class="auto-type-status"></span></p>
                <div class="wrapper wrapper-introduction-icons">

                    <a href="https://www.linkedin.com/in/ammar-asysyakur-876065252">
                        <i class="fa-brands fa-linkedin icons-profile"></i>
                    </a>

                    <a href="https://github.com/Amrasykr">
                        <i class="fa-brands fa-github icons-profile"></i>
                    </a>

                    <a href="https://www.instagram.com/amrasykr/">
                        <i class="fa-brands fa-instagram icons-profile"></i>
                    </a>

                    <a href="https://twitter.com/amrasykr">
                        <i class="fa-brands fa-twitter icons-profile"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- About Me -->
    <div class="container-aboutme bg-second">
        <div class="wrapper-">
            <p class="sub-title font-roboto" data-aos="fade-up">Get To Know More !</p>
            <h1 class="title font-roboto" data-aos="fade-up">About me</h1>
            <div class="wrapper">
                <div class="card-about text-center" data-aos="fade-in">
                    <i class="fa-solid fa-medal icons-about"></i>
                    <p class="icon-about-description">experience</p>
                    <p class="description-card font-roboto">1+ year</p>
                    <p class="description-card font-roboto">web development student</p>
                </div>
                <div class="card-about text-center" data-aos="fade-in">
                    <i class="fa-solid fa-user-group icons-about"></i>
                    <p class="icon-about-description">education</p>
                    <p class="description-card font-roboto">#nurul fikri's high school</p>
                    <p class="description-card font-roboto">#ulumul qur'an islamic bording school</p>
                </div>
            </div>
            <div class="margin-description-about" data-aos="fade-in" >
                <p class="description-about font-roboto">
                    Hello, I'm Ammar Asysyakur, an avid explorer in the realm of web development. With diverse educational experiences, I'm keen on turning creative ideas into reality through technology. 
                </p>
                <p class="description-about font-roboto">
                    I am also very passionate about education and teaching, which adds value to my academic and career journeys. If we share similar interests, we could have extensive discussions about it.            
                </p>
            </div>
        </div>
    </div>

    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>

        // Type Animation
        var typedStatus = new Typed(".auto-type-status", {
            strings : ["web developer !", "IT student !", "in progress !"],
            typeSpeed : 100,
            backSpeed : 80,
            loop : true
        })
        
        // Scroll Animation
        AOS.init({
            duration: 2500
        });


            
    </script>

</body>
</html>