<?php

return array(

    'appNameIOS'     => array(
        'environment' =>'development',
        'certificate' =>'/path/to/certificate.pem',
        'passPhrase'  =>'password',
        'service'     =>'apns'
    ),
    'appNameAndroid' => array(
        'environment' =>'production',
        'apiKey'      =>'base64:Wqe9yQ7f+vY0vEg+1wIjrVPqAY3vqYwaYODZoo0g7w4=',
        'service'     =>'gcm'
    )

);