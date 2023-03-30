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
            <div class="mt-6 flex flex-col items-center">
                <p class="text-base font-normal text-gray-800">{{ $user->description }}</p>
            </div>
            <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                <div class="flex flex-col items-center justify-center">
                    <a href="{{ $user->link_git }}" target="_blank"><button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </button></a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <a href="{{ $user->link_linkedin }}" target="_blank"><button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </button></a>
                </div>
            </div>
            <div class="mt-2 mb-3 flex gap-14 md:!gap-14">
                <div class="flex flex-col items-center justify-center">
                    <a href="/qr/{{ $user->slug }}" class="text-navy-700" target="_blank"><button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-navy-700 ">
                            Go to QrCode
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