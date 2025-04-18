document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.project-tags button');
    const projects = document.querySelectorAll('#projects-container .col-lg-3');

    // Add click event to each filter button
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to clicked button
            this.classList.add('active', 'custom-btn');

            const filterValue = this.getAttribute('data-filter');

            // Filter projects
            projects.forEach(project => {
                const projectTags = project.getAttribute('data-tags').split(' ');

                if (filterValue === 'all' || projectTags.includes(filterValue)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    });
});