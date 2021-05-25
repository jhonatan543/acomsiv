<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/inicio.css">
        <link type="text/css" rel="stylesheet" href="css/wasap.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
           <nav class="nav bd-grid">
                <div>
                    <a href="{{ url('/') }}" class="nav_logo"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 702.000000 285.000000"
                            preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,285.000000) scale(0.100000,-0.100000)"
                            fill="#233e8b" stroke="none"><path d="M6459 2813 l-76 -15 4 -151 c3 -84 5 -156 7 -161 2 -10 156 318 156
                            334 0 6 -3 9 -7 9 -5 -1 -42 -8 -84 -16z"/><path d="M5585 2808 c-6 -16 -175 -846 -175 -859 0 -5 63 -9 150 -9 83 0 150 3 150 8 0 10 160 834 166 855
                            5 16 -6 17 -141 17 -107 0 -147 -3 -150 -12z"/><path d="M6005 2768 c11 -90 115 -782 120 -805 5 -23 7 -23 190 -23 l185 0
                            220 440 220 440 -169 0 -168 0 -96 -227 c-52 -126 -103 -247 -112 -271 -10
                            -24 -21 -40 -25 -35 -4 4 -18 123 -30 263 -12 140 -24 258 -27 263 -2 4 -74 7
                            -160 7 l-155 0 7 -52z"/><path d="M4915 2795 c-97 -21 -147 -48 -201 -108 -62 -68 -84 -112 -84 -169 0
                            -78 57 -140 160 -173 128 -41 220 -107 220 -157 0 -11 -16 -35 -35 -53 -92
                            -87 -277 -86 -402 3 l-30 21 -11 -101 c-6 -56 -9 -105 -6 -109 12 -19 194 -52 294 -53 138 -1 220 24 312 93 144 109 201 221 160 314 -24 54 -68 85 -162 116
                            -97 31 -193 84 -210 114 -13 24 -13 30 0 55 24 43 74 62 161 62 67 0 85 -4
                            145 -34 38 -19 70 -33 72 -31 10 10 40 181 33 188 -15 16 -167 36 -261 36 -52
                            0 -122 -7 -155 -14z"/><path d="M5935 2765 c-4 -22 -43 -215 -85 -430 -62 -311 -75 -391 -64 -393 16-4 285 26 292 32 2 3 -27 191 -66 418 -57 345 -70 406 -77 373z"/>
                            <path d="M5380 2778 c-1 -31 -28 -239 -31 -242 -2 -2 -41 -16 -86 -30 -46 -15
                                -83 -31 -83 -35 0 -3 16 -15 35 -25 46 -25 109 -86 129 -124 8 -16 18 -48 22
                                -71 13 -84 -69 -202 -204 -291 l-47 -31 70 7 c39 3 95 9 125 13 l54 6 27 140
                                c14 77 49 262 78 411 28 150 51 275 51 278 0 3 -31 6 -70 6 -49 0 -70 -4 -70
                                -12z"/>
                                <path d="M3399 2343 l-84 -428 144 -3 c79 -1 145 -1 146 0 2 2 20 119 41 261
                                21 141 40 257 43 257 3 0 35 -71 71 -158 35 -86 71 -174 80 -194 l16 -37 138
                                190 c76 105 140 188 143 186 3 -4 -70 -280 -126 -474 l-10 -33 177 0 177 0 64
                                418 c35 229 66 423 69 430 3 9 -34 12 -166 12 l-171 0 -108 -153 c-59 -84
                                -112 -155 -118 -157 -5 -3 -35 65 -65 150 l-55 155 -161 3 -160 2 -85 -427z"/>
                                <path d="M2700 2747 c-69 -16 -89 -27 -167 -90 -156 -125 -245 -298 -246 -477
                                0 -65 4 -84 33 -143 40 -80 99 -138 168 -162 112 -40 307 -28 421 26 236 109
                                349 290 339 539 -7 165 -64 249 -198 291 -82 26 -269 35 -350 16z m190 -144
                                c60 -42 85 -106 83 -215 -3 -172 -106 -354 -221 -389 -121 -36 -203 132 -158
                                324 49 209 197 349 296 280z"/>
                                <path d="M2749 2507 c-43 -29 -48 -70 -8 -75 33 -4 119 28 132 50 30 47 -64
                                66 -124 25z"/>
                                <path d="M2779 2405 c-101 -35 -106 -39 -118 -95 -16 -74 -13 -129 9 -177 17
                                -39 22 -43 56 -43 33 0 45 8 90 54 38 39 57 69 68 107 21 69 21 143 0 163 -19
                                20 -25 20 -105 -9z"/>
                                <path d="M3980 2723 c-41 -14 -76 -27 -77 -28 -6 -4 27 -101 40 -118 11 -17
                                17 -12 60 55 26 40 55 83 63 96 21 29 11 28 -86 -5z"/>
                                <path d="M1920 2724 c-194 -51 -324 -185 -391 -404 -30 -97 -32 -222 -5 -300
                                25 -71 96 -141 168 -167 100 -34 375 -17 397 26 5 9 11 41 15 71 4 30 10 65
                                12 77 6 21 5 21 -42 7 -26 -8 -79 -14 -118 -14 -133 0 -179 50 -177 194 2 216
                                101 336 276 336 39 0 95 -6 125 -14 30 -8 56 -13 57 -12 1 1 5 45 9 98 l7 96
                                -52 11 c-71 15 -214 13 -281 -5z"/>
                                <path d="M3355 2699 c-22 -10 -54 -19 -71 -19 -43 0 -46 -7 -24 -49 58 -115
                                70 -290 27 -402 -57 -149 -145 -245 -324 -355 -47 -30 -53 -35 -28 -31 17 3
                                95 15 175 27 80 12 146 23 147 24 5 5 143 801 141 811 -2 8 -16 6 -43 -6z"/>
                                <path d="M833 2553 c-44 -82 -145 -270 -226 -418 -80 -149 -149 -278 -152
                                -288 -7 -16 4 -17 132 -17 l138 0 31 83 31 82 136 3 137 3 0 -86 0 -85 150 0
                                c83 0 150 3 150 6 0 8 -138 798 -146 837 l-6 27 -148 0 -148 0 -79 -147z m200
                                -193 c4 -41 6 -109 5 -150 l-3 -75 -87 -3 c-84 -3 -88 -2 -88 18 0 21 66 266
                                76 282 3 5 25 8 47 6 l42 -3 8 -75z"/>
                                <path d="M4526 2663 c-20 -138 -21 -133 8 -133 24 0 26 4 26 39 0 30 9 51 35
                                85 l35 46 -49 0 c-49 0 -49 0 -55 -37z"/>
                                <path d="M5046 2595 c-57 -20 -64 -31 -38 -57 27 -28 99 -29 166 -4 51 20 52
                                26 4 49 -52 24 -90 27 -132 12z"/>
                                <path d="M2007 2506 c-21 -8 -47 -22 -57 -31 -34 -31 -64 -115 -41 -115 5 0
                                39 18 76 39 37 22 90 46 117 52 27 7 53 18 59 25 27 33 -87 55 -154 30z"/>
                                <path d="M712 2492 c-7 -5 -127 -188 -266 -408 l-254 -399 56 -3 c54 -3 57 -2
                                88 35 23 27 28 39 18 41 -20 5 -18 28 5 60 23 32 350 582 375 630 22 42 11 64
                                -22 44z"/>
                                <path d="M1438 2433 c-68 -42 -88 -60 -88 -77 0 -13 9 -103 20 -202 11 -98 20
                                -182 20 -186 0 -5 18 -8 41 -8 35 0 40 2 34 18 -23 54 -37 127 -37 207 -1 102
                                29 208 77 270 14 19 25 35 23 34 -2 0 -42 -26 -90 -56z"/>
                                <path d="M4500 2430 l0 -50 45 0 c25 0 45 2 45 4 0 2 -7 17 -15 32 -8 16 -15
                                37 -15 47 0 12 -8 17 -30 17 -29 0 -30 -1 -30 -50z"/>
                                <path d="M2058 2368 l-188 -91 0 -87 c0 -80 2 -88 26 -111 35 -32 100 -31 174
                                5 93 44 117 34 122 -49 3 -42 6 -50 23 -50 16 0 19 6 17 30 -2 17 -4 82 -4
                                145 -1 97 3 129 25 200 25 85 26 100 4 100 -7 -1 -96 -42 -199 -92z"/>
                                <path d="M4543 2337 l-83 -21 0 -38 c0 -46 -9 -45 167 -17 l134 22 -53 29
                                c-29 16 -57 33 -62 38 -6 6 -12 10 -15 9 -4 -1 -43 -11 -88 -22z"/>
                                <path d="M4690 2241 c-108 -15 -115 -18 -118 -40 l-4 -24 79 7 c73 6 211 31
                                220 39 2 2 1 12 -3 21 -7 19 -20 19 -174 -3z"/>
                                <path d="M3962 2117 l-71 -113 -115 -18 -116 -18 0 -44 c0 -39 3 -44 23 -44
                                34 1 299 28 302 32 4 5 53 313 50 316 -1 1 -34 -48 -73 -111z"/>
                                <path d="M3720 2195 c0 -16 -7 -58 -14 -92 l-14 -63 43 0 42 0 -24 83 c-30
                                105 -31 108 -33 72z"/>
                                <path d="M4899 2186 c-2 -3 -53 -10 -112 -17 -93 -10 -107 -14 -107 -30 0 -17
                                8 -19 73 -19 109 0 166 20 167 58 0 12 -12 16 -21 8z"/>
                                <path d="M4425 2128 c-2 -13 -11 -60 -18 -105 l-14 -83 28 0 c24 0 29 5 33 33
                                3 17 10 59 16 91 14 82 13 86 -15 86 -17 0 -26 -7 -30 -22z"/>
                                <path d="M808 1910 c-9 -22 -13 -40 -10 -40 4 1 39 19 77 40 l70 40 -60 0 -60
                                0 -17 -40z"/>
                                <path d="M2259 1942 c-13 -2 -40 -8 -61 -13 -32 -8 -37 -14 -43 -49 -6 -33
                                -12 -41 -33 -46 -106 -25 -285 -73 -289 -78 -11 -11 20 -36 56 -46 87 -24 261
                                -4 490 56 74 19 139 38 144 41 6 3 -14 12 -44 20 -61 16 -122 49 -166 90 -19
                                18 -38 27 -54 25z"/>
                                <path d="M5420 1865 c-333 -40 -614 -75 -625 -78 -43 -11 122 -6 306 8 177 14
                                861 87 951 102 28 4 38 10 38 24 0 15 -7 19 -32 18 -18 -1 -305 -34 -638 -74z"/>
                                <path d="M1452 1902 c-32 -16 -33 -18 -27 -62 6 -43 4 -47 -20 -58 -14 -7 -45
                                -12 -68 -12 -48 0 -112 -28 -112 -50 0 -41 160 -36 339 10 65 16 138 30 162
                                30 65 0 58 24 -10 38 -72 15 -142 48 -182 89 -38 38 -37 37 -82 15z"/>
                                <path d="M5170 1905 c-47 -7 -267 -36 -490 -65 -223 -28 -414 -56 -425 -61
                                -49 -23 466 23 880 79 170 23 200 30 203 45 3 14 -4 17 -40 16 -24 -1 -81 -7
                                -128 -14z"/>
                                <path d="M840 1845 c-63 -35 -116 -68 -118 -73 -1 -5 1 -18 5 -29 8 -19 13
                                -18 126 31 l117 51 0 42 c0 24 -3 43 -7 42 -5 -1 -60 -29 -123 -64z"/>
                                <path d="M4404 1884 c-34 -19 -89 -30 -340 -64 -164 -22 -324 -45 -354 -50
                                -100 -17 190 -2 390 20 215 24 503 60 507 64 6 5 -128 56 -145 55 -9 -1 -35
                                -12 -58 -25z"/>
                                <path d="M3550 1815 c-413 -71 -439 -76 -320 -69 112 6 758 90 768 99 1 1 0
                                10 -4 19 -9 24 -41 21 -444 -49z"/>
                                <path d="M3120 1839 c-120 -24 -401 -66 -502 -75 -69 -6 -78 -9 -78 -27 0 -19
                                4 -20 93 -13 114 9 319 38 500 72 119 23 137 29 137 45 0 24 -23 24 -150 -2z"/>
                                <path d="M875 1746 l-120 -51 135 -3 134 -3 83 37 c46 21 83 42 83 47 0 6 -30
                                7 -81 3 -63 -5 -85 -3 -98 7 -14 12 -32 7 -136 -37z"/>
                                <path d="M385 1720 l-39 -40 79 0 c75 1 84 3 145 40 l65 40 -105 0 -106 0 -39
                                -40z"/>
                                <path d="M6050 1654 c-300 -6 -594 -12 -653 -13 l-108 -1 -59 -92 c-33 -50
                                -58 -94 -56 -96 3 -2 47 1 98 8 261 33 1081 144 1283 174 274 40 309 39 -505
                                20z"/>
                                <path d="M4255 1609 c-842 -27 -2241 -69 -2316 -69 l-66 0 -176 -192 c-298
                                -327 -825 -913 -822 -915 1 -2 60 19 131 46 547 206 1537 464 2559 665 474 93
                                1123 212 1266 231 48 6 52 9 203 188 l57 67 -138 -1 c-76 -1 -390 -10 -698
                                -20z"/>
                                <path d="M197 1517 c4 -8 25 -33 46 -57 l37 -44 0 57 0 57 -45 0 c-36 0 -44
                                -3 -38 -13z"/>
                                <path d="M387 1523 c-4 -3 -7 -280 -7 -615 0 -480 3 -608 13 -608 6 0 76 26
                                154 58 l142 57 407 479 c415 490 524 622 524 631 0 8 -1226 6 -1233 -2z"/>
                                <path d="M80 1248 l0 -203 100 -100 100 -100 0 225 0 225 -87 70 c-47 39 -92
                                74 -100 78 -11 7 -13 -27 -13 -195z"/>
                                <path d="M90 664 l0 -199 100 -100 100 -100 -1 205 -1 205 -99 94 -99 93 0
                                -198z"/>
                                <path d="M90 236 l0 -56 62 0 61 0 -24 26 c-13 14 -41 39 -61 56 l-38 30 0
                                -56z"/>
                                </g>
                                </svg></a>
                </div>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="{{url('#home')}}" class="nav_link active">Home</a></li>
                        <li class="nav_item"><a href="#featured" class="nav_link">Descatados</a></li>
                        <li class="nav_item"><a href="#new" class="nav_link">Nuevo</a></li>
                        <li class="nav_item"><a href="#ace" class="nav_link">Acerca De</a></li>
                        @if (Route::has('login'))
                    @auth
                    <li class="nav_item">
                            <a href="{{ url('/user') }}" class="nav__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                </a>
                               </li>
                    @else
                    <li class="nav_item">
                                <a href="{{ route('login') }}" class="nav__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                </a></li>
                        @if (Route::has('register'))
                        @endif
                    @endauth
                </div>
            @endif
                    </ul>
                </div>

                <i class='bx bxs-cart nav_cart' ></i>
                <i class='bx bx-menu nav_toggle' id="nav-toggle" ></i>

           </nav>
        </header>

        <main class="l-main">
        </main>

            <!--===== HOME =====-->
            <section class="home" id="home">
               <div class="home_container bd-grid">
                   <div class="home_data">
                       <h1 class="home_title">Nuevos<br><span>PRODUCTOS</span></h1>
                       <a href="#featured" class="button">Comprar</a>
                   </div>

                   <img src="img/home.png" alt="" class="home_img">
               </div>
            </section>
            <center>
            <!--===== COLLECTION =====-->
            <!-- <section class="collection section">
                <div class="collection_container bd-grid">
                    <div class="colecction_box">
                        <img src="img/backpackMan.png" alt="" class="collection_img">

                        <div class="collection_data">
                            <h2 class="collection_title"><span class="collection_subtitle">Hombres</span><br>Backpack</h2>
                            <a href="#" class="collection_view">Ver Coleccion</a>
                        </div>
                    </div>

                    <div class="colecction_box">

                        <div class="collection_data">
                            <h2 class="collection_title"><span class="collection_subtitle">Mujeres</span><br>Backpack</h2>
                            <a href="#" class="collection_view">Ver Coleccion</a>

                        </div>
                        <img src="img/backpackWoman.png" alt="" class="collection_img">
                    </div>
                </div>
            </section> -->

            <!--===== FEATURED PRODUCTS =====-->
            <section class="featured section" id="featured">
                <h2 class="section-title">Productos Destacados</h2>
                <a href="#featured" class="section-all">Ver todos</a>

                <div class="featured_container bd-grid">


                    @for ($i = 0; $i < 3; $i++)
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NUEVO</div>
                            <img src="img/casaca.png" alt="" class="featured_img">
                        </div>

                        <div class="featured_data">
                            <h3 class="featured_name">ACERBIS CASACA GLEN T-L</h3>
                            <span class="featured_preci">S/.149</span>
                        </div>
                    </div>
                    @endfor

                    @for ($i = 0; $i < 3; $i++)
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NUEVO</div>
                            <img src="img/pantalon.png" alt="" class="featured_img">
                        </div>

                        <div class="featured_data">
                            <h3 class="featured_name">BBLUBS PANTALÓN ESTRELLAS</h3>
                            <span class="featured_preci">S/.49</span>
                        </div>
                    </div>
                    @endfor

                    @for ($i = 0; $i < 4; $i++)
                    <div class="featured_product">
                        <div class="featured_box">
                            <div class="featured_new">NUEVO</div>
                            <img src="img/polo.png" alt="" class="featured_img">
                        </div>

                        <div class="featured_data">
                            <h3 class="featured_name">BBLUBS POLO ROJO ELEFANTE</h3>
                            <span class="featured_preci">S/.39</span>
                        </div>
                    </div>
                    @endfor






                </div>
            </section>
        </center>
            <!--===== OFFER =====-->
            <section class="offer section">
                <div class="offer_bg">
                    <div class="offer_data">
                        <h2 class="offer_title">Oferta Especial</h2>
                        <p class="offer_description">Ofertas especiales descuentos para mujeres solo esta semana</p>

                        <a href="#featured" class="button">Compra Ahora</a>
                    </div>
                </div>
            </section>
            <center>

            <!--===== NEW ARRIVALS =====-->
            <section class="new section" id="new">



                <h2 class="section-title">Nuevos Productos</h2>
                <a href="#new" class="section-all">Ver Todo</a>


                <div style= "margin-bottom: 20px" class=" flex flex-col justify-center ">

                <div style="margin-right:20px;" >

                <a href="#new" style="border-radius: 20px;" class="button"><h1 style="color: black; "><svg id="Capa_1" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_1906_" d="m485.119 345.819-214.119-124.081v-9.232c0-10.528 6.008-20.321 15.68-25.557 21.791-11.795 34.743-34.514 33.803-59.29-1.272-33.491-28.499-60.723-61.983-61.994-17.718-.68-34.497 5.716-47.247 17.989-12.758 12.282-19.784 28.798-19.784 46.504 0 8.284 6.716 15 15 15s15-6.716 15-15c0-9.478 3.761-18.317 10.59-24.892 6.821-6.566 15.796-9.993 25.302-9.623 17.905.68 32.463 15.243 33.144 33.154.504 13.277-6.434 25.45-18.105 31.769-19.368 10.484-31.4 30.386-31.4 51.94v9.232l-214.119 124.081c-16.581 9.609-26.881 27.485-26.881 46.651 0 29.729 24.182 53.914 53.906 53.914h404.188c29.724 0 53.906-24.187 53.906-53.915 0-19.166-10.3-37.041-26.881-46.65zm-27.025 70.565h-404.188c-13.182 0-23.906-10.729-23.906-23.915 0-8.502 4.568-16.431 11.923-20.692l214.077-124.057 214.077 124.057c7.354 4.262 11.923 12.19 11.923 20.693 0 13.186-10.724 23.914-23.906 23.914z"/></svg>Mujer</h1></a>
                </div>

                <div style="margin-right:20px;" >

                <a href="#new" style="border-radius: 20px;" class="button"><h1 style="color: black; "><svg id="Capa_1" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_1906_" d="m485.119 345.819-214.119-124.081v-9.232c0-10.528 6.008-20.321 15.68-25.557 21.791-11.795 34.743-34.514 33.803-59.29-1.272-33.491-28.499-60.723-61.983-61.994-17.718-.68-34.497 5.716-47.247 17.989-12.758 12.282-19.784 28.798-19.784 46.504 0 8.284 6.716 15 15 15s15-6.716 15-15c0-9.478 3.761-18.317 10.59-24.892 6.821-6.566 15.796-9.993 25.302-9.623 17.905.68 32.463 15.243 33.144 33.154.504 13.277-6.434 25.45-18.105 31.769-19.368 10.484-31.4 30.386-31.4 51.94v9.232l-214.119 124.081c-16.581 9.609-26.881 27.485-26.881 46.651 0 29.729 24.182 53.914 53.906 53.914h404.188c29.724 0 53.906-24.187 53.906-53.915 0-19.166-10.3-37.041-26.881-46.65zm-27.025 70.565h-404.188c-13.182 0-23.906-10.729-23.906-23.915 0-8.502 4.568-16.431 11.923-20.692l214.077-124.057 214.077 124.057c7.354 4.262 11.923 12.19 11.923 20.693 0 13.186-10.724 23.914-23.906 23.914z"/></svg>Hombre</h1></a>
                </div>
                <div style="margin-right:20px;" >
                <a href="#new" style="border-radius: 20px;" class="button"><h1 style="color: black; "><svg id="Capa_1" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_1906_" d="m485.119 345.819-214.119-124.081v-9.232c0-10.528 6.008-20.321 15.68-25.557 21.791-11.795 34.743-34.514 33.803-59.29-1.272-33.491-28.499-60.723-61.983-61.994-17.718-.68-34.497 5.716-47.247 17.989-12.758 12.282-19.784 28.798-19.784 46.504 0 8.284 6.716 15 15 15s15-6.716 15-15c0-9.478 3.761-18.317 10.59-24.892 6.821-6.566 15.796-9.993 25.302-9.623 17.905.68 32.463 15.243 33.144 33.154.504 13.277-6.434 25.45-18.105 31.769-19.368 10.484-31.4 30.386-31.4 51.94v9.232l-214.119 124.081c-16.581 9.609-26.881 27.485-26.881 46.651 0 29.729 24.182 53.914 53.906 53.914h404.188c29.724 0 53.906-24.187 53.906-53.915 0-19.166-10.3-37.041-26.881-46.65zm-27.025 70.565h-404.188c-13.182 0-23.906-10.729-23.906-23.915 0-8.502 4.568-16.431 11.923-20.692l214.077-124.057 214.077 124.057c7.354 4.262 11.923 12.19 11.923 20.693 0 13.186-10.724 23.914-23.906 23.914z"/></svg>Bebe</h1></a>
                </div>
                <div style="margin-right:20px;" >
                <a href="#new" style="border-radius: 20px;" class="button"><h1 style="color: black; "><svg id="Capa_1" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_1906_" d="m485.119 345.819-214.119-124.081v-9.232c0-10.528 6.008-20.321 15.68-25.557 21.791-11.795 34.743-34.514 33.803-59.29-1.272-33.491-28.499-60.723-61.983-61.994-17.718-.68-34.497 5.716-47.247 17.989-12.758 12.282-19.784 28.798-19.784 46.504 0 8.284 6.716 15 15 15s15-6.716 15-15c0-9.478 3.761-18.317 10.59-24.892 6.821-6.566 15.796-9.993 25.302-9.623 17.905.68 32.463 15.243 33.144 33.154.504 13.277-6.434 25.45-18.105 31.769-19.368 10.484-31.4 30.386-31.4 51.94v9.232l-214.119 124.081c-16.581 9.609-26.881 27.485-26.881 46.651 0 29.729 24.182 53.914 53.906 53.914h404.188c29.724 0 53.906-24.187 53.906-53.915 0-19.166-10.3-37.041-26.881-46.65zm-27.025 70.565h-404.188c-13.182 0-23.906-10.729-23.906-23.915 0-8.502 4.568-16.431 11.923-20.692l214.077-124.057 214.077 124.057c7.354 4.262 11.923 12.19 11.923 20.693 0 13.186-10.724 23.914-23.906 23.914z"/></svg>Zapatillas</h1></a>
                </div>
                <div style="margin-right:20px;" >
                <a href="#new" style="border-radius: 20px;" class="button"><h1 style="color: black; "><svg id="Capa_1" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_1906_" d="m485.119 345.819-214.119-124.081v-9.232c0-10.528 6.008-20.321 15.68-25.557 21.791-11.795 34.743-34.514 33.803-59.29-1.272-33.491-28.499-60.723-61.983-61.994-17.718-.68-34.497 5.716-47.247 17.989-12.758 12.282-19.784 28.798-19.784 46.504 0 8.284 6.716 15 15 15s15-6.716 15-15c0-9.478 3.761-18.317 10.59-24.892 6.821-6.566 15.796-9.993 25.302-9.623 17.905.68 32.463 15.243 33.144 33.154.504 13.277-6.434 25.45-18.105 31.769-19.368 10.484-31.4 30.386-31.4 51.94v9.232l-214.119 124.081c-16.581 9.609-26.881 27.485-26.881 46.651 0 29.729 24.182 53.914 53.906 53.914h404.188c29.724 0 53.906-24.187 53.906-53.915 0-19.166-10.3-37.041-26.881-46.65zm-27.025 70.565h-404.188c-13.182 0-23.906-10.729-23.906-23.915 0-8.502 4.568-16.431 11.923-20.692l214.077-124.057 214.077 124.057c7.354 4.262 11.923 12.19 11.923 20.693 0 13.186-10.724 23.914-23.906 23.914z"/></svg>Ropa Interior</h1></a>
                </div>

                </div>

                <div class="new_container grid bd-grid">




                @for ($i = 0; $i < 3; $i++)
                <div class="new_box">
                        <img src="img/zapatilla1.jpg" alt="" class="new_img">

                        <div class="new_link">
                            <a href="#new" class="button">Ver Producto</a>
                        </div>
                    </div>
                @endfor

                @for ($i = 0; $i < 3; $i++)
                <div class="new_box">
                        <img src="img/zapatilla2.png" alt="" class="new_img">

                        <div class="new_link">
                            <a href="#new" class="button">Ver Producto</a>
                        </div>
                    </div>
                @endfor

                @for ($i = 0; $i < 4; $i++)
                <div class="new_box">
                        <img src="img/zapatilla3.jpg" alt="" class="new_img">

                        <div class="new_link">
                            <a href="#new" class="button">Ver Producto</a>
                        </div>
                    </div>
                @endfor

                </div>
            </section>

            <!--===== NEWSLETTER =====-->
            <!-- <section class="newsletter section" id="suscribed">
                <div class="newsletter_container bd-grid">
                    <div class="newsletter_suscribe">
                        <h2 class="section-title">OUR NEWLETTER</h2>
                        <p class="newsletter_description">Promoción de Nuevos Productos y Ventas. Directo a tí</p>

                        <form action="" class="newsletter_form">
                            <input type="text" class="newsletter_input" placeholder="Ingresa a tu Email">
                            <a href="#" class="button">SUSCRIBE</a>
                        </form>
                    </div>
                </div>
            </section> -->

            <!--===== SPONSORS =====-->
            <section class="sponsors section">
            <h2 class="section-title">Proveedores</h2>
                <a href="#new" class="section-all">Ver Todo</a>

                <div class="sponsors_container grid grid-flow-col  ">
                    <div class="sponsors_logo">
                        <img src="img/logo1.png" alt="">
                    </div>


                    <div class="sponsors_logo">
                        <img src="img/holden.png" alt="">
                    </div>

                    <div class="sponsors_logo">
                        <img src="img/walon.png" alt="">
                    </div>

                    <div class="sponsors_logo">
                        <img src="img/gucci.png" alt="">
                    </div>

                    <div class="sponsors_logo">
                        <img src="img/irun.gif" alt="">
                    </div>
                </div>
            </section>
        </center>
        </main>
<!-- CONTACTANOS -->
<section  class="social">
        <div class="social__media">
        </div>
        <!-- boton wasap -->
        <div class="nav-bottom">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top"><button type="button" class="closePopup">
                        <i class="material-icons icon-font-color">close</i>
                    </button>
                    <div class="container_wasap">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 702.000000 285.000000"
                            preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,285.000000) scale(0.100000,-0.100000)"
                            fill="#233e8b" stroke="none"><path d="M6459 2813 l-76 -15 4 -151 c3 -84 5 -156 7 -161 2 -10 156 318 156
                            334 0 6 -3 9 -7 9 -5 -1 -42 -8 -84 -16z"/><path d="M5585 2808 c-6 -16 -175 -846 -175 -859 0 -5 63 -9 150 -9 83 0 150 3 150 8 0 10 160 834 166 855
                            5 16 -6 17 -141 17 -107 0 -147 -3 -150 -12z"/><path d="M6005 2768 c11 -90 115 -782 120 -805 5 -23 7 -23 190 -23 l185 0
                            220 440 220 440 -169 0 -168 0 -96 -227 c-52 -126 -103 -247 -112 -271 -10
                            -24 -21 -40 -25 -35 -4 4 -18 123 -30 263 -12 140 -24 258 -27 263 -2 4 -74 7
                            -160 7 l-155 0 7 -52z"/><path d="M4915 2795 c-97 -21 -147 -48 -201 -108 -62 -68 -84 -112 -84 -169 0
                            -78 57 -140 160 -173 128 -41 220 -107 220 -157 0 -11 -16 -35 -35 -53 -92
                            -87 -277 -86 -402 3 l-30 21 -11 -101 c-6 -56 -9 -105 -6 -109 12 -19 194 -52 294 -53 138 -1 220 24 312 93 144 109 201 221 160 314 -24 54 -68 85 -162 116
                            -97 31 -193 84 -210 114 -13 24 -13 30 0 55 24 43 74 62 161 62 67 0 85 -4
                            145 -34 38 -19 70 -33 72 -31 10 10 40 181 33 188 -15 16 -167 36 -261 36 -52
                            0 -122 -7 -155 -14z"/><path d="M5935 2765 c-4 -22 -43 -215 -85 -430 -62 -311 -75 -391 -64 -393 16-4 285 26 292 32 2 3 -27 191 -66 418 -57 345 -70 406 -77 373z"/>
                            <path d="M5380 2778 c-1 -31 -28 -239 -31 -242 -2 -2 -41 -16 -86 -30 -46 -15
                                -83 -31 -83 -35 0 -3 16 -15 35 -25 46 -25 109 -86 129 -124 8 -16 18 -48 22
                                -71 13 -84 -69 -202 -204 -291 l-47 -31 70 7 c39 3 95 9 125 13 l54 6 27 140
                                c14 77 49 262 78 411 28 150 51 275 51 278 0 3 -31 6 -70 6 -49 0 -70 -4 -70
                                -12z"/>
                                <path d="M3399 2343 l-84 -428 144 -3 c79 -1 145 -1 146 0 2 2 20 119 41 261
                                21 141 40 257 43 257 3 0 35 -71 71 -158 35 -86 71 -174 80 -194 l16 -37 138
                                190 c76 105 140 188 143 186 3 -4 -70 -280 -126 -474 l-10 -33 177 0 177 0 64
                                418 c35 229 66 423 69 430 3 9 -34 12 -166 12 l-171 0 -108 -153 c-59 -84
                                -112 -155 -118 -157 -5 -3 -35 65 -65 150 l-55 155 -161 3 -160 2 -85 -427z"/>
                                <path d="M2700 2747 c-69 -16 -89 -27 -167 -90 -156 -125 -245 -298 -246 -477
                                0 -65 4 -84 33 -143 40 -80 99 -138 168 -162 112 -40 307 -28 421 26 236 109
                                349 290 339 539 -7 165 -64 249 -198 291 -82 26 -269 35 -350 16z m190 -144
                                c60 -42 85 -106 83 -215 -3 -172 -106 -354 -221 -389 -121 -36 -203 132 -158
                                324 49 209 197 349 296 280z"/>
                                <path d="M2749 2507 c-43 -29 -48 -70 -8 -75 33 -4 119 28 132 50 30 47 -64
                                66 -124 25z"/>
                                <path d="M2779 2405 c-101 -35 -106 -39 -118 -95 -16 -74 -13 -129 9 -177 17
                                -39 22 -43 56 -43 33 0 45 8 90 54 38 39 57 69 68 107 21 69 21 143 0 163 -19
                                20 -25 20 -105 -9z"/>
                                <path d="M3980 2723 c-41 -14 -76 -27 -77 -28 -6 -4 27 -101 40 -118 11 -17
                                17 -12 60 55 26 40 55 83 63 96 21 29 11 28 -86 -5z"/>
                                <path d="M1920 2724 c-194 -51 -324 -185 -391 -404 -30 -97 -32 -222 -5 -300
                                25 -71 96 -141 168 -167 100 -34 375 -17 397 26 5 9 11 41 15 71 4 30 10 65
                                12 77 6 21 5 21 -42 7 -26 -8 -79 -14 -118 -14 -133 0 -179 50 -177 194 2 216
                                101 336 276 336 39 0 95 -6 125 -14 30 -8 56 -13 57 -12 1 1 5 45 9 98 l7 96
                                -52 11 c-71 15 -214 13 -281 -5z"/>
                                <path d="M3355 2699 c-22 -10 -54 -19 -71 -19 -43 0 -46 -7 -24 -49 58 -115
                                70 -290 27 -402 -57 -149 -145 -245 -324 -355 -47 -30 -53 -35 -28 -31 17 3
                                95 15 175 27 80 12 146 23 147 24 5 5 143 801 141 811 -2 8 -16 6 -43 -6z"/>
                                <path d="M833 2553 c-44 -82 -145 -270 -226 -418 -80 -149 -149 -278 -152
                                -288 -7 -16 4 -17 132 -17 l138 0 31 83 31 82 136 3 137 3 0 -86 0 -85 150 0
                                c83 0 150 3 150 6 0 8 -138 798 -146 837 l-6 27 -148 0 -148 0 -79 -147z m200
                                -193 c4 -41 6 -109 5 -150 l-3 -75 -87 -3 c-84 -3 -88 -2 -88 18 0 21 66 266
                                76 282 3 5 25 8 47 6 l42 -3 8 -75z"/>
                                <path d="M4526 2663 c-20 -138 -21 -133 8 -133 24 0 26 4 26 39 0 30 9 51 35
                                85 l35 46 -49 0 c-49 0 -49 0 -55 -37z"/>
                                <path d="M5046 2595 c-57 -20 -64 -31 -38 -57 27 -28 99 -29 166 -4 51 20 52
                                26 4 49 -52 24 -90 27 -132 12z"/>
                                <path d="M2007 2506 c-21 -8 -47 -22 -57 -31 -34 -31 -64 -115 -41 -115 5 0
                                39 18 76 39 37 22 90 46 117 52 27 7 53 18 59 25 27 33 -87 55 -154 30z"/>
                                <path d="M712 2492 c-7 -5 -127 -188 -266 -408 l-254 -399 56 -3 c54 -3 57 -2
                                88 35 23 27 28 39 18 41 -20 5 -18 28 5 60 23 32 350 582 375 630 22 42 11 64
                                -22 44z"/>
                                <path d="M1438 2433 c-68 -42 -88 -60 -88 -77 0 -13 9 -103 20 -202 11 -98 20
                                -182 20 -186 0 -5 18 -8 41 -8 35 0 40 2 34 18 -23 54 -37 127 -37 207 -1 102
                                29 208 77 270 14 19 25 35 23 34 -2 0 -42 -26 -90 -56z"/>
                                <path d="M4500 2430 l0 -50 45 0 c25 0 45 2 45 4 0 2 -7 17 -15 32 -8 16 -15
                                37 -15 47 0 12 -8 17 -30 17 -29 0 -30 -1 -30 -50z"/>
                                <path d="M2058 2368 l-188 -91 0 -87 c0 -80 2 -88 26 -111 35 -32 100 -31 174
                                5 93 44 117 34 122 -49 3 -42 6 -50 23 -50 16 0 19 6 17 30 -2 17 -4 82 -4
                                145 -1 97 3 129 25 200 25 85 26 100 4 100 -7 -1 -96 -42 -199 -92z"/>
                                <path d="M4543 2337 l-83 -21 0 -38 c0 -46 -9 -45 167 -17 l134 22 -53 29
                                c-29 16 -57 33 -62 38 -6 6 -12 10 -15 9 -4 -1 -43 -11 -88 -22z"/>
                                <path d="M4690 2241 c-108 -15 -115 -18 -118 -40 l-4 -24 79 7 c73 6 211 31
                                220 39 2 2 1 12 -3 21 -7 19 -20 19 -174 -3z"/>
                                <path d="M3962 2117 l-71 -113 -115 -18 -116 -18 0 -44 c0 -39 3 -44 23 -44
                                34 1 299 28 302 32 4 5 53 313 50 316 -1 1 -34 -48 -73 -111z"/>
                                <path d="M3720 2195 c0 -16 -7 -58 -14 -92 l-14 -63 43 0 42 0 -24 83 c-30
                                105 -31 108 -33 72z"/>
                                <path d="M4899 2186 c-2 -3 -53 -10 -112 -17 -93 -10 -107 -14 -107 -30 0 -17
                                8 -19 73 -19 109 0 166 20 167 58 0 12 -12 16 -21 8z"/>
                                <path d="M4425 2128 c-2 -13 -11 -60 -18 -105 l-14 -83 28 0 c24 0 29 5 33 33
                                3 17 10 59 16 91 14 82 13 86 -15 86 -17 0 -26 -7 -30 -22z"/>
                                <path d="M808 1910 c-9 -22 -13 -40 -10 -40 4 1 39 19 77 40 l70 40 -60 0 -60
                                0 -17 -40z"/>
                                <path d="M2259 1942 c-13 -2 -40 -8 -61 -13 -32 -8 -37 -14 -43 -49 -6 -33
                                -12 -41 -33 -46 -106 -25 -285 -73 -289 -78 -11 -11 20 -36 56 -46 87 -24 261
                                -4 490 56 74 19 139 38 144 41 6 3 -14 12 -44 20 -61 16 -122 49 -166 90 -19
                                18 -38 27 -54 25z"/>
                                <path d="M5420 1865 c-333 -40 -614 -75 -625 -78 -43 -11 122 -6 306 8 177 14
                                861 87 951 102 28 4 38 10 38 24 0 15 -7 19 -32 18 -18 -1 -305 -34 -638 -74z"/>
                                <path d="M1452 1902 c-32 -16 -33 -18 -27 -62 6 -43 4 -47 -20 -58 -14 -7 -45
                                -12 -68 -12 -48 0 -112 -28 -112 -50 0 -41 160 -36 339 10 65 16 138 30 162
                                30 65 0 58 24 -10 38 -72 15 -142 48 -182 89 -38 38 -37 37 -82 15z"/>
                                <path d="M5170 1905 c-47 -7 -267 -36 -490 -65 -223 -28 -414 -56 -425 -61
                                -49 -23 466 23 880 79 170 23 200 30 203 45 3 14 -4 17 -40 16 -24 -1 -81 -7
                                -128 -14z"/>
                                <path d="M840 1845 c-63 -35 -116 -68 -118 -73 -1 -5 1 -18 5 -29 8 -19 13
                                -18 126 31 l117 51 0 42 c0 24 -3 43 -7 42 -5 -1 -60 -29 -123 -64z"/>
                                <path d="M4404 1884 c-34 -19 -89 -30 -340 -64 -164 -22 -324 -45 -354 -50
                                -100 -17 190 -2 390 20 215 24 503 60 507 64 6 5 -128 56 -145 55 -9 -1 -35
                                -12 -58 -25z"/>
                                <path d="M3550 1815 c-413 -71 -439 -76 -320 -69 112 6 758 90 768 99 1 1 0
                                10 -4 19 -9 24 -41 21 -444 -49z"/>
                                <path d="M3120 1839 c-120 -24 -401 -66 -502 -75 -69 -6 -78 -9 -78 -27 0 -19
                                4 -20 93 -13 114 9 319 38 500 72 119 23 137 29 137 45 0 24 -23 24 -150 -2z"/>
                                <path d="M875 1746 l-120 -51 135 -3 134 -3 83 37 c46 21 83 42 83 47 0 6 -30
                                7 -81 3 -63 -5 -85 -3 -98 7 -14 12 -32 7 -136 -37z"/>
                                <path d="M385 1720 l-39 -40 79 0 c75 1 84 3 145 40 l65 40 -105 0 -106 0 -39
                                -40z"/>
                                <path d="M6050 1654 c-300 -6 -594 -12 -653 -13 l-108 -1 -59 -92 c-33 -50
                                -58 -94 -56 -96 3 -2 47 1 98 8 261 33 1081 144 1283 174 274 40 309 39 -505
                                20z"/>
                                <path d="M4255 1609 c-842 -27 -2241 -69 -2316 -69 l-66 0 -176 -192 c-298
                                -327 -825 -913 -822 -915 1 -2 60 19 131 46 547 206 1537 464 2559 665 474 93
                                1123 212 1266 231 48 6 52 9 203 188 l57 67 -138 -1 c-76 -1 -390 -10 -698
                                -20z"/>
                                <path d="M197 1517 c4 -8 25 -33 46 -57 l37 -44 0 57 0 57 -45 0 c-36 0 -44
                                -3 -38 -13z"/>
                                <path d="M387 1523 c-4 -3 -7 -280 -7 -615 0 -480 3 -608 13 -608 6 0 76 26
                                154 58 l142 57 407 479 c415 490 524 622 524 631 0 8 -1226 6 -1233 -2z"/>
                                <path d="M80 1248 l0 -203 100 -100 100 -100 0 225 0 225 -87 70 c-47 39 -92
                                74 -100 78 -11 7 -13 -27 -13 -195z"/>
                                <path d="M90 664 l0 -199 100 -100 100 -100 -1 205 -1 205 -99 94 -99 93 0
                                -198z"/>
                                <path d="M90 236 l0 -56 62 0 61 0 -24 26 c-13 14 -41 39 -61 56 l-38 30 0
                                -56z"/>
                                </g>
                                </svg>
                     <p>Hola, ¿en que podemos ayudarle? </p>
                    </div>
                </div>
                <div class="content-whatsapp -bottom">
                    <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />

                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black">send</i>
                    </button>
                </div>
            </div>
            <a href="http://m.me/465793190470864" class="whatsapp-button-messenger" target="_blank">

            <img class="social__media--networks-whatsap ancho my-float_mesenger" src="img/mesenger.gif"
                        alt="mesenger">
            </a>

            <button type="button" id="whats-openPopup" class="whatsapp-button">

                <img class="social__media--networks-whatsap ancho my-float_wasap" src="img/wasap.gif" alt="whatsap">
            </button>


        </div>

    </section>

    <center>
        <!--===== FOOTER =====-->
        <footer class="footer section" id=ace>
            <div class="footer_container bd-grid">
                <div class="footer_box">
                    <h3 class="footer_title">ACOMSIV</h3>
                    <p class="footer_deal">Asociación de Comerciantes del Mercado de Santa Isabel de Villa</p>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="230" height="150" viewBox="0 0 702.000000 285.000000"
                            preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,285.000000) scale(0.100000,-0.100000)"
                            fill="#FFFFFF" stroke="none"><path d="M6459 2813 l-76 -15 4 -151 c3 -84 5 -156 7 -161 2 -10 156 318 156
                            334 0 6 -3 9 -7 9 -5 -1 -42 -8 -84 -16z"/><path d="M5585 2808 c-6 -16 -175 -846 -175 -859 0 -5 63 -9 150 -9 83 0 150 3 150 8 0 10 160 834 166 855
                            5 16 -6 17 -141 17 -107 0 -147 -3 -150 -12z"/><path d="M6005 2768 c11 -90 115 -782 120 -805 5 -23 7 -23 190 -23 l185 0
                            220 440 220 440 -169 0 -168 0 -96 -227 c-52 -126 -103 -247 -112 -271 -10
                            -24 -21 -40 -25 -35 -4 4 -18 123 -30 263 -12 140 -24 258 -27 263 -2 4 -74 7
                            -160 7 l-155 0 7 -52z"/><path d="M4915 2795 c-97 -21 -147 -48 -201 -108 -62 -68 -84 -112 -84 -169 0
                            -78 57 -140 160 -173 128 -41 220 -107 220 -157 0 -11 -16 -35 -35 -53 -92
                            -87 -277 -86 -402 3 l-30 21 -11 -101 c-6 -56 -9 -105 -6 -109 12 -19 194 -52 294 -53 138 -1 220 24 312 93 144 109 201 221 160 314 -24 54 -68 85 -162 116
                            -97 31 -193 84 -210 114 -13 24 -13 30 0 55 24 43 74 62 161 62 67 0 85 -4
                            145 -34 38 -19 70 -33 72 -31 10 10 40 181 33 188 -15 16 -167 36 -261 36 -52
                            0 -122 -7 -155 -14z"/><path d="M5935 2765 c-4 -22 -43 -215 -85 -430 -62 -311 -75 -391 -64 -393 16-4 285 26 292 32 2 3 -27 191 -66 418 -57 345 -70 406 -77 373z"/>
                            <path d="M5380 2778 c-1 -31 -28 -239 -31 -242 -2 -2 -41 -16 -86 -30 -46 -15
                                -83 -31 -83 -35 0 -3 16 -15 35 -25 46 -25 109 -86 129 -124 8 -16 18 -48 22
                                -71 13 -84 -69 -202 -204 -291 l-47 -31 70 7 c39 3 95 9 125 13 l54 6 27 140
                                c14 77 49 262 78 411 28 150 51 275 51 278 0 3 -31 6 -70 6 -49 0 -70 -4 -70
                                -12z"/>
                                <path d="M3399 2343 l-84 -428 144 -3 c79 -1 145 -1 146 0 2 2 20 119 41 261
                                21 141 40 257 43 257 3 0 35 -71 71 -158 35 -86 71 -174 80 -194 l16 -37 138
                                190 c76 105 140 188 143 186 3 -4 -70 -280 -126 -474 l-10 -33 177 0 177 0 64
                                418 c35 229 66 423 69 430 3 9 -34 12 -166 12 l-171 0 -108 -153 c-59 -84
                                -112 -155 -118 -157 -5 -3 -35 65 -65 150 l-55 155 -161 3 -160 2 -85 -427z"/>
                                <path d="M2700 2747 c-69 -16 -89 -27 -167 -90 -156 -125 -245 -298 -246 -477
                                0 -65 4 -84 33 -143 40 -80 99 -138 168 -162 112 -40 307 -28 421 26 236 109
                                349 290 339 539 -7 165 -64 249 -198 291 -82 26 -269 35 -350 16z m190 -144
                                c60 -42 85 -106 83 -215 -3 -172 -106 -354 -221 -389 -121 -36 -203 132 -158
                                324 49 209 197 349 296 280z"/>
                                <path d="M2749 2507 c-43 -29 -48 -70 -8 -75 33 -4 119 28 132 50 30 47 -64
                                66 -124 25z"/>
                                <path d="M2779 2405 c-101 -35 -106 -39 -118 -95 -16 -74 -13 -129 9 -177 17
                                -39 22 -43 56 -43 33 0 45 8 90 54 38 39 57 69 68 107 21 69 21 143 0 163 -19
                                20 -25 20 -105 -9z"/>
                                <path d="M3980 2723 c-41 -14 -76 -27 -77 -28 -6 -4 27 -101 40 -118 11 -17
                                17 -12 60 55 26 40 55 83 63 96 21 29 11 28 -86 -5z"/>
                                <path d="M1920 2724 c-194 -51 -324 -185 -391 -404 -30 -97 -32 -222 -5 -300
                                25 -71 96 -141 168 -167 100 -34 375 -17 397 26 5 9 11 41 15 71 4 30 10 65
                                12 77 6 21 5 21 -42 7 -26 -8 -79 -14 -118 -14 -133 0 -179 50 -177 194 2 216
                                101 336 276 336 39 0 95 -6 125 -14 30 -8 56 -13 57 -12 1 1 5 45 9 98 l7 96
                                -52 11 c-71 15 -214 13 -281 -5z"/>
                                <path d="M3355 2699 c-22 -10 -54 -19 -71 -19 -43 0 -46 -7 -24 -49 58 -115
                                70 -290 27 -402 -57 -149 -145 -245 -324 -355 -47 -30 -53 -35 -28 -31 17 3
                                95 15 175 27 80 12 146 23 147 24 5 5 143 801 141 811 -2 8 -16 6 -43 -6z"/>
                                <path d="M833 2553 c-44 -82 -145 -270 -226 -418 -80 -149 -149 -278 -152
                                -288 -7 -16 4 -17 132 -17 l138 0 31 83 31 82 136 3 137 3 0 -86 0 -85 150 0
                                c83 0 150 3 150 6 0 8 -138 798 -146 837 l-6 27 -148 0 -148 0 -79 -147z m200
                                -193 c4 -41 6 -109 5 -150 l-3 -75 -87 -3 c-84 -3 -88 -2 -88 18 0 21 66 266
                                76 282 3 5 25 8 47 6 l42 -3 8 -75z"/>
                                <path d="M4526 2663 c-20 -138 -21 -133 8 -133 24 0 26 4 26 39 0 30 9 51 35
                                85 l35 46 -49 0 c-49 0 -49 0 -55 -37z"/>
                                <path d="M5046 2595 c-57 -20 -64 -31 -38 -57 27 -28 99 -29 166 -4 51 20 52
                                26 4 49 -52 24 -90 27 -132 12z"/>
                                <path d="M2007 2506 c-21 -8 -47 -22 -57 -31 -34 -31 -64 -115 -41 -115 5 0
                                39 18 76 39 37 22 90 46 117 52 27 7 53 18 59 25 27 33 -87 55 -154 30z"/>
                                <path d="M712 2492 c-7 -5 -127 -188 -266 -408 l-254 -399 56 -3 c54 -3 57 -2
                                88 35 23 27 28 39 18 41 -20 5 -18 28 5 60 23 32 350 582 375 630 22 42 11 64
                                -22 44z"/>
                                <path d="M1438 2433 c-68 -42 -88 -60 -88 -77 0 -13 9 -103 20 -202 11 -98 20
                                -182 20 -186 0 -5 18 -8 41 -8 35 0 40 2 34 18 -23 54 -37 127 -37 207 -1 102
                                29 208 77 270 14 19 25 35 23 34 -2 0 -42 -26 -90 -56z"/>
                                <path d="M4500 2430 l0 -50 45 0 c25 0 45 2 45 4 0 2 -7 17 -15 32 -8 16 -15
                                37 -15 47 0 12 -8 17 -30 17 -29 0 -30 -1 -30 -50z"/>
                                <path d="M2058 2368 l-188 -91 0 -87 c0 -80 2 -88 26 -111 35 -32 100 -31 174
                                5 93 44 117 34 122 -49 3 -42 6 -50 23 -50 16 0 19 6 17 30 -2 17 -4 82 -4
                                145 -1 97 3 129 25 200 25 85 26 100 4 100 -7 -1 -96 -42 -199 -92z"/>
                                <path d="M4543 2337 l-83 -21 0 -38 c0 -46 -9 -45 167 -17 l134 22 -53 29
                                c-29 16 -57 33 -62 38 -6 6 -12 10 -15 9 -4 -1 -43 -11 -88 -22z"/>
                                <path d="M4690 2241 c-108 -15 -115 -18 -118 -40 l-4 -24 79 7 c73 6 211 31
                                220 39 2 2 1 12 -3 21 -7 19 -20 19 -174 -3z"/>
                                <path d="M3962 2117 l-71 -113 -115 -18 -116 -18 0 -44 c0 -39 3 -44 23 -44
                                34 1 299 28 302 32 4 5 53 313 50 316 -1 1 -34 -48 -73 -111z"/>
                                <path d="M3720 2195 c0 -16 -7 -58 -14 -92 l-14 -63 43 0 42 0 -24 83 c-30
                                105 -31 108 -33 72z"/>
                                <path d="M4899 2186 c-2 -3 -53 -10 -112 -17 -93 -10 -107 -14 -107 -30 0 -17
                                8 -19 73 -19 109 0 166 20 167 58 0 12 -12 16 -21 8z"/>
                                <path d="M4425 2128 c-2 -13 -11 -60 -18 -105 l-14 -83 28 0 c24 0 29 5 33 33
                                3 17 10 59 16 91 14 82 13 86 -15 86 -17 0 -26 -7 -30 -22z"/>
                                <path d="M808 1910 c-9 -22 -13 -40 -10 -40 4 1 39 19 77 40 l70 40 -60 0 -60
                                0 -17 -40z"/>
                                <path d="M2259 1942 c-13 -2 -40 -8 -61 -13 -32 -8 -37 -14 -43 -49 -6 -33
                                -12 -41 -33 -46 -106 -25 -285 -73 -289 -78 -11 -11 20 -36 56 -46 87 -24 261
                                -4 490 56 74 19 139 38 144 41 6 3 -14 12 -44 20 -61 16 -122 49 -166 90 -19
                                18 -38 27 -54 25z"/>
                                <path d="M5420 1865 c-333 -40 -614 -75 -625 -78 -43 -11 122 -6 306 8 177 14
                                861 87 951 102 28 4 38 10 38 24 0 15 -7 19 -32 18 -18 -1 -305 -34 -638 -74z"/>
                                <path d="M1452 1902 c-32 -16 -33 -18 -27 -62 6 -43 4 -47 -20 -58 -14 -7 -45
                                -12 -68 -12 -48 0 -112 -28 -112 -50 0 -41 160 -36 339 10 65 16 138 30 162
                                30 65 0 58 24 -10 38 -72 15 -142 48 -182 89 -38 38 -37 37 -82 15z"/>
                                <path d="M5170 1905 c-47 -7 -267 -36 -490 -65 -223 -28 -414 -56 -425 -61
                                -49 -23 466 23 880 79 170 23 200 30 203 45 3 14 -4 17 -40 16 -24 -1 -81 -7
                                -128 -14z"/>
                                <path d="M840 1845 c-63 -35 -116 -68 -118 -73 -1 -5 1 -18 5 -29 8 -19 13
                                -18 126 31 l117 51 0 42 c0 24 -3 43 -7 42 -5 -1 -60 -29 -123 -64z"/>
                                <path d="M4404 1884 c-34 -19 -89 -30 -340 -64 -164 -22 -324 -45 -354 -50
                                -100 -17 190 -2 390 20 215 24 503 60 507 64 6 5 -128 56 -145 55 -9 -1 -35
                                -12 -58 -25z"/>
                                <path d="M3550 1815 c-413 -71 -439 -76 -320 -69 112 6 758 90 768 99 1 1 0
                                10 -4 19 -9 24 -41 21 -444 -49z"/>
                                <path d="M3120 1839 c-120 -24 -401 -66 -502 -75 -69 -6 -78 -9 -78 -27 0 -19
                                4 -20 93 -13 114 9 319 38 500 72 119 23 137 29 137 45 0 24 -23 24 -150 -2z"/>
                                <path d="M875 1746 l-120 -51 135 -3 134 -3 83 37 c46 21 83 42 83 47 0 6 -30
                                7 -81 3 -63 -5 -85 -3 -98 7 -14 12 -32 7 -136 -37z"/>
                                <path d="M385 1720 l-39 -40 79 0 c75 1 84 3 145 40 l65 40 -105 0 -106 0 -39
                                -40z"/>
                                <path d="M6050 1654 c-300 -6 -594 -12 -653 -13 l-108 -1 -59 -92 c-33 -50
                                -58 -94 -56 -96 3 -2 47 1 98 8 261 33 1081 144 1283 174 274 40 309 39 -505
                                20z"/>
                                <path d="M4255 1609 c-842 -27 -2241 -69 -2316 -69 l-66 0 -176 -192 c-298
                                -327 -825 -913 -822 -915 1 -2 60 19 131 46 547 206 1537 464 2559 665 474 93
                                1123 212 1266 231 48 6 52 9 203 188 l57 67 -138 -1 c-76 -1 -390 -10 -698
                                -20z"/>
                                <path d="M197 1517 c4 -8 25 -33 46 -57 l37 -44 0 57 0 57 -45 0 c-36 0 -44
                                -3 -38 -13z"/>
                                <path d="M387 1523 c-4 -3 -7 -280 -7 -615 0 -480 3 -608 13 -608 6 0 76 26
                                154 58 l142 57 407 479 c415 490 524 622 524 631 0 8 -1226 6 -1233 -2z"/>
                                <path d="M80 1248 l0 -203 100 -100 100 -100 0 225 0 225 -87 70 c-47 39 -92
                                74 -100 78 -11 7 -13 -27 -13 -195z"/>
                                <path d="M90 664 l0 -199 100 -100 100 -100 -1 205 -1 205 -99 94 -99 93 0
                                -198z"/>
                                <path d="M90 236 l0 -56 62 0 61 0 -24 26 c-13 14 -41 39 -61 56 l-38 30 0
                                -56z"/>
                                </g>
                                </svg>
                </div>

                <div class="footer_box">
                    <h3 class="footer_title">NOSOTROS</h3>
                    <ul>
                        <li><a href="{{url('/sobre')}}" class="no-underline  footer_link1">Sobre ACOMSIV</a></li>
                        <li><a href="{{url('/mision')}}" class="no-underline footer_link1 ">Misión y Visión</a></li>
                    </ul>
                </div>

                <div class="footer_box">
                    <h3 class="footer_title">LEGAL</h3>
                    <ul>
                        <li><a href="{{url('/termino')}}" class="no-underline footer_link1">Terminos y Condiciones</a></li>
                    </ul>
                </div>

                <div class="footer_box">
                    <h3 class="footer_title">FORMAS DE PAGO</h3>
                    <ul>
                        <a href="#ace" class="footer_link1">
                        ContraEntrega
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                            width="150" height="170" x="0" y="0" viewBox="-20 180 550 500" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g transform="matrix(0.31,0,0,0.31,171.64035533905036,176.64033691406257)"><g xmlns="http://www.w3.org/2000/svg"><g>
                            <path d="M85.072,454.931c-1.859-1.861-4.439-2.93-7.069-2.93s-5.21,1.069-7.07,2.93c-1.86,1.861-2.93,4.44-2.93,7.07
                            s1.069,5.21,2.93,7.069c1.86,1.86,4.44,2.931,7.07,2.931s5.21-1.07,7.069-2.931c1.86-1.859,2.931-4.439,2.931-7.069 S86.933,456.791,85.072,454.931z" fill="#ffffff" data-original="#000000" style="" class=""/>
	                        </g></g><g xmlns="http://www.w3.org/2000/svg"><g><path d="M469.524,182.938c-1.86-1.861-4.43-2.93-7.07-2.93c-2.63,0-5.21,1.069-7.07,2.93c-1.859,1.86-2.93,4.44-2.93,7.07    s1.07,5.21,2.93,7.069c1.86,1.86,4.44,2.931,7.07,2.931c2.64,0,5.21-1.07,7.07-2.931c1.869-1.859,2.939-4.439,2.939-7.069    S471.393,184.798,469.524,182.938z" fill="#ffffff" data-original="#000000" style="" class=""/>
	                        </g></g><g xmlns="http://www.w3.org/2000/svg"><g><path d="M509.065,2.929C507.189,1.054,504.645,0,501.992,0L255.998,0.013c-5.522,0-9.999,4.478-9.999,10V38.61l-94.789,25.399    c-5.335,1.43-8.501,6.913-7.071,12.247l49.127,183.342l-42.499,42.499c-5.409-7.898-14.491-13.092-24.764-13.092H30.006    c-16.542,0-29.999,13.458-29.999,29.999v162.996C0.007,498.542,13.464,512,30.006,512h95.998c14.053,0,25.875-9.716,29.115-22.78    l11.89,10.369c9.179,8.004,20.939,12.412,33.118,12.412h301.867c5.522,0,10-4.478,10-10V10    C511.992,7.348,510.94,4.804,509.065,2.929z M136.002,482.001c0,5.513-4.486,10-10,10H30.005c-5.514,0-10-4.486-10-10V319.005    c0-5.514,4.486-10,10-10h37.999V424.2c0,5.522,4.478,10,10,10s10-4.478,10-10V309.005h37.999c5.514,0,10,4.486,10,10V482.001z     M166.045,80.739l79.954-21.424V96.37l-6.702,1.796c-2.563,0.687-4.746,2.362-6.072,4.659s-1.686,5.026-0.999,7.588    c3.843,14.341-4.698,29.134-19.039,32.977c-2.565,0.688-4.752,2.366-6.077,4.668c-1.325,2.301-1.682,5.035-0.989,7.599    l38.979,144.338h-20.07l-10.343-40.464c-0.329-1.288-0.905-2.475-1.676-3.507L166.045,80.739z M245.999,142.229v84.381    l-18.239-67.535C235.379,155.141,241.614,149.255,245.999,142.229z M389.663,492H200.125V492c-7.345,0-14.438-2.658-19.974-7.485    l-24.149-21.061V325.147l43.658-43.658l7.918,30.98c1.132,4.427,5.119,7.523,9.688,7.523l196.604,0.012c7.72,0,14,6.28,14,14    c0,7.72-6.28,14-14,14H313.13c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h132.04c7.72,0,14,6.28,14,14c0,7.72-6.28,14-14,14    H313.13c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h110.643c7.72,0,14,6.28,14,14c0,7.72-6.28,14-14,14H313.13    c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h76.533c7.72,0,14,6.28,14,14C403.662,485.72,397.382,492,389.663,492z     M491.994,492h-0.001h-71.359c1.939-4.273,3.028-9.01,3.028-14s-1.089-9.727-3.028-14h3.139c18.747,0,33.999-15.252,33.999-33.999    c0-5.468-1.305-10.635-3.609-15.217c14.396-3.954,25.005-17.149,25.005-32.782c0-7.584-2.498-14.595-6.711-20.255V235.007    c0-5.522-4.478-10-10-10c-5.522,0-10,4.478-10,10v113.792c-2.35-0.515-4.787-0.795-7.289-0.795h-0.328    c1.939-4.273,3.028-9.01,3.028-14c0-18.748-15.252-33.999-33.999-33.999h-16.075c17.069-7.32,29.057-24.286,29.057-44.005    c0-26.389-21.468-47.858-47.857-47.858c-26.388,0-47.857,21.469-47.857,47.858c0,19.719,11.989,36.685,29.057,44.005h-54.663    V109.863c17.864-3.893,31.96-17.988,35.852-35.853h75.221c3.892,17.865,17.988,31.96,35.852,35.853v31.09c0,5.522,4.478,10,10,10    s10-4.478,10-10v-40.018c0-5.522-4.478-10-10-10c-14.847,0-26.924-12.079-26.924-26.925c0-5.522-4.478-10-10-10h-93.076    c-5.522,0-10,4.478-10,10c0,14.847-12.078,26.925-26.924,26.925c-5.522,0-10,4.478-10,10v199.069H266V20.011L491.994,20V492z     M378.996,283.858c-15.361,0-27.857-12.497-27.857-27.857s12.497-27.858,27.857-27.858S406.853,240.64,406.853,256    S394.357,283.858,378.996,283.858z" fill="#ffffff" data-original="#000000" style="" class=""/>
	                        </g></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g>
                            <g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg">
                            </g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg">
                            </g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g><g xmlns="http://www.w3.org/2000/svg"></g></g></svg>
                            </a>
                        </ul>

                    <ul>
                        <a href="#" class="footer_social"></a>



                        <a href="#" class="footer_social"><i class="fab fa-whatsapp"></i></a>
                    </ul>
                </div>
            </div>
            <p class="footer_copy"> Todos los derechos reservados por ACOMSIV &#169; 2021</p>
        </footer>
        <center>

                <!--===== MAIN JS =====-->

                <script src="js/inicio.js"></script>
                <script src="js/wasap.js"></script>
    </body>
</html>
