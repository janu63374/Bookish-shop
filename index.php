<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish shop</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header class="navbar">
        <img src="./logo.jpg" alt="Logo" id="logo">
        <h1>Bookish Shop</h1>
        <nav>
            <a href="#hero" class="a"><img src="./home.png" width="19px"></a>
            <a href="wishlist.html" class="a">
            <img src="./heart.svg" width="20px">
            </a>

            <a href="cart.php" class="a">
            <img src="./cart.svg">
            </a>
            <a href="login.html" class="a"><img src="./login.svg"></a>
        </nav>
    </header>

    <section id="hero" class="hero">
        <h1 style="font-size:60px; margin-top: 270px; text-shadow:1px 1px black;">Discover Your Next Favorite Book</h1>
        <p style="font-size:30px; text-shadow:1px 1px black;">Explore hundreds of books from different categories</p>
        <button id="btn"><a href="#cat" style="text-decoration:none;">Shop Now</a></button>
    </section>

    <section class="categories"  id="cat">
            <h2>Categories</h2>
        <div class="category-container">
        <div class="category"><a href="#c1">Fiction</a></div>
        <div class="category"><a href="#c2">Programming</a></div>
        <div class="category"><a href="#c3">Kids Story</a></div>
        <div class="category"><a href="#c4">Mystery</a></div>
    </div>
    </section>

    <div class="image" id="fiction">

        <div class="fiction" data-id="1" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 1.webp" class="b">
        <h4>IT ENDS WITH US</h4>
        <b>₹399.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="product_name" value="IT ENDS WITH US">
        <input type="hidden" name="price" value="399">
        <input type="hidden" name="image" value="images/img 1.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="2" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 2.webp" class="b">
        <h4>THE SECRET GARDEN</h4>
        <b>₹450.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="2">
        <input type="hidden" name="product_name" value="THE SECRET GARDEN">
        <input type="hidden" name="price" value="450">
        <input type="hidden" name="image" value="images/img 2.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="3" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 3.webp" class="b">
        <h4>THE BOOK THIEF</h4>
        <b>₹430.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="3">
        <input type="hidden" name="product_name" value="THE BOOK THIEF">
        <input type="hidden" name="price" value="430">
        <input type="hidden" name="image" value="images/img 3.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="4" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 4.webp" class="b">
        <h4>THE SILENT PATIENT</h4>
        <b>₹460.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="4">
        <input type="hidden" name="product_name" value="THE SILENT PATIENT">
        <input type="hidden" name="price" value="460">
        <input type="hidden" name="image" value="images/img 4.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="5" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 5.webp" class="b">
        <h4>SHATTER ME</h4>
        <b>₹390.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="5">
        <input type="hidden" name="product_name" value="SHATTER ME">
        <input type="hidden" name="price" value="390">
        <input type="hidden" name="image" value="images/img 5.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="6" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 6.webp" class="b">
        <h4>CARAVAL</h4>
        <b>₹499.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="6">
        <input type="hidden" name="product_name" value="CARAVAL">
        <input type="hidden" name="price" value="499">
        <input type="hidden" name="image" value="images/img 6.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <div class="fiction" data-id="7" id="c1">
        <span class="wishlist">♡</span>
        <img src="images/img 7.jpg" class="b">
        <h4>VERITY</h4>
        <b>₹410.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="7">
        <input type="hidden" name="product_name" value="VERITY">
        <input type="hidden" name="price" value="410">
        <input type="hidden" name="image" value="images/img 7.jpg">
        <button type="submit">Buy / Add to Cart</button>
        </form>
        </div>

        <!-- Programming Books -->

<div class="fiction" data-id="8" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_1.webp" class="b">
    <h4>Python The Complete Reference</h4>
    <b>₹399.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="8">
        <input type="hidden" name="product_name" value="Python The Complete Reference">
        <input type="hidden" name="price" value="399">
        <input type="hidden" name="image" value="images/img_1.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="9" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_2.webp" class="b">
    <h4>Programming in ANSI C</h4>
    <b>₹499.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="9">
        <input type="hidden" name="product_name" value="Programming in ANSI C">
        <input type="hidden" name="price" value="499">
        <input type="hidden" name="image" value="images/img_2.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="10" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_3.jpg" class="b">
    <h4>Easy Learning HTML CSS JavaScript</h4>
    <b>₹550.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="10">
        <input type="hidden" name="product_name" value="Easy Learning HTML CSS JavaScript">
        <input type="hidden" name="price" value="550">
        <input type="hidden" name="image" value="images/img 3.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="11" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_4.jpg" class="b">
    <h4>React & Node.js Foundation Playbook</h4>
    <b>₹450.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="11">
        <input type="hidden" name="product_name" value="React & Node.js Foundation Playbook">
        <input type="hidden" name="price" value="450">
        <input type="hidden" name="image" value="images/img_4.jpg">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="12" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_5.webp" class="b">
    <h4>Modern Full-Stack Development</h4>
    <b>₹549.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="12">
        <input type="hidden" name="product_name" value="Modern Full-Stack Development">
        <input type="hidden" name="price" value="549">
        <input type="hidden" name="image" value="images/img_5.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="13" id="c2">
    <span class="wishlist">♡</span>
    <img src="images/img_6.jpg" class="b">
    <h4>Learn SQL with MySQL</h4>
    <b>₹500.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="13">
        <input type="hidden" name="product_name" value="Learn SQL with MySQL">
        <input type="hidden" name="price" value="500">
        <input type="hidden" name="image" value="images/img_6.jpg">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<!--kids books-->

<div class="fiction" data-id="14" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image1.webp" class="b">
    <h4>108 Bedtime Stories for Kids</h4>
    <b>₹350.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="14">
        <input type="hidden" name="product_name" value="108 Bedtime Stories for Kids">
        <input type="hidden" name="price" value="350">
        <input type="hidden" name="image" value="images/image1.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="15" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image2.webp" class="b">
    <h4>Great Stories for Children</h4>
    <b>₹460.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="15">
        <input type="hidden" name="product_name" value="Great Stories for Children">
        <input type="hidden" name="price" value="460">
        <input type="hidden" name="image" value="images/image2.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="16" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image3.webp" class="b">
    <h4>I Love You Just the Same</h4>
    <b>₹420.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="16">
        <input type="hidden" name="product_name" value="I Love You Just the Same">
        <input type="hidden" name="price" value="420">
        <input type="hidden" name="image" value="images/image3.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="17" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image4.webp" class="b">
    <h4>Om Illustrated Classics The Jungle Book</h4>
    <b>₹549.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="17">
        <input type="hidden" name="product_name" value="Om Illustrated Classics The Jungle Book">
        <input type="hidden" name="price" value="549">
        <input type="hidden" name="image" value="images/image4.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="18" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image5.webp" class="b">
    <h4>Best Classic Short Stories For Children</h4>
    <b>₹390.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="18">
        <input type="hidden" name="product_name" value="Best Classic Short Stories For Children">
        <input type="hidden" name="price" value="390">
        <input type="hidden" name="image" value="images/image5.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="19" id="c3">
    <span class="wishlist">♡</span>
    <img src="images/image6.webp" class="b">
    <h4>The Kingdom of Fantasy</h4>
    <b>₹450.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="19">
        <input type="hidden" name="product_name" value="The Kingdom of Fantasy">
        <input type="hidden" name="price" value="450">
        <input type="hidden" name="image" value="images/image6.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<!--mystery-->

<div class="fiction" data-id="20" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im1.webp" class="b">
    <h4>A Good Girl's Guide to Murder</h4>
    <b>₹400.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="20">
        <input type="hidden" name="product_name" value="A Good Girl's Guide to Murder">
        <input type="hidden" name="price" value="400">
        <input type="hidden" name="image" value="images/im1.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="21" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im2.webp" class="b">
    <h4>The Girl In The Glass Case </h4>
    <b>₹460.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="21">
        <input type="hidden" name="product_name" value="The Girl In The Glass Case">
        <input type="hidden" name="price" value="460">
        <input type="hidden" name="image" value="images/im2.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="22" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im3.webp" class="b">
    <h4>Murder Games</h4>
    <b>₹420.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="22">
        <input type="hidden" name="product_name" value="Murder Games">
        <input type="hidden" name="price" value="420">
        <input type="hidden" name="image" value="images/im3.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="23" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im4.webp" class="b">
    <h4>Then She Was Gone</h4>
    <b>₹549.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="23">
        <input type="hidden" name="product_name" value="Then She Was Gone">
        <input type="hidden" name="price" value="549">
        <input type="hidden" name="image" value="images/im4.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="24" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im5.webp" class="b">
    <h4>And Then There Were None</h4>
    <b>₹480.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="24">
        <input type="hidden" name="product_name" value="And Then There Were None">
        <input type="hidden" name="price" value="480">
        <input type="hidden" name="image" value="images/im5.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="25" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im6.webp" class="b">
    <h4>Stalker</h4>
    <b>₹430.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="25">
        <input type="hidden" name="product_name" value="Stalker">
        <input type="hidden" name="price" value="430">
        <input type="hidden" name="image" value="images/im6.webp">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>

<div class="fiction" data-id="26" id="c4">
    <span class="wishlist">♡</span>
    <img src="images/im7.jpg" class="b">
    <h4>The Wooden Curse</h4>
    <b>₹400.00</b><br>
        <form method="POST" action="addtocart.php">
        <input type="hidden" name="product_id" value="26">
        <input type="hidden" name="product_name" value="The Wooden Curse">
        <input type="hidden" name="price" value="400">
        <input type="hidden" name="image" value="images/im7.jpg">
        <button type="submit">Buy / Add to Cart</button>
        </form>
</div>
    </div>

    <footer id="foot">
        <h2>@2026 Bookish Shop</h2>
    </footer>
<script src="script.js"></script>
</body>
</html>