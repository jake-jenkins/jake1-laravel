<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Jake1.net</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col min-h-screen">
        <header class="bg-indigo-700 text-white">
        <div class="container mx-auto flex h-16 items-center pl-4">    
        <div class="flex-1 lg:w-1/4">
            <a href="/"><svg class="text-white" viewBox="901.592 440.746 106.818 40.627" width="106px" height="40px"><path d=" M 905.054 473.493 L 905.054 450.488 L 913.153 450.488 L 913.153 473.669 L 913.153 473.669 Q 913.153 476.633 911.906 478.357 L 911.906 478.357 L 911.906 478.357 Q 910.658 480.08 908.392 480.777 L 908.392 480.777 L 908.392 480.777 Q 906.125 481.474 903.059 481.357 L 903.059 481.357 L 903.059 481.357 Q 902.751 481.342 902.413 481.342 L 902.413 481.342 L 902.413 481.342 Q 902.076 481.342 901.592 481.298 L 901.592 481.298 L 901.592 475.312 L 901.592 475.312 Q 901.885 475.342 902.098 475.356 L 902.098 475.356 L 902.098 475.356 Q 902.31 475.371 902.531 475.371 L 902.531 475.371 L 902.531 475.371 Q 903.983 475.371 904.518 474.923 L 904.518 474.923 L 904.518 474.923 Q 905.054 474.476 905.054 473.493 L 905.054 473.493 L 905.054 473.493 Z  M 909.118 448.141 L 909.118 448.141 L 909.118 448.141 Q 907.46 448.141 906.286 447.055 L 906.286 447.055 L 906.286 447.055 Q 905.113 445.969 905.113 444.444 L 905.113 444.444 L 905.113 444.444 Q 905.113 442.918 906.286 441.832 L 906.286 441.832 L 906.286 441.832 Q 907.46 440.746 909.103 440.746 L 909.103 440.746 L 909.103 440.746 Q 910.761 440.746 911.928 441.832 L 911.928 441.832 L 911.928 441.832 Q 913.094 442.918 913.094 444.444 L 913.094 444.444 L 913.094 444.444 Q 913.094 445.969 911.928 447.055 L 911.928 447.055 L 911.928 447.055 Q 910.761 448.141 909.118 448.141 Z  M 921.474 473.376 L 921.474 473.376 L 921.474 473.376 Q 919.317 473.376 917.667 472.664 L 917.667 472.664 L 917.667 472.664 Q 916.016 471.952 915.077 470.5 L 915.077 470.5 L 915.077 470.5 Q 914.138 469.048 914.138 466.803 L 914.138 466.803 L 914.138 466.803 Q 914.138 464.954 914.769 463.641 L 914.769 463.641 L 914.769 463.641 Q 915.4 462.328 916.53 461.492 L 916.53 461.492 L 916.53 461.492 Q 917.66 460.656 919.163 460.215 L 919.163 460.215 L 919.163 460.215 Q 920.667 459.775 922.413 459.643 L 922.413 459.643 L 922.413 459.643 Q 924.306 459.496 925.457 459.284 L 925.457 459.284 L 925.457 459.284 Q 926.609 459.071 927.123 458.682 L 927.123 458.682 L 927.123 458.682 Q 927.636 458.293 927.636 457.648 L 927.636 457.648 L 927.636 457.589 L 927.636 457.589 Q 927.636 456.709 926.961 456.239 L 926.961 456.239 L 926.961 456.239 Q 926.286 455.77 925.23 455.77 L 925.23 455.77 L 925.23 455.77 Q 924.071 455.77 923.345 456.276 L 923.345 456.276 L 923.345 456.276 Q 922.619 456.782 922.472 457.824 L 922.472 457.824 L 915.019 457.824 L 915.019 457.824 Q 915.165 455.77 916.332 454.031 L 916.332 454.031 L 916.332 454.031 Q 917.498 452.293 919.743 451.244 L 919.743 451.244 L 919.743 451.244 Q 921.988 450.195 925.347 450.195 L 925.347 450.195 L 925.347 450.195 Q 927.768 450.195 929.69 450.76 L 929.69 450.76 L 929.69 450.76 Q 931.612 451.325 932.962 452.33 L 932.962 452.33 L 932.962 452.33 Q 934.312 453.335 935.023 454.677 L 935.023 454.677 L 935.023 454.677 Q 935.735 456.019 935.735 457.589 L 935.735 457.589 L 935.735 473.023 L 928.164 473.023 L 928.164 469.854 L 927.988 469.854 L 927.988 469.854 Q 927.313 471.116 926.352 471.894 L 926.352 471.894 L 926.352 471.894 Q 925.391 472.671 924.166 473.023 L 924.166 473.023 L 924.166 473.023 Q 922.941 473.376 921.474 473.376 Z  M 924.115 468.27 L 924.115 468.27 L 924.115 468.27 Q 925.039 468.27 925.854 467.888 L 925.854 467.888 L 925.854 467.888 Q 926.668 467.507 927.181 466.788 L 927.181 466.788 L 927.181 466.788 Q 927.695 466.069 927.695 465.042 L 927.695 465.042 L 927.695 463.164 L 927.695 463.164 Q 927.372 463.296 927.013 463.414 L 927.013 463.414 L 927.013 463.414 Q 926.653 463.531 926.25 463.634 L 926.25 463.634 L 926.25 463.634 Q 925.846 463.737 925.399 463.825 L 925.399 463.825 L 925.399 463.825 Q 924.951 463.913 924.467 463.986 L 924.467 463.986 L 924.467 463.986 Q 923.528 464.133 922.934 464.463 L 922.934 464.463 L 922.934 464.463 Q 922.34 464.793 922.054 465.27 L 922.054 465.27 L 922.054 465.27 Q 921.768 465.746 921.768 466.333 L 921.768 466.333 L 921.768 466.333 Q 921.768 467.272 922.428 467.771 L 922.428 467.771 L 922.428 467.771 Q 923.088 468.27 924.115 468.27 Z  M 949.045 462.284 L 944.819 467.683 L 944.878 458.059 L 945.934 458.059 L 951.392 450.488 L 960.488 450.488 L 951.333 462.284 L 949.045 462.284 L 949.045 462.284 Z  M 945.641 473.023 L 937.542 473.023 L 937.542 442.977 L 945.641 442.977 L 945.641 473.023 L 945.641 473.023 Z  M 960.723 473.023 L 951.451 473.023 L 946.286 464.103 L 951.568 458.352 L 960.723 473.023 L 960.723 473.023 Z  M 970.394 473.434 L 970.394 473.434 L 970.394 473.434 Q 966.785 473.434 964.181 472.048 L 964.181 472.048 L 964.181 472.048 Q 961.577 470.661 960.176 468.057 L 960.176 468.057 L 960.176 468.057 Q 958.775 465.453 958.775 461.815 L 958.775 461.815 L 958.775 461.815 Q 958.775 458.323 960.183 455.711 L 960.183 455.711 L 960.183 455.711 Q 961.592 453.1 964.159 451.647 L 964.159 451.647 L 964.159 451.647 Q 966.727 450.195 970.218 450.195 L 970.218 450.195 L 970.218 450.195 Q 972.771 450.195 974.84 450.987 L 974.84 450.987 L 974.84 450.987 Q 976.908 451.779 978.376 453.283 L 978.376 453.283 L 978.376 453.283 Q 979.843 454.787 980.635 456.929 L 980.635 456.929 L 980.635 456.929 Q 981.427 459.071 981.427 461.756 L 981.427 461.756 L 981.427 463.634 L 961.298 463.634 L 961.298 459.174 L 973.974 459.174 L 973.974 459.174 Q 973.96 458.205 973.483 457.464 L 973.483 457.464 L 973.483 457.464 Q 973.006 456.724 972.206 456.305 L 972.206 456.305 L 972.206 456.305 Q 971.407 455.887 970.394 455.887 L 970.394 455.887 L 970.394 455.887 Q 969.411 455.887 968.59 456.305 L 968.59 456.305 L 968.59 456.305 Q 967.768 456.724 967.277 457.457 L 967.277 457.457 L 967.277 457.457 Q 966.785 458.191 966.756 459.174 L 966.756 459.174 L 966.756 463.986 L 966.756 463.986 Q 966.756 465.072 967.211 465.923 L 967.211 465.923 L 967.211 465.923 Q 967.665 466.773 968.516 467.258 L 968.516 467.258 L 968.516 467.258 Q 969.367 467.742 970.57 467.742 L 970.57 467.742 L 970.57 467.742 Q 971.407 467.742 972.104 467.507 L 972.104 467.507 L 972.104 467.507 Q 972.8 467.272 973.299 466.825 L 973.299 466.825 L 973.299 466.825 Q 973.798 466.377 974.033 465.746 L 974.033 465.746 L 981.427 465.746 L 981.427 465.746 Q 981.046 468.094 979.623 469.818 L 979.623 469.818 L 979.623 469.818 Q 978.2 471.542 975.859 472.488 L 975.859 472.488 L 975.859 472.488 Q 973.519 473.434 970.394 473.434 Z " fill="currentColor"></path><path d=" M 985.32 461.946 C 985.32 455.574 990.493 450.401 996.865 450.401 C 1003.237 450.401 1008.41 455.574 1008.41 461.946 C 1008.41 468.318 1003.237 473.491 996.865 473.491 C 990.493 473.491 985.32 468.318 985.32 461.946 Z  M 995.634 455.067 L 999.269 455.067 L 999.269 469.611 L 995.321 469.611 L 995.321 458.703 L 995.236 458.703 L 992.055 460.606 L 992.055 457.254 L 995.634 455.067 Z " fill-rule="evenodd" fill="currentColor"></path></svg></a>
        </div>
            <div class="w-2/4 text-center hidden lg:flex">
                <input class="p-2 text-black bg-indigo-200 w-full" />
                <button class="px-4 py-2 bg-white text-black font-medium">Search</button>
            </div>
            <div class="lg:w-1/4 text-end pr-4">
                <a href="/projects" class="bg-white px-4 py-3 text-black rounded mr-1">Projects</a>
                <a href="/contact" class="bg-white px-4 py-3 text-black rounded mr-1">Contact</a>
            </div>
</div>
        </header>

        <main class="flex-1 container mx-auto px-8 md:px-12 lg:px-32 py-6 md:py-8 lg:py-20 shadow">
        @yield('content')
</main>

<footer class="h-24 bg-slate-50 flex items-center border-t border-indigo-700">
    <div class="container mx-auto">
<p class="text-center">Copyright Jake Jenkins</p>
</div>
</footer>
</div>
    </body>
</html>
