<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <div id="cart"></div>

    <script>
        // Fetch product details from the database and display products
        window.onload = function() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetchCart.php');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const products = JSON.parse(xhr.responseText);
                    displayProducts(products);
                } else {
                    console.error('Error fetching cart:', xhr.status);
                }
            };
            xhr.send();
        };

        // Function to display products in the cart
        function displayProducts(products) {
            const cartDiv = document.getElementById('cart');
            cartDiv.innerHTML = ''; // Clear previous content
            
            products.forEach(product => {
                // Create HTML elements for product
                const productDiv = document.createElement('div');
                productDiv.innerHTML = `
                    <p>Product ID: ${product.id}</p>
                    <p>Name: ${product.name}</p>
                    <p>Price: ${product.price}</p>
                    <p>Quantity: ${product.quantity}</p>
                `;
                cartDiv.appendChild(productDiv);
            });
        }
    </script>
</body>
</html>
