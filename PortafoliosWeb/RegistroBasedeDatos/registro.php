<?php
include("con_db.php");

if (isset($_POST["register"])) {

    if (mb_strlen($_POST["nombre"]) >= 1 &&  mb_strlen($_POST["gmail"]) >= 1 && mb_strlen($_POST["mensaje"]) >= 1) {
        $name = trim($_POST["nombre"]);
        $gmail = trim($_POST["gmail"]);
        $mensaje = trim($_POST["mensaje"]);

        $consulta = "INSERT INTO informacion_formulario (Nombre, Gmail, Mensaje) VALUES ('$name', '$gmail', '$mensaje')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado == true) {
?>
            <h3 class="enviado">INFORMACION ENVIADA!</h3>

            <style>
                .enviado {
                    padding: 1.5vw;
                    color: white;
                    font-weight: bold;
                    font-size: 5vw;
                    margin-top: 4vw;
                    text-align: center;
                    font-family: "Poppins";
                    text-shadow: 0px 1px 5px black;
                    text-align: center;
                    width: max-content;
                }

                @media (min-width: 767px) {
                    .enviado {
                        padding: 0.5vw;
                        border-radius: 1vw;
                        font-size: 1.5vw;
                        margin-top: 2vw;
                    }
                }
            </style>

        <?php
        } else {

        ?>
            <h3 class="error">HA OCURRIDO UN ERROR!</h3>

            <style>
                .error {
                    padding: 1.5vw;
                    color: red;
                    font-weight: bold;
                    font-size: 5vw;
                    margin-top: 4vw;
                    text-align: center;
                    font-family: "Poppins";
                    text-shadow: 0px 1px 5px black;
                    text-align: center;
                    width: max-content;
                }

                @media (min-width: 767px) {
                    .error {
                        padding: 0.5vw;
                        border-radius: 1vw;
                        font-size: 1.5vw;
                        margin-top: 2vw;
                    }
                }
            </style>

        <?php

        }
    } else {
        ?>
        <h3 class="bad">LLENE LOS CAMPOS!</h3>

        <style>
            .bad {
                padding: 1.5vw;
                color: red;
                font-weight: bold;
                font-size: 5vw;
                margin-top: 4vw;
                text-align: center;
                font-family: "Poppins";
                text-shadow: 0px 1px 5px black;
                text-align: center;
                width: max-content;
            }

            @media (min-width: 767px) {
                .bad {
                    padding: 0.5vw;
                    border-radius: 1vw;
                    font-size: 1.5vw;
                    margin-top: 2vw;
                }
            }
        </style>

<?php    }
}
