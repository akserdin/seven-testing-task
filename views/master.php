<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seven testing task</title>
    <style>
        .page {
            width: 90%;
            margin: 0 auto;
        }

        button {
            cursor: pointer;
        }

        .form-group {
            margin: 12px 0;
        }

        .form-group label {
            display: block;
        }
    </style>
</head>
<body>

<div class="page">
    <header>
        <h1>Welcome to Seven testing task</h1>
    </header>

    <div class="content">
        <?php include VIEWS_DIR . $view; ?>
    </div>

    <footer>
        <p>Dmytro Zolotar &copy; <?php echo date('Y'); ?></p>
    </footer>
</div>

</body>
</html>
