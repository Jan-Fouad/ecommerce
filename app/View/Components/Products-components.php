<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductsComponent extends Component
{
    public $products;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // جلب جميع المنتجات من قاعدة البيانات
        $this->products = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products-component');
    }
}
