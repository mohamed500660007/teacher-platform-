<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>منصة التفوق التعليمية</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap"
        rel="stylesheet" />
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
                        primary: "#0EA5E9", // Sky Blue
                        secondary: "#a66a1f", // Yellow
                        "primary-dark": "#0284C7",
                        "background-light": "#F8FAFC",
                        "background-dark": "#0F172A",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1E293B",
                        "text-light": "#334155",
                        "text-dark": "#E2E8F0",
                        "accent-pink": "#F43F5E",
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'xl': '1rem',
                        '2xl': '1.5rem',
                        '3xl': '2rem',
                    },
                    boxShadow: {
                        'soft': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                        'card': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                    }
                },
            },
        };
    </script>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark transition-colors duration-300">
    <!-- Educational Loader -->
    <div id="eduLoader" class="fixed inset-0 bg-white dark:bg-gray-900 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="material-icons-round text-3xl text-white">school</span>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">منصة التفوق</h2>
            </div>
            <div class="flex justify-center mb-4">
                <div class="loading-spinner">
                    <div class="spinner-circle"></div>
                    <div class="spinner-circle"></div>
                    <div class="spinner-circle"></div>
                </div>
            </div>
            <p class="text-gray-600 dark:text-gray-400 text-sm">جاري التحميل...</p>
        </div>
    </div>

    <!-- Main Content (Hidden initially) -->
    <div id="mainContent" style="display: none;">
        <!-- Navigation -->
        <nav class="sticky top-0 z-50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-xl shadow-lg border-b border-gray-100/50 dark:border-gray-800/50">
            <div class="container mx-auto px-4 h-20 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity blur-xl">
                        </div>
                        <div class="relative text-3xl font-black bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/25 transform group-hover:scale-110 transition-transform">
                                <span class="material-icons-round text-white text-2xl">school</span>
                            </div>
                            <span class="tracking-tight">التفوق</span>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center gap-8">
                    <a class="relative group font-semibold text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300" href="#home">
                        <span class="relative z-10">الرئيسية</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a class="relative group font-semibold text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300" href="#features">
                        <span class="relative z-10">المميزات</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a class="relative group font-semibold text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300" href="#courses">
                        <span class="relative z-10">الكورسات</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a class="relative group font-semibold text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300" href="#how-it-works">
                        <span class="relative z-10">كيفية العمل</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a class="relative group font-semibold text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300" href="#contact">
                        <span class="relative z-10">تواصل معنا</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}" class="relative group bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary/80 text-white px-8 py-3 rounded-2xl font-bold text-sm shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/30 transform hover:scale-105 transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <span class="relative flex items-center gap-2">
                            <span class="material-icons-round text-base">login</span>
                            <span>تسجيل الدخول</span>
                        </span>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden relative group p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <span class="material-icons-round text-2xl text-gray-700 dark:text-gray-300">menu</span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header id="home" class="relative pt-10 pb-20 overflow-hidden bg-gradient-to-br from-primary/5 via-white to-secondary/5 dark:from-primary/10 dark:via-gray-900 dark:to-secondary/10">
            <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
                <div class="text-center md:text-right order-2 md:order-1 space-y-6 fade-in">
                    <h1 class="text-4xl md:text-6xl font-black text-primary leading-tight">
                        منصتك التعليمية <span class="text-secondary">للمراحل الدراسية</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-bold">
                        دروس فيديو، امتحانات، وتحليل أداء
                    </p>
                    <div class="pt-4 flex justify-center md:justify-start gap-4">
                        <a href="{{ route('register') }}" class="btn-enhanced bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all">
                            ابدأ الآن
                        </a>
                        <button class="btn-enhanced border-2 border-primary text-primary dark:text-white dark:border-white px-8 py-4 rounded-full font-bold text-lg hover:bg-primary hover:text-white dark:hover:bg-white dark:hover:text-primary transition-all">
                            عرض المواد
                        </button>
                    </div>
                </div>
                <div class="relative order-1 md:order-2 flex justify-center fade-in">
                    <div class="relative">
                        <img alt="Student Learning" class="relative z-10 w-full max-w-md object-contain rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800" src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400&h=400&fit=crop" />
                        <div class="absolute -top-3 -right-3 bg-white dark:bg-surface-dark rounded-xl shadow-md p-2 animate-bounce">
                            <span class="material-icons-round text-primary text-lg">school</span>
                        </div>
                        <div class="absolute -bottom-3 -left-3 bg-primary text-white rounded-xl shadow-md p-2 animate-pulse">
                            <span class="material-icons-round text-lg">emoji_events</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Features Overview Section -->
        <section id="features" class="py-16 bg-white dark:bg-surface-dark relative">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-12">
                    <div class="inline-block relative mb-4">
                        <h2 class="text-3xl md:text-4xl font-black text-primary">
                            <span class="text-secondary">مميزات</span> المنصة
                        </h2>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full">
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mt-4 max-w-xl mx-auto">
                        كل ما تحتاجه للتفوق الدراسي في مكان واحد
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Feature 1 -->
                    <div class="card-hover bg-gradient-to-br from-primary/5 to-primary/10 dark:from-primary/20 dark:to-primary/10 rounded-2xl p-8 text-center border border-primary/20">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-dark rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <span class="material-icons-round text-white text-3xl">video_library</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">دروس فيديو عالية الجودة</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            محتوى تعليمي متكامل بجودة عالية مع أفضل المدرسين المتخصصين في جميع المواد
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="card-hover bg-gradient-to-br from-secondary/5 to-secondary/10 dark:from-secondary/20 dark:to-secondary/10 rounded-2xl p-8 text-center border border-secondary/20">
                        <div class="w-20 h-20 bg-gradient-to-br from-secondary to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <span class="material-icons-round text-white text-3xl">quiz</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">امتحانات مع تصحيح فوري</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            نظام امتحانات متقدم مع تصحيح فوري وتحليل مفصل للأداء والنتائج
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="card-hover bg-gradient-to-br from-purple-500/5 to-purple-500/10 dark:from-purple-500/20 dark:to-purple-500/10 rounded-2xl p-8 text-center border border-purple-500/20">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <span class="material-icons-round text-white text-3xl">trending_up</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">متابعة التقدم والدرجات</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            نظام متابعة شامل للتقدم الأكاديمي مع تقارير مفصلة ونصائح للتحسين
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <div class="inline-block relative mb-4">
                        <h2 class="text-3xl md:text-4xl font-black text-primary">
                            كيفية <span class="text-secondary">العمل</span>
                        </h2>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full">
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mt-4 max-w-xl mx-auto">
                        ابدأ رحلتك التعليمية في 4 خطوات بسيطة
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
                    <!-- Step 1 -->
                    <div class="text-center">
                        <div class="step-number mx-auto mb-4">1</div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">إنشاء حساب</h3>
                        <p class="text-gray-600 dark:text-gray-400">سجل حسابك مجاناً في أقل من دقيقة</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center">
                        <div class="step-number mx-auto mb-4">2</div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">اختر المادة</h3>
                        <p class="text-gray-600 dark:text-gray-400">اختر المادة والصف الدراسي المناسب لك</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center">
                        <div class="step-number mx-auto mb-4">3</div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">ابدأ التعلم</h3>
                        <p class="text-gray-600 dark:text-gray-400">شاهد الدروس وحل الامتحانات</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center">
                        <div class="step-number mx-auto mb-4">4</div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">تابع التقدم</h3>
                        <p class="text-gray-600 dark:text-gray-400">راقب أدائك وتحسن درجاتك</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-white dark:bg-surface-dark">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <div class="inline-block relative mb-4">
                        <h2 class="text-3xl md:text-4xl font-black text-primary">
                            تواصل <span class="text-secondary">معنا</span>
                        </h2>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full">
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mt-4 max-w-xl mx-auto">
                        نحن هنا لمساعدتك في أي وقت
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-icons-round text-primary text-2xl">phone</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">الهاتف</h3>
                        <p class="text-gray-600 dark:text-gray-400">01234567890</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-icons-round text-secondary text-2xl">email</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">البريد الإلكتروني</h3>
                        <p class="text-gray-600 dark:text-gray-400">info@altafawz.com</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="material-icons-round text-purple-600 text-2xl">location_on</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">العنوان</h3>
                        <p class="text-gray-600 dark:text-gray-400">القاهرة، مصر</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center">
                            <span class="material-icons-round text-white">school</span>
                        </div>
                        <span class="text-xl font-black">منصة التفوق</span>
                    </div>
                    <p class="text-gray-400 mb-6">منصتك التعليمية المتكاملة للتفوق الدراسي</p>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('login') }}" class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                            تسجيل الدخول
                        </a>
                        <a href="{{ route('register') }}" class="bg-secondary hover:bg-secondary/80 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                            إنشاء حساب
                        </a>
                    </div>
                    <p class="text-gray-500 text-sm mt-8">© 2024 منصة التفوق. جميع الحقوق محفوظة.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>
