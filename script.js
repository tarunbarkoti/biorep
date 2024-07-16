document.querySelectorAll('.spoke').forEach(spoke => {
    spoke.addEventListener('mouseover', () => {
        document.querySelector('.spoke-container').style.transform = 'rotate(5deg)';
    });
    spoke.addEventListener('mouseout', () => {
        document.querySelector('.spoke-container').style.transform = 'rotate(0deg)';
    });
});
