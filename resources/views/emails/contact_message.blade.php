<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #eeeeee;
        }
        .email-header img {
            max-width: 150px;
        }
        .email-content {
            padding: 20px;
            color: #333333;
        }
        .email-content h2 {
            color: #007bff;
        }
        .email-content p {
            line-height: 1.6;
        }
        .email-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777777;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="email-container">
    <!-- Header -->
    <div class="email-header">
        <img src="https://sia.braveanimation.id/images/sia_circle.png" alt="Logo">
    </div>

    <!-- Content -->
    <div class="email-content">
        <h2>Pesan Baru dari Website</h2>
        <p><strong>Nama:</strong> {{ $messageData->name }}</p>
        <p><strong>Email:</strong> {{ $messageData->email }}</p>
        <p><strong>Telepon:</strong> {{ $messageData->phone }}</p>
        <p><strong>Pesan:</strong></p>
        <p>{{ $messageData->message }}</p>

        <a href="mailto:{{ $messageData->email }}" class="btn">Balas Email</a>
    </div>

    <!-- Footer -->
    <div class="email-footer">
        <p>© {{ date('Y') }} Sistem Inovasi Akurasi. Semua Hak Dilindungi.</p>
    </div>
</div>

</body>
</html>
