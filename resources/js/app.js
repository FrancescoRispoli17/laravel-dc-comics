import './bootstrap';
import '~resources/scss/app.scss';
import.meta.glob(['../img/**']);
import * as bootstrap from 'bootstrap';

const linkList=document.querySelectorAll('.listLink');

linkList.forEach(link => {
    link.addEventListener('click', () => {
        document.querySelector('.headerActive')?.classList.remove('headerActive');
        link.classList.add('headerActive')
        console.log
    })
})