<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>تسجيل الدخول - منصة التفوق التعليمية</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        display: ["Cairo", "sans-serif"],
                        body: ["Cairo", "sans-serif"],
                    },
                    colors: {
                        primary: "#0EA5E9",
                        secondary: "#a66a1f",
                        "primary-dark": "#0284C7",
                        "background-light": "#F8FAFC",
                        "surface-light": "#FFFFFF",
                        "text-light": "#334155",
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'xl': '1rem',
                        '2xl': '1.5rem',
                    },
                    boxShadow: {
                        'soft': '0 4px 6px -1px rgba(0, 0, 0, 0.05)',
                        'card': '0 10px 15px -3px rgba(0, 0, 0, 0.1)',
                    }
                },
            },
        };
    </script>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet" />
</head>

<body class="bg-background-light min-h-screen flex items-center justify-center p-4">
    <!-- Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Main Container -->
    <div class="relative w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl gradient-bg shadow-card mb-4">
                <span class="material-icons-round text-white text-4xl">school</span>
            </div>
            <h1 class="text-2xl font-bold text-text-light mb-2">منصة التفوق التعليمية</h1>
            <p class="text-gray-500 text-sm">تسجيل الدخول للمتابعة</p>
        </div>

        <!-- Login Card -->
        <div class="glass-effect rounded-2xl shadow-card p-8">
            <!-- Role Selection -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-text-light mb-3">اختر نوع الحساب</label>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Teacher/Admin/Owner Role -->
                    <div class="role-card border-2 border-gray-200 rounded-xl p-4 text-center" onclick="selectRole('teacher')" id="teacher-role">
                        <div class="role-icon material-icons-round text-3xl text-gray-400 mb-2">admin_panel_settings</div>
                        <div class="font-semibold text-text-light">مدير المنصة</div>
                        <div class="text-xs text-gray-500 mt-1">Owner / Admin</div>
                    </div>
                    <!-- Student Role -->
                    <div class="role-card border-2 border-gray-200 rounded-xl p-4 text-center selected" onclick="selectRole('student')" id="student-role">
                        <div class="role-icon material-icons-round text-3xl text-primary mb-2">school</div>
                        <div class="font-semibold text-text-light">طالب</div>
                        <div class="text-xs text-gray-500 mt-1">Student</div>
                    </div>
                </div>
                <input type="hidden" name="role" id="role-input" value="student">
            </div>

            <!-- Login Form -->
            <form id="login-form" class="space-y-5">
                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-2">البريد الإلكتروني</label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">email</span>
                        <input type="email" name="email" id="email" required
                            class="input-field w-full pr-10 pl-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="example@email.com">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-2">كلمة المرور</label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">lock</span>
                        <input type="password" name="password" id="password" required
                            class="input-field w-full pr-10 pl-12 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePassword()"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <span class="material-icons-round" id="toggle-icon">visibility_off</span>
                        </button>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                        <span class="text-sm text-gray-600">تذكرني</span>
                    </label>
                    <a href="#" class="text-sm text-primary hover:text-primary-dark transition-colors">نسيت كلمة المرور؟</a>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full gradient-bg text-white font-bold py-3 px-6 rounded-xl shadow-soft hover:shadow-card transition-all transform hover:-translate-y-0.5">
                    تسجيل الدخول
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">أو</span>
                </div>
            </div>

            <!-- Register Link - Only for Students -->
            <div class="text-center">
                <p class="text-gray-600 mb-2">ليس لديك حساب طالب؟</p>
                <a href="{{ route('register') }}" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition-colors">
                    <span>إنشاء حساب طالب جديد</span>
                    <span class="material-icons-round">arrow_back</span>
                </a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
