@extends('layouts.admin.admin')


@section('titre', 'Modifier utilisateur')
    
@section('style')

@endsection

@section('content')
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Modifier l'utilisateur</h1>

        <div class="bg-white p-6 rounded shadow-md w-full max-w-xl">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Username</label>
                    <input type="text" name="username" value="{{ old('username', $user->username) }}"
                        class="w-full px-4 py-2 border rounded @error('username') border-red-500 @enderror">
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                        class="w-full px-4 py-2 border rounded @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Rôle</label>
                    <select name="role" class="w-full px-4 py-2 border rounded @error('role') border-red-500 @enderror">
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Utilisateur</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrateur</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('admin.users') }}" class="text-gray-600 hover:underline">← Retour</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
@endsection

@section('script')
    
@endsection


