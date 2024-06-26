<?php include_once 'templates/header.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php include_once 'templates/menu.php'; ?>
<div class="contenedor">
        <div class="row mt-3">
            <div class="col-6">
                <h2>Calcular amortización método francés</h2>
                <div class="form-group">
                    <label for="monto">Monto</label>
                    <input type="text" class="form-control" id="monto" placeholder="Ingresar monto">
                </div>
                <div class="form-group">
                    <label for="tiempo">Tiempo en Meses</label>
                    <input type="text" class="form-control" id="tiempo" placeholder="Ingresar cantidad de meses">
                </div>
                <div class="form-group">
                    <label for="interes">Interés Mensual</label>
                    <input type="text" class="form-control" id="interes" placeholder="Ingresar tasa de interés mensual">
                </div>
                <button type="submit" class="btn btn-primary" id="btnCalcular">Calcular</button>
            </div>
            <div class="col-6">
                <table id="lista-tabla" class="table">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Cuota</th>
                            <th>Capital</th>
                            <th>Interés</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="/admin/dashboard/scripts/js/amortizacion.js"></script>
    <script src="/admin/dashboard/scripts/js/moment.js"></script>


    <!-- llamada a bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script>
            let UserCreds = JSON.parse(sessionStorage.getItem("user-cred"));
            let UserInfo  = JSON.parse(sessionStorage.getItem("user-info"));

            let MsgHead = document.getElementById('msg');
            let GreetHead = document.getElementById('greet');
            let SignoutBtn = document.getElementById('signoutbutton');



            let SignOut = ()=>{
                sessionStorage.removeItem("user-cred");
                sessionStorage.removeItem("user-info");
                window.location.href = 'login.html'

            }

          
            
            
            window.addEventListener('load', CheckCred);
            SignoutBtn.addEventListener('click',SignOut);

        </script>

</body>
</html>
<?php include_once 'templates/footer.php'; ?>