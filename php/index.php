<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px; /* Margin to ensure spacing on small screens */
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        dl {
            display: grid;
            grid-template-columns: 150px 1fr;
            grid-gap: 15px;
        }
        dt {
            font-weight: bold;
            color: #555;
            text-align: right;
            margin-right: 10px; /* Margin kanan untuk dt */
        }
        dd {
            margin: 0;
            padding: 5px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 600px) {
            .container {
                margin: 30px;
                padding: 40px;
            }
            dl {
                grid-template-columns: 1fr;
            }
            dt {
                text-align: left;
                margin-right: 0;
            }
            dd {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biodata Pribadi</h1>
        <dl>
            <dt>Nama Lengkap:</dt>
            <dd><?php echo "Kurniawan Eka Nugraha"; ?></dd>

            <dt>NIM:</dt>
            <dd><?php echo "2215101016"; ?></dd>

            <dt>Kelas:</dt>
            <dd><?php echo "Kelas A"; ?></dd>
        </dl>
    </div>
</body>
</html>
