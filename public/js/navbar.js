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
    var content = document.getElementById('body');
    var contentTitle = content.getBoundingClientRect().top;
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


    // console.log(tinggiLayar);
    // console.log(pageTwoScroll);

    var pageTwoAnimation = tinggiLayar - pageTwoScroll;
    var pageThreeAnimation = tinggiLayar - pageThreeScroll;
    var pageFourAnimation = tinggiLayar - pageFourScroll;
    console.log(pageTwoAnimation);
    console.log(pageThreeAnimation);
    console.log(pageTwoScroll);

    if (pageTwoAnimation >= 200) {
        console.log('munculin page two');
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
    // console.log(scroll)

    if (pageTwoScroll < 20) {
        navbar.classList.add('bg-darken-blue');
        navbar.style.transition = '0.2s';
    } else {
        navbar.classList.remove('bg-darken-blue');
    }

})
