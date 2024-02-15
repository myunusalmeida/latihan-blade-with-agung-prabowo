<x-home-layout>
    <section class="p-10 md:p-20 bg-[#FBFBFB] flex gap-5 flex-col md:flex-row">
        <div class="flex flex-col md:flex-row justify-between w-full md:w-3/5" id="article-box">
            <div>
                <p class="subtitle"></p>
                <h1 class="title mt-2 mb-3">{{ $package->title }}</h1>
                <div class="flex gap-5">
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);">
                            <path
                                d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                            </path>
                        </svg>
                        <p class="description">{{ $package->people }} People</p>
                    </div>
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);">
                            <path
                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                            </path>
                            <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                        </svg>
                        <p class="description">{{ $package->time }} Days</p>
                    </div>
                </div>
                <p class="mt-3">Language : <span class="description">{{ $package->languages }}</span></p>
                <img src="../dist/images/detail-1.png" alt="" class="mt-5">
                <p class="description mt-5 text-justify md:text-left">
                    {{ $package->description }}
                </p>
            </div>
        </div>
        <div class="p-6 w-full md:w-2/5 bg-white rounded-xl h-3/4 py-12">
            <h2 class="text-blue-400 text-xl font-semibold mb-3">Rp. {{ number_format($package->price) }}</h2>
            <img src="../dist/images/Frame 15.png" alt="" class="">
            <hr class="my-5">
            <p class="font-semibold mb-4 text-lg">Trip Informations</p>
            <table class="w-full border-separate border-spacing-y-3">
                <tr>
                    <td>Type</td>
                    <td class="text-right description">{{ $package->type }}</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td class="text-right description">Rp. {{ number_format($package->price) }}/person</td>
                </tr>
            </table>
            <p class="btn w-full text-center mt-5 cursor-pointer">Login or Register to Join</p>
        </div>
    </section>
</x-home-layout>
