<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = trim($request->input('username'));

        if ($username === '' || $username === null) {
            $username = 'guest';
        }

        return redirect()->route('dashboard', ['username' => $username]);
    }

    private function ensureUsername(Request $request)
    {
        return $request->query('username', 'guest');
    }

    public function dashboard(Request $request)
    {
        $username = $this->ensureUsername($request);
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $this->ensureUsername($request);

        $products = [
            ['id' => 1, 'nama' => 'Raket Yonex Astrox 100ZZ', 'harga' => 2800000, 'stok' => 5],
            ['id' => 2, 'nama' => 'Shuttlecock Feather (12 pcs)', 'harga' => 150000, 'stok' => 20],
            ['id' => 3, 'nama' => 'Grip Karet Lining', 'harga' => 25000, 'stok' => 100],
            ['id' => 4, 'nama' => 'Tas Raket 3-in-1', 'harga' => 350000, 'stok' => 12],
            ['id' => 5, 'nama' => 'Sepatu Yonex Power Cushion', 'harga' => 900000, 'stok' => 8],
        ];

        return view('pengelolaan', compact('products', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $this->ensureUsername($request);

        $profile = [
            'nama' => $username,
            'email' => strtolower($username).'@gmail.com',
        ];

        return view('profile', compact('profile'));
    }
}
