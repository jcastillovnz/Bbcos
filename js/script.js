
 var app = new Vue({
  el: '#app',
  data: {
  	loader:0,
    nombre:'',
    email:'',
    numero_celular:'',
    ciudad:'',
    provincia:''
  }
,

methods: {

enviar () {

axios.post('/email.php', {

    nombre: this.nombre,
    email:  this.email,
    numero_celular: this.numero_celular,
    ciudad: this.ciudad,
    provincia: this.provincia
    

  })
  .then(function (response) {
 
console.log(response);



  })
  .catch(function (error) {
    console.log(error);
  });



}



}







})



