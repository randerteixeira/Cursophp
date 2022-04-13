pizzaJson.map((item)=>{
    let sexo="";
    if(item.sexo==1){
        sexo='masculino'
    }else{
         sexo='feminino'
    }
    document.querySelector('.apre').innerHTML+=`id=${item.id} nome=${item.nome} sobrenome${item.sobrenome} sexo=${sexo}<br>`
})