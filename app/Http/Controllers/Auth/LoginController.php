<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Конструктор контроллера
    public function __construct()
    {
        // Если вы хотите контролировать доступ, сделайте это через маршруты
        // $this->middleware('guest')->except('logout'); // Уберите или закомментируйте это
    }

    // Метод для отображения формы входа
    public function showLoginForm()
    {
        return view('auth.login'); // Убедитесь, что этот view существует
    }

    // Метод для аутентификации пользователя
    public function login(Request $request)
    {
        // Валидация данных с формы входа
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации
        if (Auth::attempt($credentials)) {
            // Если аутентификация прошла успешно, перенаправляем на домашнюю страницу или другую
            return redirect()->intended(route('main'));
        }

        // Если не удалось аутентифицировать, возвращаем на форму входа с ошибкой
        return back()->withErrors([
            'email' => 'Неверные учетные данные.',
        ]);
    }

    // Метод для выхода пользователя
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/main');
    }
}

