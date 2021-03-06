<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SI Pelayanan Terpadu Kependudukan</title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            body {
                margin-top:70px;
            }

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #FF7F00;
                background: linear-gradient(#FF7F00, #FF7F00);
            }
            .close:hover { background:#FF7F00; }
            .close {
                background: #FF7F00;
                color: #FF7F00;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #FF7F00;
            }

        button {
            background-color: #FF7F00;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        </style>
    </head>
    <body>

        <?php //mengambil file menu.php
        require 'akun.php';
        ?>

        <?php //mengambil file menu.php
        require 'menu.php';
        ?>

        <?php //mengambil file menu.php
        require 'content.php';
        ?>


        <?php //mengambil file menu.php
        require 'footer.php';
        ?>

        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>
