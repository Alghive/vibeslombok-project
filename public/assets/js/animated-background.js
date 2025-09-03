// Animated Background JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Mouse movement effect for particles
    document.addEventListener('mousemove', function(e) {
        const particles = document.querySelectorAll('.particle');
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        particles.forEach((particle, index) => {
            const rect = particle.getBoundingClientRect();
            const particleX = rect.left + rect.width / 2;
            const particleY = rect.top + rect.height / 2;
            
            const deltaX = mouseX - particleX;
            const deltaY = mouseY - particleY;
            const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
            
            if (distance < 200) {
                const force = (200 - distance) / 200;
                const moveX = deltaX * force * 0.1;
                const moveY = deltaY * force * 0.1;
                
                particle.style.transform = `translate(${moveX}px, ${moveY}px)`;
            }
        });
    });
    
    // Add ripple effect on click
    document.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        ripple.className = 'ripple';
        ripple.style.left = e.clientX + 'px';
        ripple.style.top = e.clientY + 'px';
        ripple.style.position = 'fixed';
        ripple.style.width = '0px';
        ripple.style.height = '0px';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(255, 255, 255, 0.3)';
        ripple.style.pointerEvents = 'none';
        ripple.style.zIndex = '9999';
        ripple.style.transition = 'all 0.6s ease-out';
        
        document.body.appendChild(ripple);
        
        setTimeout(() => {
            ripple.style.width = '300px';
            ripple.style.height = '300px';
            ripple.style.marginLeft = '-150px';
            ripple.style.marginTop = '-150px';
            ripple.style.opacity = '0';
        }, 10);
        
        setTimeout(() => {
            document.body.removeChild(ripple);
        }, 600);
    });
    
    // Parallax effect for shapes
    window.addEventListener('scroll', function() {
        const shapes = document.querySelectorAll('.shape');
        const scrolled = window.pageYOffset;
        
        shapes.forEach((shape, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            shape.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
        });
    });
    
    // Add floating text effect
    function createFloatingText() {
        const texts = ['✨', '🌟', '💫', '⭐', '🎯', '🚀'];
        const text = texts[Math.floor(Math.random() * texts.length)];
        
        const floatingText = document.createElement('div');
        floatingText.textContent = text;
        floatingText.style.position = 'fixed';
        floatingText.style.left = Math.random() * window.innerWidth + 'px';
        floatingText.style.top = window.innerHeight + 'px';
        floatingText.style.fontSize = '24px';
        floatingText.style.pointerEvents = 'none';
        floatingText.style.zIndex = '1';
        floatingText.style.transition = 'all 3s ease-out';
        floatingText.style.opacity = '0.7';
        
        document.body.appendChild(floatingText);
        
        setTimeout(() => {
            floatingText.style.top = '-50px';
            floatingText.style.opacity = '0';
        }, 100);
        
        setTimeout(() => {
            if (document.body.contains(floatingText)) {
                document.body.removeChild(floatingText);
            }
        }, 3000);
    }
    
    // Create floating text every 2 seconds
    setInterval(createFloatingText, 2000);
    
    // Add glow effect to form elements on focus
    const formInputs = document.querySelectorAll('input, button');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.boxShadow = '0 0 20px rgba(255, 255, 255, 0.5)';
            this.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.style.boxShadow = '';
            this.style.transform = '';
        });
    });
    
    // Add pulse effect to submit buttons
    const submitButtons = document.querySelectorAll('button[type="submit"]');
    submitButtons.forEach(button => {
        button.classList.add('pulse');
    });
    
    // Dynamic color change for background
    let colorIndex = 0;
    const colors = [
        'linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab)',
        'linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c)',
        'linear-gradient(-45deg, #4facfe, #00f2fe, #43e97b, #38f9d7)',
        'linear-gradient(-45deg, #fa709a, #fee140, #fecfef, #fecfef)',
        'linear-gradient(-45deg, #a8edea, #fed6e3, #ffecd2, #fcb69f)'
    ];
    
    function changeBackgroundColor() {
        document.body.style.background = colors[colorIndex];
        colorIndex = (colorIndex + 1) % colors.length;
    }
    
    // Change background color every 30 seconds
    setInterval(changeBackgroundColor, 30000);
    
    // Add mouse trail effect
    let mouseTrail = [];
    const maxTrailLength = 20;
    
    document.addEventListener('mousemove', function(e) {
        const dot = document.createElement('div');
        dot.style.position = 'fixed';
        dot.style.left = e.clientX + 'px';
        dot.style.top = e.clientY + 'px';
        dot.style.width = '4px';
        dot.style.height = '4px';
        dot.style.backgroundColor = 'rgba(255, 255, 255, 0.6)';
        dot.style.borderRadius = '50%';
        dot.style.pointerEvents = 'none';
        dot.style.zIndex = '9998';
        dot.style.transition = 'all 0.3s ease-out';
        
        document.body.appendChild(dot);
        mouseTrail.push(dot);
        
        if (mouseTrail.length > maxTrailLength) {
            const oldDot = mouseTrail.shift();
            if (document.body.contains(oldDot)) {
                document.body.removeChild(oldDot);
            }
        }
        
        // Fade out trail dots
        mouseTrail.forEach((trailDot, index) => {
            const opacity = (index + 1) / mouseTrail.length;
            trailDot.style.opacity = opacity;
            trailDot.style.transform = `scale(${opacity})`;
        });
        
        // Remove dots after animation
        setTimeout(() => {
            if (document.body.contains(dot)) {
                document.body.removeChild(dot);
            }
        }, 300);
    });
});

// Add CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple {
        animation: rippleEffect 0.6s ease-out;
    }
    
    @keyframes rippleEffect {
        0% {
            transform: scale(0);
            opacity: 1;
        }
        100% {
            transform: scale(1);
            opacity: 0;
        }
    }
    
    input:focus, button:focus {
        transition: all 0.3s ease;
    }
    
    .auth-container {
        transition: all 0.3s ease;
    }
    
    .auth-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }
`;
document.head.appendChild(style);
