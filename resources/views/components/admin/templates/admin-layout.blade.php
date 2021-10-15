<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <style>
        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }
        .sidebar:hover {
            width: 16rem;
        }
        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
      </style>
    <title>MyPortofolio | Admin-{{ $title != null ? $title : "" }}</title>
</head>
<body>

      <div x-data="setup()">
          <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black">

            <x-admin.layouts.header />

            <x-admin.layouts.sidebar />


            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

              <!-- Statistics Cards -->
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                <div class="bg-secondary shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-900 text-white font-medium group">
                  <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                  </div>
                  <div class="text-right">
                    <p class="text-2xl">1,257</p>
                    <p>Visitors</p>
                  </div>
                </div>
                <div class="bg-secondary shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-900 text-white font-medium group">
                  <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                  </div>
                  <div class="text-right">
                    <p class="text-2xl">557</p>
                    <p>Orders</p>
                  </div>
                </div>
                <div class="bg-secondary shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-900 text-white font-medium group">
                  <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                  </div>
                  <div class="text-right">
                    <p class="text-2xl">$11,257</p>
                    <p>Sales</p>
                  </div>
                </div>
                <div class="bg-secondary shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-900 text-white font-medium group">
                  <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <div class="text-right">
                    <p class="text-2xl">$75,257</p>
                    <p>Balances</p>
                  </div>
                </div>
              </div>
              <!-- ./Statistics Cards -->

              <!-- Client Table -->
              <div class="mt-4 mx-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                  <div class="w-full overflow-x-auto">
                    <table class="w-full">
                      <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                          <th class="px-4 py-3">Client</th>
                          <th class="px-4 py-3">Amount</th>
                          <th class="px-4 py-3">Status</th>
                          <th class="px-4 py-3">Date</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y">
                        <tr class="bg-gray-50 hover:bg-gray-100 text-gray-700">
                          <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                              </div>
                              <div>
                                <p class="font-semibold">Hans Burger</p>
                                <p class="text-xs text-gray-600">10x Developer</p>
                              </div>
                            </div>
                          </td>
                          <td class="px-4 py-3 text-sm">$855.85</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"> Approved </span>
                          </td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ./Client Table -->

            </div>
          </div>
        </div>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
