<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sent</title>
    <link href="../styles/normilize.css" rel="stylesheet">
    <link href="../styles/shared.css" rel="stylesheet">
    <script src="../scripting/js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>Form submitted</h1>
    <nav class="headerNavigation">
            <ul>
                <li><a href="../page-structure/index.html" title="Go to home page">Home</a></li>
                <li><a href="../page-structure/details.html" title="Go to product details">Product Details</a></li>
                <li><a href="../page-structure/about.html" title="Go learn about Raytheon">Learn About Us</a></li>
                <li><a href="../page-structure/feedback.html" title="Go see our feedback">Feedback</a></li>
                <li><a href="../page-structure/form.html" title="Go to fill out a customer service form">Customer Service Form</a></li>
                <li> <a href="../page-structure/support.html" title="Go to our support page">Support</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            $firstName = $_GET['firstName'];
            echo "<h1>You submitted successfully.</h1>";
            echo "<p class=conformation>We will get back to you as soon as possible " . $firstName . "</p>";
        ?>
    </main>
    <footer class="conformation">
        <address><p>Store location: Main Street, Spencer, MA 01562, USA</p></address>
        <p>Come visit us today!</p>
    </footer>
</body>
</html>