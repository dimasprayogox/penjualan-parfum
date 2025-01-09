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
  
  <section id="testimoni" class="bg-gray-900">
    <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
      <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
        <h2 class="max-w-xl text-4xl font-bold tracking-tight text-sky-600 sm:text-5xl">
          What Our Customers Say
        </h2>
  
        <div class="mt-8 flex gap-4 lg:mt-0">
          <button
            aria-label="Previous slide"
            id="keen-slider-previous"
            class="rounded-full border border-sky-400 p-3 text-sky-400 transition hover:bg-sky-400 hover:text-gray-900"
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
            class="rounded-full border border-sky-400 p-3 text-sky-400 transition hover:bg-sky-400 hover:text-gray-900"
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
              class="flex h-full flex-col justify-between bg-gray-800 p-6 shadow-sm sm:p-8 lg:p-12"
            >
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-gray-200 sm:text-2xl">Absolutely Fresh and Amazing!</p>
                  <p class="mt-4 leading-relaxed text-gray-400">
                    "I’ve never felt this refreshed before! The natural scents are perfect for any occasion. I always get compliments on how great I smell. Highly recommended!"
                  </p>
                </div>
              </div>
  
              <footer class="mt-4 text-sm font-medium text-sky-600 sm:mt-6">
                &mdash; Sarah M.
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote
              class="flex h-full flex-col justify-between bg-gray-800 p-6 shadow-sm sm:p-8 lg:p-12"
            >
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-gray-200 sm:text-2xl">My Go-To Perfume Store!</p>
                  <p class="mt-4 leading-relaxed text-gray-400">
                    "The fragrances are unique and long-lasting. I love how they capture the essence of nature so beautifully. Excellent service too!"

                  </p>
                </div>
              </div>
  
              <footer class="mt-4 text-sm font-medium text-sky-600 sm:mt-6">
                &mdash; James L.
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote
              class="flex h-full flex-col justify-between bg-gray-800 p-6 shadow-sm sm:p-8 lg:p-12"
            >
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-gray-200 sm:text-2xl">A Truly Premium Experience!</p>
                  <p class="mt-4 leading-relaxed text-gray-400">
                    "From the packaging to the scent, everything feels so luxurious. I can’t imagine using anything else. Thank you for creating such wonderful products!"
                  </p>
                </div>
              </div>
  
              <footer class="mt-4 text-sm font-medium text-sky-600 sm:mt-6">
                &mdash; Amanda R.
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote
              class="flex h-full flex-col justify-between bg-gray-800 p-6 shadow-sm sm:p-8 lg:p-12"
            >
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-gray-200 sm:text-2xl">Refreshing and Long-Lasting!</p>
                  <p class="mt-4 leading-relaxed text-gray-400">
                    "I’m impressed with how the perfumes stay fresh all day long. The floral and citrus notes are just perfect for me. Great value for money!"
                  </p>
                </div>
              </div>
  
              <footer class="mt-4 text-sm font-medium text-sky-600 sm:mt-6">
                &mdash; Ethan T.
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote
              class="flex h-full flex-col justify-between bg-gray-800 p-6 shadow-sm sm:p-8 lg:p-12"
            >
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-gray-200 sm:text-2xl">Nature in a Bottle!</p>
                  <p class="mt-4 leading-relaxed text-gray-400">
                    "Every perfume feels like a little piece of nature. It’s clear they use high-quality ingredients. I’ll definitely be back for more!"
                  </p>
                </div>
              </div>
  
              <footer class="mt-4 text-sm font-medium text-sky-600 sm:mt-6">
                &mdash; Olivia W.
              </footer>
            </blockquote>
          </div>

         
        </div>
      </div>
    </div>
  </section>