<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Pemilihan VGA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar {
            background-color: #4e73df;
        }
        .navbar-brand {
            color: #fff !important;
        }
        .header {
            background: url('https://img.id.my-best.com/content_section/choice_component/sub_contents/b9a638f3e2f43505654eb50fb6bcebe4.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=690&fit=max&s=81316a730369045a5cf295d5d712080f') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header h1 {
            font-size: 3rem;
        }
        .header p {
            font-size: 1.5rem;
        }
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        .features, .contact {
            padding: 60px 0;
        }
        .feature-box {
            text-align: center;
            padding: 20px;
        }
        .feature-box img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .contact {
            background: #f8f9fc;
        }
        .footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">SPK Pemilihan VGA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <h1>Welcome to SPK Pemilihan VGA</h1>
            <p>Delivering the best solutions for your VGA selection needs.</p>
            <a href="#features" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </header>

    <section class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature-box">
                    <img src="https://i.pinimg.com/564x/15/df/46/15df46a40dcbff6f70af1574bf0b489f.jpg" alt="Feature 1">
                    <h4>Feature 1</h4>
                    <p>KRITERIA.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <img src="https://i.pinimg.com/564x/41/26/85/4126856307eaf04a68a94a1023219819.jpg" alt="Feature 2">
                    <h4>Feature 2</h4>
                    <p>ALTERNATIF.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <img src="https://i.pinimg.com/564x/4a/8d/35/4a8d35fdd0bae319fc097833d1261543.jpg" alt="Feature 3">
                    <h4>Feature 3</h4>
                    <p>PERHITUNGAN WP.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" id="inputMessage" rows="4" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 SPK Pemilihan VGA. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
