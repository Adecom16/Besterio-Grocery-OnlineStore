import "./bootstrap";
import Swal from "sweetalert2";
$(document).ready(() => {
    $("#hamburger-menu").click(() => {
        $("#hamburger-menu").toggleClass("active");
        $("#nav-menu").toggleClass("active");
    });

    // setting owl carousel

    let navText = [
        "<i class='bx bx-chevron-left'></i>",
        "<i class='bx bx-chevron-right'></i>",
    ];

    $("#hero-carousel").owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true,
    });

    $("#top-movies-slide").owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            500: {
                items: 3,
            },
            1280: {
                items: 4,
            },
            1600: {
                items: 6,
            },
        },
    });

    $(".movies-slide").owlCarousel({
        items: 2,
        dots: false,
        nav: true,
        navText: navText,
        margin: 15,
        responsive: {
            500: {
                items: 2,
            },
            1280: {
                items: 4,
            },
            1600: {
                items: 6,
            },
        },
    });
});

const body = document.querySelector("body"),
    sidebar = body.querySelector("nav"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
    } else {
        modeText.innerText = "Dark mode";
    }
});

// Function to update the cart badge number
function updateCartBadge() {
    // Make an AJAX request to fetch the current cart count from your server
    // For simplicity, we'll simulate this with a random number (replace it with your actual count)
    const cartCount = Math.floor(Math.random() * 10); // Replace with your cart count
    document.getElementById("cart-badge").textContent = cartCount;
}

// Call the function to initialize the cart badge
updateCartBadge();

// When an item is added to the cart (simulate this event as needed)
// Call updateCartBadge() to update the badge number
function itemAddedToCart() {
    updateCartBadge();
}

// Example: Simulate adding an item to the cart (replace this with your actual logic)
setTimeout(() => {
    itemAddedToCart();
}, 2000); // Simulate after 2 seconds; replace with your actual logic


function updateCountdown() {
    const countdownElement = document.querySelector(".expire-countdown");
    const expireTime = parseInt(countdownElement.getAttribute("data-expire"), 10);

    const now = new Date().getTime();
    const timeRemaining = expireTime - now;

    if (timeRemaining <= 0) {
        // Countdown has expired, you can display a message or take some action here
        document.getElementById("days").textContent = "0";
        document.getElementById("hours").textContent = "00";
        document.getElementById("minutes").textContent = "00";
        document.getElementById("seconds").textContent = "00";
        clearInterval(countdownInterval); // Stop the countdown
    } else {
        const days = Math.floor(timeRemaining / (1000 * 60 * 60 *  24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
    }
}

// Call the updateCountdown function initially to set the initial values
updateCountdown();

// Update the countdown every second
const countdownInterval = setInterval(updateCountdown, 1000);
// setInterval(updateTimer, 1000);




$(document).ready(function() {
    // Increment quantity
    $(".increment").click(function() {
        const itemId = $(this).data("item-id");
        const quantityInput = $(".quantity[data-item-id='" + itemId + "']");
        const price = parseFloat(quantityInput.data("price"));
        const currentQuantity = parseInt(quantityInput.val());
        const newQuantity = currentQuantity + 1;
        const itemTotal = newQuantity * price;

        quantityInput.val(newQuantity);
        $(".item-total[data-item-id='" + itemId + "']").text("$" + itemTotal.toFixed(2));

        // Update the cart total
        updateCartTotal();
    });

    // Decrement quantity
    $(".decrement").click(function() {
        const itemId = $(this).data("item-id");
        const quantityInput = $(".quantity[data-item-id='" + itemId + "']");
        const price = parseFloat(quantityInput.data("price"));
        const currentQuantity = parseInt(quantityInput.val());
        if (currentQuantity > 1) {
            const newQuantity = currentQuantity - 1;
            const itemTotal = newQuantity * price;

            quantityInput.val(newQuantity);
            $(".item-total[data-item-id='" + itemId + "']").text("$" + itemTotal.toFixed(2));

            // Update the cart total
            updateCartTotal();
        }
    });

    // Function to update the cart total
    function updateCartTotal() {
        let total = 0;
        $(".item-total").each(function() {
            total += parseFloat($(this).text().replace("$", ""));
        });
        $("#cart-total").text("$" + total.toFixed(2));
    }
});

 // Select all elements with the "i" tag and store them in a NodeList called "stars"
 const stars = document.querySelectorAll(".stars i");

 // Loop through the "stars" NodeList
 stars.forEach((star, index1) => {
   // Add an event listener that runs a function when the "click" event is triggered
   star.addEventListener("click", () => {
     // Loop through the "stars" NodeList Again
     stars.forEach((star, index2) => {
       // Add the "active" class to the clicked star and any stars with a lower index
       // and remove the "active" class from any stars with a higher index
       index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
     });
   });
 });

 $(document).on('ready', function () {
    // initialization of aos
    AOS.init({
      duration: 650,
      once: true
    });
  });
