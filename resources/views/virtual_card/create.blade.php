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
            <form action="{{ route('virtual_card.store') }}" method="POST">
                @csrf
                <div class="my-2 border mx-auto border-[2px] justify-center flex items-center rounded-md shadow-md">
                    <div>
                        <button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        <input type="search" x-model="input1" name="name" id="name" class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none" placeholder="Name">

                    </div>
                </div>
                @if($errors->has('name'))
                <div class="text-red-500 text-sm mt-1">{{ $errors->first('name') }}</div>
                @endif
                <div class="my-2 border mx-auto border-[2px] justify-center flex items-center rounded-md shadow-md">
                    <div>
                        <button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3L8 21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 3L14 21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.5 9H21.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.5 15H20.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        <input type="search" x-model="input1" name="title" id="title" required class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none" placeholder="Title">
                    </div>
                </div>
                @if($errors->has('title'))
                <div class="text-red-500 text-sm mt-1">{{ $errors->first('title') }}</div>
                @endif
                <div class="my-2 border mx-auto border-[2px] justify-center flex items-center rounded-md shadow-md">
                    <div>
                        <button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        <input type="search" x-model="input1" class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none" type="url" name="link_git" id="link_git" required placeholder="Github Link">
                    </div>
                </div>
                @if($errors->has('link_git'))
                <div class="text-red-500 text-sm mt-1">{{ $errors->first('link_git') }}</div>
                @endif
                <div class="my-2 border mx-auto border-[2px] justify-center flex items-center rounded-md shadow-md">
                    <div>
                        <button class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        <input type="search" x-model="input1" class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none" type="url" name="link_linkedin" id="link_linkedin" required placeholder="Linkedin Link">
                    </div>
                </div>
                @if($errors->has('link_linkedin'))
                <div class="text-red-500 text-sm mt-1">{{ $errors->first('link_linkedin') }}</div>
                @endif
                <div class="max-w-2xl mx-auto">

                    <label for="description" class="block mb-2 text-sm font-medium text-gray-200 dark:text-gray-400">Description</label>
                    @if($errors->has('description'))
                    <div class="text-red-500 text-sm mt-1">{{ $errors->first('description') }}</div>
                    @endif
                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A short statement about a person..."></textarea>

                </div>
                <div class="mt-6 mb-3 flex gap-14 justify-center flex items-center   md:!gap-14">

                    <button class="rounded-xl bg-gradient-to-br from-[#6025F5] to-[#FF5555] px-12 py-3 text-base font-medium text-white transition duration-200 hover:shadow-lg hover:shadow-[#6025F5]/50">
                        Generate
                    </button>

                </div>
            </form>

        </div>
    </div>
</body>