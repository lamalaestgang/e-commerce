<?php
include ("inclus/entete.inc");
?>

<body>
    <div class="container-fluid">
        <form action="">
            <div class="bord">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-6">
                            <label for="">votre nom :</label><br>
                            <label for="">sujet :</label><br>
                            <label for="">couriel :</label><br>
                        </div>
                        <div class="col-6">
                            <input type="text"><br>
                            <input type="text"><br>
                            <input type="email"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <textarea name="" id="" cols="50" rows="10">inscire votre message</textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <input type="submit" value="Se connecter" class="m-2">
                        <input type="reset" value="Annuler">

                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center text-start">
                        <input type="checkbox">je veux recevoir une copie de ce message.
                    </div>

                </div>

            </div>

        </form>
        <?php
        include ("inclus/piedspage.inc");
        ?>