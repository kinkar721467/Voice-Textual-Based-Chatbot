const titles = document.querySelectorAll('.service_Title');
const serviceDescriptions = document.querySelectorAll('.service_description');
const icons = document.querySelectorAll('.service_Title i');
const headings = document.querySelectorAll('.service_Title h2');

titles.forEach((title, index) => {
    title.addEventListener('click', () => {
        const isActive = serviceDescriptions[index].classList.contains('ActiveDesc');

        // Remove active state from all sections
        serviceDescriptions.forEach((desc) => desc.classList.remove('ActiveDesc'));
        icons.forEach((icon) => icon.classList.remove('ri-subtract-line'));
        headings.forEach((heading) => heading.classList.remove('ActiveHeading'));

        // Toggle active state for clicked section
        if (!isActive) {
            serviceDescriptions[index].classList.add('ActiveDesc');
            icons[index].classList.add('ri-subtract-line');
            headings[index].classList.add('ActiveHeading');
        }
    });
});
