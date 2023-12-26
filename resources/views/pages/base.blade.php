<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKO GWAPO BATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
         <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {   
            background-color: #384a55;
            color: white;
            padding: 15px 0;
        }

        h1 {
            text-align: center;
            margin: 0;
        }

        .nav-pills {
            margin-top: 10px;
        }

        .nav-link {
            color: white;
        }

        .nav-link.active {
            background-color: #1e2933;
            border-radius: 5px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>


    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <h1>FINALS CUTIE</h1>


        <ul class="nav justify-content-end float-right nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-house-door-fill text-dark" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                      </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-people-fill text-dark" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                      </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{Route::is('jobs') ? 'active' : ''}}" href="{{url('/jobs')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-person-arms-up text-dark" viewBox="0 0 16 16">
                        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                        <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.492 1.492 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.72.72 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.72.72 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                      </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{Route::is('students') ? 'active' : ''}}" href="{{url('/students')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-person-wheelchair text-dark" viewBox="0 0 16 16">
                        <path d="M12 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.663 2.146a1.5 1.5 0 0 0-.47-2.115l-2.5-1.508a1.5 1.5 0 0 0-1.676.086l-2.329 1.75a.866.866 0 0 0 1.051 1.375L7.361 3.37l.922.71-2.038 2.445A4.732 4.732 0 0 0 2.628 7.67l1.064 1.065a3.25 3.25 0 0 1 4.574 4.574l1.064 1.063a4.732 4.732 0 0 0 1.09-3.998l1.043-.292-.187 2.991a.872.872 0 1 0 1.741.098l.206-4.121A1 1 0 0 0 12.224 8h-2.79l1.903-2.854ZM3.023 9.48a3.25 3.25 0 0 0 4.496 4.496l1.077 1.077a4.75 4.75 0 0 1-6.65-6.65l1.077 1.078Z"/>
                      </svg>
                    </a>
                </li>
               
            </ul>
    </nav>

    <div class="container mt-5" >
        @yield('content')
    </div>
</body>
</html>

<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #007bff; 
            font-size: 2.5em; 
            margin: 20px 0; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
</style>
