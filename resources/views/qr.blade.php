<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
</head>

<body class="h-screen overflow-hidden w-[500px] flex items-center justify-center" style="background: #edf2f7;">

    <div class="flex flex-col justify-center items-center w-[500px] h-[100vh]">
        <div class="relative flex flex-col items-center rounded-[20px] w-full mx-auto p-4 mt-16  bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none" style="width: 500px;">
            <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
                <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                    <img class="h-full w-full rounded-full" src='https://api.dicebear.com/6.x/initials/svg?seed={{ $user->name }}' alt="" />
                </div>
            </div>
            <div class="mt-16 flex flex-col items-center">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    {{ $user->name }}
                </h4>
                <p class="text-base font-normal text-gray-600">{{ $user->title }}</p>
            </div>
            <div class="mt-4 mb-2 flex flex-col items-center">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    Scan Me
                </h4>
            </div>
            <div class="relative flex h-full w-full justify-center rounded-xl bg-cover">
                {!! QrCode::size(150)->generate('https://localhost/card/' . $user->name) !!}
            </div>
            <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                <div class="flex flex-col items-center justify-center">
                    <a href="/{{ $user->slug }}" class="text-navy-700" target="_blank"><button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-navy-700 ">
                            Go to Vcard
                        </button></a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <a href="/" ><button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-navy-700 ">
                             Go to home
                        </button></a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>