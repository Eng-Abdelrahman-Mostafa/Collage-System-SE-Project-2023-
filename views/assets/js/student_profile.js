const tabs = document.querySelectorAll('.tab-btn');
const all_contents = document.querySelectorAll('.content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
        tabs.forEach((tab) => tab.classList.remove('active'));
        tab.classList.add('active');
        let line = document.querySelector('.tab-line');
        line.style.width = e.target.offsetWidth + 'px';
        line.style.left = e.target.offsetLeft + 'px';
        all_contents.forEach((content) => content.classList.remove('active'));
        all_contents[index].classList.add('active');
    })
})

// Trigger click event on first tab button element
tabs[0].dispatchEvent(new Event('click'));
