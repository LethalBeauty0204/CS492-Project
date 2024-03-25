document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const errorMessage = document.getElementById('errorMessage');

    loginForm.onsubmit = function(e) {
        e.preventDefault(); // Prevent form from submitting normally

        
        if (document.getElementById('username').value === 'admin' && 
            document.getElementById('password').value === 'admin') 
            {
            window.location.href = 'admin.html';
        } else {
            // Show error message on failed login
            errorMessage.style.display = 'block';
        }
    };
});
