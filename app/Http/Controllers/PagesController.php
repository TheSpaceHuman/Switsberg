<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Comment;
use App\Counter;
use App\HistoryCompany;
use App\MainReview;
use App\Product;
use App\ProductCategory;
use App\SimpleGallery;
use App\Subscriber;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
//use TCG\Voyager\Models\Post;
use App\Post;

class PagesController extends Controller
{

  public function index()
  {

    $currentPage = Page::where('slug', '/')->where('status', 'ACTIVE')->firstOrFail();
    $products = Product::orderBy('title', 'ASC')->get();
    $productCategories = ProductCategory::orderBy('title', 'ASC')->get();
    $posts = Post::latest()->limit(3)->get();
    $mainReviews = MainReview::all();
    $historyItems = HistoryCompany::orderBy('sort', 'DESC')->get();
    $advantages = Advantage::orderBy('sort', 'DESC')->get();


    return view('pages.index', compact('currentPage', 'products', 'productCategories', 'posts', 'mainReviews', 'historyItems', 'advantages'));
  }

  public function about()
  {
    $currentPage = Page::where('slug', 'about')->where('status', 'ACTIVE')->firstOrFail();
    $partnerSlider = SimpleGallery::where('id', 2)->first();
    $history_companies = HistoryCompany::orderBy('sort', 'DESC')->get();
    $counters = Counter::orderBy('sort', 'DESC')->get();

    return view('pages.about', compact('currentPage', 'partnerSlider', 'history_companies', 'counters'));
  }

  public function contact()
  {
    $currentPage = Page::where('slug', 'contact')->where('status', 'ACTIVE')->firstOrFail();

    return view('pages.contact', compact('currentPage'));
  }

  public function blog()
  {
    $currentPage = Page::where('slug', 'blog')->where('status', 'ACTIVE')->firstOrFail();
    $categories = Category::orderBy('name', 'ASC')->get();
    $posts = Post::orderBy('created_at', 'DESC')->paginate(6);

    return view('pages.blog', compact('currentPage', 'categories', 'posts'));
  }

  public function category($slug)
  {
    $category = Category::where('slug', $slug)->firstOrFail();
    $categories = Category::orderBy('name', 'ASC')->get();
    $posts = Post::orderBy('created_at', 'DESC')->where('category_id', $category->id)->paginate(6);

    return view('pages.category', compact('category', 'categories', 'posts'));
  }

  public function post($slug)
  {
    $post = Post::where('slug', $slug)->firstOrFail();
    $categories = Category::orderBy('name', 'ASC')->get();
    $comments = Comment::orderBy('created_at', 'DESC')->where('post_id', $post->id)->where('active', 'ACTIVE')->get();


    return view('pages.post', compact('post', 'categories', 'comments'));
  }

  public function products()
  {
    $currentPage = Page::where('slug', 'products')->where('status', 'ACTIVE')->firstOrFail();
    $products = Product::orderBy('title', 'ASC')->get();
    $productCategories = ProductCategory::orderBy('title', 'ASC')->get();

    return view('pages.products', compact('currentPage', 'products', 'productCategories'));
  }

  public function product($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();
    $galleryEmpty = null;
    if ($product->images === '[]') {
      $galleryEmpty = false;
    } else {
      $galleryEmpty = true;
    }

    return view('pages.product', compact('product', 'galleryEmpty'));
  }

  public function test()
  {
    $productCategory = ProductCategory::find(1);
    $product = Product::find(3);
//    dd($product->categories);
    dd($productCategory);
  }

  public function subscribe(Request $request)
  {
    $this->validate($request, [
        'email' => 'required|max:255',
    ]);

    $subscribe = new Subscriber;
    $subscribe->email = $request->email;
    $subscribe->save();

    return back()->with('success-message', 'Вы успешно подписались на рассылку');

  }

  public function search(Request $request)
  {
    $posts = Post::search($request->search)->get();
    $products = Product::search($request->search)->get();

    return view('pages.search', compact('posts', 'products'));
  }


}
