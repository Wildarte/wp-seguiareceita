const btn_menu_one = document.querySelector('.btn_menu_one');

btn_menu_one.addEventListener('click', function(){
    document.querySelector('.opt_top_content ul').classList.toggle('open_menu');
});