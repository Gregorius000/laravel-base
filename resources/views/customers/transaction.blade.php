<x-customer-layout>
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-56px)] relative pb-0">
            <div class="container my-4 bg-white">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="grid grid-cols-1">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table id="data-table" class="w-full" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Transaction</th>
                                                <th>Status</th>
                                                <th>Total Checkout</th>
                                                <th>Shipping Cost</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div><!--end div-->
                            </div><!--end div-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div> <!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end page-wrapper-->
</x-customer-layout>
<script>
    let table;

    $(document).ready(function() {
        initializeTable()
    })

    function initializeTable() {
        table = new DataTable('#data-table', {
            ajax: `{{ route('customer.transaction.datatable') }}`,
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row, meta) {
                        if (data == "pending") {
                            return `<span class="bg-gray-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Pending</span>`
                        }

                        if (data == "process") {
                            return `<span class="bg-yellow-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Process</span>`
                        }

                        if (data == "reject") {
                            return `<span class="bg-red-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Reject</span>`
                        }

                        if (data == "complete") {
                            return `<span class="bg-green-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Complete</span>`
                        }

                        return data;
                    }
                },
                {
                    data: 'total_checkout',
                    name: 'total_checkout',
                    render: function(data, type, row, meta) {
                        return number_format(data);
                    }
                },
                {
                    data: 'shipping_cost',
                    name: 'shipping_cost',
                    render: function(data, type, row, meta) {
                        return number_format(data);
                    }
                }
            ]
        });
    }
</script>