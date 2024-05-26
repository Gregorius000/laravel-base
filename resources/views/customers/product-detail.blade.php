<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <h4 class="font-medium">Title</h4>
                        </div><!--end header-title-->
                        <x-alert></x-alert>
                        <div class="flex-auto p-4">
                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 text-center">
                                    <div id="img-container" class="w-[400px] text-center inline-block mx-auto">
                                        <img src="{{ $product->image }}" alt="" class="inline-block">
                                    </div>
                                </div>
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center">
                                    <span
                                        class="bg-blue-100 text-blue-500 text-[14px] font-medium px-2.5 py-0.5 rounded h-5">{{ $product->product_category->name }}</span>
                                    <div class="flex flex-col gap-4">
                                        <h5 class="dark:text-slate-200 font-medium text-[30px] leading-9 mt-4">
                                            {{ $product->name }}</h5>
                                        <h6 class="text-[28px] text-white dark:text-white font-semibold mb-4">
                                            <span class="bg-green-500 px-4 rounded-full">
                                                Rp. {{ number_format($product->price, 0) }}
                                            </span>
                                        </h6>
                                        <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400">Description :
                                        </h6>
                                        <p
                                            class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium mb-4">
                                            {{ $product->description }}
                                        </p>

                                        <form id="form-cart" action="{{ route('customer.product-add-to-cart') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                            <input
                                                class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand-500  dark:hover:border-slate-700"
                                                style="width:100px;" type="number" min="0" value="0"
                                                id="example-number-input" name="qty">
                                            <button id="btn-add-to-cart" type="submit"
                                                class="inline-block focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-2 px-3 rounded"><i
                                                    class="ti ti-shopping-cart"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative">
                        <div class="flex-auto ">
                            <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="reviews-tab" data-fc-target="#reviews" type="button" role="tab"
                                            aria-controls="reviews" aria-selected="false">Ratings & reviews</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="active p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="reviews"
                                    role="tabpanel" aria-labelledby="reviews-tab">
                                    <x-customers.rating :productId="$product->id" />
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                    <div class="flex-auto p-4">
                        <h4 class="text-3xl text-slate-700 font-semibold mb-0">Related products</h4>
                        <p class="text-slate-500 text-lg mb-3">All products with free delivery</p>
                    </div><!--end card-body-->
                </div><!--end col-->
            </div>
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">

                @foreach ($related_products as $item)
                    <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                            <div class="flex-auto  text-center">
                                <div class="flex-auto text-center bg-gray-100">
                                    <a href="{{ route('customer.product-detail', ['slug' => $item->slug]) }}">
                                        <img src="{{ $item->image }}" alt=""
                                            class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                    </a>
                                </div>
                                <div class="flex-auto  text-center p-4">
                                    <span
                                        class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{ $item->product_category->name }}</span>
                                    <a href="{{ route('customer.product-detail', ['slug' => $item->slug]) }}"
                                        class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">{{ $item->name }}
                                    </a>
                                    <div class="mb-4">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <span class="text-slate-800 font-semibold">4.8</span>
                                    </div>
                                    <h4 class="text-3xl font-medium dark:text-slate-300 mb-4">
                                        Rp. {{ number_format($item->price) }}
                                    </h4>
                                    <button type="button"
                                        class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                        onclick="location.href='{{ route('customer.product-detail', ['slug' => $item->slug]) }}'">Buy
                                        Now</button>
                                </div>
                            </div>
                        </div> <!--end card-->
                    </div><!--end col-->
                @endforeach

            </div><!--end grid-->
        </div><!--end container-->
    </div><!--end main-->
</x-customer-layout>
<script>
    $(document).ready(function() {

        $('#form-cart').submit(function(e) {
            e.preventDefault();

            let form = new FormData(this)

            $('#btn-add-to-cart').html(
                '<div class="border-t-transparent border-solid animate-spin  rounded-full border-primary-500 border-2 h-4 w-4 inline-block"></div>'
            )
            $('#btn-add-to-cart').attr('disabled', true)

            $.ajax({
                data: form,
                url: `{{ route('customer.product-add-to-cart') }}`,
                type: 'POST',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`
                },
                success: function(data) {
                    $('#btn-add-to-cart').html('Add to cart')
                    $('#btn-add-to-cart').attr('disabled', false)

                    $('#cart-total').html(data.cart_count)
                    notyf.success(data.message)
                },
                error: function(data) {
                    $('#btn-add-to-cart').html('Add to cart')
                    $('#btn-add-to-cart').attr('disabled', false)
                    notyf.error(data.responseJSON.message)
                }
            })
        })
    })
</script>
