<?php

namespace App\Http\Controllers\Webs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Product;
use App\Models\Event;
use App\Models\MailingList;
use App\Models\SpecialProduct;
use App\Models\Order;
use App\Models\OrderItem;
use Str;
use Validator;
use Illuminate\Validation\Rule;
class HomeController extends Controller
{

    public function placeOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'table_no' => 'required',

        ]);

        if($validator->fails()){

            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            # code...
            $cart = $this->cartData();
            if ($cart['cart']->count() > 0) {
                # code...
                $order_data['name'] = $request->name;
                $order_data['table_no'] = $request->table_no;
                $order_data['order_no'] = '#'.time();
                $order_data['amount'] = $cart['total'];
                $order = Order::create($order_data);

                foreach ($cart['cart'] as $key => $value) {

                    $order_item_data['order_id'] = $order->id;
                    $order_item_data['product_id'] = $value['id'];
                    $order_item_data['price'] = $value['price'];
                    $order_item_data['qty'] = $value['quantity'];
                    OrderItem::create($order_item_data);

                }


                return redirect()->back()->with(['type'=>'success','message'=>"Order Place Successfully"]);
            }

            return redirect()->back()->with(['type'=>'error','message'=>"Cart is Empty"]);
        } catch (\Throwable $e) {

            return redirect()->back()->with(['type'=>'error','message'=>"Something went wrong"]);
        }

    }

    public function saveIntoMailingList(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'd_o_b' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        MailingList::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'd_o_b'=>$request->d_o_b,
        ]);
        return redirect()->back();
    }
    public function index(){
        $data['menu'] = Menu::where('status',1)->get();
        $data['events'] = Event::where('status',1)->get();
        $data['special_products'] = SpecialProduct::where('status',1)->get();
        return view('website.pages.home',compact('data'));
    }
    public function product(Request $request){
        $perPage = 1;
        $page = $request->page ?? 1;
        $offset = ($page - 1) * $perPage;

        $menuSlug = $request->slug;
        $categorySlug = $request->category;

        $data['menu'] = Menu::where('slug',$request->slug)->first();
        $categoriesQuery = Category::where('menu_id', $data['menu']->id);

        if ($categorySlug && $categorySlug != 'all') {
            $categoriesQuery->where('slug', $categorySlug);
        }
        $data['categories_list'] = $categoriesQuery->get();
        $categoriesQuery->skip($offset)
        ->take($perPage);
        $data['categories'] = $categoriesQuery->with('products')->get();

        if ($request->ajax()) {
            return view('website.pages.products_list',compact('data','page'));
        }
        return view('website.pages.menu',compact('data','page'));
    }

    public function cart(Request $request){

        $qty = $request->qty;
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        if ($qty == 0) {
            $this->remove($product);
            $cart = $this->cartData();
            return view('website.pages.ajax.order_table',compact('cart'));

        }elseif ($qty == 1) {
            $this->update($product, $qty);
            $cart = $this->cartData();
            return view('website.pages.ajax.order_table',compact('cart'));
        }elseif ($qty > 1) {
            $this->update($product, $qty);
            $cart = $this->cartData();
            return view('website.pages.ajax.order_table',compact('cart'));
        }else{
            $cart = $this->cartData();
            return view('website.pages.ajax.order_table',compact('cart'));
        }


    }
    public function createSummary(Request $request){
        $cart = $this->cartData();
        return view('website.pages.ajax.order_table',compact('cart'));
    }
    public function cartData(){
        $data['cart'] = \Cart::getContent();
        $data['total'] = \Cart::getTotal();

        return $data;
    }

    public function add($product, $qty){
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $qty,
            'attributes' => array(
                'image' => $product->image,
                'slug' => $product->slug
            )
        ));
        return true;
    }

    public function update($product, $qty){
        $cartItem = \Cart::get($product->id);

        if ($cartItem !== null) {
            // Product is already in the cart, increment its quantity by 1

            \Cart::update($product->id, [
                'quantity' => [
                    'relative' => false,
                    'value' => $qty,
                ],
            ]);
        } else {
            // Product is not in the cart, add it with quantity 1
            \Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $qty,
                'attributes' => [
                    'image' => $product->image,
                    'slug' => $product->slug,
                ],
            ]);
        }
        return true;
    }

    public function remove($product){
        \Cart::remove($product->id);
        return true;
    }
}
