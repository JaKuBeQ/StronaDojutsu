const t = document.querySelector('title'), w = 'Dojutsu', e = 'In Naruto';
let c = 0;
setInterval(()=>{
    c=(c<w.length)?c+1:0;
    t.textContent= w.slice(0,c);
    if(c===w.length){
        setTimeout(()=>t.textContent+=e, 350);
    }
}, 350);