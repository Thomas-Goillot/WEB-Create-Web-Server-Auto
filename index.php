<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create Web App</title>
</head>
<body>

    <div class="container-fluid">
        <h1 class="text-center">Create Web App</h1>
        
        <form class="">

            <div class="row g-3">
                <div class="col-md-3">
                    <label for="stackName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="stackName" placeholder="ex: sterenova">
                </div>

                <div class="col-md-3">
                    <label for="port" class="form-label">Port</label>
                    <input type="number" class="form-control" id="port" placeholder="ex: 805">
                </div>

                <div class="col-md-3">
                    <label for="type" class="form-label">Type</label>
                    <select id="type" class="form-select">
                        <option value="1">NGINX + PHP 8.2</option>
                    </select>
                </div>
            </div>  
            
            <div class="row g-3 mt-1">

            
                <div class="col-md-3">
                    <label for="sousDomaine" class="form-label">Sous domaine + domaine</label>
                    <div class="input-group" id="sousDomaine">
                        <input type="text" aria-label="sous domaine" class="form-control" placeholder="ex: admin">

                        <label class="input-group-text" for="sousDomaine">.</label>

                        <select id="type" class="form-select">
                            <option value="thomasgllt.fr">thomasgllt.fr</option>
                            <option value="sterenova.fr">sterenova.fr</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="ssl" class="form-label">Certificat SSL</label>
                    <input type="checkbox" class="form-check-input" id="ssl">
                </div>
            
            </div>  
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="portainer.js"></script>
</body>
</html>

<?php     
    
        $url = "https://admin.web.thomasgllt.fr/api/stacks";

        $curl = curl_init($url);

        $header = array(
            'X-API-KEY: ptr_MaYlWgiOW/5ebmCVYV4x6Mdv92DOe0jhx62AEoph+bA='
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($data, true);

        echo "<pre>";
        print_r($data);
        echo "</pre>";
        ?>
