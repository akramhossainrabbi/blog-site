<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <main class="mt-10 px-4">

        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
          <div class="absolute left-0 bottom-0 w-full h-full z-10"
            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
          <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
          <div class="p-4 absolute bottom-0 left-0 z-20">
            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                {{ $blog->title }}
            </h2>
          </div>
        </div>
  
        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
          <p class="pb-6">{{ $blog->details }}
        </p>
  
        </div>

      {{-- @include('partisals.comment-display', ['comments' => $blog->comments, 'blog_id' => $blog->id]) --}}
      @foreach($blog->comments as $comment)
          <hr>
          <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
              <strong>{{ $comment->user->name }}</strong>
              <p>{{ $comment->body }}</p>
          </div>
      @endforeach  

      <hr />
      <h4 class="mb-3 block text-base font-medium text-[#07074D]">Add comment</h4>
      <form wire:submit.prevent="comment">
          <div class="mb-5">
              <textarea  rows="4" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              wire:model="body"></textarea>
              @error('body') <span class="error">{{ $message }}</span> @enderror
          </div>
          <div class="mb-5">
            <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">Add Comment</button>
          </div>
      </form>

    </main>
</div>
