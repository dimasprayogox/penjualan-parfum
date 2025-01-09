<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
</head>
<body class="h-full">
 
<div class="min-h-full">
    <nav class="bg-gray-900" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="shrink-0">
                    <span class="text-sky-400 text-xl font-bold">ParfumBoss</span>
                </div>
                <div class="hidden md:block ml-auto">
                    <div class="flex items-baseline space-x-4">
                        <a href="#home" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                        <a href="#about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                        <a href="#products" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Products</a>
                        <a href="#testimoni" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Testimonials</a>
                        <a href="#contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" @click= "isOpen" = "!isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
  
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="#home" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                <a href="#about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="#products" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Products</a>
                <a href="#testimoni" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Testimonials</a>
                <a href="#contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            </div>
        </div>
    </nav>
  
   <!-- Hero Section -->
<section id="home" class="relative bg-cover bg-center" style="background-image: url('/images/hero-bg.jpg');">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900 to-transparent"></div>
    
    <div class="container mx-auto text-center text-white h-screen flex items-center">
        <div class="mx-auto w-3/4 md:w-2/4 relative z-10"> <!-- Added relative and z-10 -->
            <h3 class="text-5xl font-bold text-center mb-5 text-sky-100">Bring Your Body to the Essence of Nature</h3>
            <p class="text-emerald-50 mb-5">A natural perfume that brings the freshness of nature. Made with high-quality ingredients, it provides calmness and energy throughout the day. The perfect choice for those who love authenticity.</p>
            <a href="#products" class="bg-sky-600 text-white py-2 px-5 rounded-xl hover:bg-sky-800">See All Products</a>
        </div>
      </div>

      
      <div class="absolute inset-0 top-[400px] bg-gradient-to-b to-gray-900 from-transparent"></div>
    </section>
    <section id="about" class="bg-gray-900 pt-[4rem]">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-extrabold text-sky-600 sm:text-4xl">About Us</h2>
                    <p class="mt-4 text-white text-lg">Welcome to ParfumBoss!
                      We are a perfume store dedicated to bringing you fresh and natural fragrances inspired by the beauty of nature. Founded with a passion for quality and elegance, we strive to create scents that tell a story and leave a lasting impression.</p>
                      <p class="mt-4 text-white text-lg">
                      At ParfumBoss, we carefully craft each fragrance using high-quality ingredients to ensure you experience the perfect balance of freshness and sophistication. Our mission is to be a part of your journey in discovering the scent that defines you.</p>
                    <div class="mt-8">
                        
                    </div>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>


    

    <div id="products" class="w-full flex flex-col py-24 dark:bg-gray-800">
      <div class="flex flex-col w-[90%] lg:w-4/5 2xl:w-3/5 mx-auto">    
          <div class="w-full md:w-4/5 md:mx-auto text-center pt-3 px-4 md:!px-0 text-center">
              <h1 class="text-3xl mt-2 md:text-4xl font-semibold">
                  <span class="text-sky-600">Products</span>
              </h1>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full">    
              @foreach($products as $product) <!-- Loop through each product -->
                  <div class="rounded-2xl bg-gray-900 pr-0 md:mr-4 mt-6 transform transition-transform duration-300 hover:scale-105"> <!-- Tambahkan kelas untuk efek zoom -->
                      <div class="flex flex-col relative">
                          <div class="h-64 w-full overflow-hidden p-3"> <!-- Kontainer untuk gambar -->
                              <img src="{{ asset('storage/' . $product->image) }}" 
                                   class="w-full h-full object-cover rounded-xl" 
                                   title="{{ $product->name }}" 
                                   alt="{{ $product->name }}" />
                          </div>
                      </div>
                      <div class="flex flex-col px-4 ">
                          <p class="text-sm mt-3 text-gray-400 font-semibold">
                              {{ $product->Kategori->name ?? 'No Category' }} <!-- Display product category name -->
                          </p>
                          <h1 class="text-2xl my-2 md:text-3xl font-bold text-gray-600 ">
                              <span class="text-sky-600">{{ $product->name }}</span> <!-- Display product name -->
                          </h1>
                          <p class="text-sm mb-3 line-clamp-3 hover:line-clamp-none text-gray-500 ">
                              {{ $product->description }} <!-- Display product description -->
                          </p>
                      </div>
                      <div class="flex flex-row py-3 px-4 border-t border-gray-100 dark:!border-gray-600">
                          <div class="w-1/2 flex flex-row dark:text-gray-200">
                              <span class="mr-1">Rp</span>
                              <span>{{ number_format($product->price, 0, ',', '.') }}</span> <!-- Display product price -->
                          </div>
                      </div>
                  </div>    
              @endforeach
          </div>
          
          <!-- Pagination -->
          <div class="mt-6">
              {{ $products->links() }} <!-- Menampilkan pagination -->
          </div>
      </div>
  </div>
      
    

    <!-- Testimonial Section -->


<script type="module">
  import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

  const keenSlider = new KeenSlider(
    '#keen-slider',
    {
      loop: true,
      slides: {
        origin: 'center',
        perView: 1.25,
        spacing: 16,
      },
      breakpoints: {
        '(min-width: 1024px)': {
          slides: {
            origin: 'auto',
            perView: 2.5,
            spacing: 32,
          },
        },
      },
    },
    []
  )

  const keenSliderPrevious = document.getElementById('keen-slider-previous')
  const keenSliderNext = document.getElementById('keen-slider-next')

  keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
  keenSliderNext.addEventListener('click', () => keenSlider.next())
</script>

<section id="testimoni" class="bg-gray-50">
  <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
    <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
      <h2 class="max-w-xl text-4xl font-bold tracking-tight text-emerald-900 sm:text-5xl">
        What Our Customers Say
      </h2>

      <div class="mt-8 flex gap-4 lg:mt-0">
        <button
          aria-label="Previous slide"
          id="keen-slider-previous"
          class="rounded-full border border-emerald-600 p-3 text-emerald-600 transition hover:bg-emerald-600 hover:text-white"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-5 rtl:rotate-180"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </button>

        <button
          aria-label="Next slide"
          id="keen-slider-next"
          class="rounded-full border border-emerald-600 p-3 text-emerald-600 transition hover:bg-emerald-600 hover:text-white"
        >
          <svg
            class="size-5 rtl:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>

    <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
      <div id="keen-slider" class="keen-slider">
        <div class="keen-slider__slide">
          <blockquote
            class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12"
          >
            <div>
              <div class="mt-4">
                <p class="text-2xl font-bold text-emerald-800 sm:text-2xl">Absolutely Fresh and Amazing!</p>
                <p class="mt-4 leading-relaxed text-gray-700">
                  No, Rose, they are not breathing. And they have no arms or legs … Where are they?
                  You know what? If we come across somebody with no arms or legs, do we bother
                  resuscitating them? I mean, what quality of life do we have there?
                </p>
              </div>
            </div>

            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
              &mdash; Michael Scott
            </footer>
          </blockquote>
        </div>

        <div class="keen-slider__slide">
          <blockquote
            class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12"
          >
            <div>
              <div class="flex gap-0.5 text-green-500">
                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
              </div>

              <div class="mt-4">
                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                <p class="mt-4 leading-relaxed text-gray-700">
                  No, Rose, they are not breathing. And they have no arms or legs … Where are they?
                  You know what? If we come across somebody with no arms or legs, do we bother
                  resuscitating them? I mean, what quality of life do we have there?
                </p>
              </div>
            </div>

            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
              &mdash; Michael Scott
            </footer>
          </blockquote>
        </div>

        <div class="keen-slider__slide">
          <blockquote
            class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12"
          >
            <div>
              <div class="flex gap-0.5 text-green-500">
                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>

                <svg
                  class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
              </div>

              <div class="mt-4">
                <p class="text-2xl font-bold text-rose-600 sm:text-3xl">Stayin' Alive</p>

                <p class="mt-4 leading-relaxed text-gray-700">
                  No, Rose, they are not breathing. And they have no arms or legs … Where are they?
                  You know what? If we come across somebody with no arms or legs, do we bother
                  resuscitating them? I mean, what quality of life do we have there?
                </p>
              </div>
            </div>

            <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
              &mdash; Michael Scott
            </footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

  <section id="contact" class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-12 mx-auto">
        <div>
            <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">Our friendly team would love to hear from you.</p>
        </div>

        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">hello@merakiui.com</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Office</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">100 Smith Street Collingwood VIC 3066 AU</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 ```html
                        h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                    <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">+1 (555) 000-0000</p>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg lg:col-span-2 h-64 lg:h-auto"> <!-- Ubah tinggi di sini -->
                <iframe width="100%" height="100%" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.458702094117!2d111.53912427357766!3d-7.633718125494029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be94b7511f73%3A0x863e1316e7a8da28!2sUniversitas%20PGRI%20Madiun!5e0!3m2!1sid!2sid!4v1736009316916!5m2!1sid!2sid"></iframe>
            </div>
        </div>
    </div>
</section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="w-11/12 md:container mx-auto text-center">
            <p>&copy; 2024 ParfumBoss. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-white">Contact Us</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>