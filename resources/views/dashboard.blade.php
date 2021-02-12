<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    {{ Auth::user()->email }}
    {{ Auth::user()->name }}
<button>
    <a href="{{ route('logout') }}">
    Logout
    </a>
</button>
  
    
    
</body>
</html>