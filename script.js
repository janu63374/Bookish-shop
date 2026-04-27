document.addEventListener("DOMContentLoaded", function () {

    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    document.querySelectorAll(".fiction").forEach(function (book) {

        let heart = book.querySelector(".wishlist");
        let bookId = book.getAttribute("data-id");

        // Highlight saved books
        if (wishlist.some(item => item.id === bookId)) {
            heart.innerHTML = "♥";
            heart.style.color = "red";
        }

        heart.addEventListener("click", function () {

            let bookData = {
                id: bookId,
                name: book.querySelector("h4").innerText,
                price: book.querySelector("b").innerText,
                image: book.querySelector("img").src
            };

            let existingIndex = wishlist.findIndex(item => item.id === bookId);

            if (existingIndex !== -1) {
                wishlist.splice(existingIndex, 1);
                heart.innerHTML = "♡";
                heart.style.color = "black";
            } else {
                wishlist.push(bookData);
                heart.innerHTML = "♥";
                heart.style.color = "red";
            }

            localStorage.setItem("wishlist", JSON.stringify(wishlist));
        });

    });

});

document.querySelectorAll(".cart-btn").forEach(button => {

    button.addEventListener("click", function () {

        let book = button.closest(".fiction");

        let bookData = {
            id: book.getAttribute("data-id"),
            name: book.querySelector("h4").innerText,
            price: book.querySelector("b").innerText,
            image: book.querySelector("img").src
        };

        fetch("add_to_cart.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(bookData)
        })
        .then(res => res.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.log("Error:", error);
        });

    });

});