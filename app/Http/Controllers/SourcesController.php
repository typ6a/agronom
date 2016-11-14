<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Source; ///
use App\Repositories\SourcesRepository;

class SourcesController extends Controller {

    protected $sources;

    /**
     * Create a new controller instance.
     *
     * @param  CatalogRepository  $categories
     * @return void
     */
    //public function __construct(SourcesRepository $sources) {
    //    //$this->middleware('auth');
    //
    //    $this->$sources = $sources;
    //}

    /**
     * Display a list of all of the categories.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index() {
        $sources = \App\Models\Source::whereNull('parent_id')->get();
        return view('sources.index', [
            'sources' => $sources,
               //'products' => $products
        ]);
    }

    public function source($source_id = null) {
        $source = \App\Models\Source::find($source_id);
        $sources = \App\Models\Source::where('parent_id', $source_id)->get();
       
        return view('sources.source', [
            'source' => $source,
            'sources' => $sources,
        ]);
    }

    // http://products.localhost/agronom/ad/1123
    public function ad($ad_id) {
        $ad = \App\Models\Ad::find($ad_id);
        //$category = \App\Models\Product\ProductCategory::find($category_id);
        //$properties = $product->properties;//->groupBy('product_property_id');
        //$images = $product->images;
         pre($ad);
        return view('sources.ad', [
            'ad' => $ad,
                //'category' => $category,
                //'properties' => $properties,
                //'images' => $images
        ]);
    }

    public function addProduct(Request $request) {

        $categories = $categories = \App\Models\ProductCategory::whereNull('parent_id')->get();

        $category_id = $request->input('category_id');
        $product_title = $request->input('product_title');
        $product_price = $request->input('product_price');
        $product_image = $request->input('product_image');

        $product = new \App\Models\Product([
            'category_id' => $category_id,
            'title' => $product_title,
            'price' => $product_price
        ]);
        //pre ($product,1);
        //$image = new \App\Models\ProductImage([
        //'product_id' => $product->id,
        // 'filename' => $filename,
        //]);

        if ($request->getMethod() === 'POST') {
            //pre($_FILES);
            $valid = $this->validate($request, [
                'product_title' => 'required|unique:posts|max:255',
                'category_id' => 'required',
                'product_price' => 'required',
            ]);
            if ($valid) {
                $product->save();
                $image->save();
                pre($product_id, 1);
            } else {
                
            }
        }


        //$data = '';

        return view('catalog/productForm', [
            'categories' => $categories
        ]);
    }

    public function addP(Request $request) {
        $categories = $categories = \App\Models\ProductCategory::whereNull('parent_id')->get();


        return view('catalog/form', [
            'categories' => $categories
        ]);
    }

}
