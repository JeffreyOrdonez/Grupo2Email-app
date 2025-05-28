<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3f4f6 100%);
            font-family: 'Montserrat', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1e293b;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(37, 99, 235, 0.10);
            padding: 40px 32px;
            border: 1px solid #e5e7eb;
        }

        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 20px;
            letter-spacing: 1.5px;
            text-align: center;
        }

        .subtitle {
            font-size: 1.1rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #f9fafb;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 12px;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
        }

        tr:nth-child(even) {
            background: #e0e7ff;
        }

        tr:nth-child(odd) {
            background: #f3f4f6;
        }

        .footer {
            text-align: center;
            color: #94a3b8;
            font-size: 0.95rem;
            margin-top: 32px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>hola</h1>
        <p>{{$reportData}}</p>
    </div>
</body>
</html>