<?php

class Asaas_model extends CI_Model {

    public function cadastrarUsuario($nome, $email) {
        $ambienteAsas = "https://sandbox.asaas.com";
            $KEYASAS = '$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDAwMzczNDA6OiRhYWNoXzg3ZmUzNTVkLTMzMDAtNGQyYi04OWQwLWFlNjM4Mzc2MTAyYg==';
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://sandbox.asaas.com/api/v3/customers");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            curl_setopt($ch, CURLOPT_POSTFIELDS, "{
              \"name\": \"$nome\",
              \"email\": \"$email\",
              \"phone\": \"4738010919\",
              \"mobilePhone\": \"4799376637\",
              \"cpfCnpj\": \"24971563792\",
              \"postalCode\": \"01310-000\",
              \"address\": \"Av. Paulista\",
              \"addressNumber\": \"150\",
              \"complement\": \"Sala 201\",
              \"province\": \"Centro\",
              \"externalReference\": \"12987382\",
              \"notificationDisabled\": false,
              \"additionalEmails\": \"marcelo.almeida2@gmail.com,marcelo.almeida3@gmail.com\",
              \"municipalInscription\": \"46683695908\",
              \"stateInscription\": \"646681195275\",
              \"observations\": \"ótimo pagador, nenhum problema até o momento\"
            }");

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
              "Content-Type: application/json",
              "access_token: ".$KEYASAS
            ));

            $response = curl_exec($ch);
            curl_close($ch);
        return $response;
    }

}