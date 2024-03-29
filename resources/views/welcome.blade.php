<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
              <a class="block text-teal-600 dark:text-teal-300" href="#">
                <span class="sr-only">Home</span>
                <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                    fill="currentColor"
                  />
                </svg>
              </a>
            </div>
      
            <div class="md:flex md:items-center md:gap-12">
              <nav aria-label="Global" class="hidden md:block">
                <ul class="flex items-center gap-6 text-sm">
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      About
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      Careers
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      History
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      Services
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      Projects
                    </a>
                  </li>
      
                  <li>
                    <a
                      class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      Blog
                    </a>
                  </li>
                </ul>
              </nav>
      
              <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                  <a
                    class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow dark:hover:bg-teal-500"
                    href="#"
                  >
                    Login
                  </a>
      
                  <div class="hidden sm:flex">
                    <a
                      class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 dark:bg-gray-800 dark:text-white dark:hover:text-white/75"
                      href="#"
                    >
                      Register
                    </a>
                  </div>
                </div>
      
                <div class="block md:hidden">
                  <button
                    class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75 dark:bg-gray-800 dark:text-white dark:hover:text-white/75"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Before they sold out
              <br class="hidden lg:inline-block">readymade gluten
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
              <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
          </div>
        </div>
      </section>




      <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
          <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Trusted by eCommerce Businesses</h2>
      
            <p class="mt-4 text-gray-500 sm:text-xl">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
              provident impedit esse recusandae facere libero harum sequi.
            </p>
          </div>
      
          <div class="mt-8 sm:mt-12">
            <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
              <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>
      
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
              </div>
      
              <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>
      
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
              </div>
      
              <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>
      
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
              </div>
            </dl>
          </div>
        </div>
      </section>

















      <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:items-stretch md:grid-cols-3 md:gap-8">
          <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
            <div class="p-6 sm:px-8">
              <h2 class="text-lg font-medium text-gray-900">
                Starter
                <span class="sr-only">Plan</span>
              </h2>
      
              <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      
              <p class="mt-2 sm:mt-4">
                <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> 20$ </strong>
      
                <span class="text-sm font-medium text-gray-700">/month</span>
              </p>
      
              <a
                class="mt-4 block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500 sm:mt-6"
                href="#"
              >
                Get Started
              </a>
            </div>
      
            <div class="p-6 sm:px-8">
              <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>
      
              <ul class="mt-2 space-y-2 sm:mt-4">
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 10 users </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 2GB of storage </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Email support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-red-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
      
                  <span class="text-gray-700"> Help center access </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-red-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
      
                  <span class="text-gray-700"> Phone support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-red-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
      
                  <span class="text-gray-700"> Community access </span>
                </li>
              </ul>
            </div>
          </div>
      
          <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
            <div class="p-6 sm:px-8">
              <h2 class="text-lg font-medium text-gray-900">
                Pro
                <span class="sr-only">Plan</span>
              </h2>
      
              <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      
              <p class="mt-2 sm:mt-4">
                <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> 30$ </strong>
      
                <span class="text-sm font-medium text-gray-700">/month</span>
              </p>
      
              <a
                class="mt-4 block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500 sm:mt-6"
                href="#"
              >
                Get Started
              </a>
            </div>
      
            <div class="p-6 sm:px-8">
              <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>
      
              <ul class="mt-2 space-y-2 sm:mt-4">
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 20 users </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 5GB of storage </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Email support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Help center access </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-red-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
      
                  <span class="text-gray-700"> Phone support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-red-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
      
                  <span class="text-gray-700"> Community access </span>
                </li>
              </ul>
            </div>
          </div>
      
          <div class="divide-y divide-gray-200 rounded-2xl border border-gray-200 shadow-sm">
            <div class="p-6 sm:px-8">
              <h2 class="text-lg font-medium text-gray-900">
                Enterprise
                <span class="sr-only">Plan</span>
              </h2>
      
              <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      
              <p class="mt-2 sm:mt-4">
                <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> 100$ </strong>
      
                <span class="text-sm font-medium text-gray-700">/month</span>
              </p>
      
              <a
                class="mt-4 block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500 sm:mt-6"
                href="#"
              >
                Get Started
              </a>
            </div>
      
            <div class="p-6 sm:px-8">
              <p class="text-lg font-medium text-gray-900 sm:text-xl">What's included:</p>
      
              <ul class="mt-2 space-y-2 sm:mt-4">
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 50 users </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> 20GB of storage </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Email support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Help center access </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Phone support </span>
                </li>
      
                <li class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5 text-indigo-700"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
      
                  <span class="text-gray-700"> Community access </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="https://dummyimage.com/460x500">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">Shooting Stars</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-indigo-400 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">The Catalyzer</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-indigo-400 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">Neptune</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-indigo-400 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- This example requires Tailwind CSS v2.0+
    -->
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only" _msttexthash="196495" _msthash="79">Pie de página</h2>
    <div class="px-5 py-12 mx-auto max-w-7xl lg:py-16 md:px-12 lg:px-20">
      <div class="md:grid md:grid-cols-5 md:gap-8">
        <div>
          <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase" _msttexthash="159874" _msthash="80">Soluciones</h3>
          <ul role="list" class="mt-4 space-y-4">
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="134732" _msthash="81"> Marketing </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="149409" _msthash="82"> Analítica </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="113217" _msthash="83"> Comercio </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="57915" _msthash="84"> Ideas </a>
            </li>
          </ul>
        </div>
        <div class="mt-12 md:mt-0">
          <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase" _msttexthash="62153" _msthash="85">Apoyo</h3>
          <ul role="list" class="mt-4 space-y-4">
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="95589" _msthash="86"> Precios </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="262314" _msthash="87"> Documentación </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="75413" _msthash="88"> Guías </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="203671" _msthash="89"> Estado de la API </a>
            </li>
          </ul>
        </div>
        <div class="mt-12 md:mt-0">
          <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase" _msttexthash="62153" _msthash="90">Apoyo</h3>
          <ul role="list" class="mt-4 space-y-4">
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="95589" _msthash="91"> Precios </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="262314" _msthash="92"> Documentación </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="75413" _msthash="93"> Guías </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="203671" _msthash="94"> Estado de la API </a>
            </li>
          </ul>
        </div>
        <div class="mt-12 md:mt-0">
          <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase" _msttexthash="62153" _msthash="95">Apoyo</h3>
          <ul role="list" class="mt-4 space-y-4">
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="95589" _msthash="96"> Precios </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="262314" _msthash="97"> Documentación </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="75413" _msthash="98"> Guías </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="203671" _msthash="99"> Estado de la API </a>
            </li>
          </ul>
        </div>
        <div class="mt-12 md:mt-0">
          <h3 class="text-xs font-semibold tracking-wider text-blue-600 uppercase" _msttexthash="62153" _msthash="100">Apoyo</h3>
          <ul role="list" class="mt-4 space-y-4">
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="95589" _msthash="101"> Precios </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="262314" _msthash="102"> Documentación </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="75413" _msthash="103"> Guías </a>
            </li>
            <li>
              <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900" _msttexthash="203671" _msthash="104"> Estado de la API </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-5 py-12 mx-auto bg-gray-50 max-w-7xl sm:px-6 md:flex md:items-center md:justify-between lg:px-20">
      <div class="flex justify-center mb-8 space-x-6 md:order-last md:mb-0">
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only" _msttexthash="385671" _msthash="105">Facebook (en inglés)</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only" _msttexthash="423527" _msthash="106">Instagram (en inglés)</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only" _msttexthash="98995" _msthash="107">Twitter</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only" _msttexthash="319553" _msthash="108">GitHub (en inglés)</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only" _msttexthash="74971" _msthash="109">Regate</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
      <div class="mt-8 md:mt-0 md:order-1">
        <span class="mt-2 text-sm font-light text-gray-500" _msttexthash="1581385" _msthash="110"> Derechos de autor © 2020 - 2021 <a href="https://wickedlabs.dev" class="mx-2 text-wickedblue hover:text-gray-500" rel="noopener noreferrer" _istranslated="1">@wickedlabsHQ</a>. Desde 2020 </span>
      </div>
    </div>
  </footer>

</body>
</html>