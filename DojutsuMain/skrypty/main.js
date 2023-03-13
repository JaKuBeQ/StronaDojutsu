const req = async ()=>{
    let req = await fetch("http://127.0.0.1:5555/data/desc.json",{
        method: "GET"
    });
    let res = req.json();
    return res;
}

req().then((res)=>{
    console.log(res.Byakugan)
})

    const article = document.querySelector(".article");
    const buttons = document.querySelectorAll(".links > button");

    buttons.forEach(el => {
        el.addEventListener("click", ()=>{
            let btn_value = el.value
            if(btn_value == 1){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Byakugan;
                })
            }else if(btn_value == 2){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Jogan;
                })
            }else if(btn_value == 3){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Katsuryogan;
                })
            
            }else if(btn_value == 4){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Mangekyo;
                })
            }else if(btn_value == 5){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Rinne_sharingan;
                })
            }else if(btn_value == 6){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Rinnegan;
                })
            }else if(btn_value == 7){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Sharingan;
                })
            }else if(btn_value == 8){
                req().then((res)=>{
                    console.log(res.Byakugan)
                    article.innerHTML = res.Tenseigan;
                })}
        })
    });
