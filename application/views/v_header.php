<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Tempalate sederhana dengan codeigniter</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Ci3/index.php/assets/css/stylebuku.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template sederhana dengan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
    
</body>
</html>