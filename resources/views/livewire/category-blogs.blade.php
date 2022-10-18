<div>
    {{-- The whole world belongs to you. --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">{{ $title }}</h1>
    
            <!-- Card Grid -->
            <div class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($blogs as $blog)
                <!-- Card Item -->
                <div class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <a wire:click='$emit("openModal", "blog-show", @json(["id" => $blog->id]))' class="cursor-pointer">
                        <figure>
                            <!-- Image -->
                            @if(!$blog->image)
                            <img src="https://via.placeholder.com/150" class="rounded-t h-72 w-full object-cover" />
                            @else
                            <img src="post.image + '?auto=format&fit=crop&w=400&q=50'" class="rounded-t h-72 w-full object-cover" />
                            @endif
                            <figcaption class="p-4">
                                <!-- Title -->
                                <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                    <!-- Post Title -->
                                    {{ $blog->title }}
                                </p>

                                <!-- Description -->
                                <small
                                    class="leading-5 text-gray-500 dark:text-gray-400">
                                    <!-- Post Description -->
                                    {{ $blog->small_description}}
                                </small>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>
</div>
