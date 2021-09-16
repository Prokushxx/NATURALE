{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
  <?php 
use App\Http\Controllers\Products;
$total = 0;
  if(session()->has('user')){
    $total=Products::cartItem();
  }
?>
<style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    /* body {
    /* font-family: 'Open Sans Condensed', sans-serif; 
  } */



    .navbar {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    nav {
        flex: 1;
        text-align: right;

    }

    nav ul {
        display: inline-block;
        list-style-type: none;
    }

    nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    /* nav ul li a{

  } */
    a {
        text-decoration: none;
        color: #555;
        font-size: 15px;
    }

    p {
        color: #555;
    }

    .sliding {
        margin: 0;
        padding: 0;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #3ab15a;
    }

    .slider {
        width: 800px;
        height: 500px;
        border-radius: 10px;
        overflow: hidden;
    }

    .slides {
        width: 500%;
        height: 500px;
        display: flex;
    }

    .slides input {
        display: none;
    }

    .slide {
        width: 20%;
        transition: 2s;
    }

    .slide img {
        width: 800px;
        height: 500px;
    }

    .navigation-manual {
        position: absolute;
        width: 800px;
        margin-top: -40px;
        display: flex;
        justify-content: center;
    }

    .manual-btn {
        border: 2px solid #40D3DC;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 1s;
    }

    .manual-btn:not(:last-child) {
        margin-right: 40px;
    }

    .manual-btn:hover {
        background: #40D3DC;
    }

    #radio1:checked~.first {
        margin-left: 0;
    }

    #radio2:checked~.first {
        margin-left: -20%;
    }

    #radio3:checked~.first {
        margin-left: -40%;
    }

    #radio4:checked~.first {
        margin-left: -60%;
    }

    .navigation-auto {
        position: absolute;
        display: flex;
        width: 800px;
        justify-content: center;
        margin-top: 460px;
    }

    .navigation-auto div {
        border: 2px solid #40D3DC;
        padding: 5px;
        border-radius: 10px;
        transition: 1s;
    }

    .navigation-auto div:not(:last-child) {
        margin-right: 40px;
    }

    #radio1:checked~.navigation-auto .auto-btn1 {
        background: #40D3DC;
    }

    #radio2:checked~.navigation-auto .auto-btn2 {
        background: #40D3DC;
    }

    #radio3:checked~.navigation-auto .auto-btn3 {
        background: #40D3DC;
    }

    #radio4:checked~.navigation-auto .auto-btn4 {
        background: #40D3DC;
    }

    .upload-btn {
        margin-top: 550px;
        background-color: unset;
        color: #000;
    }

    .some {
        width: 80px;
        /* background: ; */
        font-weight: 600;
        color: #32A852;
        transition: ease .9s;
    }

    .some:hover {

        background: #555;
    }

    .container {
        max-width: 1300px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-2 {
        flex-basis: 50%;
        min-width: 300px;
    }

    .col-2 img {
        width: 100%;
        padding: 40px 0;
        margin-bottom: 0;
        /* background-color: #ff523b; */
    }

    .col-2 h1 {
        font-size: 50px;
        line-height: 60px;
        margin: 25px 0;
    }

    .btn {
        display: inline-block;
        background: #ff523b;
        color: #fff;
        padding: 8px 30px;
        border-radius: 30px;
        transition: background 1s;
    }

    .header {
        background: radial-gradient(#fff, #32A852);
    }

    .btn:hover {
        background: #32A852;
    }

    .header .row {
        margin-top: 70px;
    }

    .categories {
        margin: 70px 0;
    }

    .col-3 {
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
    }

    .col-3 img {
        width: 100%;
    }



    .small-container {
        max-width: 1080px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .col-4 {
        flex-basis: 25%;
        padding: 10px;
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }

    .col-4 img {
        width: 100%;
    }

    .title {
        text-align: center;
        margin: 0 auto 80px;
        position: relative;
        line-height: 60px;
        color: #555;
    }

    .title::after {
        content: '';
        background: #32A852;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%);
    }

    h4 {
        color: #555;
        font-weight: normal;
    }

    .col-4 {
        font-size: 14px;
    }

    .col-4:hover {
        transform: translate(-5px);
    }

    .offer {
        background: radial-gradient(#fff, #32A852);
        margin-top: 80px;
        padding: 30px 0;
    }

    .col-2 .offer-img {
        padding: 50px;
    }

    small {
        color: #555;
    }

    .testimonial {
        padding-top: 100px;
    }

    .testimonial .col-3 {
        text-align: center;
        padding: 40px 20px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: ease 1s;
    }

    .testimonial .col-3 img {
        width: 50px;
        margin-top: 20px;
        border-radius: 50%;
    }

    .testimonial .col-3:hover {
        transform: translateY(-10px);
    }

    .fa.fa-quote-left {
        font-size: 34px;
        color: #5ec579;
    }

    .col-3 p {
        font-size: 12px;
        margin: 1px 0;
        color: #777;
    }

    .testimonial.col-3 h3 {
        font-weight: 600;
        color: #555;
        font-size: 16px;
    }

    .brands {
        margin: 100px auto;
    }

    .col-5 {
        width: 160px;
    }

    .col-5 img {
        width: 100%;
        cursor: pointer;
        filter: grayscale(100%);
        transition: ease-out 1s;
    }

    .col-5 img:hover {
        filter: grayscale(0);
    }

    .footer {
        background: #000;
        color: #32A852;
        font-size: 14px;
        padding: 60px 0 20px;
    }

    .footer p {
        color: #32A852;
    }

    .footer h3 {
        color: #fff;
        margin-bottom: 20px;
    }

    .footer-col-1,
    .footer-col-2,
    .footer-col-3,
    .footer-col-4 {
        min-width: 250px;
        margin-bottom: 20px;
    }

    .footer-col-1 {
        flex-basis: 30%;
    }

    .footer-col-2 {
        flex: 1;
        text-align: center;
    }

    .footer-col-2 img {
        width: 180px;
        margin-bottom: 20px;
    }

    .footer-col-3,
    .footer-col-4 {
        flex-basis: 12%;
        text-align: center;
    }

    ul {
        list-style-type: none;
    }

    .app-logo {
        margin-top: 20px;
    }

    .app-logo img {
        width: 140px;
    }

    .footer hr {
        border: none;
        background: #b5b5b5;
        height: 1px;
        margin: 20px 0;
    }

    .copyright {
        text-align: center;
    }

    .menu-icon {
        width: 28px;
        margin-left: 20px;
        display: none;
    }

    @media only screen and (max-width: 800px) {
        nav ul {
            position: absolute;
            top: 70px;
            left: 0;
            background: #333;
            width: 100%;
            overflow: hidden;
            transition: max-height 2.6;
        }

        nav ul li {
            display: block;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        nav ul li a {
            color: #fff;
        }

        .menu-icon {
            display: block;
            cursor: pointer;
        }
    }


    /* *,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} */

    html {
        font-size: 62.5%;
    }

    body {
        --light: hsl(0, 0%, 100%);
        --background: linear-gradient(to right bottom, hsl(236, 50%, 50%), hsl(195, 50%, 50%));

        display: flex;
        flex-direction: column;

        min-height: 100vh;
        background: linear-gradient(to bottom, hsl(236, 50%, 98%), hsl(236, 50%, 94%));
    }

    a,
    a:link {
        font-family: inherit;
        text-decoration: none;
    }

    /* modal */
    /* =============================================== */
    .modal-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;

        display: none;
        justify-content: center;
        align-items: center;

        width: 100%;
        height: 100%;

        background: hsla(0, 0%, 40%, .6);
    }

    /* using :target */
    .modal-container:target {
        display: flex;
    }

    .modal {
        width: 60rem;
        padding: 4rem 2rem;
        border-radius: .8rem;

        color: var(--light);
        background: var(--background);
        box-shadow: .4rem .4rem 2.4rem .2rem hsla(236, 50%, 50%, 0.3);
        position: relative;

        overflow: hidden;
    }

    .modal__details {
        text-align: center;

        margin-bottom: 4rem;
        padding-bottom: 4rem;
        border-bottom: 1px solid hsla(0, 0%, 100%, .4);
    }

    .modal__title {
        font-size: 3.2rem;
    }

    .modal__description {
        margin-top: 2rem;

        font-size: 1.6rem;
        font-style: italic;
    }

    .modal__text {
        padding: 0 4rem;
        margin-bottom: 4rem;

        font-size: 1.6rem;
        line-height: 2;
    }

    .modal__text::before {
        content: '';

        position: absolute;
        top: 0%;
        left: 100%;
        transform: translate(-50%, -50%);

        width: 18rem;
        height: 18rem;
        border: 1px solid hsla(0, 0%, 100%, .2);
        border-radius: 100rem;

        pointer-events: none;
    }

    .modal__btn {
        padding: 1rem 1.6rem;
        border: 1px solid hsla(0, 0%, 100%, .4);
        border-radius: 100rem;

        color: inherit;
        background: transparent;
        font-size: 1.4rem;
        font-family: inherit;
        letter-spacing: .2rem;

        transition: .2s;
        cursor: pointer;
    }

    .modal__btn:hover,
    .modal__btn:focus {
        border-color: hsla(0, 0%, 100%, .6);
        transform: translateY(-.2rem);
    }

    /* links */
    /* =============================================== */
    .link-1 {
        font-size: 1.8rem;
        margin-left: 20px;
        color: var(--light);
        background: var(--background);
        box-shadow: .4rem .4rem 2.4rem .2rem hsla(236, 50%, 50%, 0.3);
        border-radius: 100rem;
        padding: 1.4rem 3.2rem;
        transition: .2s;
    }

    .link-1:hover,
    .link-1:focus {
        transform: translateY(-.2rem);
        box-shadow: 0 0 4.4rem .2rem hsla(236, 50%, 50%, 0.4);
    }

    .link-2 {
        width: 4rem;
        height: 4rem;
        border: 1px solid hsla(0, 0%, 100%, .4);
        border-radius: 100rem;

        color: inherit;
        font-size: 2.2rem;

        position: absolute;
        top: 2rem;
        right: 2rem;

        display: flex;
        justify-content: center;
        align-items: center;

        transition: .2s;
    }

    .link-2::before {
        content: '×';

        transform: translateY(-.1rem);
    }

    .link-2:hover,
    .link-2:focus {
        border-color: hsla(0, 0%, 100%, .6);
        transform: translateY(-.2rem);
    }

    /* Second Version Link
/* =============================================== */
    .second-version-link,
    .second-version-link:link {
        color: hsl(236, 50%, 50%);
        padding: .8rem 1.6rem .8rem .2rem;
        border-bottom: 2px solid hsl(236, 50%, 50%);

        font-size: 1.4rem;
        font-weight: bold;

        position: absolute;
        top: 4rem;
        right: 4rem;
    }

    .second-version-link::after {
        content: '\2197';

        position: absolute;
        top: 0;
        right: 0;

        font-size: .9em;
    }

    .abs-site-link {
        position: fixed;
        bottom: 20px;
        left: 20px;
        color: hsla(0, 0%, 0%, .6);
        font-size: 1.6rem;
    }

    .w-5 {
        display: none;
    }

    */

</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Naturale</title>
</head>

<body>
    @csrf
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../IMG/pic2.jpg" width="100px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li></li>
                        <li><a href="#Fprod">Product</a></li>
                        <li><a href="#Rev">Review</a></li>
                        <li><a href="#footer">Contact</a></li>
                        <li><a href="login">Log in</a></li>
                        <li><a href="{{ route('logout') }}">Log out</a></li>
                        <li><a href="/cartlist" class="">Cart({{ $total }})</a></li>
                    </ul>
                </nav>
                <img src="/IMG/menu.png" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <H1>Hello {{ session('Username') }} <br> Let's</H1>
                    <h1>Get Your Skin <br> Clean & Beautiful</h1>
                    <p>These products are made of natural chemicals which soul purpose is to get rid
                        <br> of underlying dirt and unwanted matters which the body produces.
                    </p><br>
                    <a href="#" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="/IMG/blackGirl2.png" width="600px" height="500px">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3"> <img src="../IMG/pic5.jpg" alt=""></div>
        <div class="col-3"> <img src="../IMG/pic6.jpg" alt=""></div>
        <div class="col-3"> <img src="../IMG/pic7.jpg" alt=""></div>
      </div>
    </div>
  </div> -->
    <div class="sliding">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- <input type="radio" name="radio-btn" id="radio5"> -->

                <div class="slide first">
                    <img src="../IMG/pic7.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="../IMG/pic8.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="../IMG/pic9.jpg" alt="">
                </div>
                <!-- <div class="slide">
          <img src="../IMG/pic22.jpg" alt="">
        </div> -->
                <div class="slide-first">
                    <img src="../IMG/pic12.jpg" alt="">
                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <!-- <div class="auto-btn5"></div> -->
                </div>

            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <!-- <label for="radio5" class="manual-btn"></label> -->
            </div>

        </div>
        {{-- <a href="#modal-opened" class="link-1" id="modal-closed">ADD PHOTO</a> --}}

        <div class="modal-container" id="modal-opened">
            <div class="modal">

                <div class="modal__details">
                    <h1 class="modal__title">PHOTOS</h1>
                    <p class="modal__description"></p>
                </div>

                <p class="modal__text">No photos found</p>
                <form action="" method="post">
                    <button class="modal__btn" type="submit">Button &rarr;</button>
                </form>
                <a href="#modal-closed" class="link-2"></a>

            </div>
        </div>
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>

        <!-- <a href="https://codepen.io/AbubakerSaeed/full/eYOvKpY" class="second-version-link" target="_blank">CSS Modals (Modal v2)</a> -->

        <!-- <a href="https://abubakersaeed.netlify.app/designs/d7-modal" class="abs-site-link" rel="nofollow noreferrer" target="_blank">abs/designs/d7-modal</a> -->
        <script>
            var counter = 1;
            setInterval(function() {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 4) {
                    counter = 1;
                }
            }, 5000);
        </script>
    </div>
    <div class="small-container">
        <h2 class="title" id="Fprod">Featured Products</h2>
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-4">
                    <a href="{{ route('get.id', $photo->id) }}">
                        <img src="{{ asset('storage/images/'.$photo->name) }}" alt="image">
                    </a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>{{ $photo->pic_name }}</h4>
                    <p>$1500</p>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="../IMG/pic15b.jpg" alt="" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available</p>
                    <h1>Smart Brand 4</h1>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. ad
                        aliquam quaerat cumque, beatae inventore doloremque, debitis dolores aspernatur
                        modi mollitia quae quos.</small>
                    <a href="#" class="btn">Purchase now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial" id="Rev">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit
                        dolorum deleniti non sed.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="../IMG/pic14.jpg">
                    <h3>Akinyene Thompson</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit
                        dolorum deleniti non sed.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="../IMG/pic14.jpg">
                    <h3>Akinyene Thompson</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit
                        dolorum deleniti non sed.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="../IMG/pic14.jpg">
                    <h3>Akinyene Thompson</h3>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="brands">
    <div class="small-contaniner">
      <div class="row">
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic20.jpg">
        </div>
      </div>
    </div>
  </div> -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Downoal for ios and Android</p>
                    <div class="app-logo">
                        <img src="../IMG/pic5.jpg" alt="">
                        <img src="../IMG/pic5.jpg" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="../IMG/pic23.jpg"> -->
                    <!-- <p>Downoal for ios and Android Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nesciunt quis deleniti illo corporis vitae praesentium! Minus porro quidem velit sint, voluptatum rem nostrum excepturi, totam rerum reprehenderit facilis dolores!</p>-
    -->
                </div>
                <div class="footer-col-3" id="footer">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Tik Tok</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Kush Enterprise</p>
        </div>
    </div>

</body>

</html>
