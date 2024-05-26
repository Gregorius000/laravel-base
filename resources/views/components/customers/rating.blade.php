<div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12">
        <div class=" w-full relative">
            <div class="flex-auto p-4 text-center">
                <h3 class="my-4 font-semibold text-[34px] dark:text-slate-200">{{ $avg_rating }}
                </h3>
                <p class="text-gray-600 font-semibold dark:text-slate-400">Overall
                    Rating</p>
                <div class="">
                    @for ($i = 1; $i <= 5; $i++)
                        <i
                            class="icofont-star text-xl {{ $i <= $avg_rating ? 'text-yellow-400' : 'text-gray-400' }} inline-block"></i>
                    @endfor
                    <span class="text-slate-800 font-semibold">{{ $avg_rating }} ({{ $ratingCounts }}
                        reviews)</span>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between">
                        <span class="font-medium text-sm dark:text-slate-400">5
                            Star</span>
                        <span
                            class="text-sm font-medium text-slate-500 dark:text-gray-400">{{ $product->rating_5 }}</span>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                            <div class="h-[5px] bg-yellow-400 rounded-full"
                                style="width: {{ $ratingCounts == 0 ? 0 : ($product->rating_5 / $ratingCounts) * 100 }}%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between">
                        <span class="font-medium text-sm dark:text-slate-400">4
                            Star</span>
                        <span
                            class="text-sm font-medium text-slate-500 dark:text-gray-400">{{ $product->rating_4 }}</span>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                            <div class="h-[5px] bg-yellow-400 rounded-full"
                                style="width: {{ $ratingCounts == 0 ? 0 : ($product->rating_4 / $ratingCounts) * 100 }}%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between">
                        <span class="font-medium text-sm dark:text-slate-400">3
                            Star</span>
                        <span
                            class="text-sm font-medium text-slate-500 dark:text-gray-400">{{ $product->rating_3 }}</span>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                            <div class="h-[5px] bg-yellow-400 rounded-full"
                                style="width: {{ $ratingCounts == 0 ? 0 : ($product->rating_3 / $ratingCounts) * 100 }}%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between">
                        <span class="font-medium text-sm dark:text-slate-400">2
                            Star</span>
                        <span
                            class="text-sm font-medium text-slate-500 dark:text-gray-400">{{ $product->rating_2 }}</span>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                            <div class="h-[5px] bg-yellow-400 rounded-full"
                                style="width: {{ $ratingCounts == 0 ? 0 : ($product->rating_2 / $ratingCounts) * 100 }}%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between">
                        <span class="font-medium text-sm dark:text-slate-400">1
                            Star</span>
                        <span
                            class="text-sm font-medium text-slate-500 dark:text-gray-400">{{ $product->rating_1 }}</span>
                    </div>
                    <div class="w-full">
                        <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                            <div class="h-[5px] bg-yellow-400 rounded-full"
                                style="width: {{ $ratingCounts == 0 ? 0 : ($product->rating_1 / $ratingCounts) * 100 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--end card-->
    </div><!--end col-->
</div><!--end grid-->
