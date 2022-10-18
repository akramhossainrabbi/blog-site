<div class="flex items-center justify-center p-12 px-4 py-4">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form wire:submit.prevent="save">

        <div class="mb-5">
          <label
            for="title"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Title
          </label>
          <input
            type="text"
            wire:model="title"
            id="title"
            placeholder="Enter your title"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
          @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
            <label
              for="image"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Image
            </label>
            <input
              type="file"
              wire:model="image"
              id="image"
              placeholder="Enter your image"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            @error('image') <span class="error">{{ $message }}</span> @enderror
          </div>
        <div class="mb-5">
          <label
            for="small_description"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Message
          </label>
          <textarea
            rows="4"
            wire:model="small_description"
            id="small_description"
            placeholder="Type your small_description"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></textarea>
          @error('small_description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
            <label
              for="details"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Message
            </label>
            <textarea
              rows="8"
              wire:model="details"
              id="details"
              placeholder="Type your details"
              class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            ></textarea>
            @error('details') <span class="error">{{ $message }}</span> @enderror
          </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>