<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="grid grid-cols-1 p-4">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <div class="">
                                        <table class="w-full">
                                            <thead class="bg-slate-100 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Product
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Price
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Quantity
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Total
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 uppercase dark:text-gray-400">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($carts as $item)
                                                    <tr
                                                        class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td
                                                            class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <img src="{{ $item->image }}" alt=""
                                                                    class="mr-2 h-8 inline-block">
                                                                <div class="self-center">
                                                                    <h5
                                                                        class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                        {{ $item->name }}</h5>
                                                                    <span
                                                                        class="block  font-medium text-slate-500">{{ Str::limit($item->description, 10) }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-600 font-medium whitespace-nowrap dark:text-gray-400"
                                                            data-price="{{ $item->price }}">
                                                            Rp. {{ number_format($item->price, 0) }}
                                                        </td>
                                                        <td
                                                            class="p-3 text-sm text-gray-600 font-medium whitespace-nowrap dark:text-gray-400">
                                                            <input
                                                                class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-1 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary-500  dark:hover:border-slate-700"
                                                                style="width:100px;" type="number" min="0"
                                                                value="{{ $item->total_qty }}"
                                                                onchange="changeQty(this)" id="example-number-input"
                                                                data-id="{{ $item->id }}">
                                                        </td>
                                                        <td
                                                            class="p-3 text-sm font-semibold text-slate-700 whitespace-nowrap dark:text-gray-400">
                                                            Rp. {{ number_format($item->price * $item->total_qty) }}
                                                        </td>
                                                        <td
                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                            <a href="#">
                                                                <i data-lucide="trash" class="top-icon w-5 h-5"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                    <div
                        class="bg-black dark:bg-gray-900 shadow border border-slate-700/40 dark:border-slate-700/40  rounded-md w-full relative ">
                        <div class="flex-auto p-4">
                            <div class="text-center">
                                <img src="assets/images/logo-sm.png" alt="" class="h-12 inline-block mx-auto">
                                <h4 class="text-2xl font-semibold my-2 text-slate-300">Have a promo code ?</h4>
                                <div class="relative w-full">
                                    <input type="text" id="promocode"
                                        class="form-input w-full rounded-md  border border-slate-500/60 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-500/60 focus:border-brand-500  text-slate-300"
                                        placeholder="promocode" required>
                                    <button type="submit"
                                        class="absolute right-0 bottom-0 top-0 inline-block focus:outline-none text-brand-300 hover:bg-brand-500 hover:text-white bg-transparent border border-gray-500/60 dark:bg-transparent dark:text-brand-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-1 px-3 rounded-e rounded-s-0">Apply</button>
                                </div>
                                <p class="text-sm text-slate-400 text-left mb-4">If you have a promocode, You
                                    can take discount !</p>
                            </div>
                            <div class="grid grid-cols-1 p-4 bg-slate-700/20 rounded-md">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="min-w-full">
                                            <tbody>
                                                <!-- 1 -->
                                                {{-- <tr class="border-b border-dashed border-slate-500/60">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Subtotal
                                                    </td>
                                                    <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        $15,500.00
                                                    </td>
                                                </tr> --}}
                                                <!-- 2 -->
                                                {{-- <tr class="border-b border-dashed border-slate-500/60">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Shipping
                                                    </td>
                                                    <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        <div>
                                                            <label class="inline-flex items-center">
                                                                <input type="radio" class="form-radio text-indigo-600"
                                                                    name="radio-colors" value="1" checked>
                                                                <span class="ms-2">Shipping Charge :
                                                                    $5.00</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="inline-flex items-center">
                                                                <input type="radio" class="form-radio text-indigo-600"
                                                                    name="radio-colors" value="2">
                                                                <span class="ms-2">Express Shipping Charge :
                                                                    $10.00</span>
                                                            </label>
                                                        </div>
                                                        <a href="#" class="text-slate-200 font-semibold">Change
                                                            Address</a>
                                                    </td>
                                                </tr> --}}
                                                <!-- 3 -->
                                                {{-- <tr class="">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Promo Code
                                                    </td>
                                                    <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        -$10.00
                                                    </td>
                                                </tr> --}}
                                                <!-- 4 -->
                                                <tr class="border-t-2 border-solid border-slate-500/60">
                                                    <td
                                                        class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                        Total
                                                    </td>
                                                    <td id="total-cart"
                                                        class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                        <div
                                                            class="border-t-transparent border-solid animate-spin  rounded-full border-primary-500 border-2 h-4 w-4 inline-block">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="flex gap-4 mb-4">
                                    <button
                                        class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Continue
                                        shopping</button>
                                    <button
                                        class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Proceed
                                        to checkout</button>
                                </div>
                                <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note
                                        :</span> It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
        </div><!--end container-->
    </div><!--end main-->
</x-customer-layout>

<script>
    $(document).ready(function() {
        getTotalCart()
    })

    function changeQty(e) {
        let id = $(e).data('id');
        let qty = $(e).val();
        let price = $(e).parent().siblings().eq(1).data('price');

        let total = price * qty

        $(e).parent().siblings().eq(2).html(
            `${Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR" }).format(total)}`)

        let form = new FormData()
        form.append('id', id)
        form.append('qty', qty)

        $('#total-cart').html(
            `<div class="border-t-transparent border-solid animate-spin  rounded-full border-primary-500 border-2 h-4 w-4 inline-block"></div>`
        )

        $.ajax({
            data: form,
            url: `{{ route('customer.cart.change-cart') }}`,
            type: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(data) {
                notyf.success(data.message)
                getTotalCart()
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }

    function getTotalCart() {
        $.ajax({
            url: `{{ route('customer.cart.total-cart') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(data) {
                $('#total-cart').html(
                    `${Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR" }).format(data.total)}`
                )
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }
</script>