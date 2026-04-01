<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>لوحة تحكم المدير - منصة التفوق</title>
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
                        "success": "#10B981",
                        "warning": "#F59E0B",
                        "danger": "#EF4444",
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
    <link href="{{ asset('css/dashboard-common.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet" />
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
    <!-- Mobile Header -->
    <header class="mobile-header fixed top-0 left-0 right-0 bg-white dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700 z-30 px-4 py-3">
        <div class="flex items-center justify-between">
            <button id="mobileMenuBtn" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                <span class="material-icons-round text-2xl">menu</span>
            </button>
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center">
                    <span class="material-icons-round text-white text-sm">admin_panel_settings</span>
                </div>
                <span class="font-bold text-sm">منصة التفوق</span>
            </div>
            <button class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                <span class="material-icons-round text-2xl">notifications</span>
            </button>
        </div>
    </header>

    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="sidebar-overlay"></div>

    <!-- Main Container -->
    <div class="flex h-screen pt-0 md:pt-0">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar w-64 bg-white dark:bg-surface-dark border-l border-gray-200 dark:border-gray-700 h-full overflow-y-auto">
            <div class="p-4 md:p-6">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center">
                        <span class="material-icons-round text-white">admin_panel_settings</span>
                    </div>
                    <span class="text-xl font-black hidden md:block">منصة التفوق</span>
                </div>

                <!-- Admin Info -->
                <div class="bg-gradient-to-br from-primary/5 to-secondary/5 dark:from-primary/10 dark:to-secondary/10 rounded-xl p-3 md:p-4 mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                            <span class="material-icons-round text-white text-sm md:text-base">admin_panel_settings</span>
                        </div>
                        <div class="min-w-0">
                            <h3 class="font-semibold text-gray-900 dark:text-white text-sm md:text-base truncate">مدير النظام</h3>
                            <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">مالك المنصة</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <a href="#" class="sidebar-item active flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="home">
                        <span class="material-icons-round text-lg md:text-xl">dashboard</span>
                        <span class="text-sm md:text-base">الرئيسية</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="teachers">
                        <span class="material-icons-round text-lg md:text-xl">person</span>
                        <span class="text-sm md:text-base">إدارة المدرسين</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="students">
                        <span class="material-icons-round text-lg md:text-xl">people</span>
                        <span class="text-sm md:text-base">إدارة الطلاب</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="courses">
                        <span class="material-icons-round text-lg md:text-xl">book</span>
                        <span class="text-sm md:text-base">إدارة الكورسات</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="exams">
                        <span class="material-icons-round text-lg md:text-xl">assignment</span>
                        <span class="text-sm md:text-base">إدارة الامتحانات</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="payments">
                        <span class="material-icons-round text-lg md:text-xl">payments</span>
                        <span class="text-sm md:text-base">المدفوعات</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="reports">
                        <span class="material-icons-round text-lg md:text-xl">analytics</span>
                        <span class="text-sm md:text-base">التقارير</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-gray-700 dark:text-gray-300" data-page="settings">
                        <span class="material-icons-round text-lg md:text-xl">settings</span>
                        <span class="text-sm md:text-base">الإعدادات</span>
                    </a>
                </nav>

                <!-- Logout Button -->
                <div class="mt-6 md:mt-8">
                    <a href="{{ route('login') }}" class="w-full flex items-center gap-3 px-3 md:px-4 py-2 md:py-3 rounded-lg text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                        <span class="material-icons-round text-lg md:text-xl">logout</span>
                        <span class="text-sm md:text-base">تسجيل خروج</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content flex-1 overflow-y-auto pt-16 md:pt-0">
            <!-- Home Page -->
            <div id="home" class="content-page active p-4 md:p-6">
                <!-- Welcome Section -->
                <div class="bg-gradient-to-br from-primary/10 to-secondary/10 dark:from-primary/20 dark:to-secondary/20 rounded-2xl p-4 md:p-6 mb-6">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-2">مرحباً، مدير النظام 👋</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-3 md:p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-round text-primary text-lg md:text-xl">person</span>
                                <div>
                                    <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">إجمالي المدرسين</p>
                                    <p class="font-semibold text-gray-900 dark:text-white text-sm md:text-base">25 مدرس</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-3 md:p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-round text-secondary text-lg md:text-xl">people</span>
                                <div>
                                    <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">إجمالي الطلاب</p>
                                    <p class="font-semibold text-gray-900 dark:text-white text-sm md:text-base">1,250 طالب</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-3 md:p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-round text-green-500 text-lg md:text-xl">book</span>
                                <div>
                                    <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">إجمالي الكورسات</p>
                                    <p class="font-semibold text-gray-900 dark:text-white text-sm md:text-base">85 كورس</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-3 md:p-4">
                            <div class="flex items-center gap-3">
                                <span class="material-icons-round text-warning text-lg md:text-xl">payments</span>
                                <div>
                                    <p class="text-xs md:text-sm text-gray-600 dark:text-gray-400">الإيرادات الشهرية</p>
                                    <p class="font-semibold text-gray-900 dark:text-white text-sm md:text-base">125,000 ج</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <div class="card-hover bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">المدرسين النشطين</span>
                            <span class="material-icons-round text-success text-lg md:text-xl">person</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-success">20</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">من 25 مدرس</p>
                    </div>
                    <div class="card-hover bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">الطلاب النشطين</span>
                            <span class="material-icons-round text-primary text-lg md:text-xl">people</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-primary">1,100</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">من 1,250 طالب</p>
                    </div>
                    <div class="card-hover bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">الكورسات النشطة</span>
                            <span class="material-icons-round text-secondary text-lg md:text-xl">book</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-secondary">75</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">من 85 كورس</p>
                    </div>
                    <div class="card-hover bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">معدل النجاح</span>
                            <span class="material-icons-round text-warning text-lg md:text-xl">trending_up</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-warning">88%</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">زيادة 3% هذا الشهر</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <section>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-4">النشاط الأخير</h2>
                    <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                        <div class="p-4 md:p-6 space-y-3 md:space-y-4">
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <span class="material-icons-round text-primary text-lg md:text-xl">person_add</span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold text-gray-900 dark:text-white">مدرس جديد انضم</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">أحمد علي - مدرس فيزياء</p>
                                    </div>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">منذ ساعة</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <span class="material-icons-round text-success text-lg md:text-xl">payment</span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold text-gray-900 dark:text-white">عملية دفع جديدة</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">اشتراك شهري - 500 ج</p>
                                    </div>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">منذ 3 ساعات</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <span class="material-icons-round text-warning text-lg md:text-xl">book</span>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold text-gray-900 dark:text-white">كورس جديد منشور</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">كيمياء عضوية - الصف الثالث الثانوي</p>
                                    </div>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">منذ 5 ساعات</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Teachers Management Page -->
            <div id="teachers" class="content-page p-4 md:p-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">إدارة المدرسين</h1>
                    <button id="createTeacherBtn" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg font-semibold text-sm md:text-base transition-colors">
                        <span class="material-icons-round text-sm md:text-base ml-2">add</span>
                        إضافة مدرس جديد
                    </button>
                </div>

                <!-- Teachers Table -->
                <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">المدرس</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">التخصص</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">البريد الإلكتروني</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">عدد الطلاب</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">الحالة</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                                <span class="material-icons-round text-primary text-sm">person</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">محمد أحمد</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">01234567890</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">رياضيات</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">mohamed@email.com</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">150</td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span class="status-badge status-active text-xs">نشط</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                                        <button class="text-primary hover:text-primary-dark ml-2">عرض</button>
                                        <button class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">تعديل</button>
                                        <button class="text-red-600 hover:text-red-800">حذف</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="material-icons-round text-green-600 text-sm">person</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">سارة علي</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">01234567891</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">فيزياء</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">sara@email.com</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">120</td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span class="status-badge status-active text-xs">نشط</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                                        <button class="text-primary hover:text-primary-dark ml-2">عرض</button>
                                        <button class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">تعديل</button>
                                        <button class="text-red-600 hover:text-red-800">حذف</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Students Management Page -->
            <div id="students" class="content-page p-4 md:p-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">إدارة الطلاب</h1>
                    <div class="flex gap-2">
                        <button class="bg-secondary hover:bg-secondary/80 text-white px-4 py-2 rounded-lg font-semibold text-sm md:text-base transition-colors">
                            <span class="material-icons-round text-sm md:text-base ml-2">download</span>
                            تصدير البيانات
                        </button>
                    </div>
                </div>

                <!-- Students Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">إجمالي الطلاب</span>
                            <span class="material-icons-round text-primary text-lg md:text-xl">people</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-primary">1,250</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">طالب مسجل</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">الطلاب النشطين</span>
                            <span class="material-icons-round text-success text-lg md:text-xl">person</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-success">1,100</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">طالب نشط</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">طلاب جدد</span>
                            <span class="material-icons-round text-warning text-lg md:text-xl">person_add</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-warning">45</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">هذا الشهر</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-600 dark:text-gray-400 text-xs md:text-sm">الاشتراكات</span>
                            <span class="material-icons-round text-secondary text-lg md:text-xl">payments</span>
                        </div>
                        <p class="text-xl md:text-2xl font-bold text-secondary">980</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">اشتراك نشط</p>
                    </div>
                </div>

                <!-- Students Table -->
                <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">الطالب</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">الصف الدراسي</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">المدرس</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">تاريخ التسجيل</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">الحالة</th>
                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                                <span class="material-icons-round text-primary text-sm">person</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">أحمد محمد</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ahmed@email.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">أولى ثانوي</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">محمد أحمد</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">2024/01/15</td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span class="status-badge status-active text-xs">نشط</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                                        <button class="text-primary hover:text-primary-dark ml-2">عرض</button>
                                        <button class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">تعديل</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Settings Page -->
            <div id="settings" class="content-page p-4 md:p-6">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-6">الإعدادات</h1>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- General Settings -->
                    <div class="lg:col-span-2">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">الإعدادات العامة</h3>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">اسم المنصة</label>
                                    <input type="text" value="منصة التفوق التعليمية" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">البريد الإلكتروني للدعم</label>
                                    <input type="email" value="support@platform.com" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">رقم هاتف الدعم</label>
                                    <input type="tel" value="01234567890" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">وصف المنصة</label>
                                    <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white">منصة تعليمية متكاملة للطلاب والمدرسين</textarea>
                                </div>
                                <button type="submit" class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                                    حفظ الإعدادات
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- System Info -->
                    <div class="lg:col-span-1">
                        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 border border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">معلومات النظام</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">إصدار النظام</span>
                                    <span class="font-medium text-gray-900 dark:text-white">v1.0.0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">إصدار Laravel</span>
                                    <span class="font-medium text-gray-900 dark:text-white">10.0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">إصدار PHP</span>
                                    <span class="font-medium text-gray-900 dark:text-white">8.2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">قاعدة البيانات</span>
                                    <span class="font-medium text-gray-900 dark:text-white">MySQL</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">آخر تحديث</span>
                                    <span class="font-medium text-gray-900 dark:text-white">2024/01/01</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('open');
            document.getElementById('sidebarOverlay').classList.toggle('show');
        });

        // Close sidebar when clicking overlay
        document.getElementById('sidebarOverlay').addEventListener('click', function() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('sidebarOverlay').classList.remove('show');
        });

        // Page Navigation
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all items and pages
                document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('active'));
                document.querySelectorAll('.content-page').forEach(p => p.classList.remove('active'));
                
                // Add active class to clicked item and corresponding page
                this.classList.add('active');
                const pageId = this.getAttribute('data-page');
                document.getElementById(pageId).classList.add('active');
                
                // Close mobile menu
                if (window.innerWidth <= 768) {
                    document.getElementById('sidebar').classList.remove('open');
                    document.getElementById('sidebarOverlay').classList.remove('show');
                }
            });
        });

        // Form Handler
        class FormHandler {
            init() {
                // Handle form submissions
                const forms = document.querySelectorAll('form');
                forms.forEach(form => {
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        this.showSuccessMessage('تم حفظ التغييرات بنجاح!');
                    });
                });

                // Handle buttons
                const buttons = document.querySelectorAll('button');
                buttons.forEach(button => {
                    if (button.textContent.includes('حفظ')) {
                        button.addEventListener('click', () => {
                            this.showSuccessMessage('تم حفظ التغييرات بنجاح!');
                        });
                    }
                    if (button.textContent.includes('إضافة')) {
                        button.addEventListener('click', () => {
                            this.showSuccessMessage('تمت الإضافة بنجاح!');
                        });
                    }
                    if (button.textContent.includes('تعديل')) {
                        button.addEventListener('click', () => {
                            this.showSuccessMessage('تم التعديل بنجاح!');
                        });
                    }
                    if (button.textContent.includes('حذف')) {
                        button.addEventListener('click', () => {
                            if (confirm('هل أنت متأكد من الحذف؟')) {
                                this.showSuccessMessage('تم الحذف بنجاح!');
                            }
                        });
                    }
                });
            }

            showSuccessMessage(message) {
                const toast = document.createElement('div');
                toast.className = 'toast';
                toast.textContent = message;
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }
        }

        // Initialize Form Handler
        const formHandler = new FormHandler();
        formHandler.init();
    </script>
</body>

</html>
