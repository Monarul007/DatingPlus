<style>
    @media (min-width: 640px) {
      .sm\:bg-svg-bottom {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='353' height='304'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23D0D5F6' stroke-width='2'%3E%3Cpath d='M180.29 759c102.087-21.62 155.232-61.312 159.437-119.074 6.307-86.643-231.598-17.186-136.358-198 95.241-180.813 181.318-185.29 136.358-298C294.767 31.216 174.04-27.954 33.79 16.8c-93.501 29.836-144.652 140.545-153.453 332.126'/%3E%3Cpath d='M138.3 759c80.083-18.988 121.774-53.846 125.072-104.575 4.948-76.093-181.679-15.094-106.966-173.89C231.118 321.738 298.64 317.808 263.372 218.82c-35.269-98.986-129.974-150.95-239.995-111.646C-49.97 133.378-90.096 230.605-97 398.859'/%3E%3Cpath d='M102.065 761c60.604-16.56 92.153-46.963 94.65-91.208 3.743-66.367-137.488-13.165-80.949-151.664 56.54-138.5 107.638-141.927 80.948-228.261-26.69-86.335-98.359-131.656-181.618-97.376C-40.41 215.345-70.775 300.145-76 446.892'/%3E%3C/g%3E%3C/svg%3E");
      }
    }

    .toggle_dot {
      top: -.25rem;
      transition: all 0.3s ease-in-out;
    }

    input:checked~.toggle_dot {
      transform: translateX(100%);
      background-color: #0082c8;
    }

    .bg-gradient {
      background: #667db6;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .bg-gradient-base {
      background-color: #0082c8;
    }

    .font-work-sans {
      font-family: 'Work Sans', sans-serif;
    }
</style>
<template>
    <app-layout title="Choose Your Plan">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pricing
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Pricing section -->
                <section class="w-full pt-5 pb-20">
                    <div class="px-10 mx-auto text-center max-w-7xl">
                        <h2 class="text-5xl font-bold text-blue-600">
                            Flexible <span class="text-gray-800">Plans</span>
                        </h2>
                        <p class="mt-3 text-lg text-gray-500">Our flexible plans are designed to meet the needs of any team.</p>
                        <div class="grid gap-5 mt-12 lg:grid-cols-3 md:grid-cols-2">

                            <!-- Start First Plan -->
                            <div class="relative flex flex-col justify-between p-8 lg:p-6 xl:p-8 rounded-2xl">

                                <div class="absolute inset-0 w-full h-full transform translate-x-2 translate-y-2 bg-green-50 rounded-2xl"></div>
                                <div class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-2xl"></div>
                                <div class="relative flex pb-5 space-x-5 border-b border-gray-200 lg:space-x-3 xl:space-x-5">
                                    <svg class="w-16 h-16 text-green-400 rounded-2xl" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect x="0" y="0" width="150" height="150" rx="15"></rect></defs><g fill="none" fill-rule="evenodd"><mask fill="#fff"><use xlink:href="#plan1"></use></mask><use fill="currentColor" xlink:href="#plan1"></use><circle fill-opacity=".3" fill="#FFF" mask="url(#plan1)" cx="125" cy="25" r="50"></circle><path fill-opacity=".3" fill="#FFF" mask="url(#plan1)" d="M-33 83H67v100H-33z"></path></g></svg>
                                    <div class="relative flex flex-col items-start">
                                        <h3 class="text-xl font-bold">Quick Hook Up</h3>
                                        <p class="tracking-tight text-gray-500">
                                            <span class="text-sm transform inline-block -translate-y-2.5 relative">$</span>
                                            <span class="text-3xl font-bold text-gray-800">0.99</span>
                                            <span class="text-sm -translate-y-0.5 inline-block transform"> / 24 Hrs</span>
                                        </p>
                                    </div>
                                </div>

                                <ul class="relative py-12 space-y-3">
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>View All Profiles &amp; Photos</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Chat With Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Send Free Flirts</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Access Private Content</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>See Who Viewed Your Profile</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Video Chat with Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Get special offers</span>
                                    </li>
                                </ul>  

                                <Link :href="route('checkout')" class="relative flex items-center justify-center w-full px-5 py-5 text-lg font-medium text-white rounded-xl group">
                                    <span class="w-full h-full absolute inset-0 transform translate-y-1.5 translate-x-1.5 group-hover:translate-y-0 group-hover:translate-x-0 transition-all ease-out duration-200 rounded-xl bg-green-500"></span>
                                    <span class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-xl"></span>
                                    <span class="relative">Choose Plan</span>
                                    <svg class="w-5 h-5 ml-2 transition-all duration-200 ease-out transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </Link>

                            </div>
                            <!-- End First Plan -->

                            <!-- Start Middle Plan -->
                            <div class="relative p-8 lg:p-6 xl:p-8 rounded-2xl">

                                <div class="absolute inset-0 w-full h-full transform translate-x-2 translate-y-2 bg-blue-50 rounded-2xl"></div>
                                <div class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-2xl"></div>
                                <div class="relative flex pb-5 space-x-5 border-b border-gray-200 lg:space-x-3 xl:space-x-5">
                                    <svg class="w-16 h-16 text-indigo-400 rounded-2xl" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect x="0" y="0" width="150" height="150" rx="15"></rect></defs><g fill="none" fill-rule="evenodd"><mask fill="#fff"><use xlink:href="#plan1"></use></mask><use fill="currentColor" xlink:href="#plan1"></use><circle fill-opacity=".3" fill="#FFF" mask="url(#plan1)" cx="125" cy="25" r="50"></circle><path fill-opacity=".3" fill="#FFF" mask="url(#plan1)" d="M-33 83H67v100H-33z"></path></g></svg>
                                    <div class="relative flex flex-col items-start">
                                        <h3 class="text-xl font-bold">Best Value</h3>
                                        <p class="tracking-tight text-gray-500">
                                            <span class="text-sm transform inline-block -translate-y-2.5 relative">$</span>
                                            <span class="text-3xl font-bold text-gray-800">72.95</span>
                                            <span class="text-sm -translate-y-0.5 inline-block transform"> / year</span>
                                        </p>
                                    </div>
                                </div>

                                <ul class="relative py-12 space-y-3">
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>View All Profiles &amp; Photos</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Chat With Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Send Free Flirts</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Access Private Content</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>See Who Viewed Your Profile</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Video Chat with Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Get special offers</span>
                                    </li>
                                </ul>

                                <Link :href="route('checkout')" class="relative flex items-center justify-center w-full px-5 py-5 text-lg font-medium text-white rounded-xl group">
                                    <span class="w-full h-full absolute inset-0 transform translate-y-1.5 translate-x-1.5 group-hover:translate-y-0 group-hover:translate-x-0 transition-all ease-out duration-200 rounded-xl bg-blue-600"></span>
                                    <span class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-xl"></span>
                                    <span class="relative">Choose Plan</span>
                                    <svg class="w-5 h-5 ml-2 transition-all duration-200 ease-out transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </Link>

                            </div>
                            <!-- End Middle Plan -->

                            <!-- Start Third Plan -->
                            <div class="relative flex flex-col justify-between p-8 lg:p-6 xl:p-8 rounded-2xl md:col-span-2 lg:col-span-1">

                                <div class="absolute inset-0 w-full h-full transform translate-x-2 translate-y-2 bg-red-50 rounded-2xl"></div>
                                <div class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-2xl"></div>
                                <div class="relative flex pb-5 space-x-5 border-b border-gray-200 lg:space-x-3 xl:space-x-5">
                                    <svg class="w-16 h-16 text-red-400 rounded-2xl" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect x="0" y="0" width="150" height="150" rx="15"></rect></defs><g fill="none" fill-rule="evenodd"><mask fill="#fff"><use xlink:href="#plan1"></use></mask><use fill="currentColor" xlink:href="#plan1"></use><circle fill-opacity=".3" fill="#FFF" mask="url(#plan1)" cx="125" cy="25" r="50"></circle><path fill-opacity=".3" fill="#FFF" mask="url(#plan1)" d="M-33 83H67v100H-33z"></path></g></svg>
                                    <div class="relative flex flex-col items-start">
                                        <h3 class="text-xl font-bold">Most Popular</h3>
                                        <p class="tracking-tight text-gray-500">
                                            <span class="text-sm transform inline-block -translate-y-2.5 relative">$</span>
                                            <span class="text-3xl font-bold text-gray-800">24.95</span>
                                            <span class="text-sm -translate-y-0.5 inline-block transform"> / month</span>
                                        </p>
                                    </div>
                                </div>

                                <ul class="relative py-12 space-y-3">
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>View All Profiles &amp; Photos</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Chat With Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Send Free Flirts</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Access Private Content</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-500">
                                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>See Who Viewed Your Profile</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Video Chat with Any Member</span>
                                    </li>
                                    <li class="flex items-center space-x-2 text-sm font-medium text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6" fill="darkgray" viewBox="0 0 1792 1792">
                                            <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                        <span>Get special offers</span>
                                    </li>
                                </ul>

                                <Link :href="route('checkout')" class="relative flex items-center justify-center w-full px-5 py-5 text-lg font-medium text-white rounded-xl group">
                                    <span class="w-full h-full absolute inset-0 transform translate-y-1.5 translate-x-1.5 group-hover:translate-y-0 group-hover:translate-x-0 transition-all ease-out duration-200 rounded-xl bg-red-400"></span>
                                    <span class="absolute inset-0 w-full h-full border-2 border-gray-900 rounded-xl"></span>
                                    <span class="relative">Choose Plan</span>
                                    <svg class="w-5 h-5 ml-2 transition-all duration-200 ease-out transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </Link>
                            </div>
                            <!-- End Third Plan -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        
        components: {
            AppLayout,
            Link,
        },
    })
</script>
