function mobileMenu()
{
    const x = document.querySelector('.m-btn i');
    const y = document.querySelector('.navigation');
    x.addEventListener('click', ()=> {
        y.classList.toggle("show");
        x.classList.toggle("fa-times");
        x.classList.toggle("rotate");
        document.body.classList.toggle("overflow");
    })
}

function togglePass(){
    const x = document.querySelectorAll('.toggle-pass i');
    x.forEach( item=>{
        item.addEventListener('click', ()=>{
            const y = document.querySelector('.input-pass');
            const z = item.parentElement.nextElementSibling.getAttribute("type");
            if (z === "password"){
                y.setAttribute("type", "text");
            } else {
                y.setAttribute("type", "password");
            }
            item.classList.toggle("fa-eye-slash");
        });
    });
}

// function modalLogin()
// {
//     const x = document.querySelector('.login-wrapper');
//     const z = document.querySelector('.logo-form span');
//     const y = document.getElementById('login');
//     const a = document.querySelector('.navigation');
//     const b = document.querySelector('.m-btn i');

//     y.addEventListener('click', () => {
//         x.classList.toggle("show");
//         a.classList.toggle("show");
//         b.classList.toggle("rotate");
//         b.classList.toggle("fa-times");
        
//         if(document.body.classList.contains("overflow")){
//             document.body.classList.add("overflow");
//         } else {
//             document.body.classList.remove("overflow");
//         }
        
//     });

//     z.addEventListener('click', () => {
//         x.classList.toggle("show");
//         document.body.classList.toggle("overflow");
//     });
// }

function voteModal(){
    const x = document.querySelectorAll('.vote-btn');
    const z = document.querySelectorAll('.vote-modal > span');
    const a = document.querySelectorAll('.vote-btn-confirm');
    const b = document.getElementById('btnBack');
    const c = document.getElementById('thxPopup');
    
    x.forEach(item=>{
        item.addEventListener('click', (e)=>{
            e.preventDefault;
            const y = item.parentElement.parentElement.parentElement.parentElement.nextElementSibling;
            y.classList.toggle("show");
            document.body.classList.toggle("overflow");
        });
    });

    z.forEach(item=>{
        item.addEventListener('click', ()=>{
            const y = item.parentElement;
            y.classList.toggle("show");
            document.body.classList.toggle("overflow");
        });
    });

    a.forEach(item=>{
        item.addEventListener('click', ()=>{
            item.innerHTML = '<i class="fas fa-spinner fa-pulse"></i>';
            document.body.classList.toggle("overflow");
            setTimeout(() => {
                const y = item.parentElement.parentElement;
                y.classList.toggle("show");
                c.classList.toggle("show");
            }, 1000);
        });
    });

    b.addEventListener('click', ()=>{
        c.classList.toggle("show");
    });
}

function loadMore() {
    const a = document.querySelectorAll('.load-more a');
    a.forEach(item => {
        item.addEventListener('click', () => {
            item.innerHTML = '<i class="fas fa-spinner fa-pulse"></i>';
        });
    });
}