<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud</title>
  </head>
  <body>
    <br><br>
  <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form id="searchForm" action="banco/cadastar.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" value="teste">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="asdasd@asdasd">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" value="123">
                            </div>
                            <br>
<!--                            <button  onclick="salvar()"class="btn btn-primary">Salvar</button>-->
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <table  class="table table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script>

        // $( "#searchForm" ).submit(function( event ) {
        //
        //     // Stop form from submitting normally
        //     event.preventDefault();
        //
        //     // Get some values from elements on the page:
        //     let form = $( this )
        //     let term = form.find( "input[name='s']" ).val()
        //     let url = form.attr( "action" );
        //
        //     let nome = $('#nome').val()
        //     let email = $('#email').val()
        //     let telefone = $('#telefone').val()
        //     //
        //     // if (nome === '' || email === '' || telefone === ''){
        //     //     alert('Todos os campos devem ser preenchidos')
        //     // }
        //
        //     console.log(term)
        //     let config = {
        //         headers: {
        //             'Content-Type': 'application/x-www-form-urlencoded',
        //         }
        //     };
        //     const api = axios.create({baseURL: url})
        //     api.post(url, {
        //         var1: 'value1',
        //         var2: 'value2'
        //     })
        //     .then(res => {
        //         console.log(res)
        //     })
        //     .catch(error => {
        //         console.log(error)
        //     })
        //
        // });
        //
        //

        listar();
        function listar() {
            let data = []
            axios.get('banco/listar.php')
                .then(function (response) {
                    data = response.data
                    let table = ''
                    data.forEach(item => {
                        table += `<tr>`
                        table += `<td>${item.id}</td>`
                        table += `<td>${item.nome}</td>`
                        table += `<td>${item.email}</td>`
                        table += `<td>${item.telefone}</td>`
                        table += `
                                 <td>
                                    <a href="" class="btn btn-warning">editar</a>
                                    <a href="" class="btn btn-danger">apagar</a>
                                </td>`
                        table += `</tr>`
                    })
                    $("#tbody").html(table)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
        }
       function salvar(){








       }
    </script>
  </body>
</html>