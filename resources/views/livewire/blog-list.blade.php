<div>
    {{-- Do your work, then step back. --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

                <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
                    <div class="relative flex flex-col min-w-0 break-words mb-6">
                      <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                          <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Blog List</h3>
                          </div>
                          <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button wire:click='$emit("openModal", "add-blog")' class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Add Blog</button>
                          </div>
                        </div>
                      </div>
                  
                      <div class="block w-full overflow-x-auto">
                        <table class="items-center bg-transparent w-full border-collapse ">
                          <thead>
                            <tr>
                              <th class="px-6 w-8 h-8 mr-3 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                img
                              </th>
                              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                  Blog Title
                               </th>
                            </tr>
                          </thead>
                  
                          <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                  <div class="relative w-10 h-10 mr-3 md:block">
                                  <img class="object-cover w-full h-full" src="{{ asset('storage/'.$blog->image)}}" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                  </div>
                                </th>
                                <th wire:click='$emit("openModal", "blog-show", @json(["id" => $blog->id]))' class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                  <span style="color: blue; cursor: pointer;">{{ $blog->title }}</span>
                                </th>
                              </tr>
                            @endforeach
                          </tbody>   
                        </table>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</div>
