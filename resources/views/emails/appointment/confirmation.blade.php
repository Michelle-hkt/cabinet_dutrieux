<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Votre requête a bien été reçue</title>

    <style>
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        body {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        @media screen and (max-width: 600px) {
            .mail-body {
                padding:20px 10px !important;
            }

            .mail-container {
                padding:40px 25px !important;
            }

            .mail-brand {
                font-size:1.9rem !important;
            }

            .mail-title {
                font-size:1.45rem !important;
            }

            .mail-content {
                font-size:0.88rem !important;
            }
        }
    </style>
</head>

<body
    class="mail-body"
    style="
        margin:0;
        padding:40px 20px;
        background-color:#f9f1f1;
        font-family:Arial, Helvetica, sans-serif;
    "
>

<table
    role="presentation"
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="width:100%;"
>
    <tr>
        <td align="center">

            <table
                role="presentation"
                width="650"
                cellpadding="0"
                cellspacing="0"
                border="0"
                class="mail-container"
                style="
                    width:100%;
                    max-width:650px;
                    padding:50px 55px;
                    background-color:#ffffff;
                "
            >

                <!-- Header -->

                <tr>
                    <td
                        align="center"
                        style="
                            padding-bottom:28px;
                            text-align:center;
                        "
                    >

                        <div
                            class="mail-brand"
                            style="
                                margin:0;
                                color:#681f2d;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:36px;
                                font-weight:700;
                                line-height:1;
                                letter-spacing:0.02em;
                            "
                        >
                            DUTRIEUX
                        </div>

                        <div
                            style="
                                margin-top:8px;
                                color:#80656a;
                                font-size:11px;
                                font-weight:600;
                                letter-spacing:0.28em;
                            "
                        >
                            CABINET NOTARIAL
                        </div>

                    </td>
                </tr>


                


                <!-- Title -->

                <tr>
                    <td align="center">

                        <h1
                            class="mail-title"
                            style="
                                margin:0;
                                color:#681f2d;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:27px;
                                font-weight:700;
                                line-height:1.3;
                            "
                        >
                            Votre requête a bien été reçue
                        </h1>

                    </td>
                </tr>


                <!-- Divider -->

                <tr>
                    <td align="center">

                        <div
                            style="
                                width:55px;
                                height:1px;
                                margin:22px auto 28px;
                                background-color:#9a7379;
                            "
                        ></div>

                    </td>
                </tr>


                <!-- Content -->

                <tr>
                    <td
                        class="mail-content"
                        style="
                            color:#63565a;
                            font-size:14px;
                            line-height:1.7;
                            text-align:left;
                        "
                    >

                        <p
                            style="
                                margin:0 0 22px;
                                color:#69585c;
                            "
                        >
                            Bonjour
                            <strong>
                                {{ $data['firstname'] ?? '' }}
                                {{ $data['lastname'] ?? '' }}
                            </strong>,
                        </p>

                        <p style="margin:0 0 20px;">
                            Nous vous remercions d'avoir pris rendez-vous
                            avec le Cabinet Dutrieux.
                            Votre requête a bien été reçue par notre équipe
                            et sera examinée avec attention.
                        </p>

                        <p style="margin:0 0 20px;">
                            Nous reviendrons vers vous dans les meilleurs
                            délais afin de donner suite à votre demande.
                            Nous vous remercions pour votre confiance.
                        </p>

                    </td>
                </tr>


                <!-- Note -->

                <tr>
                    <td
                        style="
                            padding:10px 0 0;
                            text-align:left;
                        "
                    >

                        <p
                            style="
                                margin:30px 0;
                                color:#8b8586;
                                font-size:13px;
                                line-height:1.65;
                                font-style:italic;
                            "
                        >
                            <strong
                                style="
                                    color:#2f292a;
                                    font-size:14px;
                                    font-weight:700;
                                    font-style:normal;
                                "
                            >
                                Note importante :
                            </strong>

                            Ce mail confirme uniquement la réception
                            de votre demande de rendez-vous.
                            Il ne constitue pas encore une confirmation
                            définitive.

                            Notre secrétariat prendra contact avec vous
                            très prochainement pour confirmer définitivement
                            l'horaire demandé ou vous proposer une alternative.
                        </p>

                    </td>
                </tr>


                <!-- Signature -->

                <tr>
                    <td
                        style="
                            padding-top:0;
                            text-align:left;
                        "
                    >

                        <p
                            style="
                                margin:0 0 7px;
                                color:#80656a;
                                font-size:13px;
                                font-style:italic;
                            "
                        >
                            Bien cordialement,
                        </p>

                        <p
                            style="
                                margin:0;
                                color:#681f2d;
                                font-size:14px;
                                font-weight:700;
                            "
                        >
                            Le Cabinet Dutrieux
                        </p>

                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
