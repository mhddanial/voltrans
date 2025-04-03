<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full py-10 items-center flex flex-wrap justify-center xl:w-3/5 xl:mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-4">
                <h4 class="text-lg font-semibold text-success md:text-lg">BLOGS</h4>
                <h2 class="text-balance text-3xl font-semibold tracking-tight text-black sm:text-4xl">See My Blogs Here</h2>
                <p class="mt-6 text-pretty text-lg/8 text-gray-500">Here are my blogs I've created throughout my career</p>
            </div>
        </div>
        <div class="p-3 flex items-center justify-center lg:w-1/2 md:w-1/2 rounded-lg shadow-lg">
            <div class="card bg-base-100 w-96">
                <figure>
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$data1['title']}}</h2>
                    <p>{{$data1['description']}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center p-3 lg:w-1/2 md:w-1/2 rounded-lg shadow-lg">
            <div class="card bg-base-100 w-96">
                <figure>
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$data1['title']}}</h2>
                    <p>{{$data1['description']}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center p-3 lg:w-1/2 md:w-1/2 rounded-lg shadow-lg">
            <div class="card bg-base-100 w-96">
                <figure>
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$data1['title']}}</h2>
                    <p>{{$data1['description']}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center p-3 lg:w-1/2 md:w-1/2 rounded-lg shadow-lg">
            <div class="card bg-base-100 w-96">
                <figure>
                    <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$data1['title']}}</h2>
                    <p>{{$data1['description']}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>