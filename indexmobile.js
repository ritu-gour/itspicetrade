
    

    let iconSearchBtn = document.getElementById("searchBtn");
let iconCloseBtn = document.getElementById('closeBtn');
let searchBox = document.getElementById('searchBoxBtn');
let navigation = document.querySelector('.navigation');
let iconMenuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');

iconSearchBtn.onclick = function(){
    searchBox.classList.add('active');
    iconCloseBtn.classList.add('active');
    iconSearchBtn.classList.add('active');
    iconMenuToggle.classList.add('hide');
    header.classList.remove('open');
}
iconCloseBtn.onclick = function(){
    searchBox.classList.remove('active');
    iconCloseBtn.classList.remove('active');
    iconSearchBtn.classList.remove('active');
    iconMenuToggle.classList.remove('hide');
}
iconMenuToggle.onclick = function(){
    header.classList.toggle('open');
    searchBox.classList.remove('active');
    iconCloseBtn.classList.remove('active');
    iconSearchBtn.classList.remove('active');
    
}
