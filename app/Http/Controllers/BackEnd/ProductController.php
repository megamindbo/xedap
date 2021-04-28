<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackEndProductCreateRequest;
use App\Http\Requests\BackEndProductUpdateRequest;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductDetails;
use App\Model\Category;
use DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCategories = Category::all();
        return view('backend.product.create', compact('listCategories'));
    }

    /**
     * @param BackEndProductCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BackEndProductCreateRequest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); // get image extension
                $filename = time() . '.' . $extension;
                $file->move('img/frontend/product/all/', $filename);
            } else {
                return redirect()->back()->with('error', 'No image import');
            }
            $dataProduct = $request->except('_token', 'image', 'nhan_hieu', 'xuat_xu',
                'hang_san_xuat', 'khung', 'bao_hanh', 'giay_chung_nhan', 'kich_thuoc', 'lop_truoc', 'lop_sau',
                'mau_sac', 'cong_suat', 'dong_co', 'van_toc', 'ac_quy', 'thoi_gian_sac', 'trong_luong', 'den_xe');
            $dataProduct['image'] = $filename;
            $dataProductDetails = $request->except('_token', 'image', 'ten_san_pham', 'category_id', 'so_luong',
                'slug', 'gia_san_pham', 'giam_gia', 'mo_ta');
            Product::create($dataProduct);
            ProductDetails::create($dataProductDetails);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Tạo sản phẩm thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
        }

    }

    /**
     * @param $id
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function edit($id)
    {
        try {
            $listCategories = Category::all();
            $product = Product::find($id);
            $sku = productDetails::where('sku',$product->sku)->get()->toArray();
            $productDetails = productDetails::find($sku['0']['id']);
            $categoryOfProduct = $product->category()->pluck('id');
            return view('backend.product.edit', compact('listCategories', 'product', 'categoryOfProduct','productDetails'));
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
        }
    }

    /**
     * @param BackEndProductUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BackEndProductUpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $product = Product::find($id);
            $filename = null;
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); // get image extension
                $filename = time() . '.' . $extension;
                $file->move('img/frontend/product/all/', $filename);
            }
            $dataProduct = $request->except('_token','_method', 'image', 'nhan_hieu', 'xuat_xu',
                'hang_san_xuat', 'khung', 'bao_hanh', 'giay_chung_nhan', 'kich_thuoc', 'lop_truoc', 'lop_sau',
                'mau_sac', 'cong_suat', 'dong_co', 'van_toc', 'ac_quy', 'thoi_gian_sac', 'trong_luong', 'den_xe');
            $dataProduct['image'] = $request->hasfile('image') ? $filename : $product->image;
            $dataProductDetails = $request->except('_token', '_method','image', 'ten_san_pham', 'category_id', 'so_luong',
                'slug', 'gia_san_pham', 'giam_gia', 'mo_ta');

            $product->update($dataProduct);
            ProductDetails::where('sku',$product->sku)->update($dataProductDetails);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }
}
