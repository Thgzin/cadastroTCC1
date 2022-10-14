window.addEventListener('load', () => {


    
    const name = sessionStorage.getItem('NAME');
    const date = sessionStorage.getItem('DATE');
    const time = sessionStorage.getItem('TIME');

    document.getElementById('result-name').innerHTML = name;
    document.getElementById('result-date').innerHTML = date;
    document.getElementById('result-time').innerHTML = time;

})