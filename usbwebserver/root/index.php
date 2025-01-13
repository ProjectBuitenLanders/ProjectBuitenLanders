<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Keelhoeve</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f2;
            color: #333;
        }
        header {
        background-image: url(img/img1p1.jpg);
        background-size: cover;
        background-position: 0px -300px;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
    }
    header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    header h1, header p {
        position: relative;
        z-index: 2;
    }
        nav {
            display: flex;
            justify-content: center;
            background-color: #87b572;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
        .product {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            width: 200px;
        }
        footer {
            background-color: #6a994e;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welkom bij De Keelhoeve</h1>
        <p>Boerderij feestjes, workshops, en meer!</p>
    </header>

    <nav>
        <a href="#about">Over Ons</a>
        <a href="#products">Producten</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="container" id="about">
        <h2>Over Ons</h2>
        <p>De Keelhoeve is een unieke boerderij waar je kunt genieten van feestjes, workshops en contact met dieren. Wij bieden een warme en gastvrije omgeving om te ontspannen en te leren.</p>
    </div>

    <div class="container" id="products">
        <h2>Onze Producten</h2>
        <div class="product">
            <div class="product-card">
                <h3>Kamer 1</h3>
                <p>Gezellige boerderijkamer voor evenementen.</p>
            </div>
            <div class="product-card">
                <h3>Kamer 2</h3>
                <p>Ruimte met alle voorzieningen voor workshops.</p>
            </div>
            <div class="product-card">
                <h3>Schapen Registratie</h3>
                <p>Professioneel beheer van dieren met uitgebreide database.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 De Keelhoeve. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>
