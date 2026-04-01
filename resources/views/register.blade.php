<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>إنشاء حساب طالب - منصة التفوق التعليمية</title>
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
    <div class="relative w-full max-w-lg">
        <!-- Logo -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-bg shadow-card mb-3">
                <span class="material-icons-round text-white text-3xl">school</span>
            </div>
            <h1 class="text-2xl font-bold text-text-light">إنشاء حساب طالب</h1>
            <p class="text-gray-500 text-sm mt-1">انضم إلى منصة التفوق التعليمية</p>
        </div>

        <!-- Registration Card -->
        <div class="glass-effect rounded-2xl shadow-card p-6">
            <form id="register-form" class="space-y-4">
                <!-- Full Name -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">الاسم الكامل <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">person</span>
                        <input type="text" name="name" id="name" required
                            class="input-field w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="أحمد محمد">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">البريد الإلكتروني <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">email</span>
                        <input type="email" name="email" id="email" required
                            class="input-field w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="example@email.com">
                    </div>
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">رقم الهاتف</label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">phone</span>
                        <input type="tel" name="phone" id="phone"
                            class="input-field w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="01xxxxxxxxx">
                    </div>
                </div>

                <!-- Grade -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">الصف الدراسي <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">grade</span>
                        <select name="grade" id="grade" required
                            class="input-field w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right bg-white">
                            <option value="">اختر الصف الدراسي</option>
                            <optgroup label="المرحلة الابتدائية">
                                <option value="1">الصف الأول الابتدائي</option>
                                <option value="2">الصف الثاني الابتدائي</option>
                                <option value="3">الصف الثالث الابتدائي</option>
                                <option value="4">الصف الرابع الابتدائي</option>
                                <option value="5">الصف الخامس الابتدائي</option>
                                <option value="6">الصف السادس الابتدائي</option>
                            </optgroup>
                            <optgroup label="المرحلة الإعدادية">
                                <option value="7">الصف الأول الإعدادي</option>
                                <option value="8">الصف الثاني الإعدادي</option>
                                <option value="9">الصف الثالث الإعدادي</option>
                            </optgroup>
                            <optgroup label="المرحلة الثانوية">
                                <option value="10">الصف الأول الثانوي</option>
                                <option value="11">الصف الثاني الثانوي</option>
                                <option value="12">الصف الثالث الثانوي</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- Parent Phone -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">رقم هاتف ولي الأمر</label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">contact_phone</span>
                        <input type="tel" name="parent_phone" id="parent_phone"
                            class="input-field w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="01xxxxxxxxx">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">كلمة المرور <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">lock</span>
                        <input type="password" name="password" id="password" required minlength="8"
                            class="input-field w-full pr-10 pl-12 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePassword('password', 'toggle-icon-1')"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <span class="material-icons-round text-lg" id="toggle-icon-1">visibility_off</span>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">يجب أن تكون 8 أحرف على الأقل</p>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-semibold text-text-light mb-1">تأكيد كلمة المرور <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="material-icons-round absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">lock_reset</span>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="input-field w-full pr-10 pl-12 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-primary text-right"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePassword('password_confirmation', 'toggle-icon-2')"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <span class="material-icons-round text-lg" id="toggle-icon-2">visibility_off</span>
                        </button>
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-start gap-2">
                    <input type="checkbox" name="terms" id="terms" required class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                    <label for="terms" class="text-sm text-gray-600">
                        أوافق على <a href="#" class="text-primary hover:underline">شروط الاستخدام</a> و <a href="#" class="text-primary hover:underline">سياسة الخصوصية</a>
                    </label>
                </div>

                <!-- Submit -->
                <button type="submit" class="w-full gradient-bg text-white font-bold py-3 rounded-xl shadow-soft hover:shadow-card transition-all">
                    إنشاء الحساب
                </button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-4 pt-4 border-t border-gray-200">
                <p class="text-gray-600 text-sm">
                    لديك حساب بالفعل؟
                    <a href="{{ route('login') }}" class="text-primary font-semibold hover:text-primary-dark transition-colors">تسجيل الدخول</a>
                </p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
