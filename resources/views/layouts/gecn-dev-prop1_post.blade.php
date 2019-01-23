<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Administrador | GECN-dev</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}" />  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    @yield('menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('cabecera_escritorio')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            AQUI VA EL CONTENIDO!!!

            <div id="app">
                <h2>Aqui va la informacion VUEJS</h2>
                <p>     
                   
                </p>  
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @yield('sidebar')

  @yield('piepag')
</div>
<!-- ./wrapper -->

<script src="{{asset('js/app.js')}}"></script>
<script>
  var app2 = new Vue({
    el:"#app",
    data:{
      name22 : 'GECN-Dev',
      infopadre: '111',
      axioAUX:null,
    },
    mounted: function(){      
      this.name22 = 'LLEGUE';
      axios({                
        method: 'post',
        url: 'https://www.apptec.cl/postula',      
        headers: { 
          'content-type' : 'application/json',        
      },
        data: {
        name:"Guillermo Elias" , 
        lastname:"Calvetty", 
        email:"gcalvetty@gmail.com"
        }
      }).then(function (response) {
        alert(response); 
        this.infohijo = 2223; //response.body;
         
        /*
        console.log(response.data);
        console.log(response.status);
        console.log(response.statusText);
        console.log(response.headers);
        console.log(response.config);*/
        
      }).catch(error => console.log(error));

    }
  });

    /*
    var app2 = new Vue({
      el: '#app',
      data: {
        info: '',                
      },
      mounted: function () { //cuando se cargo la pagina
        axios({            
          method: 'post',
          url: 'https://www.apptec.cl/postula',      
          headers: { 
            'content-type' : 'Content-Type: application/json'        
        },
          data: {
            name: "Guillermo Elias" , 
            lastname: " Calvetty", 
            email: "gcalvetty@gmail.com"
          }
        }).then(function (response) {
          // this.info = response;
          /*
          console.log(response.data);
          console.log(response.status);
          console.log(response.statusText);
          console.log(response.headers);
          console.log(response.config);
          
        }).catch(error => console.log(error))
        .finally(() => this.loading = false;

      },
      methods:{
                  checkForm: function (e) {
                                      
                  }
                }

      })*/
</script>

</body>
</html>

