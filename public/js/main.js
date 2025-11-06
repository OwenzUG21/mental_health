document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu');
    const nav = document.querySelector('nav');
    const testom = document.getElementById('nj');
    const test= document.getElementById('mmm');
    const exit= document.getElementById('clk');
    
    mobileMenuBtn.addEventListener('click', function() {
        nav.classList.toggle('active');
       
    });

    test.addEventListener('click', function(e){
        e.preventDefault();
        testom.style.display='block';

    });
  
    // exit.forEach(button => {
    //     button.addEventListener('click', function(e){
    //         e.preventDefault();
    //         testom.style.display='none';
    //         testom.style.backgroundColor='white';
    //     })
        
    // });

    console.log("main.js loaded succefully");

    function showNotification(name,message){
        if("Notification" in window && Notification.permission !== "granted"){
        Notification.requestPermission().then(function(permission){
            consol.log("Notification permission:", permission);
        })
         }
        if(!("Notification" in window)){
            alert(name +"\n"+ message);
            return;
        }

        if(Notification.permission==="granted"){
            new Notification(name,{ body:message});
            
        }else if(Notification.permission==="denied"){
            Notification.requestPermission().then(permission =>{
                 if(Notification.permission==="granted"){
            new Notification(name,{ body:message});
            
        }
            });
        }
    }

    if("Notification" in window && Notification.permission !== "granted"){
        Notification.requestPermission().then(function(permission){
            consol.log("Notification permission:", permission);
        })
    }


    // const loginBtn = document.getElementById('loginBtn');
    // const registerBtn = document.getElementById('registerBtn');
    // const loginModal = document.getElementById('loginModal');
    // const registerModal = document.getElementById('registerModal');
    // const closeButtons = document.querySelectorAll('.close');
    // const switchToRegister = document.getElementById('switchToRegister');
    // const switchToLogin = document.getElementById('switchToLogin');
    
    // // Open Login Modal
    // loginBtn.addEventListener('click', function() {
    //     loginModal.style.display = 'block';
    //     document.body.style.overflow = 'hidden';
    // });
    
    // // Open Register Modal
    // registerBtn.addEventListener('click', function() {
    //     registerModal.style.display = 'block';
    //     document.body.style.overflow = 'hidden';
    // });
    
    // // Close Modals
    // closeButtons.forEach(button => {
    //     button.addEventListener('click', function() {
    //         loginModal.style.display = 'none';
    //         registerModal.style.display = 'none';
    //         document.body.style.overflow = 'auto';
    //     });
    // });
    
    // // Switch between Login and Register Modals
    // switchToRegister.addEventListener('click', function(e) {
    //     e.preventDefault();
    //     loginModal.style.display = 'none';
    //     registerModal.style.display = 'block';
    // });
    
    // switchToLogin.addEventListener('click', function(e) {
    //     e.preventDefault();
    //     registerModal.style.display = 'none';
    //     loginModal.style.display = 'block';
    // });
    
    // // Close Modal when clicking outside
    // window.addEventListener('click', function(e) {
    //     if (e.target === loginModal) {
    //         loginModal.style.display = 'none';
    //         document.body.style.overflow = 'auto';
    //     }
    //     if (e.target === registerModal) {
    //         registerModal.style.display = 'none';
    //         document.body.style.overflow = 'auto';
    //     }
    // });
    
    // // Form Submissions
    // const loginForm = document.getElementById('loginForm');
    // const registerForm = document.getElementById('registerForm');
    
    // loginForm.addEventListener('submit', function(e) {
    //     e.preventDefault();
        
    //     const username = document.getElementById('username').value;
    //     const password = document.getElementById('password').value;
        
    //     // Simple validation
    //     if (!username || !password) {
    //         alert('Please fill in all fields');
    //         return;
    //     }
        
    //     // Here you would typically send data to server
    //     console.log('Login submitted:', { username, password });
        
    //     // Simulate successful login
    //     alert('Login successful! Redirecting to dashboard...');
    //     loginModal.style.display = 'none';
    //     document.body.style.overflow = 'auto';
        
    //     // Reset form
    //     loginForm.reset();
    // });
    
    // registerForm.addEventListener('submit', function(e) {
    //     e.preventDefault();
        
    //     const username = document.getElementById('reg-username').value;
    //     const email = document.getElementById('reg-email').value;
    //     const password = document.getElementById('reg-password').value;
    //     const confirmPassword = document.getElementById('reg-confirm-password').value;
    //     const role = document.getElementById('reg-role').value;
        
    //     // Validation
    //     if (!username || !email || !password || !confirmPassword || !role) {
    //         alert('Please fill in all fields');
    //         return;
    //     }
        
    //     if (password !== confirmPassword) {
    //         alert('Passwords do not match');
    //         return;
    //     }
        
    //     if (password.length < 6) {
    //         alert('Password must be at least 6 characters');
    //         return;
    //     }
        
    //     // Here you would typically send data to server
    //     console.log('Registration submitted:', { 
    //         username, 
    //         email, 
    //         password, 
    //         role 
    //     });
        
    //     // Simulate successful registration
    //     alert('Registration successful! You can now login.');
    //     registerModal.style.display = 'none';
    //     loginModal.style.display = 'block';
        
    //     // Reset form
    //     registerForm.reset();
    // });
    
    // // Highlight active section in navigation
    // const sections = document.querySelectorAll('section');
    // const navItems = document.querySelectorAll('nav ul li a');
    
    // window.addEventListener('scroll', function() {
    //     let current = '';
        
    //     sections.forEach(section => {
    //         const sectionTop = section.offsetTop;
    //         const sectionHeight = section.clientHeight;
            
    //         if (pageYOffset >= (sectionTop - 100)) {
    //             current = section.getAttribute('id');
    //         }
    //     });
        
    //     navItems.forEach(item => {
    //         item.classList.remove('active');
    //         if (item.getAttribute('href') === `#${current}`) {
    //             item.classList.add('active');
    //         }
    //     });
    // });
    
    // // Demo data for dashboard (would be replaced with real data from backend)
    // if (window.location.hash === '#dashboard') {
    //     loadDashboard();
    // }
    
    // function loadDashboard() {
    //     // This would be replaced with actual API calls
    //     console.log('Loading dashboard data...');
        
    //     // Simulate loading user data
    //     setTimeout(() => {
    //         const user = {
    //             name: 'John Doe',
    //             role: 'student',
    //             grade: '10th Grade',
    //             email: 'john.doe@school.edu'
    //         };
            
    //         console.log('User data loaded:', user);
    //     }, 500);
    // }
});
