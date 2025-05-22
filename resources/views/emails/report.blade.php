<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <style>
        body {
            background: #f3f4f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(31, 41, 55, 0.08);
            padding: 32px 24px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 16px;
            letter-spacing: 1px;
            text-align: center;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin: 0;
            color: #374151;
            text-align: center;
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