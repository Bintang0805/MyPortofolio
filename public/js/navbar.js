var home = document.getElementById('home_nav');
var about = document.getElementById('about_nav');
var project = document.getElementById('project_nav');
var contact = document.getElementById('contact_nav');


function home_nav() {
    console.log('home_nav');
    home.classList.add("text-lightest", "border-b-2", "border-lightest");
    about.classList.remove("text-lightest", "border-b-2", "border-lightest");
    project.classList.remove("text-lightest", "border-b-2", "border-lightest");
    contact.classList.remove("text-lightest", "border-b-2", "border-lightest");
    home.style.transition = '0.5s';
}

function about_nav() {
    console.log('about_nav');
    home.classList.remove("text-lightest", "border-b-2", "border-lightest");
    about.classList.add("text-lightest", "border-b-2", "border-lightest");
    project.classList.remove("text-lightest", "border-b-2", "border-lightest");
    contact.classList.remove("text-lightest", "border-b-2", "border-lightest");
    about.style.transition = '0.5s';

}

function project_nav() {
    console.log('project_nav');
    home.classList.remove("text-lightest", "border-b-2", "border-lightest");
    about.classList.remove("text-lightest", "border-b-2", "border-lightest");
    project.classList.add("text-lightest", "border-b-2", "border-lightest");
    contact.classList.remove("text-lightest", "border-b-2", "border-lightest");
    project.style.transition = '0.5s';

}

function contact_nav() {
    console.log('contact_nav');
    home.classList.remove("text-lightest", "border-b-2", "border-lightest");
    about.classList.remove("text-lightest", "border-b-2", "border-lightest");
    project.classList.remove("text-lightest", "border-b-2", "border-lightest");
    contact.classList.add("text-lightest", "border-b-2", "border-lightest");
    contact.style.transition = '0.5s';

}

window.addEventListener('scroll', ()=> {
    var navbar = document.getElementById('navbar');
    var tinggiLayar = window.innerHeight;
    var pageOne = document.getElementById('page-one');
    var pageOneScroll = pageOne.getBoundingClientRect().top;
    var pageTwo = document.getElementById('page-two');
    var pageTwoScroll = pageTwo.getBoundingClientRect().top;
    var pageThree = document.getElementById('page-three');
    var pageThreeScroll = pageThree.getBoundingClientRect().top;
    var pageFour = document.getElementById('page-four');
    var pageFourScroll = pageFour.getBoundingClientRect().top;
    var pageTwoAnimation = tinggiLayar - pageTwoScroll;
    var pageThreeAnimation = tinggiLayar - pageThreeScroll;
    var pageFourAnimation = tinggiLayar - pageFourScroll;

    var pageTwoTitle = document.getElementById('page-two__title');
    var pageTwoContent = document.getElementById('page-two__content');
    var pageTwoContentLeft = document.getElementById('page-two__contentLeft');
    var pageTwoContentRight = document.getElementById('page-two__contentRight');


    if (pageTwoAnimation >= 200) {
        pageTwoTitle.style.transition = '0.5s';
        pageTwoContent.style.transition = '0.5s';
        pageTwoContent.style.transitionDelay = '1s';
        pageTwoContentLeft.style.transition = '0.7s';
        pageTwoContentLeft.style.transitionDelay = '1.5s';
        pageTwoContentRight.style.transition = '0.7s';
        pageTwoContentRight.style.transitionDelay = '1.5s';
        pageTwoTitle.classList.add('opacity-100');
        pageTwoTitle.classList.remove('opacity-0');
        pageTwoContent.classList.add('opacity-100');
        pageTwoContent.classList.remove('opacity-0');
        pageTwoContentLeft.classList.add('opacity-100');
        pageTwoContentLeft.classList.remove('opacity-0', 'transform', '-translate-x-8');
        pageTwoContentRight.classList.add('opacity-100');
        pageTwoContentRight.classList.remove('opacity-0', 'transform', 'translate-x-8');
    }
    if(pageThreeAnimation >= 200) {
        console.log('munculin page three');

    }
    if (pageFourAnimation >= 200) {
        console.log('munculin page four');
    }
    // if(tinggiLayar - pageTwo > 100) {
    // }
    // console.log(pageThreeScroll);
    // console.log(pageFourScroll);

    var scroll = this.scrollY;
    console.log(scroll);

    if (scroll >= 200) {
        navbar.classList.remove('py-5');
        navbar.classList.add('py-4');
        navbar.style.transition = '0.5s';
    } else {
        navbar.classList.remove('py-4');
        navbar.classList.add('py-5');
    }

    if (pageTwoScroll < 20) {
        navbar.classList.add('bg-darken-blue');
        navbar.style.transition = '0.2s';
    } else {
        navbar.classList.remove('bg-darken-blue');
    }

})
