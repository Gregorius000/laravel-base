<x-customer-layout>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm  rounded-md w-full relative">
                                <div class="border-b border-dashed border-slate-200 py-4 px-4">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Filter</h4>
                                </div>
                                <div class="flex-auto p-4">
                                    <x-customers.filter-category></x-customers.filter-category>
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9 xl:col-span-9">
                            @if ($products->count() > 0)
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                    @foreach ($products as $item)
                                        <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                            <div class="bg-white border border-slate-200  rounded-md w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <div class="flex-auto text-center bg-gray-100">
                                                        <span
                                                            class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                            off</span>
                                                        <a href="customers-pro-details.html">
                                                            <img src="{{ $item->image }}" alt=""
                                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto  text-center p-4">
                                                        <span
                                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{ $item->product_category->name }}</span>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-xl font-semibold text-slate-500 leading-3 block mb-2 truncate">{{ $item->name }}</a>
                                                        <div class="mb-4">
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <span class="text-slate-800 font-semibold">4.8</span>
                                                        </div>
                                                        <h4 class="text-3xl font-medium mb-4"><sup
                                                                class="text-sm text-slate-500">Rp.
                                                            </sup>{{ number_format($item->price, 0) }}
                                                        </h4>
                                                        <button type="button"
                                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                            onclick="location.href='customers-pro-details.html'">Buy
                                                            Now</button>
                                                    </div>
                                                </div>
                                            </div> <!--end card-->
                                        </div>
                                    @endforeach
                                </div><!--end inner-grid-->
                            @else
                                <p>Products not found.</p>
                            @endif
                            {{ $products->links() }}
                        </div><!--end col-->
                    </div> <!--end grid-->
                </div><!--end container-->
                <!-- footer -->
                <div class="relative bottom-0 -left-0 -right-0 block print:hidden border-t p-4 bg-black">
                    <div class="container">
                        <!-- Footer Start -->
                        <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="mb-5">
                                        <a href="customers-home.html">
                                            <img src="assets/images/logo-sm.png" alt=""
                                                class="h-8 inline-block me-3">
                                            <img src="assets/images/logo.png" alt="" class="h-8 inline-block">
                                        </a>
                                    </div>
                                    <p class="text-slate-500 text-lg">It is a long established fact that a reader will
                                        be distracted by the readable content of a page when looking at its layout. </p>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                                    <ul class="list-none footer-links">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product
                                                details</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                                        </li>
                                    </ul>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                                    <ul class="list-none footer-links">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add
                                                product</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order
                                                details</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                                        </li>
                                    </ul>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">
                                        Contact Us</h5>
                                    <div class="mb-5">
                                        <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                                            Mobile, AL 36603
                                        </p>
                                    </div>
                                    <div class="flex sm:justify-center xl:justify-start">
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                                            <i class="icofont-google-plus"></i>
                                        </a>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div>
                        <footer class="footer bg-transparent  text-center  font-medium text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-400 md:inline-block">Crafted
                                with <i class="ti ti-heart text-red-500"></i> by
                                Mannatthemes</span>
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->
</x-customer-layout>