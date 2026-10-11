@props(['title' => 'Student Portal'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            margin: 0;
        }

        nav {
            background: #6c8bc5;
            padding: 18px 30px;
        }

        nav a {
            color: #293b52;
            text-decoration: none;
            font-weight: bold;
            margin-right: 20px;
        }

        nav a:hover {
            color: #bfdbfe;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1, h2 {
            color: #1d4ed8;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        button, .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover, .btn:hover {
            background: #bbbafa;
        }

        .error {
            color: #dc2626;
            margin: 5px 0;
        }

        .error-summary {
            background: #fee2e2;
            border: 1px solid #ef4444;
            padding: 12px;
            border-radius: 6px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 6px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
        }

        @media (max-width: 600px) {
            main {
                margin: 20px 12px;
                padding: 20px;
            }

            nav {
                padding: 16px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('courses.index') }}">Student Portal</a>
        <a href="{{ route('courses.index') }}">Courses</a>
        <a href="{{ route('courses.create') }}">+ New Course</a>
    </nav>

    <main>
        @if (session('status'))
            <p class="success">{{ session('status') }}</p>
        @endif

        {{ $slot }}
    </main>

    <footer>
        &copy; {{ date('Y') }} Student Portal
    </footer>
</body>
</html>

