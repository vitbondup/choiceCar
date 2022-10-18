let chois_brand = document.querySelector('#chois-brand')
let chois_model = document.querySelector('#chois-model')
let btn = document.querySelector('#btn')

    chois_brand.onchange=function(){
        btn.style.display='block'
        btn.disabled=true
    axios.get('api/m/'+this.value)
        .then(function (data) {
            chois_model.disabled=false
            chois_model.innerHTML='<option selected disabled>Вибери модель авто</option>'
            let ar2=data.data
            ar2.forEach(function(item) {
                option = new Option(item.model, item.id)
                chois_model.appendChild(option)
            })
        })
    }
    chois_model.onchange=function(){
        btn.disabled=false
    }

