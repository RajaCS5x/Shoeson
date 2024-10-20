<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoesOn™</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<style>

.navbar {
    background: linear-gradient(to right, #005aa7, rgba(186,97,0,.9));
    width: 100%;
    padding: .7rem 0;
    box-shadow: 0 0 20px black;
    position: sticky;
    top: 0;
    z-index: 100;

}
.nav-container{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 1.5rem;

}
.logo
{
    font-size: 1.6rem;
    font-weight: 700;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: .2rem;
    text-shadow: 0 0 10px rgba(0,0,0,0.7);

}
.logo:hover{
    text-shadow: 0 0 5px rgba(186,97,0,.9);
    transform: scale(1.1);
}
.logo a span{
    color: rgba(186,97,0,.9);
    font-size: 2.2rem;
}
.btn{
    background-color: #fffde4;
    color: #005aa7;
    padding: .5rem 1rem;
    border-radius: .5rem;
    transition: all 0.4s ease;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
}
.btn:hover{
    background-color: rgba(186,97,0,.9);
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
    color:#fffde4
}
.banner{
    width: 100%;
    background: url('../images/bg.jpg') ;
    background-size: contain;
    background-position: center;
    margin-top: -.8rem;
    color: black;
    padding: 2rem;
    box-shadow: inset 0 0 20px rgba(0,0,0,0.9);
    min-height: 24rem;
}

.section-para1{
    font-size: 3rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: 700;
    text-shadow: 0 0 15px rgba(0,0,0,0.8);
    transition: all 0.4s ease;
    color: rgba(186,90,0,1);
}

.section-para2{
    font-size: 1.2rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #005aa7;
    font-weight: 600;
}
.card{
    background-color: white;
    border-radius: .5rem;
    overflow: hidden;
    transition: all 0.4s ease;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    min-height: 30rem;
    opacity: 0.8;
    cursor: pointer;
}
.card:hover{
    transform: scale(1.05);
    opacity: 1;
    box-shadow: 0 0 20px rgba(0,0,0,0.7);

}
.card-body{
    padding: 1rem;
}
.card-title{
    background-color: rgba(52,51,51,.9);
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
    padding: .2rem;
    font-size: 1.3rem;
    text-align: center;
    font-weight: 700;
    color: white;
    border-radius: 2rem;
    border: 1px solid  rgba(186,97,0,.9);
    margin-bottom: 1rem;
    transition: all 0.4s ease;
}
.card-title:hover{
    background-color: rgba(52,51,51,1);
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
}
.card-content{
    font-size: 1rem;
    color: rgba(52,51,51,1);
}
.card img{
    padding: .3rem;
    width: 100%;
    height: 20rem;
    object-fit: cover;

    border-radius: 1rem;
    box-shadow: 0 2px 5px rgba(0,0,0,0.7);
}
#shop{
    width: 100%;
    height: 100%;
    background:url('../images/bg.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
#shop h2{
    font-size: 3rem;
    color: rgba(186,90,0,1);
    text-shadow: 0 0 3px black;
}
#shop p{
    font-size: 1.2em;
}
.contacts{
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}
footer{
    background: linear-gradient(to right, #005aa7, rgba(186,97,0,.9));
    color: white;
    text-align: center;
    padding: .7rem 0;
    font-size: 2rem;
    font-weight: 900;
    bottom: 0;
    width: 100%;
}

    </style>
<body class="bg-white text-gray-700">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container ">
            <div class="nav-container">
            <div class="logo">
                    <a href="/"><span>S</span>hoes<span>O</span>n</a>
                </div>
                <ul class="flex space-x-6 text-gray-600">
                    <a href="loggin"><button class="btn">Login for Sellers</button></a>
               </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="banner hero">
        <div class="container mx-auto px-4 text-center">
            <h1 class="section-para1">ShoesOn™ At Your Doorstep</h1>
            <p class="section-para2">Choose from a wide variety of trendy shoes, perfect for every occasion.</p>
            <a href="shopping"><button class="btn">Shop Now</button></a>
        </div>
    </section>

    <!-- Featured Flowers -->
    <section id="shop" class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold">Our Featured Shoes</h2>
            <p class="mt-2 text-gray-600">Explore our top picks of trendy shoes, just for you.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Flower Card 1 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes1.jpeg" alt="shoes1" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Classic Sneakers</h3>
                        <p>Timeless and versatile, these classic sneakers are perfect for everyday wear.</p>
                    </div>
                </div>

                <!-- Flower Card 2 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes2.jpeg" alt="shoes2" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Running Shoes</h3>
                    <p>Designed for comfort and performance, these running shoes will keep you moving.</p>

                    </div>
                </div>

                <!-- Flower Card 3 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes3.jpeg" alt="shoes3" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Trendy Sneaker</h3>
                    <p>Designed for comfort and performance, these running shoes will keep you moving.</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes4.jpeg" alt="shoes4" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Formal Shoes</h3>
                    <p>Elegant and sophisticated, these formal shoes are perfect for business meetings and formal events.</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes5.jpeg" alt="shoes5" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Trendy Boots</h3>
                    <p>These trendy boots are perfect for making a fashion statement while keeping your feet warm and comfortable.</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/shoes6.webp" alt="shoes6" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Puma shoes</h3>
                    <p>Stand out with these vibrant red Puma shoes, designed for both style and performance. Perfect for making a bold statement while ensuring maximum comfort.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="about" class="banner">
        <div class="container mx-auto px-4 text-center">
            <h2 class="section-para1">Why Choose ShoesOn™ ?</h2>
            <div class="h-6"></div>
            <p class="section-para2">We pride ourselves in offering the trendy shoes, hand-delivered with care. Our team of experts are dedicated to creating beautiful pieces for every occasion.</p>
            <div class="contacts">
                <a href="mailto:singh19158049@gmail.com"><button class="btn">Email Us</button></a>
                <a href="tel:+918306580374"><button class="btn">Call Us</button></a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class=" w-full">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" >ShoesOn™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white-500 gap-2 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.js"></script>
</body>
</html>
