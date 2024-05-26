<?php

namespace App\View\Components\Customers;

use App\Models\Product;
use App\Models\Rating as RatingModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Rating extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $productId
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $product = Product::withCount([
            'rating as rating_1' => function ($query) {
                $query->where('total', 1);
            },
            'rating as rating_2' => function ($query) {
                $query->where('total', 2);
            },
            'rating as rating_3' => function ($query) {
                $query->where('total', 3);
            },
            'rating as rating_4' => function ($query) {
                $query->where('total', 4);
            },
            'rating as rating_5' => function ($query) {
                $query->where('total', 5);
            }
        ])->find($this->productId);

        $ratingCounts = RatingModel::where('product_id', $this->productId)->count();

        $avg_rating = 0;

        if ($ratingCounts > 0) {
            $avg_rating = (($product->rating_5 * 5) + ($product->rating_4 * 4) + ($product->rating_3 * 3) + ($product->rating_2 * 2) + ($product->rating_1 * 1)) / $ratingCounts;
        }

        return view('components.customers.rating', compact('product', 'ratingCounts', 'avg_rating'));
    }
}
