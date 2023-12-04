

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSAD food</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->

  <style>
    .highlight {
    background-color: yellow;
    font-weight: bold;
    }
  
  </style>
</head>
<body id="content">
   <section id="Home">
    <nav>
        <div class="logo">
            <img src="./images2/logo1.jpg" alt="logo">
        </div>
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Gallary">Gallery</a></li>
            <li><a href="#Review">Review</a></li>
            <li><a href="#Order">Order</a></li>
        </ul>
        <input type="text" id="search-input" class="chercher" placeholder="Rechercher...">
        <div class="icon">
        <!-- <i class="fa fa-search"></i> -->
       <button id="search-button"> <i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        <i class="fa-solid fa-heart" id="heart-icon"></i>
       <a href="#Order"> <i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </nav>
   
    <div class="main">
        <div class="men_text">
            <h1>Get Fresh <span> Food</span> <br> in a easy way  </h1>
        </div>
        <div class="main_image">
            <img src="images2/image2.jpg">
        </div>
    </div>
    <!-- <div id="alert-container"></div> -->
<p>    
Le restaurant de assad est un véritable paradis culinaire, où les saveurs du monde se rencontrent dans une explosion de goûts et d'arômes. Dès que l'on franchit ses portes, une atmosphère chaleureuse et accueillante nous enveloppe, avec ses lumières tamisées et sa musique douce en fond sonore
</p> <br>
<div class="main_btn">
    <a href="#Order">Order Now</a>
    <i class="fa-solid fa-angles-right"></i>
</div>
   </section> 
   <!-- About -->
<div class="about" id="About">
<div class="about_main">
    <div class="image">
        <img src="./images2/s.jpg" >
    </div>
    <div class="about_text">
        <h1><span>About</span>Us</h1>
        <h3>Why Choose Us</h3>
        <p>Nous nous engageons à vous offrir des plats de la plus haute qualité, Nous suivons des normes d'hygiène et de sécurité alimentaire rigoureuses pour vous garantir une expérience sans risque,Nous travaillons avec des fournisseurs de confiance et privilégions les produits locaux et durables chaque fois que possible</p>
    </div>
</div>
<a href="#Order" class="about_btn">
    Order Now
</a>
</div>

<!--  Menu  -->
<div class="menu" id="Menu">
<h1>Our <span>Menu</span> </h1>
<div class="menu_box">
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/buger.jpg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Buger</h2>
        <p>
        délicieux sandwich composé d'une galette de viande hachée cuite, placée entre deux tranches de pain. Il est généralement accompagné de divers garnitures et condiments.
        </p>
        <h3>$8.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Buger')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/pasta.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>pasta</h2>
        <p>
        Elles sont généralement fabriquées à partir de farine de blé dur mélangée à de l'eau, et peuvent prendre une grande variété de formes, de tailles et de textures.
        </p>
        <h3>$9.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Pasta')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/lasagna.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>lasagna</h2>
        <p>
        plat italien classique et délicieux qui se compose de fines feuilles de pâtes intercalées avec une variété de garnitures savoureuses.
        </p>
        <h3>$10.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('lasagna')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/chocolate.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Chocolate Drink</h2>
        <p>
        boisson préparée principalement avec du chocolat ou de la poudre de cacao. Elle peut être dégustée chaude ou froide et est souvent sucrée et riche en saveurs. 
        </p>
        <h3>$3.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Chocolate Drink')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/hotDog.jpg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Hot Dog</h2>
        <p>
        plat populaire et simple qui consiste en une saucisse cuite insérée dans un pain allongé appelé bun.
        </p>
        <h3>$3.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Hot Dog')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/juse.jpg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>juse</h2>
        <p>
        Jus d'orange , Jus de pomme,Jus de raisin ,Jus de carotte ,Jus de tomate,Jus de pastèque , Jus de grenade 
        </p>
        <h3>$1.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Juse')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/beryani.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Biryani Chiken</h2>
        <p>
        plat de riz parfumé et épicé d'origine indienne. Il est préparé en cuisant du riz basmati avec des morceaux de poulet tendres et des épices aromatiques
        </p>
        <h3>$6.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Biryani Chiken')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/pizza.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Pizza</h2>
        <p>
        faite de pâte à pain étalée en forme de cercle ou de rectangle. Elle peut être fine et croustillante, ou épaisse et moelleuse, selon les préférences régionales et individuelles. La pâte est souvent préparée à partir de farine        </p>
        <h3>$8.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Pizza')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/ice.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Ice Cream</h2>
        <p>
        faite à partir d'un mélange de lait, de crème, de sucre et d'arômes, qui est ensuite refroidi et glacé. 
        </p>
        <h3>$2.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn"onclick="order('Ice Cream')" >Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/sandwish.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Sandwish</h2>
        <p>
        plat polyvalent et pratique, apprécié dans le monde entier. Il est composé de différentes couches d'ingrédients placées entre deux tranches de pain ou d'autres types de pains.
        </p>
        <h3>$2.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Sandwish')">Order Now</a>
    </div>

    </div>
    <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/Meringue.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Meringue Française</h2>
        <p>
        préparation sucrée à base de blancs d'œufs et de sucre. C'est une spécialité de la pâtisserie française, utilisée comme garniture ou comme ingrédient dans de nombreux desserts.
        </p>
        <h3>$2.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn"  onclick="order('Meringue Française')">Order Now</a>
    </div>

    </div>
   <div class="menu_card">
        <div class="menu_image">
            <img src="./images2/Baguette.jpeg" alt="">
        </div>
        <div class="small_card">
        <i class="fa-sharp fa-solid fa-heart"></i>
        </div>
    <div class="menu_info">
        <h2>Baguette Parisienne</h2>
        <p>
        pain emblématique de la France, reconnaissable à sa forme allongée et sa croûte croustillante. 
        </p>
        <h3>$1.00</h3>
        <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#Order" class="menu_btn" onclick="order('Baguette Parisienne')">Order Now</a>
    </div>

    </div>
</div>
</div>













<!-- Gallary -->
<div class="gallary" id="Gallary">
    <h1>Our <span>Gallary</span></h1>
    <div class="gallary_image_box">
        <div class="gallary_image">
            <img src="images2/food1.jpg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>
        <div class="gallary_image">
            <img src="images2/burger.jpg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>
        <div class="gallary_image">
            <img src="./images2/jus.jpeg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>
        <div class="gallary_image">
            <img src="images2/plat1.jpg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>
        <div class="gallary_image">
            <img src="images2/royale.jpg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>
        <div class="gallary_image">
            <img src="images2/Baguette.jpeg" alt="">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magnam nulla. Repellat corrupti voluptatum sunt vero ullam totam!</p>
            <a href="#Order" class="gallary_btn">Order Now</a>
        </div>      
    </div>
</div>
<!--  Review  -->
<div class="review" id="Review">
    <h1>Customer <span>Review</span> </h1>
    <div class="review_box">
      
        <div class="review_card">
<div class="review_profile">
    <img src="./images2/hakim.jpg" alt="" width="140px" height="160px">
</div>
<div class="review_text">
    <h2 class="name">hakim Mezrioi</h2>
    <div class="review_icon">
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <!-- <i class="fa-sharp fa-solid fa-star"></i> -->
    <i class="fa-solid fa-star-half"></i>
    </div>
    <div class="review_social">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <p> Expertise dans la création de plats de haute qualité, alliant saveurs innovantes et présentation artistique. Solide expérience en gestion d'équipe et en coordination des opérations de cuisine. Soucieuse de fournir une expérience culinaire exceptionnelle et de surpasser les attentes des clients.
Expérience professionnelle:
Chef de cuisine, Restaurant Étoilé XYZ, Lyon, France
Juillet 2018 - Présent</p>
</div>
</div>
<div class="review_card">
<div class="review_profile">
    <img src="./images2/thomas.jpg" alt="" width="140px" height="160px">
</div>
<div class="review_text">
    <h2 class="name">Youssef Assad</h2>
    <div class="review_icon">
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    </div>
    <div class="review_social">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <p>Chef de restaurant passionné et expérimenté avec plus de 10 ans d'expérience dans des établissements haut de gamme.
    Reconnu pour ma créativité, ma rigueur et mon souci du détail. J'ai à cœur de fournir une expérience culinaire exceptionnelle à chaque client.
    Expérience professionnelle:
Chef de cuisine, Restaurant Étoilé XYZ, Paris, France
Mars 2017 - Présent
    </p>
</div>
</div>
<div class="review_card">
<div class="review_profile">
    <img src="./images2/karima.jpg" alt="" width="140px" height="160px">
</div>
<div class="review_text">
    <h2 class="name">karima  abbada</h2>
    <div class="review_icon">
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-sharp fa-solid fa-star"></i>
    <i class="fa-solid fa-star-half"></i>
    <!-- <i class="fa-sharp fa-solid fa-star"></i> -->
    <!-- <i class="fa-sharp fa-solid fa-star"></i> -->
    </div>
    <div class="review_social">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <p>Propriétaire de restaurant expérimenté et passionné avec une vaste connaissance de l'industrie de la restauration. Doté d'une vision stratégique et d'un sens aigu des affaires, j'ai réussi à créer et à gérer avec succès des restaurants renommés Expérience professionnelle:
Propriétaire et Directeur Général, Restaurant Étoilé XYZ, Paris, France
Janvier 2015 - Présent</p>
</div>
</div>
    </div>
</div>
<div class="order" id="Order" >
    <h1><span>Order</span>Now</h1>
    <div class="order_main">
        <div class="order_image">
            <img src="./images2/couple.jpg" alt="">
        </div>
        <form action="home.php#Order" method="post">
            <div class="input">
                <p>Name</p>
                <input type="text" name="name" placeholder="Your Name">
            </div>
            <div class="input">
                <p>Email</p>
                <input type="email" name="email" placeholder="Your Email">
            </div>
            <div class="input">
                <p>Number</p>
                <input type="number" name="number" placeholder="Your Phone Number">
            </div>
            <div class="input">
                <p>How Much</p>
                <input type="number" name="howmuch" placeholder="How Many Order">
            </div>
            <div class="input">
                <p>Your Order</p>
                <select name="food" id="food">
                    <option value="Buger">Buger</option>
                    <option value="Pasta">Pasta</option>
                    <option value="lasagna">lasagna</option>
                    <option value="chocolate Drink">chocolate Drink</option>
                    <option value="Hot Dog">Hot Dog</option>
                    <option value="juse">juse</option>
                    <option value="Biryani chiken">Biryani chiken</option>
                    <option value="Pizza">Pizza</option>
                    <option value="sandwish">Sandwish</option>
                    <option value="Meringue Française">Meringue Française</option>
                    <option value="Baguette Parisienne">Baguette Parisienne</option>
                  
                </select> 
                      </div>
            <div class="input">
                <p>Adresse</p>
                <input type="text" name="adresse" placeholder="Your Adresse">
            </div>
<input type="submit" value="Order" name="btn" class="order_btn">
        </form>
    </div>
</div>



<!-- team -->
<div class="team">
    <h1>Our <span>Team</span></h1>
    <div class="team_box">
        <div class="profile">
            <img src="./images2/chef1.jpg" alt="">
            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Est un maître de la cuisine française classique. Avec des décennies d'expérience dans les plus grands restaurants parisiens </p>
                <div class="team_icon">
                <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="./images2/chef2.jpg" alt="">
            <div class="info">
                <h2 class="name">Cheffe</h2>
                <p class="bio">chef japonaise renommée pour son expertise en cuisine traditionnelle japonaise </p>
                <div class="team_icon">
               <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="./images2/chef3.webp" alt="">
            <div class="info">
                <h2 class="name">Cheffe</h2>
                <p class="bio">chef italienne spécialisée dans la cuisine régionale italienne. Originaire de la région de la Toscane, </p>
                <div class="team_icon">
               <i class="fa-brands fa-facebook"></i>
       <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="./images2/chef4.jpeg" alt="">
            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio"> chef mexicain passionné de cuisine mexicaine moderne </p>
                <div class="team_icon">
            <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer_main">
        <div class="footer_tag">
            <h2>location</h2>
            <p>Maroc</p>
            <p>France</p>
            <p>India</p>
            <p>Japan</p>
        </div>
        <div class="footer_tag">
            <h2>Quick link</h2>
            <p>Home</p>
            <p>About</p>
            <p>Menu</p>
            <p>Gallary</p>
            <p>Order</p>
        </div>
        <div class="footer_tag">
            <h2>Contact</h2>
            <p>+212638048315</p>
            <p>+33 576 677 899</p>
            <p>Youssefassad158@gmail.com</p>
            <p>amine150assad@gmail.com</p>
        </div>
        <div class="footer_tag">
            <h2>Our Services</h2>
            <p>Easy Payments</p>
            <p>Fast Delivey</p>
            <p>24 x 7 Service</p>
           
        </div>
        <div class="footer_tag">
            <h2>Follows</h2>
            <a href="mailto:youssefassad158@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            <a href="https://web.facebook.com/youssef.assad.75/"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.instagram.com/youssef__assad/"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
    </div>
    <p class="end">
        Disgned By <span> <i class="fa-solid fa-face-grin-wink"></i></span> Assad Youssef
    </p>
</footer>
<script>
function order(param) {
 var inputElement = document.getElementById('food');
  inputElement.value = param;
}
window.onload = function() {
document.getElementById('search-button').addEventListener('click', function() {
      var searchTerm = document.getElementById('search-input').value;
      var elements = document.querySelectorAll('h1, h2, h3, p');
      var found = false;
      for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var text = element.textContent ;
        if (text.includes(searchTerm)) {
          element.classList.add('highlight');
          found = true;
        } else {
          element.classList.remove('highlight');
        }
      }
      if (!found) {
        swal({
          title: "Contenu non trouvé!",
          text: "Le contenu recherché n'existe pas.",
          icon: "error",
          button: "OK",
        });
      }
    });}
</script>
<?php require 'server.php';
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $food = $_POST['food'];
    $phone = $_POST['number'];
    $nbr = $_POST['howmuch'];
    if (!empty($adresse) && !empty($email) && !empty($food) && !empty($phone) && !empty($name) && !empty($nbr)) {
        if (!empty($name)) {
            $sql2 = "INSERT INTO orderes(nom,email,Number,Adresse,foodName,quantite) VALUES(:name,:email,:phone,:adresse,:food,:nbr)";
            $statement = $con->prepare($sql2);
            $statement->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':adresse' => $adresse,
                ':food' => $food,
                ':nbr' => $nbr
            ]);
            if ($statement) {
                ?>
                 <script>Swal.fire({
  title: "Ordre avec succès !",
  icon: "success",
  showClass: {
    popup: "animate__animated animate__zoomInDown" 
  },
  hideClass: {
    popup: "animate__animated animate__zoomOut" 
  },
  showConfirmButton: false,
  timer: 3000 
}).then((result) => {
});
</script>
                <?php
            }else{               
                
                ?>
                <script>
                    Swal.fire({
  title: "Problème au serveur",
  icon: "error",
  showClass: {
    popup: "animate__animated animate__shakeX" // Animation d'entrée
  },
  hideClass: {
    popup: "animate__animated animate__fadeOut" // Animation de sortie
  },
  buttons: {
    confirm: {
      text: "OK",
      className: "btn-danger",
    },
  },
});
                </script>
           <?php }
        }
    } else {
        ?>
        <script>
           Swal.fire({
  title: "Attention",
  text: "Il faut remplir tous les champs",
  icon: "warning",
  showClass: {
    popup: "animate__animated animate__bounceIn" 
  },
  hideClass: {
    popup: "animate__animated animate__bounceOut"  
  },
  buttons: {
    confirm: {
      text: "OK",
      className: "btn-warning",
    },
  },
}).then(function() {
                window.location.href = '#form-section';
            });
        </script>
        <?php
    }
}
?>
<script>
var heartIcon = document.getElementById("heart-icon");
var clickCount = 0;
heartIcon.addEventListener("click", function() {
  clickCount++;
  if (clickCount === 1) {
    heartIcon.style.color = "red";
    heartIcon.classList.add("animate__heartBeat");
    Swal.fire({
      title: "Merci pour votre mention !",
      icon: "success",
      showClass: {
        popup: "animate__animated animate__bounceIn"
      },
      hideClass: {
        popup: "animate__animated animate__bounceOut"
      }
    });
  } else if (clickCount === 2) {
    heartIcon.style.color = "";
    clickCount = 0;
  }
});

</script>
</body>
</html>
