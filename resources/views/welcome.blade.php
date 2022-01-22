<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <aside class="p-3 text-center bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
        <p class="text-sm font-medium text-white">
            We've released a new product!

            <a href="" class="inline-flex items-center underline">
                Buy now

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="h-4 w-4 ml-1.5 flex-shrink-0">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </aside>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="mr-5 hover:text-gray-900">Fourth Link</a>
            </nav>
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                src="https://dummyimage.com/720x600">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Microdosing synth tattooed
                    vexillologist</h1>
                <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing
                    tousled.
                    Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave
                    tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af
                    fingerstache pitchfork.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 bg-gray-200 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">Users</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                    <p class="leading-relaxed">Subscribes</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                    <p class="leading-relaxed">Downloads</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
                    <p class="leading-relaxed">Products</p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master
                    Cleanse Reliac Heirloom</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon
                    brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard
                    of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="https://dummyimage.com/500x300">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="https://dummyimage.com/501x301">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block"
                            src="https://dummyimage.com/600x360">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block"
                            src="https://dummyimage.com/601x361">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="https://dummyimage.com/502x302">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block"
                            src="https://dummyimage.com/503x303">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 text-gray-800">
        <div class="container max-w-5xl px-4 py-12 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-indigo-600">
                        <h3 class="text-3xl font-semibold">Morbi tempor</h3>
                        <span class="text-sm font-bold tracking-wider uppercase text-gray-600">Vestibulum diam nunc</span>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:bg-gray-300">
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-indigo-600">
                            <h3 class="text-xl font-semibold tracking-wide">Donec porta enim vel </h3>
                            <time class="text-xs tracking-wide uppercase text-gray-600">Dec 2020</time>
                            <p class="mt-3">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-indigo-600">
                            <h3 class="text-xl font-semibold tracking-wide">Aliquam sit amet nunc ut</h3>
                            <time class="text-xs tracking-wide uppercase text-gray-600">Jul 2019</time>
                            <p class="mt-3">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                        </div>
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-indigo-600">
                            <h3 class="text-xl font-semibold tracking-wide">Pellentesque habitant morbi</h3>
                            <time class="text-xs tracking-wide uppercase text-gray-600">Jan 2016</time>
                            <p class="mt-3">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-200">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
                    Read trusted reviews from our customers
                </h2>

                <p class="max-w-lg mx-auto mt-4 text-gring-offset-warm-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    praesentium natus sapiente commodi. Aliquid sunt tempore iste
                    repellendus explicabo dignissimos placeat, autem harum dolore
                    reprehenderit quis! Quo totam dignissimos earum.
                </p>
            </div>

            <div
                class="grid grid-cols-1 gap-8 pt-16 mt-16 border-t border-gray-100sm:grid-cols-2 lg:grid-cols-3 sm:gap-16">
                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-6 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-8 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-8 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-8 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-8 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="flex flex-col items-center justify-between text-center sm:items-start sm:text-left">
                    <h5 class="text-xl font-medium text-gray-700">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                    </h5>

                    <footer class="flex items-center mt-8 text-gray-500">
                        <img src="https://www.hyperui.dev/photos/man-5.jpeg" alt=""
                            class="object-cover w-12 h-12 rounded-full" />

                        <div class="ml-3 text-left">
                            <p class="text-sm font-medium text-gray-700">Barry Scott</p>

                            <p class="mt-1 text-xs text-gray-500">
                                Digital Marketing at Studio
                            </p>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 text-gray-800">
        <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
            <p class="p-2 text-sm font-medium tracking-wider text-center uppercase">How it works</p>
            <h2 class="mb-12 text-4xl font-bold leading-none text-center sm:text-5xl">Frequently Asked Questions</h2>
            <div class="flex flex-col divide-y sm:px-8 lg:px-12 xl:px-32 divide-gray-300">
                <details>
                    <summary class="py-2 outline-none cursor-pointer focus:underline">Optio maiores eligendi molestiae totam dolores similique?</summary>
                    <div class="px-4 pb-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque in fugiat magni, quas animi enim veritatis deleniti ex. Impedit.</p>
                    </div>
                </details>
                <details>
                    <summary class="py-2 outline-none cursor-pointer focus:underline">Modi dolorem veritatis culpa quos consequuntur beatae itaque excepturi perspiciatis?</summary>
                    <div class="px-4 pb-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur quae, eos explicabo odit minima libero veniam similique quibusdam doloribus facilis ipsa accusantium vel maiores corrupti! Libero voluptate a doloribus?</p>
                    </div>
                </details>
                <details>
                    <summary class="py-2 outline-none cursor-pointer focus:underline">Magni reprehenderit possimus debitis?</summary>
                    <div class="px-4 pb-4 space-y-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptates aspernatur dolores in consequatur doloremque inventore reprehenderit, consequuntur perspiciatis architecto.</p>
                        <p>Sed consectetur quod tenetur! Voluptatibus culpa incidunt veritatis velit quasi cupiditate unde eaque! Iure, voluptatibus autem eaque unde possimus quae.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>
    <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
</body>

</html>
