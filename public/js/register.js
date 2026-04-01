// Register Page JavaScript

function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.textContent = 'visibility';
    } else {
        input.type = 'password';
        icon.textContent = 'visibility_off';
    }
}

document.getElementById('register-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const password = document.getElementById('password').value;
    const confirm = document.getElementById('password_confirmation').value;
    
    if (password !== confirm) {
        alert('كلمات المرور غير متطابقة');
        return;
    }

    if (password.length < 8) {
        alert('يجب أن تكون كلمة المرور 8 أحرف على الأقل');
        return;
    }

    const btn = e.target.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<span class="material-icons-round animate-spin align-middle ml-2">refresh</span> جاري إنشاء الحساب...';
    btn.disabled = true;

    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
        alert('تم إنشاء حساب الطالب بنجاح! يمكنك الآن تسجيل الدخول.');
        window.location.href = '/login';
    }, 2000);
});
