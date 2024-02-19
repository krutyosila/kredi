<?php

namespace App\Http\Controllers;

use App\Mail\NewCustomer;
use App\Mail\NotifyCustomer;
use App\Models\Bank;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Mockery\Matcher\Not;

class MainController extends Controller
{
    public function home()
    {
        $banks = Bank::all();
        return view('welcome', compact('banks'));
    }

    public function bank(Request $request, Bank $bank)
    {
        $banks = Bank::all();
        return view('bank', compact('bank', 'banks'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string']
        ]);
        if($request->get('email')) {
            $request->validate(['email' => ['email']]);
        }
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->phone = '+9' . Str::replace(' ', '', $request->get('phone'));
        $customer->save();
        if($request->get('email')) {
            Mail::to($request->get('email'))->send(new NewCustomer($customer));
        }
        Mail::to(config('mail.from.address'))->send(new NotifyCustomer($customer));
        return back()->with(['success' => true]);
    }
}
