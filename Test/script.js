document.addEventListener('DOMContentLoaded', function () {
    const stages = document.querySelectorAll('.stage');

    stages.forEach((stage, index) => {
        // Simulate stage completion based on time
        setTimeout(() => {
            stage.classList.add('stage-complete');
            const tick = document.createElement('span');
            tick.classList.add('tick');
            tick.innerHTML = '&#10003;';
            stage.appendChild(tick);
        }, index * 1000); // Add 1-second delay for each stage
    });
});
