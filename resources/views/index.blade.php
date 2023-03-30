<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex flex-col justify-center items-center h-[100vh]">
        <div class="relative flex flex-col items-center rounded-[20px] w-[400px] mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none">
            <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
                <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                    <img class="h-full w-full rounded-full" src='https://miro.medium.com/v2/resize:fit:640/0*zPG9dqz508rmRR70.' alt="" />
                </div>
            </div>
            <div class="mt-16 flex flex-col items-center">
                <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    Virtual Cards Generator
                </h4>
                <p class="text-base font-normal text-gray-600">Buzzvel Dev Test</p>
            </div>

            <div class="container flex flex-col items-center justify-center w-full mx-auto bg-gray-100 my-4 rounded-lg shadow dark:bg-gray-800">
                <ul class="flex flex-col divide-y divide">
                    @foreach ($cards as $card)
                    <li class="flex flex-row">
                        <div onclick="window.location.href='/qr/{{ $card->slug }}'" class="flex items-center flex-1 p-4 cursor-pointer select-none">
                            <div class="flex flex-col items-center justify-center w-10 h-10 mr-4">
                                <a href="#" class="relative block">
                                    <img alt="profil" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $card->name }}" class="mx-auto object-cover rounded-full h-10 w-10 " />
                                </a>
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                                <div class="font-medium dark:text-white">
                                    {{ $card->name }}
                                </div>
                                <div class="text-sm text-gray-600 dark:text-gray-200">
                                    {{ $card->title }}
                                </div>
                            </div>
                            <div class="flex justify-end w-24 text-right">
                                <svg width="20" fill="currentColor" height="20" class="text-gray-500 hover:text-gray-800 dark:hover:text-white dark:text-gray-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-2 mb-1 flex gap-14 justify-center flex items-center   md:!gap-14">
                <a href="/generate"><button type="submit" class="rounded-xl bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-12 py-3 text-base font-medium text-white transition duration-200 hover:shadow-lg hover:shadow-[#6025F5]/50">
                        Save new card
                    </button></a>
            </div>


        </div>
    </div>
</body>