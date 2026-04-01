// Login Page JavaScript

// Role Selection
function selectRole(role) {
    document.getElementById('teacher-role').classList.remove('selected');
    document.getElementById('student-role').classList.remove('selected');
    document.getElementById(role + '-role').classList.add('selected');
    document.getElementById('role-input').value = role;
    
    // Show/hide register link based on role
    const registerDiv = document.querySelector('.text-center.mt-6');
    if (role === 'teacher') {
        registerDiv.style.display = 'none';
    } else {
        registerDiv.style.display = 'block';
    }
}

// Toggle Password
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggle-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.textContent = 'visibility';
    } else {
        passwordInput.type = 'password';
        toggleIcon.textContent = 'visibility_off';
    }
}

// Form Submission
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role-input').value;
    
    if (!email || !password) {
        alert('يرجى ملء جميع الحقول');
        return;
    }
    
    const btn = e.target.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<span class="material-icons-round animate-spin">refresh</span> جاري تسجيل الدخول...';
    btn.disabled = true;
    
    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
        
        if (role === 'teacher') {
            window.location.href = '/teacher/dashboard';
        } else {
            window.location.href = '/student/dashboard';
        }
    }, 1500);
});
