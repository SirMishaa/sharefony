@extends('layouts.default')

@section('content')
    <div class="bg-gray-900 flex items-stretch bg-grey-lighter min-h-screen">
        <div class="mx-auto max-w-5xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40 w-full">
            <h2
                class="sm:text-8xl text-6xl font-bold leading-tight tracking-tight text-white text-center">
                Share <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">file
                    easily</span>
            </h2>
            <p class="mt-12 text-center text-white text-xl sm:text-2xl">
                Share your files seamlessly, confidentially and securely on multiples storage providers
                via our desktop
                app, mobile app and even our
                cross-platform compatible CLI. Perfect for sharing your logs.
            </p>

            <section
                class="m-4 w-full max-w-sm rounded-lg bg-gradient-to-r bg-gradient-to-r from-purple-400 to-pink-600 p-1.5 mt-16 mx-auto">
                <div
                    class="w-full max-w-sm p-4 bg-white border rounded-lg border-gray-200 shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700 mx-auto">
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        Connect Storage Provider
                    </h5>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of
                        our available
                        storage
                        providers or use a custom one</p>
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <svg class="h-4" viewBox="0 0 87.3 78"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m6.6 66.85 3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3l13.75-23.8h-27.5c0 1.55.4 3.1 1.2 4.5z"
                                        fill="#0066da" />
                                    <path
                                        d="m43.65 25-13.75-23.8c-1.35.8-2.5 1.9-3.3 3.3l-25.4 44a9.06 9.06 0 0 0 -1.2 4.5h27.5z"
                                        fill="#00ac47" />
                                    <path
                                        d="m73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.502l5.852 11.5z"
                                        fill="#ea4335" />
                                    <path
                                        d="m43.65 25 13.75-23.8c-1.35-.8-2.9-1.2-4.5-1.2h-18.5c-1.6 0-3.15.45-4.5 1.2z"
                                        fill="#00832d" />
                                    <path
                                        d="m59.8 53h-32.3l-13.75 23.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2z"
                                        fill="#2684fc" />
                                    <path
                                        d="m73.4 26.5-12.7-22c-.8-1.4-1.95-2.5-3.3-3.3l-13.75 23.8 16.15 28h27.45c0-1.55-.4-3.1-1.2-4.5z"
                                        fill="#ffba00" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Google Drive</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <svg class="h-3" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 80 52">
                                    <defs>
                                        <linearGradient xlink:href="#a" id="b" x1="-108.903"
                                            x2="-1137.198" y1="2124.834" y2="2110.651"
                                            gradientTransform="matrix(.0774 0 0 .0774 88.374 -128.026)"
                                            gradientUnits="userSpaceOnUse" />
                                        <linearGradient id="a">
                                            <stop offset="0"
                                                style="stop-color:#3e82f4;stop-opacity:1" />
                                            <stop offset="1"
                                                style="stop-color:#93dcf7;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <path
                                        d="M45.864.751a21.519 21.519 0 0 0-18.736 11.014 11.804 11.804 0 0 0-5.152-1.192 11.804 11.804 0 0 0-11.621 9.916A16.255 16.255 0 0 0 .378 35.482a16.255 16.255 0 0 0 16.263 16.24 16.255 16.255 0 0 0 2.039-.148h45.188a15.13 15.202 0 0 0 .713.035 15.13 15.202 0 0 0 .679-.035h1.082v-.08a15.13 15.202 0 0 0 13.361-15.087v-.03a15.13 15.202 0 0 0-12.317-14.9A21.519 21.519 0 0 0 45.864.751Z"
                                        style="opacity:1;fill:url(#b);fill-opacity:1;stroke:none;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">iCloud</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <svg class="h-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 43 40">
                                    <path
                                        d="m12.5 0l-12.5 8.1 8.7 7 12.5-7.8-8.7-7.3zm-12.5 21.9l12.5 8.2 8.7-7.3-12.5-7.7-8.7 6.8zm21.2 0.9l8.8 7.3 12.4-8.1-8.6-6.9-12.6 7.7zm21.2-14.7l-12.4-8.1-8.8 7.3 12.6 7.8 8.6-7zm-21.1 16.3l-8.8 7.3-3.7-2.5v2.8l12.5 7.5 12.5-7.5v-2.8l-3.8 2.5-8.7-7.3z"
                                        fill="#007EE5" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Dropbox</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a href="#"
                            class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                            <svg class="w-3 h-3 mr-2" aria-hidden="true" focusable="false"
                                data-prefix="far" data-icon="question-circle" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z">
                                </path>
                            </svg>
                            Why do I need to connect with my storage provider?</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
