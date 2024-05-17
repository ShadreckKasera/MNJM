<section class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
  <div class="">
      <h2 class="text-3xl leading-tight font-bold">Latest Publications</h2>
      <a href="{{ route('publications') }}" title="" class="inline-block text-teal-500 font-semibold mt-6 mt:md-0">View All Posts</a>
  </div>

  <div class="md:flex mt-12 md:-mx-4">
      @foreach ($publications as $publication)
      <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
          <div class="bg-white rounded border border-gray-300">
              <div class="w-full h-48 overflow-hidden bg-gray-300"></div>
              <div class="p-4">
                  <div class="flex items-center text-sm">
                      <span class="text-teal-500 font-semibold">{{ $publication->id }}</span>
                      <span class="ml-4 text-gray-600">{{ $publication->created_at->format('d F, Y') }}</span>
                  </div>
                  <p class="text-lg font-semibold leading-tight mt-4">{{ $publication->title }}</p>
                  <p class="text-gray-600 mt-1">{{ $publication->description }}</p>
                  <div class="flex items-center mt-4">
                      <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                      <div class="ml-4">
                          <p class="text-gray-600">By <span class="text-gray-900 font-semibold">{{ $publication->description }}</span></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</section>
