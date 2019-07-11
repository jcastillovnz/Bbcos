


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
var that = this;
this.loader=1;
axios.post('/formulario-email', {

    nombre: this.nombre,
    email:  this.email,
    numero_celular: this.numero_celular,
    ciudad: this.ciudad,
    provincia: this.provincia


  })
  .then(function (response) {

if (response.data.result == 1) {

that.loader = 0 ;
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1000
})

that.nombre='';
that.email='';
that.numero_celular='';
that.ciudad='';
that.provincia='';

}
else
{

Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000})

}





  })
  .catch(function (error) {
console.log(error);
  });



}



}







})



