<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PayPalCardController extends Controller
{

if ($data['status'] === 'COMPLETED') {
    // Ubicar la solución del usuario
    $solutionId = $request->input('solution_id');
    $solution = Solution::findOrFail($solutionId);

    // Obtener el paymentId y el monto pagado, de $data
    $payPalPaymentId = $data['purchase_units'][0]['payments']['captures'][0]['id'];
    $amount = $data['purchase_units'][0]['payments']['captures'][0]['amount']['value'];

    // Registrar un pago exitoso en la BD
    $payment = $this->registerSuccessfulPayment($solution, $amount, $payPalPaymentId);

    // Dar una respuesta de error si el pago no se pudo registrar
    if (!$payment) {
        return $this->responseFailure();
    }

    // Dar una respuesta de éxito si todo salió bien
    return [
        'success' => true,
        'url' => $solution->getResultsLink(),
        'payment_id' => $payment->id,
        'amount' => $amount
    ];
}

// Dar una respuesta de error si el status no es COMPLETED
return $this->responseFailure();

}
private function getAccessToken()
{
    $response = $this->client->request('POST', '/v1/oauth2/token', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => 'grant_type=client_credentials',
            'auth' => [
                $this->clientId, $this->secret, 'basic'
            ]
        ]
    );

    $data = json_decode($response->getBody(), true);
    return $data['access_token'];
}
}