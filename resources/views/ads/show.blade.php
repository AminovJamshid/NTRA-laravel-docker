<x-header />
    <section class="relative md:py-24 pt-24 pb-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-7">
                    <div class="grid grid-cols-1 relative">
                        <div class="tiny-one-item">
                            <div class="tiny-slide">
                                <img src="../assets/images/ads/default2.jpg"  class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>

                            <div class="tiny-slide">
                                <img src="assets/images/property/single/2.jpg"
                                     class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>

                            <div class="tiny-slide">
                                <img src="assets/images/property/single/3.jpg"
                                     class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>

                            <div class="tiny-slide">
                                <img src="assets/images/property/single/4.jpg"
                                     class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>

                            <div class="tiny-slide">
                                <img src="assets/images/property/single/5.jpg"
                                     class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>
                        </div>
                    </div>

                    <h4 class="text-2xl font-medium mt-6 mb-3"> {{$ad->title}}</h4>
                    <span class="text-slate-400 flex items-center"><i data-feather="map-pin" class="size-5 me-2"></i> {{$ad->address}}</span>

                    <ul class="py-6 flex items-center list-none">
                        <li class="flex items-center lg:me-6 me-4">
                            <i class="uil uil-compress-arrows lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">8000sqf</span>
                        </li>

                        <li class="flex items-center lg:me-6 me-4">
                            <i class="uil uil-bed-double lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">{{ $ad->rooms}} xona</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">4 Baths</span>
                        </li>
                    </ul>

                    <p class="text-slate-400">{{ $ad->description}}</p>

                    <div class="w-full leading-[0] border-0 mt-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-5">
                    <div class="sticky top-20">
                        <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                            <div class="p-6">

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <i class="uil uil-usd-circle text-green-600 text-2xl mr-2"></i>
                                        <h5 class="text-2xl font-medium">Narxi:</h5>
                                    </div>
                                    <span class="text-xl font-medium">{{ $ad->price }}</span>
                                </div>

                                <ul class="list-none mt-4">
                                    <li class="flex justify-between items-center mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-green-600 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                        </svg>

                                        <span class="text-slate-400 text-sm">Status</span>
                                        <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6"> {{$ad->status_id}}</span>
                                    </li>


                                    <li class="flex items-center mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-green-600 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                                        </svg>

                                        <span class="text-slate-400 text-sm mr-2">Filial:</span>
                                        <span class="font-medium text-sm">{{$ad->branch_id}}</span>
                                    </li>




                                    <li class="flex items-center mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-green-600 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                        </svg>

                                        <span class="text-slate-400 text-sm mr-2">Sana:</span>
                                        <span class="font-medium text-sm">{{$ad->created_at}}</span>
                                    </li>


                                </ul>
                            </div>

                            <div class="flex">
                                <div class="p-1 w-1/2">
                                    <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Band qilish</a>
                                </div>
                                <div class="p-1 w-1/2">
                                    <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Saqlab qoyish</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 text-center">
                            <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">E'lon beruvchi bilan boglanish</h3>

                            <div class="mt-6">
                                <a href="contact.html"
                                   class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i
                                        class="uil uil-phone align-middle me-2"></i> Bog'lanish </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end section-->


