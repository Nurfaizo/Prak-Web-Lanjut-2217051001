<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <!-- <style>{
        font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 auto;
        }
        .info {
            margin-top: 20px;
        }
        .info div {
            background-color: #e0e0e0;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            width: 200px; /* Set fixed width */
            margin: 5px auto; /* Center the div */
        }
    </style> -->
</head>
<body> 
</head>
<body class="h-screen bg-gradient-to-b from-blue-500 to-slate-0">

    <div class="content-center p-5 rounded-xl shadow-sm">
        <div class="w-28 h-28 bg-slate-100 rounded-full m-auto flex items-center justify-center">
            <img src="../Assets/img/anime.png" alt="" class="h-13 w-13 rounded-full">
        </div>
        <div class="mt-5">
            <div class="flex flex-col">
                <p class="bg-gray-300 p-2 my-1 rounded w-48 mx-auto">
                    {{$nama}}
                </p>
                <p class="bg-gray-300 p-2 my-1 rounded w-48 mx-auto">
                    {{$kelas}}
                </p>
                <p class="bg-gray-300 p-2 my-1 rounded w-48 mx-auto">
                    {{$npm}}
                </p>
            </div>
        </div>
    </div>

</body>
</html>