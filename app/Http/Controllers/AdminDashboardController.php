<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function index()
    {
        $totalUsers = User::count();
        $totalFilleuls = User::whereNotNull('referred_by')->count();
        $latestUsers = User::latest()->take(5)->get();

        return view('Admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalFilleuls' => $totalFilleuls,
            'latestUsers' => $latestUsers,
        ]);
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $user->update($request->only('username', 'email', 'role'));

        return redirect()->route('admin.users')->with('success', 'Utilisateur mis à jour');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Utilisateur supprimé');
    }

}
