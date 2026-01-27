<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function cart() { return view('pages.cart'); }
    public function wishlist() { return view('pages.wishlist'); }
    public function about() {

    return view('pages.about'); }
    public function contact() { return view('pages.contact'); }

    public function vote() { return view('pages.vote'); }
    public function checkout() {
         return view('pages.checkout'); }

    public function admin() { return view('pages.admin'); }

    // Product listing
    public function product(Request $request)
    {
        return view('pages.product');
    }

    // Donation detail page
    public function product_detail($id)
    {
        return view('pages.product_detail');
    }


    // Contact form submission
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            Mail::to(config('custom.email'))
                ->send(new ContactMail($validated));

            return back()->with('success', 'Message sent successfully.');
        } catch (\Throwable $e) {
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
