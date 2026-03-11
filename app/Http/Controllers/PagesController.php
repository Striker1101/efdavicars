<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    private $news = [
        []
    ];

    // Pages


    public function home()
    {
        return view('pages.home');
    }

    public function cart()
    {
        $allProducts = config('cars.products');
        return view('pages.cart', compact('allProducts'));
    }
    public function wishlist()
    {
        $allProducts = config(key: 'cars.products');
        return view('pages.wishlist', compact('allProducts'));
    }
    public function about()
    {

        return view('pages.about');
    }
    public function contact()
    {

        return view('pages.contact');
    }

    public function vote()
    {
        $agents = config(key: 'agents');
        return view('pages.vote', compact('agents'));
    }
    public function checkout()
    {
        return view('pages.checkout');
    }

    public function admin()
    {
        return view('pages.admin');
    }


    public function service()
    {
        return view('pages.services.index');
    }

    public function service_detail($id)
    {
        // Find the service by ID in the config array
        $service = collect(config('services_data'))->firstWhere('id', $id);

        if (!$service) {
            abort(404);
        }

        // 2. Get 6 random services, excluding the current one
        $relatedServices = collect(config('services_data'))
            ->where('id', '!=', $id) // Don't show the same service
            ->shuffle()              // Randomize
            ->take(6);               // Take exactly 6

        return view('pages.services.service_detail', compact('service', 'relatedServices'));
    }

    // Product listing

    public function product(Request $request)
    {
        $allProducts = collect(config('cars.products'));

        // 1. Search Filter (Name or Model)
        if ($request->filled('search')) {
            $allProducts = $allProducts->filter(function ($item) use ($request) {
                return str_contains(strtolower($item['name']), strtolower($request->search)) ||
                    str_contains(strtolower($item['model']), strtolower($request->search));
            });
        }

        // 2. Category Filter
        if ($request->filled('category') && $request->category !== 'All') {
            $allProducts = $allProducts->filter(fn($item) => in_array($request->category, $item['category']));
        }

        // 3. Fuel/Property Filter (Example: Petrol, Electric)
        if ($request->filled('type')) {
            $allProducts = $allProducts->filter(fn($item) => in_array($request->type, $item['properties']));
        }

        // 4. Price Range Filter
        if ($request->filled('min_price')) {
            $allProducts = $allProducts->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $allProducts = $allProducts->where('price', '<=', $request->max_price);
        }

        // 5. Sorting
        if ($request->sort === 'price_low') {
            $allProducts = $allProducts->sortBy('price');
        } elseif ($request->sort === 'price_high') {
            $allProducts = $allProducts->sortByDesc('price');
        }

        // 6. Manual Pagination (10 per page)
        $currentPage = $request->input('page', 1);
        $perPage = 10;
        $currentItems = $allProducts->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $products = new LengthAwarePaginator(
            $currentItems,
            $allProducts->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('pages.product', [
            'products' => $products,
            'categories' => config('cars.categories'),
        ]);
    }

    // Donation detail page
    public function product_detail($id)
    {
        $product = collect(config('cars.products'))->firstWhere('id', $id);

        if (!$product)
            abort(404);

        // Get 4 random cars for the "You May Also Like" section
        $related = collect(config('cars.products'))->where('id', '!=', $id)->shuffle()->take(4);

        return view('pages.product_detail', compact('product', 'related'));
    }


    // Contact form submission
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string', // Added validation for subject
            'message' => 'required|string',
        ]);

        // Check if the submission came from the Cart
        $isCart = $request->input('subject') === 'Purchase Inquiry';

        try {
            Mail::to(config('custom.email'))
                ->send(new ContactMail($validated));

            // If it's a cart inquiry, redirect to the clean route to reset the Alpine.js state
            if ($isCart) {
                return redirect()->route('contact') // Assuming your route name is 'contact'
                    ->with('success', 'Your order inquiry has been sent successfully.');
            }

            return back()->with('success', 'Message sent successfully.');

        } catch (\Throwable $e) {
            // Log the error for debugging
            \Log::error("Mail fail: " . $e->getMessage());

            return back()->with('error', 'Failed to send message. Please try again.');
        }
    }

    // Donation form submission
    public function submitReview(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'rating' => 'required|string',
            'review' => 'nullable|string',
            'email' => 'required|email',
            'product_id' => 'required|exists:products,id',
        ]);

        return redirect()->back()->with('success', 'Donation recorded');
    }

    // Donation form submission
    public function submitVote(Request $request)
    {
        $data = $request->validate([
            'voters_id' => 'required|string',
            'rating' => 'required|string',
            'amount' => 'required|numeric',
            'email' => 'required|email',
            'voters_id' => 'required|exists:products,id',
        ]);

        return redirect()->back()->with('success', 'Donation recorded');
    }

}
