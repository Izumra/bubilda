window.onload = () => {
    //вход
    const loginShowBtn = document.querySelector('.account-block__log-in')
    
    if (loginShowBtn){
        
        const loginPopup = document.querySelector('#login-popup')
        const loginCloseBtn = loginPopup.querySelector('.popup__close')
        const loginBg = loginPopup.querySelector('.popup__bg')
        loginShowBtn.addEventListener('click', function(){
            loginPopup.classList.add('_active')
        })
        loginCloseBtn.addEventListener('click', function(){
            loginPopup.classList.remove('_active')
        })
        loginBg.addEventListener('click', function(){
            loginPopup.classList.remove('_active')
        })

        
        //регистрация
        const regShowBtn = document.querySelector('.popup__reg-btn')
        const regPopup = document.querySelector('#reg-popup')
        const regCloseBtn = regPopup.querySelector('.popup__close')
        const regBg = regPopup.querySelector('.popup__bg')
    
        regShowBtn.addEventListener('click', function(){
            loginPopup.classList.remove('_active')
            regPopup.classList.add('_active')
        })
        regCloseBtn.addEventListener('click', function(){
            regPopup.classList.remove('_active')
        })
        regBg.addEventListener('click', function(){
            regPopup.classList.remove('_active')
        })

        
    }
    else {
        //выход
        const logoutBtn = document.querySelector('.account-block__log-out')
        logoutBtn.addEventListener('click', function(){
            console.log(document.cookie)
        })

        //организовать конкурс
        const createContestBtn = document.querySelector('.create-contest-btn')
        const createContestPopup = document.querySelector('#create-contest')
        const createContestClosePopup=createContestPopup.querySelector('.popup__close')
        const createContestBg=createContestPopup.querySelector('.popup__bg')

        createContestBtn.addEventListener('click', function(){
            createContestPopup.classList.add('_active')
        })
        createContestClosePopup.addEventListener('click', function(){
            createContestPopup.classList.remove('_active')
        })
        createContestBg.addEventListener('click', function(){
            createContestPopup.classList.remove('_active')
        })
    }

}