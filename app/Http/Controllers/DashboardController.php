<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class DashboardController extends Controller
{
    public function index(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sandbox.factura.com/api/v4/cfdi/list',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            
            'F-Api-Key: JDJ5JDEwJHNITDlpZ0ZwMzdyd0RCTzFHVXlUOS5XVnlvaFFjd3ZWcnRBZHBIV0Q5QU5xM1Jqc2lpNlVD',
            'F-Secret-Key: JDJ5JDEwJHRXbFROTHNiYzRzTXBkRHNPUVA3WU83Y2hxTHdpZHltOFo5UEdoMXVoakNKWTl5aDQwdTFT'
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        //convierte la cadena JSON en un array asociativo de PHP
        $response= json_decode($response, true);
        $in=0;
        return Inertia::render('Dashboard',['response'=>$response,'ind'=>$in]);
        
    }
    public function create(){
        return Inertia::render('Cfdi/create');
    }
    public function generarCfdi(Request $request){
        //ME INQUIETAN MUCHO ALGUNOS PROBLEMAS DE IMPORTACION QUE TUVE CON VUE Y LARAVEL
        /*
            IGUALMENTE SEGUIRE TRABAJANDO PARA RESOLVERLOS, NO ME PIENSO QUEDAR CON LA DUDA
            EN ESTE CASO EL TIEMPO FUE UNA LIMITANTE A LA HORA DE PONERSE CREATIVO Y RESOLVER LOS
            ERRORES. ANTERIORMENTE YA HABIA TRABAJADO CON LARAVEL, PERO VUE ME PARECE QUE ES UN
            FRAMEWORK MUY COMPLETO, CON MUCHAS BONDADES Y MUY INTERESANTE.
            GRACIAS POR LA OPORTUNIDAD, CREO YO QUE TRABAJAR EN PROYECTOS REALES ES LA MEJOR 
            FORMA DE APRENDER.
        */
        try{
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sandbox.factura.com/api/v4/cfdi40/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "Receptor" : {
                    "UID": "6169fc02637e1"
                },
                "TipoDocumento":"factura",
                "Conceptos": [{
                    "ClaveProdServ": "81112101",
                    "Cantidad":1,
                    "ClaveUnidad":"E48",
                    "Unidad": "Unidad de servicio",
                    "ValorUnitario": 229.90,
                    "Descripcion": "Desarrollo a la medida",
                    "Impuestos":{
                        "Traslados":[
                        {
                            "Base": 229.90,
                            "Impuesto":"002",
                            "TipoFactor":"Tasa",
                            "TasaOCuota":"0.16",
                            "Importe":36.784
                        }
                        ],
                        "Locales":[
                            {
                                "Base": 229.90,
                                "Impuesto": "ISH",
                                "TipoFactor": "Tasa",
                                "TasaOCuota": "0.03",
                                "Importe": 6.897

                            }
                        ]
                    }
                }],
                "UsoCFDI": "P01",
                "Serie": 17317,
                "FormaPago": "03",
                "MetodoPago": "PUE",
                "Moneda": "MXN",
                "EnviarCorreo": false
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'F-PLUGIN: 9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
                'F-Api-Key: JDJ5JDEwJHNITDlpZ0ZwMzdyd0RCTzFHVXlUOS5XVnlvaFFjd3ZWcnRBZHBIV0Q5QU5xM1Jqc2lpNlVD',
                'F-Secret-Key: JDJ5JDEwJHRXbFROTHNiYzRzTXBkRHNPUVA3WU83Y2hxTHdpZHltOFo5UEdoMXVoakNKWTl5aDQwdTFT'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
        }catch(\Throwable $th){

        }
        return redirect()->route('dashboard');
    }
}
