<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    // Отображение формы регистрации
    public function showRegistrationForm()
    {
        return view('auth.register');  // Это Blade-шаблон для регистрации
    }

    // Обработка данных из формы регистрации
    public function register(Request $request)
    {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Создание нового пользователя
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Запуск события регистрации
        event(new Registered($user));

        // Аутентификация пользователя
        auth()->login($user);

        // Перенаправление на домашнюю страницу или на страницу, которую вы хотите
        return redirect()->route('main');
    }
}


